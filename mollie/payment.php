<?php
include "lib/error_reporter.dev.php";

include "vendor/autoload.php";

$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey('test_mv5yhknbguWBf2TMSQ5unMKdqfA9DH');

$_POST['totalprice'] = '16.00';

$totalPrice = '';
if(isset($_POST['totalprice'])){
    $totalPrice = $_POST['totalprice'];
} else {
    $totalPrice = '15.00';
}

if(isset($_POST['package'])){
    $package = $_POST['package'];
} else {
    $package = 'Roomsoes pakket';
}

$molliePaymentArray = array(
    "amount" => array(
        "value"=> "$totalPrice",
        "currency" => "EUR"
    ),
    "description" => 'lang leve de lol',
    "redirectUrl" => 'localhost/mollie/payment-complete.php'
);

$betaling = $mollie->payments->create($molliePaymentArray);
echo 'end of payment';
var_dump($betaling); exit;
// in het bestand payment-complete.php
// header("Location:".'payment-complete.php', true, 303);


