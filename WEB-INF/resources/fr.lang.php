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

$i18n_language = 'Français';
$i18n_months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'); 
$i18n_weekdays = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
$i18n_weekdays_short = array('Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa');
// format mm/dd
$i18n_holidays = array('01/01', '04/06', '04/09', '05/01', '05/08', '05/17', '05/28', '07/14', '08/15', '11/01', '11/11', '12/25');

$i18n_key_words = array(

// Menus - short selection strings that are displayed on the top of application web pages.
// Example: https://timetracker.anuko.com (black menu on top).
'menu.login' => 'Connexion',
'menu.logout' => 'Quitter',
'menu.forum' => 'Forum',
'menu.help' => 'Aide',
'menu.create_team' => 'Créer une équipe',
'menu.profile' => 'Profil',
'menu.time' => 'Temps',
'menu.expenses' => 'Dépenses',
'menu.reports' => 'Rapports',
'menu.charts' => 'Graphiques',
'menu.projects' => 'Projets',
'menu.tasks' => 'Tâches',
'menu.users' => 'Utilisateurs',
'menu.teams' => 'Équipes',
'menu.export' => 'Exporter',
'menu.clients' => 'Clients',
'menu.options' => 'Options',

// Footer - strings on the bottom of most pages.
'footer.contribute_msg' => 'Vous pouvez contribuer à Time Tracker de différentes façons.',
'footer.credits' => 'Crédits',
'footer.license' => 'License',
'footer.improve' => 'Contribuer', // This is a link to a webpage that describes how to contribute to the project.

// Error messages.
'error.access_denied' => 'Accès refusé.',
'error.sys' => 'Erreur système.',
'error.db' => 'Erreur de base de données.',
'error.field' => 'Donnée "{0}" incorrecte.',
'error.empty' => 'Le champ "{0}" est vide.',
'error.not_equal' => 'Le champ "{0}" n\\\'est pas égal au champ "{1}".',
'error.interval' => 'Le champ "{0}" doit être supérieur à "{1}".',
'error.project' => 'Sélectionner un projet.',
'error.task' => 'Sélectionner une tâche.',
'error.client' => 'Sélectionner un client.',
'error.report' => 'Sélectionner un rapport.',
'error.auth' => 'Nom d\\\'utilisateur ou mot de passe incorrect.',
'error.user_exists' => 'Un utilisateur avec cet identifiant existe déjà.',
'error.project_exists' => 'Un projet avec ce nom existe déjà.',
'error.task_exists' => 'Une tâche avec ce nom existe déjà.',
'error.client_exists' => 'Un client avec ce nom existe déjà.',
'error.invoice_exists' => 'Une facture avec ce numéro existe déjà.',
'error.no_invoiceable_items' => 'Il n\\\'y a pas d\\\'éléments à facturer.',
'error.no_login' => 'Aucun utilisateur avec cet identifiant.',
'error.no_teams' => 'Votre base de données est vide. Connectez-vous comme administrateur et créez une nouvelle équipe.',
'error.upload' => 'Erreur de chargement du fichier.',
'error.range_locked' => 'Plage de date vérouillée.',
'error.mail_send' => 'Erreur lors de l\\\'envoi du courriel.',
'error.no_email' => 'Aucune adresse courriel n\\\'est associée à cet identifiant.',
'error.uncompleted_exists' => 'Une entrée non terminée existe déjà. Fermer ou supprimer.',
'error.goto_uncompleted' => 'Aller à l\\\'entrée non terminée.',
'error.overlap' => 'Les heures des projets ne peuvent se chevaucher.',
'error.future_date' => 'Date ultérieure.',

// Labels for buttons.
'button.login' => 'Connexion',
'button.now' => 'Maintenant',
'button.save' => 'Sauvegarder',
'button.copy' => 'Copier',
'button.cancel' => 'Annuler',
'button.submit' => 'Soumettre',
'button.add_user' => 'Ajouter un utilisateur',
'button.add_project' => 'Ajouter un projet',
'button.add_task' => 'Ajouter une tâche',
'button.add_client' => 'Ajouter un client',
'button.add_invoice' => 'Ajouter une facture',
'button.add_option' => 'Ajouter une option',
'button.add' => 'Ajouter',
'button.generate' => 'Générer',
'button.reset_password' => 'Réinitialiser',
'button.send' => 'Envoyer',
'button.send_by_email' => 'Envoyer par courriel',
'button.create_team' => 'Créer une équipe',
'button.export' => 'Exporter l\\\'équipe',
'button.import' => 'Importer une équipe',
'button.close' => 'Fermer',
'button.stop' => 'Arrêter',

// Labels for controls on forms. Labels in this section are used on multiple forms.
'label.team_name' => 'Nom équipe',
'label.address' => 'Adresse',
'label.currency' => 'Devise',
'label.manager_name' => 'Nom du responsable',
'label.manager_login' => 'Identifiant du responsable',
'label.person_name' => 'Nom',
'label.thing_name' => 'Nom',
'label.login' => 'Identifiant',
'label.password' => 'Mot de passe',
'label.confirm_password' => 'Confirmez le mot de passe',
'label.email' => 'Adresse courriel',
'label.cc' => 'Cc',
'label.bcc' => 'Cci',
'label.subject' => 'Objet',
'label.date' => 'Date',
'label.start_date' => 'Date de début',
'label.end_date' => 'Date de fin',
'label.user' => 'Utilisateur',
'label.users' => 'Utilisateurs',
'label.client' => 'Client',
'label.clients' => 'Clients',
'label.option' => 'Option',
'label.invoice' => 'Facture',
'label.project' => 'Projet',
'label.projects' => 'Projets',
'label.task' => 'Tâche',
'label.tasks' => 'Tâches',
'label.description' => 'Description',
'label.start' => 'Début',
'label.finish' => 'Fin',
'label.duration' => 'Durée',
'label.note' => 'Note',
'label.item' => 'Item',
'label.cost' => 'Coût',
'label.day_total' => 'Total quotidien',
'label.week_total' => 'Total hebdomadaire',
'label.month_total' => 'Total mensuel',
'label.today' => 'Aujourd\\\'hui',
'label.total_hours' => 'Total des heures',
'label.total_cost' => 'Coût total',
'label.view' => 'Visionner',
'label.edit' => 'Modifier',
'label.delete' => 'Supprimer',
'label.configure' => 'Configurer',
'label.select_all' => 'Tout sélectionner',
'label.select_none' => 'Aucun',
'label.id' => 'ID',
'label.language' => 'Langage',
'label.decimal_mark' => 'Séparateur de décimale',
'label.date_format' => 'Format date',
'label.time_format' => 'Format heure',
'label.week_start' => '1er jour de la semaine',
'label.comment' => 'Commentaire',
'label.status' => 'Statut',
'label.tax' => 'Taxe',
'label.subtotal' => 'Sous-total',
'label.total' => 'Total',
'label.client_name' => 'Nom du client',
'label.client_address' => 'Adresse du client',
'label.or' => 'ou',
'label.error' => 'Erreur',
'label.ldap_hint' => 'Entrer votre <b>Identifiant Windows</b> et <b>votre mot de passe</b> dans les champs suivants.',
'label.required_fields' => '* - champs obligatoires',
'label.on_behalf' => 'de la part de',
'label.role_manager' => '(responsable)',
'label.role_comanager' => '(co-responsable)',
'label.role_admin' => '(administrateur)',
'label.page' => 'Page',
'label.condition' => 'Condition',
// Labels for plugins (extensions to Time Tracker that provide additional features).
'label.custom_fields' => 'Champs personalisés',
'label.monthly_quotas' => 'Quotas mensuels',
'label.type' => 'Type',
'label.type_dropdown' => 'Liste déroulante',
'label.type_text' => 'Texte',
'label.required' => 'Obligatoire',
'label.fav_report' => 'Rapport favori',
'label.cron_schedule' => 'Horaire Cron',
'label.what_is_it' => 'Qu\\\'est-ce que c\\\'est?',

// Form titles.
'title.login' => 'Connexion',
'title.teams' => 'Équipes',
'title.create_team' => 'Création d\\\'une nouvelle équipe',
'title.edit_team' => 'Modification d\\\'une équipe',
'title.delete_team' => 'Suppression d\\\'une équipe',
'title.reset_password' => 'Réinitialisation du mot de passe',
'title.change_password' => 'Modification du mot de passe',
'title.time' => 'Temps',
'title.edit_time_record' => 'Modification de l\\\'entrée de temps',
'title.delete_time_record' => 'Suppression de l\\\'entrée de temps',
'title.expenses' => 'Dépenses',
'title.edit_expense' => 'Modification d\\\'une dépense',
'title.delete_expense' => 'Suppression d\\\'une dépense',
'title.reports' => 'Rapports',
'title.report' => 'Rapport',
'title.send_report' => 'Envoi du rapport',
'title.invoice' => 'Facture',
'title.send_invoice' => 'Envoi de la facture',
'title.charts' => 'Graphiques',
'title.projects' => 'Projets',
'title.add_project' => 'Ajout d\\\'un projet',
'title.edit_project' => 'Modification d\\\'un projet',
'title.delete_project' => 'Suppression d\\\'un projet',
'title.tasks' => 'Tâches',
'title.add_task' => 'Ajout d\\\'une tâche',
'title.edit_task' => 'Modification d\\\'une tâche',
'title.delete_task' => 'Suppression d\\\'une tâche',
'title.users' => 'Utilisateurs',
'title.add_user' => 'Création d\\\'un utilisateur',
'title.edit_user' => 'Modification d\\\'un utilisateur',
'title.delete_user' => 'Suppression d\\\'un utilisateur',
'title.clients' => 'Clients',
'title.add_client' => 'Ajout d\\\'un client',
'title.edit_client' => 'Modification d\\\'un client',
'title.delete_client' => 'Suppression d\\\'un client',
'title.invoices' => 'Factures',
'title.add_invoice' => 'Ajout d\\\'une facture',
'title.view_invoice' => 'Visionnement d\\\'une facture',
'title.delete_invoice' => 'Suppression d\\\'une facture',
'title.notifications' => 'Notifications',
'title.add_notification' => 'Ajout d\\\'une notification',
'title.edit_notification' => 'Modification d\\\'une notification',
'title.delete_notification' => 'Suppression d\\\'une notification',
'title.monthly_quotas' => 'Quotas mensuels',
'title.export' => 'Exportation des données',
'title.import' => 'Importation des données',
'title.options' => 'Options',
'title.profile' => 'Profil',
'title.cf_custom_fields' => 'Champs personalisés',
'title.cf_add_custom_field' => 'Ajout d\\\'un champ',
'title.cf_edit_custom_field' => 'Édition d\\\'un champ',
'title.cf_delete_custom_field' => 'Suppression d\\\'un champ',
'title.cf_dropdown_options' => 'Options de liste',
'title.cf_add_dropdown_option' => 'Ajout d\\\'une option',
'title.cf_edit_dropdown_option' => 'Modification d\\\'une option',
'title.cf_delete_dropdown_option' => 'Suppression d\\\'une option',
'title.locking' => 'Vérouillage',

// Section for common strings inside combo boxes on forms. Strings shared between forms shall be placed here.
// Strings that are used in a single form must go to the specific form section.
'dropdown.all' => '--- tous ---',
'dropdown.no' => '--- non ---',
'dropdown.this_day' => 'ce jour',
// TODO: translate the following.
// 'dropdown.last_day' => 'last day',
'dropdown.this_week' => 'cette semaine',
'dropdown.last_week' => 'la semaine passée',
'dropdown.this_month' => 'ce mois',
'dropdown.last_month' => 'le mois passé',
'dropdown.this_year' => 'cette année',
'dropdown.all_time' => 'depuis toujours',
'dropdown.projects' => 'projets',
'dropdown.tasks' => 'tâches',
// TODO: translate the following string.
// 'dropdown.clients' => 'clients',
'dropdown.select' =>  '--- choisir ---',
// TODO: translate the following string.
// 'dropdown.select_invoice' => '--- select invoice ---',
'dropdown.status_active' => 'actif',
'dropdown.status_inactive' => 'inactif',
// TODO: translate the following strings.
// 'dropdown.delete'=>'delete',
// 'dropdown.do_not_delete'=>'do not delete',

// Below is a section for strings that are used on individual forms. When a string is used only on one form it should be placed here.
// One exception is for closely related forms such as "Time" and "Editing Time Record" with similar controls. In such cases
// a string can be defined on the main form and used on related forms. The reasoning for this is to make translation effort easier.
// Strings that are used on multiple unrelated forms should be placed in shared sections such as label.<stringname>, etc.

// Login form. See example at https://timetracker.anuko.com/login.php.
'form.login.forgot_password' => 'Mot de passe oublié?',
// TODO: check translation of the form.login.about. It does not look like a complete sentence. The English equivalent is:
// 'Anuko <a href="https://www.anuko.com/lp/tt_2.htm" target="_blank">Time Tracker</a> is a simple, easy to use, open source time tracking system.'
// 'form.login.about' =>'Anuko <a href="https://www.anuko.com/lp/tt_2.htm" target="_blank">Time Tracker</a> système de gestion des temps open source simple et facile à utiliser.',

// Resetting Password form. See example at https://timetracker.anuko.com/password_reset.php.
// TODO: improve translation of form.reset_password.message and form.reset_password.email_subject.
// The English equivalents have changed. This means that French translations below are now inaccurate. The difference is that
// we no longer send passwords, but RESET REQUESTS. Compare with master English file:
// 'form.reset_password.message' => 'Password reset request sent by email.',
// 'form.reset_password.email_subject' => 'Anuko Time Tracker password reset request',
'form.reset_password.message' => 'Le mot de passe a été envoyé.', // TODO: redo this line, see the comment above.
'form.reset_password.email_subject' => 'Votre mot de passe Anuko Time Tracker', // TODO: redo this line, see the comment above.
// Note to translators: the sentence BEFORE LAST in form.reset_password.email_body needs to be translated.
'form.reset_password.email_body' => "Cher utilisateur,\n\nQuelqu\'un, probablement vous, avez demandé une réinitialisation de votre mot de passe. Merci d\'aller à ce lien pour le réinitialiser\n\n%s\n\nAnuko Time Tracker is a simple, easy to use, open source time tracking system. Visiter https://www.anuko.com pour plus d\'informations.\n\n",

// Changing Password form. See example at https://timetracker.anuko.com/password_change.php?ref=1.
// TODO: improve translation of form.change_password.tip.
// The English line is: 'form.change_password.tip' => 'Type new password and click on Save.',
'form.change_password.tip' => 'Pour réinitialiser votre mot de passe, saisissez le et cliquez sur Sauvegarder.',

// Time form. See example at https://timetracker.anuko.com/time.php.
'form.time.duration_format' => '(hh:mm ou 0.0h)',
'form.time.billable' => 'Facturable',
'form.time.uncompleted' => 'Non terminée',
// TODO: translate the following.
// 'form.time.remaining_quota' => 'Remaining quota',
// 'form.time.over_quota' => 'Over quota',

// Editing Time Record form. See example at https://timetracker.anuko.com/time_edit.php (get there by editing an uncompleted time record).
'form.time_edit.uncompleted' => 'Cet enregistrement a été enregistré avec seulement une heure de début. Il ne s\\\'agit pas d\\\'une erreur.',

// Reports form. See example at https://timetracker.anuko.com/reports.php
'form.reports.save_as_favorite' => 'Enregistrer comme favori',
'form.reports.confirm_delete' => 'Êtes-vous sur de vouloir supprimer ce rapport favori?',
'form.reports.include_records' => 'Inclure les enregistrements',
'form.reports.include_billable' => 'facturables',
'form.reports.include_not_billable' => 'non facturables',
// TODO: translate the following strings.
// 'form.reports.include_invoiced' => 'invoiced',
// 'form.reports.include_not_invoiced' => 'not invoiced',
'form.reports.select_period' => 'Choisissez la période de temps', // TODO: should this be Choisir as above?
'form.reports.set_period' => 'ou dates indiquées',
'form.reports.show_fields' => 'Montrer les champs',
'form.reports.group_by' => 'Regroupés par',
'form.reports.group_by_no' => '--- aucun regroupage ---',
'form.reports.group_by_date' => 'date',
'form.reports.group_by_user' => 'utilisateur',
'form.reports.group_by_client' => 'client',
'form.reports.group_by_project' => 'projet',
'form.reports.group_by_task' => 'tâche',
'form.reports.totals_only' => 'Totaux uniquement',

// Report form. See example at https://timetracker.anuko.com/report.php
// (after generating a report at https://timetracker.anuko.com/reports.php).
'form.report.export' => 'Export',

// Invoice form. See example at https://timetracker.anuko.com/invoice.php
// (you can get to this form after generating a report).
'form.invoice.number' => 'Numéro de facture',
'form.invoice.person' => 'Personne',
// TODO: translate the following stings.
// 'form.invoice.invoice_to_delete' => 'Invoice to delete',
// 'form.invoice.invoice_entries' => 'Invoice entries',

// Charts form. See example at https://timetracker.anuko.com/charts.php
'form.charts.interval' => 'Intervalle',
'form.charts.chart' => 'Graphique',

// Projects form. See example at https://timetracker.anuko.com/projects.php
'form.projects.active_projects' => 'Projets actifs',
'form.projects.inactive_projects' => 'Projets inactifs',

// Tasks form. See example at https://timetracker.anuko.com/tasks.php
// 'form.tasks.active_tasks' => 'Active Tasks',
// 'form.tasks.inactive_tasks' => 'Inactive Tasks',

// Users form. See example at https://timetracker.anuko.com/users.php
// TODO: translate the following strings.
// 'form.users.active_users' => 'Active Users',
// 'form.users.inactive_users' => 'Inactive Users',
// 'form.users.uncompleted_entry' => 'User has an uncompleted time entry',
'form.users.role' => 'Rôle',
'form.users.manager' => 'Responsable',
'form.users.comanager' => 'Co-responsable',
'form.users.rate' => 'Tarif',
'form.users.default_rate' => 'Tarif horaire standard',

// Client delete form. See example at https://timetracker.anuko.com/client_delete.php
// TODO: translate the following strings.
// 'form.client.client_to_delete' => 'Client to delete',
// 'form.client.client_entries' => 'Client entries',

// Clients form. See example at https://timetracker.anuko.com/clients.php
// TODO: translate the following strings.
// 'form.clients.active_clients' => 'Active Clients',
// 'form.clients.inactive_clients' => 'Inactive Clients',

// Strings for Exporting Team Data form. See example at https://timetracker.anuko.com/export.php
'form.export.hint' => 'Vous pouvez exporter toute les données d\\\'une équipe dans un ficheir xml. Cela peut être utile si vous transférer des données vers votre serveur.',
'form.export.compression' => 'Compression',
'form.export.compression_none' => 'aucune',
'form.export.compression_bzip' => 'bzip',

// Strings for Importing Team Data form. See example at https://timetracker.anuko.com/imort.php (login as admin first).
'form.import.hint' => 'Importer les donnés des équipes depuis un fichier xml.',
'form.import.file' => 'Sélectionner le fichier',
'form.import.success' => 'Import réussi.',

// Teams form. See example at https://timetracker.anuko.com/admin_teams.php (login as admin first).
// TODO: improve translation of form.admin.hint. No login collisions are allowed (not email).
// Current translations says that no emails may collide. The truth is that no LOGINS (not emails) may collide. Emails actually MAY collide. The English string is:
// 'form.teams.hint' =>  'Create a new team by creating a new team manager account.<br>You can also import team data from an xml file from another Anuko Time Tracker server (no login collisions are allowed).',
'form.teams.hint' => 'Créer une nouvelle équipe en créant un nouveau compte de responsable d\\\'équipe.<br>Vous pouvez également importer des données sur une équipe depuis un fichier xml provenant d\\\'un autre serveur Anuko Time Tracker (les doublons d\\\'email ne sont pas autorisés).',

// Profile form. See example at https://timetracker.anuko.com/profile_edit.php.
'form.profile.12_hours' => '12 heures',
'form.profile.24_hours' => '24 heures',
// TODO: translate the following strings.
// 'form.profile.tracking_mode' => 'Tracking mode',
// 'form.profile.mode_time' => 'time',
// 'form.profile.mode_projects' => 'projects',
// 'form.profile.mode_projects_and_tasks' => 'projects and tasks',
// 'form.profile.record_type' => 'Record type',
// 'form.profile.type_all' => 'all',
// 'form.profile.type_start_finish' => 'start and finish',
// 'form.profile.type_duration' => 'duration',
'form.profile.plugins' => 'Plugins',

// Mail form. See example at https://timetracker.anuko.com/report_send.php when emailing a report.
'form.mail.from' => 'De',
'form.mail.to' => 'À',
'form.mail.report_subject' => 'Rapport Time Tracker',
// Note to translators: the following strings need to be translated.
// The problem seems to be that the first sentence does not seem like a complete sentence.
// 'form.mail.footer' => 'Anuko Time Tracker système de gestion des temps open source simple et facile à utiliser. Visiter <a href="https://www.anuko.com">www.anuko.com</a> pour plus d\\\'informations.',
'form.mail.report_sent' => 'Le rapport a été envoyé.',
'form.mail.invoice_sent' => 'La facture a été envoyée.',

// Quotas configuration form.
// TODO: translate the following.
// 'form.quota.year' => 'Year',
// 'form.quota.month' => 'Month',
// 'form.quota.quota' => 'Quota',
// 'form.quota.workday_hours' => 'Hours in a work day',
// 'form.quota.hint' => 'If values are empty, quotas are calculated automatically based on workday hours and holidays.',
);
