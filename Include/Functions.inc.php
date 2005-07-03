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

/**
 * Get data from a result set
 *
 * @author  dictworld
 * @param   &object   &$rs 		reference to the resultset
 * @return  array[][] $data   retrieved data arranged by both sequence and column name
 */
function AdodbGetResult(&$rs)
{
	$data = array();
	$ncols = $rs->FieldCount();
	while (!$rs->EOF) 
	{		
		for ($i=0; $i < $ncols; $i++) 
		{
			$data[][$i] = $rs->FetchField($i);
			$data[][ $rs->fields[$i] ] = $rs->FetchField($i);
		}
		$rs->MoveNext();
	} // while
	return $data;
}

?>