<?php

class StripeGateway extends  PaymentGetways  implements  Loggable, Refundable{


public function processPayment(float $amount){


echo "Stripe Processing $amount {$this->getCurrency()} <br>";
return true ;
    
}

public function logTransaction(string $message): void{


echo "Stripe Logged :  $message <br";
    
}

public function refund( string $transactionId , float $amount) : bool{


echo "Stripe Refunded $amount     for transation [  $transactionId ] <br>";
return true ;



}


    

}