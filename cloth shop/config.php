<?php
$currency = 'Birr'; //Currency sumbol or code

//db settings
$db_username = 'root';
$db_password = '';
$db_name = 'database';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);


//paypal settings
$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'geletabegna@gmail.com'; //PayPal API Username
$PayPalApiPassword 		= '190798792445'; //Paypal API password
$PayPalApiSignature 	= '797987709709709oipuiou98Eq.payment for customers'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://localhost/try%20project/cloth%20shop/view_cart.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://localhost/try%20project/cloth%20shop/view_cart.php'; //Cancel URL if user clicks cancel

?>