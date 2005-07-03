<?php
/**
 * Log
 *
 * functions for logging
 * @file        Include/Logger.inc.php
 * @package     Include
 * @author      Wu Jinyong & David Yao <davidyao@busyteam.com>
 * @version     $Id: Logger.inc.php,v 1.0 2005/07/01 00:45:37 David Exp $
 * @link         
 * @copyright   (c) 2005 BusyTeam.com 
 * @support     support@busyteam.com
 *
 ***************************************************************************/
/*
 * public BusyLog(string $LogContent, string $FileName, integer $Line)
 *
 * @Function: Logging of the website
 * @Parameters: 
 *
 *		$LogContent: the content required logging
 *		$FileName:   the filename of logging
 *		$Line:		 the line number of logging
 *
 * @Return values: (none)
 *
 */
function BusyLog($LogContent, $FileName, $Line)
{
	global $_BUSY;

	if (!$_BUSY['LogLevel']) return;

	// Open logging file
	$fp = fopen($_BUSY['LogFile'], "a+");
	if ( NULL == $fp ) BusyDie('Open File Error', __FILE__, __LINE__);

	$now = GetCurrentTime();
	$content = "[$now] $LogContent at $FileName Line $Line".CRLF();
	flock($fp, LOCK_EX);
	fputs($fp, $content);
	flock($fp, LOCK_UN);
	fclose($fp);
}

/*
 * public BusyDie(string $Exception, string $FileName, integer $Line)
 *
 * @Function: exit for occurance of exception
 * @Parameters: 
 *
 *		$Exception:  the description of exception
 *		$FileName:   the filename when die
 *		$Line:		 the line number when die
 *
 * @Return values: (none)
 */
function BusyDie($Exception, $FileName, $Line)
{
	// exception
	print ("Error: $Exception at $FileName Line $Line".CRLF());
	exit();
}
?>