<?php
// +----------------------------------------------------------------------+
// | Anuko Time Tracker
// +----------------------------------------------------------------------+
// | Copyright (c) Anuko International Ltd. (https://www.anuko.com)
// +----------------------------------------------------------------------+
// | LIBERAL FREEWARE LICENSE: This source code document may be used
// | by anyone for any purpose, and freely redistributed alone or in
// | combination with other software, provided that the license is obeyed.
// |
// | There are only two ways to violate the license:
// |
// | 1. To redistribute this code in source form, with the copyright
// |    notice or license removed or altered. (Distributing in compiled
// |    forms without embedded copyright notices is permitted).
// |
// | 2. To redistribute modified versions of this code in *any* form
// |    that bears insufficient indications that the modifications are
// |    not the work of the original author(s).
// |
// | This license applies to this document only, not any other software
// | that it may be combined with.
// |
// +----------------------------------------------------------------------+
// | Contributors:
// | https://www.anuko.com/time_tracker/credits.htm
// +----------------------------------------------------------------------+

require_once('initialize.php');
require_once('plugins/MonthlyQuota.class.php');
import('form.Form');
import('ttTeamHelper');
import('ttTimeHelper');

// Access check.
if (!ttAccessCheck(right_manage_team) || !$user->isPluginEnabled('wv')) {
  header('Location: access_denied.php');
  exit();
}


// Get selected year from url parameter.
$selectedYear = $request->getParameter('year');
if (!$selectedYear or !ttValidInteger($selectedYear)){
  $selectedYear = date('Y');
} else {
  $selectedYear = (int) $selectedYear;
}

// Months are zero indexed.
$months = $i18n->monthNames;

$quota = new MonthlyQuota();

if ($request->isPost()){
  // Validate user input.
  if (!ttTimeHelper::isValidDuration($request->getParameter('workdayHours')))
    $err->add($i18n->getKey('error.field'), $i18n->getKey('form.quota.workday_hours'));

  for ($i = 0; $i < count($months); $i++){
    $val = $request->getParameter($months[$i]);
    if (!$quota->isValidQuota($val))
      $err->add($i18n->getKey('error.field'), $months[$i]);
  }
  // Finished validating user input.

  if ($err->no()) {

    // Handle workday hours.
    $hours = $quota->quotaToFloat($request->getParameter('workdayHours'));
    if ($hours != $user->workday_hours) {
      if (!ttTeamHelper::update($user->team_id, array('name'=>$user->team,'workday_hours'=>$hours)))
        $err->add($i18n->getKey('error.db'));
    }

    // Handle monthly quotas for a selected year.
    $selectedYear = (int) $request->getParameter('year');
    for ($i = 0; $i < count($months); $i++){
      if (!$quota->update($selectedYear, $i+1, $request->getParameter($months[$i])))
        $err->add($i18n->getKey('error.db'));
    }

    if ($err->no()) {
      // Redisplay the form.
      header('Location: quotas.php?year='.$selectedYear);
      exit();
    }
  }
}

// Get monthly quotas for the entire year.
$monthsData = $quota->get($selectedYear);
$workdayHours = ttTimeHelper::toAbsDuration($user->workday_hours * 60, true);

$form = new Form('weekViewForm');
$form->addInput(array('type'=>'checkbox','name'=>'week_note','value'=>$cl_week_note));
$form->addInput(array('type'=>'checkbox','name'=>'week_list','value'=>$cl_week_list));

$smarty->assign('forms', array($form->getName()=>$form->toArray()));
$smarty->assign('title', $i18n->getKey('label.week_view'));
$smarty->assign('content_page_name', 'week_view.tpl');
$smarty->display('index.tpl');