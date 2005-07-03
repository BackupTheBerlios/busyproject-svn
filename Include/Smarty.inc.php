<?php
/**
 * Smarty
 *
 * Smarty initialization
 * @file        Include/Smarty.inc.php
 * @package     Include
 * @author      Wu Jinyong & David Yao <davidyao@busyteam.com>
 * @version     $Id: Smarty.inc.php,v 1.0 2005/07/01 00:45:37 David Exp $
 * @link         
 * @copyright   (c) 2005 BusyTeam.com 
 * @support     support@busyteam.com
 *
 ***************************************************************************/
 include_once($_BUSY['SmartyLibsDir'].'Smarty.class.php');
 class Busy_Smarty extends Smarty {
	function Busy_Smarty() {
		global $_BUSY;
		$this->Smarty();
		
		$this->template_dir = $_BUSY['SmartyDir'].'templates/';
		$this->compile_dir = $_BUSY['SmartyDir'].'templates_c/';
		$this->config_dir = $_BUSY['SmartyDir'].'configs/';
		$this->cache_dir = $_BUSY['SmartyDir'].'cache/';

		$this->Initialize();
	}

	/*
	 * Initialize for busy smarty template
	 * @parameters: (none)
	 * @return: 
	 *	TRUE if success, FALSE if failed
	 * @Usage:
	 *     $smarty->Initialize();
	 */
	function Initialize() {

		global $_BUSY;
		// Initialize
		if ($_BUSY['SmartyCompile']) {
			$this->compile_check = true;
		} else {
			$this->compile_check = false;
		}
		if ( $_BUSY['SmartyDebug'] ) {
			$this->debugging = true;
		} else {
			$this->debugging = false;
		}

		$this->assign('BusyCharset', $_BUSY['Charset']);
		return true;
	}
}
 ?>