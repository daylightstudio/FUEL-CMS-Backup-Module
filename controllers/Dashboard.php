<?php
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
 * Backup Dashboard Controller
 *
 * @package		FUEL CMS
 * @subpackage	Controller
 * @category	Controller
 * @author		David McReynolds @ Daylight Studio
 * @link		http://docs.getfuelcms.com/modules/backup
 */

// ------------------------------------------------------------------------

require_once(FUEL_PATH.'/libraries/Fuel_base_controller.php');

class Dashboard extends Fuel_base_controller {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->config('backup');
		$this->load->helper('array');
		$this->load->helper('file');
		
		$backup_dir = $this->fuel->backup->config('backup_path');
		$backup_dir_info = get_dir_file_info($backup_dir);
		
		$vars = array();
		if (!empty($backup_dir_info))
		{
			$sorted_backup_dir_info = each(array_sorter($backup_dir_info, 'date','desc'));
			
			$sorted_backup_dir_info = array_sorter($backup_dir_info, 'date','desc');
			foreach($sorted_backup_dir_info as $path => $val)
			{
				$name_parts = explode('.', $val['name']);
				$ext = strtolower(end($name_parts));
				if ($ext == 'sql' || $ext = 'zip')
				{
					$last_backup_date = date("m/d/Y h:ia", $val['date']);
					$vars['last_backup_date'] = $last_backup_date;
					
				}
			}
		}
		$this->load->view('_admin/dashboard', $vars);
	}

}

/* End of file dashboard.php */
/* Location: ./fuel/modules/backup/controllers/dashboard.php */
