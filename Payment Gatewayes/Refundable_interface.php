<?php
interface Refundable {

public function refund( string $transactionId , float $amount) : bool;
}