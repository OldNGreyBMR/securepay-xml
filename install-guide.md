Date Submitted: 2023-01-15
Author:         OldNGrey (BMH)
Version:        158

"SecurePay XML API" 
====================
This plugin enables support for credit-card transactions via the SecurePay (AU) payment gateway.

It supports the following kinds of transactions:
	Standard Credit
	Preauthorise
	Advice (complete)
	Refund
	Reverse (Void)

BMH  changes
============
Amendments made to be compatible with Zen Cart 158 and 157d and PHP 8.0 and PHP 8.1
2022-08-20  modified lang file for zc158

2022 Zen Cart 157c includes\modules\payments\includes\modules\payments\ 
    securepayxml.php and securepay_xml_api.php 
    modified to only pass invoice enumber as txnid
    
see file changelog.md for all changes

Dependencies:
--------------
Zen Cart 1.5.7d or greater to 158
PHP 8.0 or PHP 8.1
cURL

"SecurePay XML API" Installation Guide for Zen Cart 1.5.7
=========================================================
REQUIREMENTS:
SecurePay merchant identifier and password See [ https://www.securepay.com.au/ ]

Manual Installation instructions:
=================================
These instructions assume that you already have Zen Cart installed, configured and operational.

1. Extract the Installer archive to a temporary location.

2.  Open the /includes folder and change the folder name "YOUR_TEMPLATE" to the name of your template folder.

3. Copy the includes folder to the root of your site where the includes folder is located. NOTE: no files are overwritten.

3A. To manually copy the files:
    Create a new folder named "securepayxml" in your zen-cart payment modules folder:
         /zencart_path/includes/modules/payment/securepayxml
        
        (Substitute "/zencart_path" for the path to your Zen Cart installation)

    Copy the files under the "includes" directory into their respective paths in your Zen Cart installation:
        [	(Substitute "/zencart_path" for the path to your Zen Cart installation)]
        
        "includes/modules/payment/securepayxml.php" to "/zencart_path/includes/modules/payment/"
        "includes/modules/payment/securepay_xml_api.php" to "/zencart_path/includes/modules/payment/"
        "includes/modules/payment/securepayxml/securepayxml_admin_notification.php" to "/zencart_path/includes/modules/payment/securepayxml"
        "includes/languages/english/modules/payment/securepayxml.php" to "/zencart_path/includes/languages/english/modules/payment/"
        "includes/languages/english/modules/payment/securepay_xml_api.php" to "/zencart_path/includes/languages/english/modules/payment/"
            
     (Change YOUR_TEMPLATE to the name of your template folder) ]
        
        "includes/templates/YOUR_TEMPLATE/css"
        "includes/templates/YOUR_TEMPLATE/images"
        "includes/templates/YOUR_TEMPLATE/css"
        and copy the three folders (css, images and templates) to YOUR_TEMPLATE folder
        
    
4. Configure the module via the Zen Cart admin interface.
    -Log-in
    -Navigate to Modules->Payment
    -Select "SecurePay XML API (AU)", click "Install"
    -Select "Configure", enter your SecurePay merchant identifier and password, configure as desired, then click "update"
    
5. Test the module to ensure that everything is working correctly (set it to "Test" and try a transaction. See "Test Gateway Operation" for more details).

6. The SecurePay XML API payment module is now installed. Set it to "Live" when your account is activated, and you are ready to receive payments through SecurePay.

Test Gateway Operation
=======================
In test mode, your transactions will be sent to the the SecurePay Test Gateway. The Merchant ID and
Password for the test gateway are NOT the same as the Merchant ID and Password for your live 
Merchant Account. Please contact your SecurePay Payment Gateway Reseller or SecurePay Support if 
you need a test Merchant ID and Transaction password.

When processing transactions, if the transaction is would otherwise give a 000 "Approved" response
code, the Test gateway will return the cents portion of the transaction amount as the response code
(i.e. a transaction amount of $1.05 will result in a "(05): Do Not Honour" response).

To achieve an "approved" test transaction, ensure the total transaction amount (including tax and
shipping costs) is a round dollar value (i.e. $1.00)

Support Contact
---------------------------------------------------------------------------------------------------
Please visit the SecurePay website (http://www.securepay.com.au/) for  support contact details.

SecurePay Documentation
=======================
See https://auspost.com.au/payments/docs/securepay/?javascript#other-integration-methods and select XML API Integration to download the latest guide.
As at 03/ April 2022 Ver 1.6 2021 was the most recent guide.
