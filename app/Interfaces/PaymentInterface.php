<?php
 
namespace App\Interfaces;

interface PaymentInterface {
  public function processPayment($amount, $currency);
}

