<?php
interface Loggable {

public function logTransaction(string $message) : void;
}