@extends('layouts.app')
@section('content')
<section class="page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2>{{$product->category}}<span>.</span></h2>
                    <a href="{{route('home')}}">Home</a>
                    <a class="active" href="#">{{$product->category}}</a>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="{{asset('violet/img/add.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Page Add Section End -->

<!-- Product Page Section Beign -->
<section class="product-page">
    <div class="container">
        <div class="product-control">
            @if ($product->id==1)
            <a href="#">Previous</a>
            @else
            <a href="{{route('products.show',$product->id-1)}}">Previous</a>
            @endif
            @if ($product->id==16)
            <a href="#">Next</a>
            @else
            <a href="{{route('products.show',$product->id+1)}}">Next</a>
            @endif
            
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="product-slider owl-carousel">
                    <div class="product-img">
                        <figure>
                            <img src="{{asset('violet/img/products/'.$product->image)}}" alt="">
                            <div class="p-status">{{$product->status}}</div>
                        </figure>
                    </div>
                    <div class="product-img">
                        <figure>
                            <img src="{{asset('violet/img/products/'.$product->image1)}}" alt="">
                            <div class="p-status">{{$product->status}}</div>
                        </figure>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-6">
                <div class="product-content">
                    <h2>{{$product->name}}</h2>
                    <div class="pc-meta">
                        <h5>${{$product->price}}</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan lacus vel facilisis.</p>
                    <ul class="tags">
                        <li><span>Category :</span> {{$product->category}}</li>
                        <li><span>Tags :</span> man, shirt, dotted, elegant, cool</li>
                    </ul>
                    
                <form action="{{route('cart.add',$product->id)}}" method="get">
                    <div class="product-quantity">
                        <div class="pro-qty">
                            <input type="text" name="quantity" value="1">
                            
                        </div>
                        
                    </div>
                    <button class="btn primary-btn pc-btn" type="submit">Add to cart</button>
                    
                </form>
                    <ul class="p-info">
                        <li></li>
                        <li>Reviews</li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<div class="header-info">
    <div class="container-fluid">
        <div class="row">
        </div>
    </div>
</div>
<!-- Product Page Section End -->
@endsection