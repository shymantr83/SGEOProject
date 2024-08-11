@extends('layouts.app')
@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in </title>
    <link href="{{asset('frontend/css/external/all.min.css')}}"rel="stylesheet">
    <link href="{{asset('frontend/css/external/bootstrap.css')}}"rel="stylesheet">
    <link href="{{asset('frontend/css/external/slick.css')}}"rel="stylesheet">
    <link href="{{asset('frontend/css/style1.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style2.css')}}" rel="stylesheet">
<div class="container">
    <div class="form-box">
        <img src="{{asset('frontend/img/IMG-20231218-WA0022.jpg')}}">
        <h1>log in</h1>
        <form  method="POST" action={{route('company_login')}}>
            @csrf
            <div class="input-group">
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email address" name="email">
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="password" name="password">
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            <a href="#">forget password?</a>
            </div>
            <div class="btn-field">
                <button class="butt2" onclick="opendialog()"><a href="{{route('company_registerPage')}}">sign up</a></button>
            </div>
        </form>
    </div>
</div>
    <script src="{{asset('frontend/Js/external/jquery.slim.min.js')}}"></script>
    <script src="{{asset('frontend/Js/external/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('frontend/Js/external/slick.min.js')}}"></script>
    <script src="{{asset('frontend/Js/main.js')}}"></script>
@endsection
