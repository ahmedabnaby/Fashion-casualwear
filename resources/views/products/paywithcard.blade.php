@extends('layouts.app')

@section('extracss')
    <style>
.StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid #ccd0d2;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}


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
<section class="page-add cart-page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2>Pay with card<span>.</span></h2>
                    <a href="{{route('home')}}">Home</a>
                    <a class="active" href="#">Payment page</a>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="{{asset('violet/img/add.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-8">
<form action="/charge" method="post" id="payment-form">
    @csrf
        <input type="hidden" name="amount" value="{{Cart::session(auth()->id())->getTotal()}}">
        <label for="card-element">
          Credit or debit card
        </label>
        <div id="card-element">
          <!-- A Stripe Element will be inserted here. -->
        </div>
    
        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
        <input type="hidden" class="primary-btn" name="current_date" value="{{date('M d, Y')}}">
        <br>
        <button class="btn primary-btn pc-btn" style="background-color:gray;" type="submit">Submit Payment </button>
  </form>

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
</div>
<br>
<br>
</div>
@endsection


@section('extrajs')
<script src="https://js.stripe.com/v3/"></script>
<script> 
window.onload = function ()
{

var stripe = Stripe('pk_test_Qp0WV8WM3p58BhSzsf0RSOrw');


var elements = stripe.elements();

var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

var card = elements.create('card', {style: style});

card.mount('#card-element');
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
}
</script>
@endsection