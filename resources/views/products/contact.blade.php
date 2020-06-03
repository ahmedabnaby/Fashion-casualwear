@extends('layouts.app')
@section('content')
<br>
<div style="background-color:white;"> 
    <br>
    <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Contact us<span>.</span></h2>
                        <a href="{{route('home')}}">Home</a>
                        <a class="active" href="#">contact</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="{{asset('violet/img/add.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>

<div class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form action="#" class="contact-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="col-lg-12">
                            <input type="email" placeholder="E-mail">
                            <input type="text" placeholder="Subject">
                            <textarea placeholder="Message"></textarea>
                        </div>
                        <div class="col-lg-12 text-right">
                            <button type="submit">Send message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="contact-widget">
                    <div class="cw-item">
                        <h5>Location</h5>
                        <ul>
                            <li>Egypt </li>
                            <li>New Cairo</li>
                        </ul>
                    </div>
                    <div class="cw-item">
                        <h5>Phone</h5>
                        <ul>
                            <li>+2 01147428374</li>
                        </ul>
                    </div>
                    <div class="cw-item">
                        <h5>E-mail</h5>
                        <ul>
                            <li>ahmedabnaby.97@gmail.com</li>
                            <li>ahmedabnaby@stud.cu.edu.eg</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br>
@endsection