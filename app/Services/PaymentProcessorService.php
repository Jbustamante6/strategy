<?php

namespace App\Services;

use App\Interfaces\PaymentInterface;

class PaymentProcessorService {
  private $strategy;

  public function __construct(PaymentInterface $strategy) {
      $this->strategy = $strategy; // Inversión de dependencia
  }

  public function process($amount, $currency) {
      return $this->strategy->processPayment($amount, $currency); // Liskov
  }

  public function setStrategy(PaymentInterface $strategy) {
      $this->strategy = $strategy; // Open/Closed
  }
}