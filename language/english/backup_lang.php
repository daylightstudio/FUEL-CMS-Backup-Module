<?php 
$lang['module_backup'] = 'Backup';

$lang['data_backup_dashboard'] = 'Remember to periodically <a href="'.fuel_url('tools/backup').'">backup your database</a>';
$lang['data_last_backup'] = 'last backup';
$lang['data_backup'] = 'Data backed up.';
$lang['cron_db_backup'] = "Database backed up with the file name: %s.";
$lang['cron_db_backup_asset'] = "Database and assets folder was backed up with the file name: %s.";
$lang['cron_db_folder_not_writable'] = 'The directory %1s is not writable. Make sure it is writable.';
$lang['cron_email'] = 'Email sent to %1s.';
$lang['cron_email_error'] = 'There was an error sending the email to %1s.';
$lang['cron_email_subject'] = 'Data backup cronjob for %1s';

$lang['data_backup_already_exists'] = 'Backup already exists.';
$lang['data_backup_zip_error'] = 'There was an error creating the zipped backup file.';
$lang['data_backup_folder_not_writable'] = 'The directory %1s is not writable. Make sure it is writable.';
$lang['data_backup_error_could_not_delete'] = 'Error trying to delete backup.';
$lang['data_backup_error_could_not_ftp'] = 'Error trying to FTP backup to remote server.';

$lang['data_backup_instructions'] = 'You are about to backup your database. This will download a gzip file from your browser that you can save on your computer.';
$lang['data_backup_instructions_writable'] = 'It will also create a dated backup file on the web server in the directory:';
$lang['data_backup_instructions_not_writable'] = 'To save the zipped data on the server, you must make the following directory writable or change the directory in the fuel config file. <strong>Be sure that this directory is not accessible to others and is either above the web root directory or protected by .htaccess</strong>:';
$lang['data_backup_not_writable'] = '(not writable)';
$lang['data_backup_include_assets'] = 'Include the assets folder?';
$lang['data_backup_no_backup'] = 'No, don\'t back it up';
$lang['data_backup_yes_backup'] = 'Yes,  back it up';
$lang['data_backup_create_cron'] = 'Create a periodic packup';
