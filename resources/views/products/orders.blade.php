@extends('layouts.app')
@section('content')

<div style="background-color:white;">
    <!-- Page Add Section Begin -->
    <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>My Orders<span>.</span></h2>
                        <a href="{{route('home')}}">Home</a>
                        <a class="active" href="#">orders</a>
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
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="cart-table">
                @foreach ($orders as $order)
                <table >
                    <thead>
                        <tr>
                            <th>Product</th>
                            
                            <th>Product name</th>
                            
                            <th>Price</th>
                            <th class="quan">Quantity</th>
                            
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;Date</th>
                            <th>Total price</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            @foreach ($order->cart as $item)
                            <td class="product-col">
                                <img src="violet/img/products/{{$item['associatedModel']['image']}}" alt="" width="70%" height="50%">
                            </td>
                            <td>
                                <div class="p-title">
                                    <h5>{{$item['name'] }}</h5>
                                </div>
                            </td>
                            
                            <td class="price-col">${{$item['price'] }}</td>

                            <td class="price-col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$item['quantity'] }}</td>
                            
                            <td class="price-col"><span style="font-size:12px;">{{$order['current_date'] }}<span></td>
                                
                            <td class="price-col">${{$item['price']*$item['quantity'] }}</td>
                        </tr>
                        @endforeach
                        
                      @endforeach
                    </tbody>
                </table>
            </div>
            <div class="cart-table">
                @foreach ($ordersbycards as $ordersbycard)
                <table >
                    <thead>
                        <tr>
                            <th>Product</th>
                            
                            <th>Product name</th>
                            
                            <th>Price</th>
                            <th class="quan">Quantity</th>
                            
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;Date</th>
                            <th>Total price</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            @foreach ($ordersbycard->cart as $item)
                            <td class="product-col">
                                <img src="violet/img/products/{{$item['associatedModel']['image']}}" alt="" width="70%" height="50%">
                            </td>
                            <td>
                                <div class="p-title">
                                    <h5>{{$item['name'] }}</h5>
                                </div>
                            </td>
                            
                            <td class="price-col">${{$item['price'] }}</td>

                            <td class="price-col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$item['quantity'] }}</td>
                            
                            <td class="price-col"><span style="font-size:12px;">{{$ordersbycard['current_date'] }}<span></td>
                                
                            <td class="price-col">${{$item['price']*$item['quantity'] }}</td>
                        </tr>
                        @endforeach
                        
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        </div>
        
    </div>
</div>
    
@endsection