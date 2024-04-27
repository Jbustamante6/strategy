<?php

namespace App\Services;

use App\Interfaces\PaymentInterface;

class PapypalService implements PaymentInterface {
  public function processPayment($amount, $currency) {
    return ['msg' => 'Pagado por paypal'];
  }
}