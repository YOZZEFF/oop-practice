<?php

abstract class PaymentGetways{

 protected  $transactionId ;
 protected $currency ;


 public function __construct(string $currency){

  $this->currency = $currency;
  $this->transactionId = $this->generateTransactionId();

 }
    
//  Abstract to force anyone who extends this class to implement this method
abstract protected  function processPayment(float $amount); 
protected  function generateTransactionId(){

    $bytes = random_bytes(16);
    $id = bin2hex($bytes);
    return $id;

}

public function getCurrency(){

return $this->currency;
}

public function getTransactionId(){

return $this->transactionId;
}

}