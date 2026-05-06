<?php

class FawryGateway extends PaymentGetways implements Loggable{


public function processPayment(float $amount){


echo "Fawry Processing $amount {$this->getCurrency()} <br>";
return true ;
    
}
public function logTransaction(string $message) : void {


echo "Fawry Logged : $message <br>" ;
}

    
}