<?php


namespace App\Services;

use App\Interfaces\PaymentInterface;

class StripeService implements PaymentInterface {
  public function processPayment($amount, $currency) {
    return ['msg' => 'Pagado por stripe'];
  }
}