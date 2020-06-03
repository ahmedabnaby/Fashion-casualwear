@extends('layouts.app')

@section('extracss')
<style>
    
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

</style>
    
@endsection
@section('content')


    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="{{ asset('violet/img/slider-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <img src="{{ asset('violet/img/moustache-png-moustache-png-image-500.png')}}" alt="" style="width:40%;height: auto;" class="center">
                             
                            <h1><span style="font-family:Gadget, sans-serif"> FASHION. </span></h1>
                            <br>
                            <a href="#down" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="{{ asset('violet/img/slider-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <img src="{{ asset('violet/img/moustache-png-moustache-png-image-500.png')}}" alt="" style="width:40%;height: auto;" class="center">
                             
                            <h1><span style="font-family:Gadget, sans-serif"> FASHION. </span></h1>
                            <br>
                            <a href="#down" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="{{ asset('violet/img/slider-3.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <img src="{{ asset('violet/img/moustache-png-moustache-png-image-500.png')}}" alt="" style="width:40%;height: auto;" class="center">
                             
                            <h1><span style="font-family:Gadget, sans-serif"> FASHION. </span></h1>
                            <br>
                            <a href="#down" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="{{ asset('violet/img/icons/f-delivery.png')}}" alt="">
                            <h4>Free shipping</h4>
                            <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal
                                esuada aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="{{ asset('violet/img/icons/coin.png')}}" alt="">
                            <h4>100% Money back </h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="{{ asset('violet/img/icons/chat.png')}}" alt="">
                            <h4>Online support 24/7</h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class="features-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-box-item first-box">
                                    <img src="{{ asset('violet/img/cool-man-wearing-scarf-920x575-1-800x500.jpg')}}" alt="">
                                    <div class="box-text">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <h2><span style="color:white;">Jewelry</span> </h2>
                                        <span class="trend-alert" style="color:wheat;">Trend Allert</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-box-item second-box">
                                    <img src="{{ asset('violet/img/3dff05fa0a6d1a92166ecd1a5518df70--style-instagram-black-sweaters.jpg')}}" alt="">
                                    <div class="box-text">
                                        <h2>Footwear</h2>
                                        <span class="trend-alert" style="color:white;">Bold & Black</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box-item large-box">
                            <img src="{{ asset('violet/img/8543655e93728beb1c083cc000b391b5.jpg')}}" alt="">
                            <div class="box-text">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <h2>Collection</h2>
                                <div class="trend-alert">Trend Allert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad" id='down'>
        <div class="container" >
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Latest Products</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <li data-filter=".tshirts">T-shirts</li>
                            <li data-filter=".jeans">Jeans</li>
                            <li data-filter=".shoes">Shoes</li>
                            <li data-filter=".watches">Watches</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list">
                @foreach ($products as $product)
                <div class="col-lg-3 col-sm-6 mix all {{$product->category}}">
                    <div class="single-product-item">
                        <figure>
                            <a href="{{route('products.show',$product->id)}}"><img src="violet/img/products/{{$product->image}}" alt=""></a>
                            <div class="p-status">{{$product->status}}</div>
                        </figure>
                        <div class="product-text">
                            <h6>{{$product->name}}</h6>
                            <p>${{$product->price}}</p>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Latest Product End -->

    <!-- Lookbok Section Begin -->
    <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h2>2020 <br />#fashion</h2>
                        </div>
                        <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vestibulum malesuada
                            aliquet libero viverra cursus. Aliquam erat volutpat. Morbi id dictum quam, ut commodo
                            lorem. In at nisi nec arcu porttitor aliquet vitae at dui. Sed sollicitudin nulla non leo
                            viverra scelerisque. Phasellus facilisis lobortis metus, sit amet viverra lectus finibus ac.
                            Aenean non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend,
                            sodales nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum
                            metus nec scelerisque. s</p>
                        <a href="#" class="primary-btn look-btn">See More</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="lookbok-pic">
                        <img src="{{ asset('violet/img/lookbok.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lookbok Section End -->

    <!-- Logo Section Begin -->
    <div class="logo-section spad">
        
    </div>
    <!-- Logo Section End -->
@endsection