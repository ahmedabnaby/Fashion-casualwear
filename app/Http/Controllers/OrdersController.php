<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders;
        
            $orders = $orders->map(function($i) {
                $i->cart = unserialize(base64_decode($i->cart));
                return $i;
            });

            $ordersbycards = auth()->user()->orders_by_cards;
        
            $ordersbycards = $ordersbycards->map(function($i) {
                $i->cart = unserialize(base64_decode($i->cart));
                return $i;
            });
            

            return view('products.orders')->with('orders',$orders)->with('ordersbycards',$ordersbycards);
    }
}
