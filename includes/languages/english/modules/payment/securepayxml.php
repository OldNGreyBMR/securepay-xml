<?php
/**
 * @package securepayxml_payment_module
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Portions Copyright 2003 Jason LeBaron 
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: securepayxml.php 7341 2009-10-12 06:29:30Z drbyte $
 */
 
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_ADMIN_TITLE', 'SecurePay XML API (AU)');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_CATALOG_TITLE', 'Credit Card');

  if (defined('MODULE_PAYMENT_SECUREPAYXML_STATUS') && MODULE_PAYMENT_SECUREPAYXML_STATUS == 'True') {
    define('MODULE_PAYMENT_SECUREPAYXML_TEXT_DESCRIPTION', '');
  } else { 
    define('MODULE_PAYMENT_SECUREPAYXML_TEXT_DESCRIPTION', '<b>SecurePay XML API (AU)</b><br />Receive credit-card payments via the SecurePay Gateway<br /><br />Configuration Instructions<br />1. Click "Install"<br />2. Enter your SecurePay merchant id and password (obtained from SecurePay support)<br /><br /><hr />Requirements:<hr /><br />PHP cURL<br />A <a href="http://securepay.com.au">SecurePay</a> merchant account.');
  }
  
  define('MODULE_PAYMENT_SECUREPAYXML_MODE_PREAUTH','Preauth/Advice');
  define('MODULE_PAYMENT_SECUREPAYXML_MODE_STANDARD','Standard Payment');
  
  define('MODULE_PAYMENT_SECUREPAYXML_MODE_PREAUTH_DESC','Preauth only');
  define('MODULE_PAYMENT_SECUREPAYXML_MODE_STANDARD_DESC','Standard Payment');
  
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_CREDIT_CARD_TYPE', 'Credit Card Type:');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_CREDIT_CARD_OWNER', 'Credit Card Owner:');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_CREDIT_CARD_NUMBER', 'Credit Card Number:');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_CVV', 'CVV Number:');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_CREDIT_CARD_EXPIRES', 'Credit Card Expiry Date:');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_JS_CC_OWNER', 'The cardholder name must be at least ' . CC_OWNER_MIN_LENGTH . ' characters.\n');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_JS_CC_NUMBER', 'The credit card number must be at least ' . CC_NUMBER_MIN_LENGTH . ' characters.\n');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_JS_CC_CVV', 'You must enter the 3 or 4 digit CVV on the back of your credit card');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_ERROR', 'Credit Card Error!');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_DECLINED_MESSAGE', 'Your card has been declined.  Please re-enter your card information, try another card, or contact the store owner for assistance.');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_DECLINED_AVS_MESSAGE', 'Invalid Billing Address.  Please re-enter your card information, try another card, or contact the store owner for assistance.');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_DECLINED_GENERAL_MESSAGE', 'Your card has been declined.  Please re-enter your card information, try another card, or contact the store owner for assistance.');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_POPUP_CVV_LINK', 'What\'s this?');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTE: Module is not configured yet)</span>');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_PEMFILE_MISSING', '<span class="alert">&nbsp;The xyzxyz.pem certificate file cannot be found.</span>');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_ERROR_CURL_NOT_FOUND', 'CURL functions not found - required for SecurePayXML payment module');
  
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_GENERAL_ERROR', 'We are sorry. There was a system error while processing your card. Your information is safe. Please notify the Store Owner to arrange alternate payment options.');

  define('MODULE_PAYMENT_SECUREPAYXML_MESSAGE', 'Response Message:');
  define('MODULE_PAYMENT_SECUREPAYXML_APPROVAL_CODE', 'Approval Code:');
  define('MODULE_PAYMENT_SECUREPAYXML_TRANSACTION_REFERENCE_NUMBER', 'Reference Number:');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_TEST_MODE', '<span class="alert">&nbsp;(NOTE: Module is in testing mode)</span>');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_ORDERTYPE', 'Order Type:');

  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_NO_MATCHING_ORDER_FOUND', 'Error: Could not find transaction details for the record specified.');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_INVALID_AMOUNT', 'Error: You did not enter a valid amount.');

  define('MODULE_PAYMENT_SECUREPAYXML_ENTRY_REFUND_TITLE', '<b>Issue Refund:</b>');
  define('MODULE_PAYMENT_SECUREPAYXML_ENTRY_REFUND_AMOUNT_TEXT', 'Amount:');
  define('MODULE_PAYMENT_SECUREPAYXML_ENTRY_REFUND_BUTTON_TEXT', 'Refund');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_REFUND', 'Refunded $%s, on order %s with transaction id %s');

  define('MODULE_PAYMENT_SECUREPAYXML_ENTRY_PREAUTH_TITLE', '<b>Complete preauthorised transaction</b>');
  define('MODULE_PAYMENT_SECUREPAYXML_ENTRY_PREAUTH_AMOUNT_TEXT', 'Amount: ');
  define('MODULE_PAYMENT_SECUREPAYXML_ENTRY_PREAUTH_BUTTON_TEXT', 'Complete');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_PREAUTH', 'Funds Capture initiated. Amount: %s.  Transaction ID: %s - AuthCode: %s');

  define('MODULE_PAYMENT_SECUREPAYXML_ENTRY_VOID_TITLE', '<b>Reverse transaction:</b>');
  define('MODULE_PAYMENT_SECUREPAYXML_ENTRY_VOID_BUTTON_TEXT', 'Reverse');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_VOID_CONFIRM_CHECK', 'Confirm:');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_VOID_CONFIRM_ERROR', 'Error: You did not check the confirm box.');
  define('MODULE_PAYMENT_SECUREPAYXML_TEXT_VOID', 'Reversed order: %s with transaction: %s.');


?>