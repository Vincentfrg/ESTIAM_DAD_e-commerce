<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use Exception;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        \Stripe\Stripe::setApiKey(getenv('STRIPE_SECRET_KEY'));

        [$products, $cartItems] = Cart::getProductsAndCartItems();


        $lineItems = [];
        foreach ($products as $product) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $product->title,
                        'images' => [$product->image],
                    ],
                    'unit_amount' => $product->price * 100,
                ],
                'quantity' => $cartItems[$product->id]['quantity'],
            ];
        }

        $session = \Stripe\Checkout\Session::create([
            'customer_creation' => 'always',
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('checkout.success', [], true) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout.failure', [], true),
        ]);

        return redirect($session->url);
    }
    public function success(Request $request)
    {
        // $stripe = new \Stripe\StripeClient(getenv('STRIPE_SECRET_KEY'));

        // // Récupération de `session_id` depuis la requête
        // $session_id = $request->get('session_id');

        // // Vérification de la présence
        // if (!$session_id) {
        //     abort(400, 'Session ID is required');
        // }

        // $session = $stripe->checkout->sessions->retrieve($_GET['session_id']);

        // // Récupérer les informations du client associées à la session
        // if (!empty($session->customer)) {
        //     $customer = $stripe->customers->retrieve($session->customer);
        // } else {
        //     $customer = null;
        // }

        // dd($session, $customer);
        // dd($request->all());

        // return view('checkout.success', compact('customer'));


        \Stripe\Stripe::setApiKey(getenv('STRIPE_SECRET_KEY'));

        try {
            $session = \Stripe\Checkout\Session::retrieve($request->get('session_id'));
            if (!$session) {
                return view('checkout.failure');
            }

            $customer = \Stripe\Customer::retrieve($session->customer);
            
            return view('checkout.success', compact('customer'));
        } catch(Exception $e) {
            return view('checkout.failure');
        }
    }

    public function failure(Request $request)
    {
        dd($request->all());
    }
}
