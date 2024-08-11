<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dialog_login</title>
    <link href="{{asset('frontend/css/external/all.min.css')}}"rel="stylesheet">
    <link href="{{asset('frontend/css/external/bootstrap.css')}}"rel="stylesheet">
    <link href="{{asset('frontend/css/external/slick.css')}}"rel="stylesheet">
    <link href="{{asset('frontend/css/page.css')}}" rel="stylesheet">
</head>
<body>
<div class="counter">
    <div class="dialog">
        <h2> Sign Up as</h2>
        <a class="but">
            <button type="button"  > <a href="{{ route('login') }}" >{{__("words.user")}}</a> </button>
            <button type="button"><a href="{{route('company_loginPage')}}"> {{__("words.company")}}</a></button>
        </a>
        </div>

    </div>
<script src="{{asset('frontend/Js/external/jquery.slim.min.js')}}"></script>
    <script src="{{asset('frontend/Js/external/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('frontend/Js/external/slick.min.js')}}"></script>
    <script src="{{asset('frontend/Js/main.js')}}"></script>
</body>
</html>
