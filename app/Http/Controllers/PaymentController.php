<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Stripe\Stripe;
use Stripe\Charge;


class PaymentController extends Controller
{
    private $apiKey = 'your-gcash-api-key';
    private $endpoint = 'https://api.gcash.com/payment/create';

    public function createPayment(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $charge = Charge::create([
            'amount' => 1, // Amount in cents
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Test payment',
        ]);

        return response()->json($charge);
    }
}
