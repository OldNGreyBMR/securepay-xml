Change Log
securepay xml V159e
==================
**Changes for Version 159e
-----------------------
PHP 8.5 compliant remove deprecated commands
reformat; PHP8.4 compliant; Zen Cart V2.1.0 compliant
add version number id Admin console; improve instructions

Changes for Version 159e
-----------------------
1. change log file output
2. strftime deprecated so replace with date() 
3. declare all vars
4. increase size of banktxnid from varchar(7) to varchar(16) in SQL create table and head field name change in XML
5. add random suffix to transaction id to ensure uniqueness
1 /includes/modules/payments/includes/modules/payments/securepayxml.php and 
  /includes/modules/payments/includes/modules/payments/securepay_xml_api.php modified to only pass invoice enumber as txnid
2 new template file added /includes/templates/YOUR_TEMPLATE/templates/tpl_checkout_payment_default.php
3 icon changed to /images/icons/securepay_logo_rgb.png webp version is also included
4 icon size styled in added css file /includes/templates/YOUR_TEMPLATE/css/stylesheet_securepay_overide.css
5 SecurePay logos displayed on checkout page
6 updated for PHP 8.4
7 trim deprecated in PHP8.1
8 reformat; PHP8.4 compliant; Zen Cart V2.2.0 compliant; add version number id Admin console; improve instructions
9 add null coalesce on lines where cc fields are not filled out and user submits payment
10 remove spaces from the CVV

