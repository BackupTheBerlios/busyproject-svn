<?php
/**
 * Constants
 *
 * All constants definitions
 * @file        Include/Constants.php
 * @package     Include
 * @author      David Yao <davidyao@busyteam.com>
 * @version     $Id: Constants.inc.php,v 1.0 2005/07/01 00:45:37 David Exp $
 * @link         
 * @copyright   (c) 2005 BusyTeam.com 
 * @support     support@busyteam.com
 *
 ***************************************************************************/
if ( !defined('IN_BUSY') )
{
	die("Hacking attempt");
}

$_BUSY['TablePrefix']='busy_';
// defined table names
//define('PRODUCT_TABLE', $_BUSY['TablePrefix'].'product');
//define('PRODUCT_SPECIAL_TABLE', $_BUSY['TablePrefix'].'product_special');
//define('PRODUCT_STATUS_TABLE', $_BUSY['TablePrefix'].'product_status');
//define('PRODUCT_MANUFACTURER_TABLE', $_BUSY['TablePrefix'].'product_manufacturer');
//define('TAX_TABLE', $_BUSY['TablePrefix'].'tax');
//define('CATEGORY_TABLE', $_BUSY['TablePrefix'].'category');
//define('PRODUCT_REVIEW_TABLE', $_BUSY['TablePrefix'].'review');
//define('CUSTOMER_TABLE', $_BUSY['TablePrefix'].'customer');
//define('ADDRESS_TABLE', $_BUSY['TablePrefix'].'address');
//define('SESSION_TABLE', $_BUSY['TablePrefix'].'session');
//define('ORDER_TABLE', $_BUSY['TablePrefix'].'order');
//define('ORDER_PRODUCT_TABLE', $_BUSY['TablePrefix'].'order_product');
//define('ORDER_STATUS_TABLE', $_BUSY['TablePrefix'].'order_status');
//define('ORDER_STATUS_HISTORY_TABLE', $_BUSY['TablePrefix'].'order_status_history');
define('NEWSLETTER_TABLE', $_BUSY['TablePrefix'].'newsletter');
define('ADMIN_TABLE', $_BUSY['TablePrefix'].'admin');
define('PROJECT_CONFIG_TABLE', $_BUSY['TablePrefix'].'project_config');
define('SHOPPINGCART_TABLE', $_BUSY['TablePrefix'].'shoppingcart');

define('ADJUSTMENT_TABLE', 'tbladjustment');
define('ADJUSTMENT_DETAIL_TABLE', 'tbladjustmentdetail');
define('CODE_CREDIT_TABLE', 'tblcodecredit');
define('CODE_CUSTOMER_TYPE_TABLE', 'tblcodecustomertype');
define('CODE_EMPLOYEE_TABLE', 'tblcodeemployee');
define('CODE_ITEM_TYPE_TABLE', 'tblcodeitemtype');
define('CODE_MFG_TABLE', 'tblcodemfg');
define('CODE_OWNERSHIP_TABLE', 'tblcodeownership');
define('CODE_SHIPPING_TABLE', 'tblcodeshipping');
define('CODE_STORE_TABLE', 'tblcodestore');
define('CODE_TAX_TABLE', 'tblcodetax');
define('CODE_TERMS_TABLE', 'tblcodeterms');
define('CODE_TITLE_TABLE', 'tblcodetitle');
define('CUSTOMER_TABLE', 'tblcustomer');
define('INVOICE_TABLE', 'tblinvoice');
define('INVOICE_DETAIL_TABLE', 'tblinvoicedetail');
define('ITEM_TABLE', 'tblitem');
define('ITEM_DETAIL_TABLE', 'tblitemdetail');
define('PURCHASE_TABLE', 'tblpurchase');
define('PURCHASE_DETAIL_TABLE', 'tblpurchasedetail');
define('RMA_TABLE', 'tblrma');
define('RMA_DETAIL_TABLE', 'tblrmadetail');
define('SUPPLIER_TABLE', 'tblsupplier');
?>
