<?php

namespace App\Http\Controllers;


use App\Http\Requests\PaymentRequest; 
use App\Services\PaymentProcessorService;
use App\Services\PapypalService;
use App\Services\StripeService;

class PaymentController extends Controller
{
    public function payWithPayPal(PaymentRequest $request) {
        $processor = new PaymentProcessorService(new PapypalService()); // Estrategia inicial
        $result = $processor->process($request['amount'], $request['currency']);
        return response()->json($result);
    }

    public function payWithStripe(PaymentRequest $request) {
        $processor = new PaymentProcessorService(new StripeService()); // Estrategia inicial
        $result = $processor->process($request['amount'], $request['currency']);
        return response()->json($result);
    }
}
