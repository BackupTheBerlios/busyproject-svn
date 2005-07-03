<?php
/**
 * Initialization
 *
 * Initialization for most php files
 * @file        Include/Setup.inc.php
 * @package     Include
 * @author      Wu Jinyong & David Yao <davidyao@busyteam.com>
 * @version     $Id: Setup.inc.php,v 1.0 2005/07/01 00:45:37 David Exp $
 * @link         
 * @copyright   (c) 2005 BusyTeam.com 
 * @support     support@busyteam.com
 */

define("IN_BUSY", 1);

require_once($_BUSY['IncludeDir'].'Config.inc.php');
require_once($_BUSY['AdodbDir'].'adodb.inc.php');
require_once($_BUSY['IncludeDir'].'Functions.inc.php');
require_once($_BUSY['IncludeDir'].'Constants.inc.php');
require_once($_BUSY['IncludeDir'].'Smarty.inc.php');

if (!$old_error_reporting)
{
	error_reporting(E_ALL & ~E_NOTICE);
}

/* set every page's content type and charset */
// header('Content-type: text/html;charset=UTF-8');
header('Content-type: text/html;charset=iso-8859-1');

/* cache control */
header('cache-control: private');

/* get database connection */
$db = &ADONewConnection('mysql');
$db->Connect($_BUSY['ADODBServer'], $_BUSY['ADODBUser'], $_BUSY['ADODBPass'], $_BUSY['ADODBName']);
$db->debug = 1;

if (!get_magic_quotes_gpc())
{
	$_REQUEST = array_map('addslashes', $_REQUEST);
	$_REQUEST = array_map('trim', $_REQUEST);
	$_GET = array_map('addslashes', $_GET);
	$_GET = array_map('trim', $_GET);
	$_POST = array_map('addslashes', $_POST);
	$_POST = array_map('trim', $_POST);
}
session_start();
?>