<?php
/**
 * Configuration
 *
 * Path info and configuration for smarty and adodb
 * @file        Include/config.inc.php
 * @package     Include
 * @author      Wu Jinyong & David Yao <davidyao@busyteam.com>
 * @version     $Id: Config.inc.php,v 1.0 2005/07/01 00:45:37 David Exp $
 * @link         
 * @copyright   (c) 2005 BusyTeam.com 
 * @support     support@busyteam.com
 */

/************************* Path Configuration ***************************/
// Relative path for php files

// Root directory of the website, you can also set $_BUSY['RootDir'] = '/path/to/html/';
// Attention: the last char MUST be /. so do the following directories.
$_BUSY['RootDir'] = dirname(__FILE__).'/../';

// Include directory where there are all head files for function or class definition.
$_BUSY['IncludeDir'] = $_BUSY['RootDir']. 'include/';

// Absolute path for Adodb, each one may has different path and will be modified when integration
$_BUSY['AdodbDir'] = '/second/home/busyteam/adodb/'; //Adodb path for busyteam.com integration
//$_BUSY['AdodbDir'] = $_BUSY['RootDir'].'adodb/'; //Adodb path for dictworld and wwccss
//$_BUSY['AdodbDir']=$_BUSY['RootDir'].'../../adodb/'; //Adodb path for arhold

/************************ Smarty Template configuration *********************/
/* smarty directory path for Smarty libs */
$_BUSY['SmartyDir'] = '/second/home/busyteam/smarty/project1/'; // Smarty general path for busyteam.com integration
$_BUSY['SmartyLibsDir'] = '/second/home/busyteam/smarty/libs/'; // Smarty library path for busyteam.com integration

//$_BUSY['SmartyDir'] = $_BUSY['RootDir'].'smarty/'; // Smarty general path for dictworld
//$_BUSY['SmartyLibsDir'] = $_BUSY['SmartyDir'].'libs/'; // Smarty library path for dictworld

//$_BUSY['SmartyDir'] = $_BUSY['RootDir'].'project1/'; // Smarty general path for wwccss
//$_BUSY['SmartyLibsDir'] = $_BUSY['SmartyDir'].'libs/'; // Smarty library path for wwccss

//$_BUSY['SmartyDir'] = $_BUSY['RootDir'].'../../smarty/project1/'; // Smarty general path for arhold
//$_BUSY['SmartyLibsDir'] = $_BUSY['RootDir'].'../../smarty/libs/'; // Smarty library path for busyteam.com integration

// Smarty debugging switch: true/false
$_BUSY['SmartyDebug'] = false;
// Smarty compile switch: true/false
$_BUSY['SmartyCompile'] = true;

/************************* Website Configuration ***************************/
// Homepage of the webiste
$_BUSY['Homepage'] = $_BUSY['RootDir'].'index.php';

// the charset of the website
$_BUSY['Charset'] = 'UTF-8';

// the path of logging file
$_BUSY['LogFile'] = $_BUSY['RootDir']."busy.log";

// Log level: 0 or 1 
$_BUSY['LogLevel'] = 1;

/************************ Database configuration ****************************/
// Database definition
$_BUSY['ADODBServer'] = 'localhost';
$_BUSY['ADODBName'] = 'busyteam_ecom_1';
$_BUSY['ADODBUser'] = 'busyteam_test1';
$_BUSY['ADODBPass'] = 'temp';

/****************************** End ****************************************/
?>