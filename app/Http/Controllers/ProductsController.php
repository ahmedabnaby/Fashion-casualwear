<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index')->with('products',Product::all());
    }
    public function about()
    {
        return view('products.about');
    }
    public function contact()
    {
        return view('products.contact');
    }
    public function show($id)
    {
        return view('products.show',['product' => Product::findOrFail($id)]);
    }
    public function payment()
    {
        $method = request('method');
        if($method=='cash')
        {
            $data = array(
                'cart' => base64_encode(serialize(\Cart::session(auth()->id())->getContent())),
                'firstname' => request('firstname'),
                'lastname' => request('lastname'),
                'street-address' => request('street-address'),
                'appartment' => request('appartment'),
                'city-state' => request('city-state'),
                'post-zipcode' => request('post-zipcode'),
                'email' => request('email'),
                'phone-number' => request('phone-number'),
                'current_date' => request('current_date')
                  );
            $order = collect($data);
            Session::push('order', $order);
            
            return redirect()->action('ProductsController@cash');
        }
        else
        {
            return redirect()->action('ProductsController@paywithcard');
        }
    }
    public function cash()
    {
        
        $orders=Session::get('order');
        foreach ($orders as $order);
        auth()->user()->orders()->create([
            'cart' => base64_encode(serialize(\Cart::session(auth()->id())->getContent())),
            'firstname' => $order['firstname'],
            'lastname' => $order['lastname'],
            'street-address' => $order['street-address'],
            'appartment' => $order['appartment'],
            'city-state' => $order['city-state'],
            'post-zipcode' => $order['post-zipcode'],
            'email' => $order['email'],
            'phone-number' => $order['phone-number'],
            'current_date' => $order['current_date']
        ]);
        
        \Cart::session(auth()->id())->clear();
            return redirect()->route('orders')->with('success',"Payment done!, Thankyou ;)");
        
    }
    public function charge(Request $request)
    {
        \Stripe\Stripe::setApiKey('sk_test_097Esi03j3yM1QbFs6EnSjPE');
        
        $charge = \Stripe\Charge::create([
            'amount' => (\Cart::session(auth()->id())->getTotal())*100,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $request->stripeToken,
          ]);
          $chargeId = $charge['id'];
          if($chargeId)
          {
            auth()->user()->orders_by_cards()->create([
                'cart' => base64_encode(serialize(\Cart::session(auth()->id())->getContent())),
                'current_date' => request('current_date')
            ]);
            \Cart::session(auth()->id())->clear();
            return redirect()->route('orders')->with('success',"Payment done!, Thankyou ;)");
          }
          else
          {
            return redirect()->back();
          }
    }
    public function paywithcard()
    {
        return view('products.paywithcard');
    }
}