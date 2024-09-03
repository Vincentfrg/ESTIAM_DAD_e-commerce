<?php

namespace App\Http\Controllers;

use App\Enums\AddressType;
use App\Models\Country;
use App\Models\CustomerAddress;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function view(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = $request->user();
        /** @var \App\Models\Customer $customer */
        $customer = $user->customer;

        if (!$customer) {
            // Si aucun client n'est trouvé, vous pouvez rediriger ou afficher un message d'erreur
            return redirect()->back()->withErrors('No customer found for this user.');
        }

        $shippingAddress = $customer->shippingAddress ?: new CustomerAddress(['type' => AddressType::Shipping]);
        $billingAddress = $customer->billingAddress ?: new CustomerAddress(['type' => AddressType::Billing]);
        //        dd($customer, $shippingAddress->attributesToArray(), $billingAddress, $billingAddress->customer);
        $countries = Country::query()->orderBy('name')->get();

        return view('profile.view', compact('customer', 'user', 'shippingAddress', 'billingAddress', 'countries'));
    }
}
