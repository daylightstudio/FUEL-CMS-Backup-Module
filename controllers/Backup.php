<?php
require_once(FUEL_PATH.'/libraries/Fuel_base_controller.php');
/**
 * FUEL CMS
 * http://www.getfuelcms.com
 *
 * An open source Content Management System based on the 
 * Codeigniter framework (http://codeigniter.com)
 *
 * @package		FUEL CMS
 * @author		David McReynolds @ Daylight Studio
 * @copyright	Copyright (c) 2013, Run for Daylight LLC.
 * @license		http://docs.getfuelcms.com/general/license
 * @link		http://www.getfuelcms.com
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Backup Controller
 *
 * @package		FUEL CMS
 * @subpackage	Controller
 * @category	Controller
 * @author		David McReynolds @ Daylight Studio
 * @link		http://docs.getfuelcms.com/modules/backup
 */

// --------------------------------------------------------------------

class Backup extends Fuel_base_controller {
	
	public $nav_selected = 'tools/backup'; // which navigation item should be selected
	
	function __construct()
	{
		parent::__construct();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Backs up the database/assets for the site
	 *
	 * located at fuel/backup/
	 *
	 * @access	public
	 * @return	void
	 */	
	function index()
	{
		$this->_validate_user('tools/backup');
		$download_path = $this->fuel->backup->config('backup_path');
		if (!empty($_POST['action']))
		{
			
			// set assets flag
			$this->fuel->backup->include_assets = (!empty($_POST['include_assets'])) ? TRUE : FALSE;
			
			// set assets flag
			$this->fuel->backup->allow_ftp = (!empty($_POST['include_ftp'])) ? TRUE : FALSE;
	
			// perform backup
			if (!$this->fuel->backup->do_backup())
			{
				add_errors($this->fuel->backup->errors());
			}
			else
			{
				// log message
				$msg = lang('data_backup');
				$this->fuel->logs->write($msg);
			}

		}
		$vars['download_path'] = $download_path;
		$vars['is_writable'] = is_writable($download_path);
		$vars['has_cronjobs_module'] = $this->fuel->modules->exists('cronjobs');
		$vars['include_assets'] = ($this->input->get_post('include_assets')) ? TRUE : FALSE;
		$vars['include_ftp'] = ($this->input->get_post('include_ftp')) ? TRUE : FALSE;
		if ($vars['has_cronjobs_module'])
		{
			$vars['cron_command'] = $this->fuel->backup->config('cron_backup_command');
		}
		$ftp_prefs = $this->fuel->backup->config('ftp_prefs');
		$vars['ftp_hostname'] = $ftp_prefs['hostname'];
		
		$crumbs = array('tools' => lang('section_tools'), lang('module_backup'));
		$this->fuel->admin->set_titlebar($crumbs, 'ico_tools_backup');
		$this->fuel->admin->render('_admin/backup', $vars, Fuel_admin::DISPLAY_NO_ACTION);
	}
}
/* End of file backup.php */
/* Location: ./fuel/modules/backup/controllers/backup.php */