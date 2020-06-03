<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('violet/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('violet/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('violet/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('violet/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('violet/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('violet/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('violet/css/style.css') }}" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html {
  scroll-behavior: smooth;
}
        body {
    background: url("http://www.wohn-blogger.de/wp-content/themes/itheme2/skins/gray/images/body-bg.png") repeat scroll 0 0 #D1D1D1;
    color: #666666;
}

    </style>
    @yield('extracss')
</head>
<body>
    <div id="app">
            <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    @include('inc.navbar')
        @yield('content')
    </div>
        <!-- Footer Section Begin -->
        <footer class="footer-section spad">
            <div class="container">
                <div class="footer-widget">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>About us</h4>
                                <ul>
                                    <li>About Us</li>
                                    <li>Community</li>
                                    <li>Jobs</li>
                                    <li>Shipping</li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Customer Care</h4>
                                <ul>
                                    <li>Contact us</li>
                                    <li>Privacy Policy</li>
                                    <li>2020 Fashionk</li>
                                    <li>Shipping & Delivery</li>
                                    <li>Gallery</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Our Services</h4>
                                <ul>
                                    <li>Free Shipping</li>
                                    <li>Free Returnes</li>
                                    <li>Our Franchising</li>
                                    <li>Terms and conditions</li>
                                    <li>Privacy Policy</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Information</h4>
                                <ul>
                                    <li>Payment methods</li>
                                    <li>Times and shipping costs</li>
                                    <li>Product Returns</li>
                                    <li>Shipping methods</li>
                                    <li>Conformity of the products</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-links-warp">
                <div class="container">
                    <div class="social-links">
                        <a href="https://www.instagram.com/ahmedabnaby/" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                        <a href="" ></a>
                        <a href="" ></a>
                        <a href="" ></a>
                        <a href="" ></a>
                        <a href="" ></a>
                        <a href="" ></a>
                        <a href="" ></a>
                        <a href="" ></a>
                        <a href="https://www.facebook.com/ahmed.abnaby.97/" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                        
                    </div>
                </div>
    
            </div>
        </footer>
        <!-- Footer Section End -->
    
        
</body>
<!-- Js Plugins -->
<script src="{{ asset('violet/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('violet/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('violet/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('violet/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('violet/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('violet/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('violet/js/mixitup.min.js') }}"></script>
<script src="{{ asset('violet/js/main.js') }}"></script>
@yield('extrajs')
</html>
