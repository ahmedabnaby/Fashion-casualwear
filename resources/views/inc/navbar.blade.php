    <!-- Header Section Begin -->
    <div style="background-color:#4d4d4d;"> 
        <header class="header-section">
            <div class="container-fluid">
                <div class="inner-header">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{ asset('violet/img/logo.png') }}" alt=""></a>
                       
                    </div>
                    <div class="header-right">
                        
                        <a href="{{route('orders')}}">
                            <img src="{{ asset('violet/img/icons/man.png') }}" alt="">
                        </a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="{{route('cart')}}">
                            <img src="{{ asset('violet/img/icons/bag.png') }}" alt="">
                            <span>
                                @auth
                                {{Cart::session(auth()->id())->getContent()->count()}}
                            @endauth
                            @guest
                                {{'0'}}
                            @endguest
                        </span>
                        </a>
                    </div>

                    @guest
                    <div class="user-access">
                        <a href="{{route('register')}}">Register</a>
                        <strong>/</strong>
                        <a href="{{route('login')}}">Sign in</a>
                    </div>
                    @endguest
                    
                    @auth
                    <div class="user-access">
                        <a href="{{route('logout')}}">Logout</a>
                    </div>
                    @endauth
                    
                        <nav class="main-menu mobile-menu">
                            <ul>
                                <li><a class="active" href="{{route('home')}}">Home</a></li>
                                @auth
                                
                                <li><a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('cart')}}">Shopping Cart</a></li>
                                        <li><a href="{{route('checkout')}}">Check out</a></li>
                                        <li><a href="{{route('orders')}}">My Orders</a></li>
                                    </ul>
                                </li>    
                                @endauth
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </nav>
                    
                </div>
                
            </div>
          
    <!-- Header End -->
        </header>
    </div>
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
    </div>
    