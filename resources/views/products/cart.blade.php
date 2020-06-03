@extends('layouts.app')
@section('content')
<div style="background-color:white;">
        <!-- Page Add Section Begin -->
        <section class="page-add cart-page-add">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="page-breadcrumb">
                            <h2>Cart<span>.</span></h2>
                            <a href="{{route('home')}}">Home</a>
                            <a class="active" href="#">Shopping cart page</a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <img src="{{asset('violet/img/add.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Add Section End -->
    
        <!-- Cart Page Section Begin -->
        <div class="cart-page" >
            <div class="container" >
                <div class="cart-table" >
                    <table >
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Product name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>Price</th>
                                <th class="quan">Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                @foreach ($cartItems as $cartItem)
                                <td class="product-col">
                                    <img src="violet/img/products/{{$cartItem->attributes->image}}" alt="">
                                </td>
                                <td>
                                    <div class="p-title">
                                        <h5>{{$cartItem->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                    </div>
                                </td>
                                <td class="price-col">${{$cartItem->price}}</td>
                                <td class="price-col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$cartItem->quantity}}</td>
                                
                                <td class="total">${{Cart::session(auth()->id())->get($cartItem->id)->getPriceSum()}}&nbsp;&nbsp;&nbsp;</td>
                               
                                <td class="product-close" style="color:red;"><a href="{{route('cart.destroy',$cartItem->id)}}"><i class="icon-trash icons">x</i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="shopping-method">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="total-info">
                                <div class="total-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Total</th>
                                                <th>Discount</th>
                                                <th class="total-cart">Total Cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="total">${{Cart::getTotal()}}</td>
                                                <td class="sub-total">$0.00</td>
                                                <td class="total-cart-p">${{Cart::getTotal()}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <a href="{{route('checkout')}}" class="primary-btn chechout-btn">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Cart Page Section End -->
@endsection