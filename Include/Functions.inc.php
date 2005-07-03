<?php
/**
 * Common functions
 *
 * Publicly used functions
 * @file        Include/Functions.inc.php
 * @package     Include
 * @author      Wu Jinyong & David Yao <davidyao@busyteam.com>
 * @version     $Id: Functions.inc.php,v 1.0 2005/07/01 00:45:37 David Exp $
 * @link         
 * @copyright   (c) 2005 BusyTeam.com 
 * @support     support@busyteam.com
 *
 ***************************************************************************/
/*
 * public GetCurrentTime()
 *
 * @Function: Get current time
 *
 * @Parameters: (none)
 * @Return values: (none)
 *
 */
function GetCurrentTime()
{
	return date('Y-m-d H:i:s');
}

/*
 * public CRLF()
 *
 * @Function: Get CRLF according to different OS
 *
 * @Parameters: (none)
 * @Return values: CRLF of OS
 *
 */
function CRLF()
{
	$os = $_SERVER['SERVER_SOFTWARE'];
	if ( preg_match('/Microsoft/i', $os) )
	{
		return "\r\n";
	} else {
		return "\n";
	}
}
?>