@extends('layouts.app')

@section('extracss')
<style>
body{
    font-size: 18px;
	font-family: "Montserrat", sans-serif;
	font-weight: 700;
	height: 100%;
}
.primary-btn1 {
	color: #fff;
	display: inline-block;
	font-size: 14px;
	font-weight: 600;
	padding: 16px 40px;
	border: 2px solid #fff;
	border-radius: 50px;
}
</style>
@endsection

@section('content')
<div style="background: rgba(0, 0, 0, 0) url('{{asset('violet/img/red+shirts+on+shelf.jpg')}}') no-repeat scroll center center / cover ;">
<br>
<br>
<section class="page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2><span style="color:white;">Register</span><span>.</span></h2>
                    <a href="{{route('home')}}"><span style="color:white;">Home</span></a>
                    <a class="active" href="#"><span style="color:wheat;">Register</span></a>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="{{asset('violet/img/add.jpg')}}" alt="" width="80%" height="auto">
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color:transparent;color:white;">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror primary-btn1 pc-btn" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror primary-btn1 pc-btn" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror primary-btn1 pc-btn" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control primary-btn1 pc-btn" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn primary-btn pc-btn" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
</div>
@endsection
