<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;
use Stripe\StripeClient;

class StripeController extends Controller
{
    public $stripe;
    public function create(Request $request) {
        $this->stripe = new StripeClient(config('app.stripe_secret'));
        logger('create');
        logger($request['items']);
        try {
          
            // Create a PaymentIntent with amount and currency
            $paymentIntent = $this->stripe->paymentIntents->create([
                'amount' => $this->calculateOrderAmount($request['items']),
                'currency' => 'eur',
                // In the latest version of the API, specifying the `automatic_payment_methods` parameter is optional because Stripe enables its functionality by default.
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);
        
            $output = [
                'clientSecret' => $paymentIntent->client_secret,
                // [DEV]: For demo purposes only, you should avoid exposing the PaymentIntent ID in the client-side code.
                'dpmCheckerLink' => "https://dashboard.stripe.com/settings/payment_methods/review?transaction_id={$paymentIntent->id}",
            ];
        
            // echo json_encode($output);
            return response()->json($output);
        } catch (Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
    private function calculateOrderAmount(array $items): int {
        // Calculate the order total on the server to prevent
        // people from directly manipulating the amount on the client
        $total = 0;
        foreach($items as $item) {
          $total += $item['amount'];
        }
        return $total;
    }
}
