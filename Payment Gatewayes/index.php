
<?php

require_once 'PaymentGetways.php';
require_once 'Loggable_interface.php';
require_once 'Refundable_interface.php';
require_once 'FawryGateway.php';
require_once 'StripeGateway.php';

$gateways = [new FawryGateway('EGP') , new StripeGateway('USD')];

foreach ($gateways as $gateway){

  $gateway->processPayment(100.00);
  

  if($gateway instanceof Refundable){

  $gateway->refund($gateway->getTransactionId() , 50.00);
  
  }
  
  if($gateway instanceof Loggable){

    $gateway->logTransaction('Processing Payment');
  }



}