@extends('layouts.app')


@section('extracss')
    
<style>
    /*Order details*/
.order-details{
    background: #f4f4f4;
}
.order-details .order-details__title{
    padding: 30px 0;
    margin: 0 15px;
    border-bottom: 1px solid #ebebeb;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 1px;
    font-size: 16px;
    font-weight: 600;
    color: #3f3f3f;
}
.order-details .order-details__item{
    padding: 15px 0;
    margin: 0 30px;
    border-bottom: 1px solid #ebebeb;
}
.order-details .order-details__item .single-item{
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: space-between;
    -ms-align-items: center;
    align-items: center;
    padding: 5px;
}
.order-details .order-details__item .single-item .single-item__content{
    flex-grow: 2;
}
.order-details .order-details__item .single-item .single-item__content a{
    font-size: 16px;
    letter-spacing: 1px;
    color: #666;
    transition: all 0.3s ease-in-out 0s;
}
.order-details .order-details__item .single-item .single-item__content a:hover{
    color: #c43b68;
}
.order-details .order-details__item .single-item .single-item__content span{
    
    font-weight: 600;
    display: block;
}
.order-details .order-details__item .single-item .single-item__thumb{
    text-align: center;
    width: 60px;
    overflow: hidden;
    margin-right: 20px;
}
.order-details .order-details__item .single-item .single-item__remove{
    width: 35px;
    text-align: center;
    font-size: 22px;
    color: #212121;
}
.order-details .order-details__item .single-item .single-item__remove a:hover{
    color: #f10;
}
.order-details .order-details__count{
    margin: 0 30px;
    padding: 15px 0;
    border-bottom: 1px solid #ebebeb;
}
.order-details .order-details__count .order-details__count__single{
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: space-between;
    -ms-align-items: center;
    align-items: center;
    padding: 5px 0;
}
.order-details .order-details__count .order-details__count__single h5{
    color: #3f3f3f;
    text-transform: uppercase;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 600;
}
.order-details .order-details__count .order-details__count__single span.price{
    width: 30%;
    text-align: left;
    font-weight: 600;
}
.order-details .ordre-details__total{
    margin: 0 30px;
    padding: 30px 0;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -ms-align-items: center;
    align-items: center;
    justify-content: space-between;
}
.order-details .ordre-details__total h5{
    color: #3f3f3f;
    text-transform: uppercase;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 700;
}
.order-details .ordre-details__total span.price{
    width: 30%;
    text-align: left;
    font-weight: 700;
    letter-spacing: 1px;
}

</style>

@endsection


@section('content')
<div style="background-color:white;">
    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Checkout<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="{{asset('violet/img/add.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            <form action="{{route('payment')}}" class="checkout-form" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Your Information</h3>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Name*</p>
                            </div>
                            <div class="col-lg-5">
                                <input type="text" name="firstname" placeholder="First Name" required>
                            </div>
                            <div class="col-lg-5">
                                <input type="text" name="lastname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Street Address*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="street-address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">City*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="city-state" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Apartment/Block/House (optional)</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="apartment">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Post Code/ZIP*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="post-zipcode" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Email*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Phone*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="phone-number" required>
                            </div>
                            <input type="hidden" name="current_date" value="{{date('M d, Y')}}">
                        </div>
                        <br>
                        <br>
                    </div>
                
                        
                    <div class="col-md-4">
                        <div class="order-details" style="background-color:#f9fbfb;">
                            <h5 class="order-details__title">Your Order</h5>
                            <div class="order-details__item">
                                @foreach($cartItems as $cartItem)
                                <div class="single-item">
                                    <div class="single-item__thumb">
                                        <img src="violet/img/products/{{$cartItem->attributes->image}}" alt="ordered item">
                                    </div>
                                    <div class="single-item__content">
                                        <a href="#">{{$cartItem->name}}</a>
                                        <span class="price">${{$cartItem->price}}</span>
                                        <span class="quantity">Quantity: {{$cartItem->quantity}}</span>
                                    </div>
                                    <div class="single-item__remove">
                                        <a href="{{route('cart.destroy',$cartItem->id)}}"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="order-details__count">
                                <div class="order-details__count__single">
                                    <h5>Total</h5>
                                    <span class="price">${{Cart::getTotal()}}
                                </div>
                                <div class="order-details__count__single">
                                    <h5>Discount</h5>
                                    <span class="price">$0.00</span>
                                </div>
                            </div>
                            <div class="ordre-details__total">
                                <h5>Order total</h5>
                                <span class="price">${{Cart::getTotal()}}</span>
                            </div>
                        </div>
                    
                    </div>
                </div>

                    
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-method">
                            <h3>Payment</h3>
                            
                            <input type="radio" id="card" name="method" value="card">
                            <label for="card">
                                Credit / Debit card <img src="{{asset('violet/img/mastercard.jpg')}}" alt="">
                            </label><br>
                            <input type="radio" id="cash" name="method" value="cash">
                            <label for="cash">
                                Pay when you get the package
                            </label><br>
                                        
                              
                            <button type="submit">Place your order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection