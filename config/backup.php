<?php
/*
|--------------------------------------------------------------------------
| FUEL NAVIGATION: An array of navigation items for the left menu
|--------------------------------------------------------------------------
*/
$config['nav']['tools']['tools/backup'] = lang('module_backup');


/*
|--------------------------------------------------------------------------
| TOOL SETTING: DB Backup
|--------------------------------------------------------------------------
*/

$config['backup'] = array();

// used for the name of the backup file. A value of AUTO will automatically create the name
$config['backup']['file_prefix'] = 'AUTO';

// date format to append to file name
$config['backup']['file_date_format'] = 'Y-m-d';

// ZIP up the file or not
$config['backup']['zip'] = TRUE;

// download the file or not from the browser
$config['backup']['download'] = TRUE;

// number of days to hold backups. A value of 0 or FALSE will be forever
$config['backup']['days_to_keep'] = 30;

// number of days to hold backups. A value of 0 or FALSE will be forever
$config['backup']['allow_overwrite'] = FALSE;

// determines whether to backup assets by default
$config['backup']['include_assets'] = FALSE;

// the email address to send the backup cron notification
$config['backup']['cron_email'] = '';

// determines whether to send files in an email with cron backup
$config['backup']['cron_email_file'] = TRUE;

//cronjob backup command
$config['backup']['cron_backup_command'] = 'php '. FCPATH . SELF .' backup/cron';

//backup path for data. Deafult is at the same level as the system and application folder
$config['backup']['backup_path'] = INSTALL_ROOT.'data_backup/';

//database backup preferences
$config['backup']['db_backup_prefs'] = array(
				'ignore'      => array(),           // List of tables to omit from the backup
				'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
				'add_insert'  => TRUE              // Whether to add INSERT data to backup file
				);


// create configurable settings from with the Settings module. You can add/remove field that you don't want configured
$config['backup']['settings'] = array();
$config['backup']['settings']['file_prefix'] = array('value' => 'AUTO');
$config['backup']['settings']['file_date_format'] = array('value' => 'Y-m-d');
$config['backup']['settings']['cron_email'] = array();
$config['backup']['settings']['cron_email_file'] = array('type' => 'checkbox', 'value' => '1');
$config['backup']['settings']['cron_backup_command'] = array('value' => $config['backup']['cron_backup_command'], 'size' => 100);
$config['backup']['settings']['days_to_keep'] = array('value' => 30, 'size' => 5);
$config['backup']['settings']['allow_overwrite'] = array('type' => 'checkbox', 'value' => '1');

/* End of file backup.php */
/* Location: ./modules/backup/config/backup.php */