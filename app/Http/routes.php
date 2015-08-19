<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


get('pay', function() {
    return view('pay');
});

post('pay', function(\Illuminate\Http\Request $request, \Cartalyst\Stripe\Stripe $stripe) {

    $charge = $stripe->charges()->create([
        'amount' => $request->get('amount'),
        'currency' => 'EUR',
        'source' => [
            'object'    => 'card',
            'name'    => $request->get('name'),
            'number'    => $request->get('card_no'),
            'cvc'       => $request->get('cvc'),
            'exp_month' => $request->get('expiration_month'),
            'exp_year'  => $request->get('expiration_year'),
        ]
    ]);

    dd($charge);


});