<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <link href="{{asset('frontend/css/external/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/external/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/external/slick.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/styleCO.CSS')}}" rel="stylesheet">

</head>

<body>
    <!-- company home -->

    <section class="containers">
        <div class="row">
            <div class="imge">
                <img src="{{asset('company_image/'.$company->logo)}}">
            </div>
            <h2>{{$company->name}}</h2>
            <p> {{$company->overview}}
            </p>
        </div>
    </section>

        <div class="social">
            <div class="content">
                <i class="fas fa-phone"></i>
                <span>phone</span>
                <div class="para">

                </div>
            </div>
            <div class="content">
                <i class=" fa-brands fa-facebook"></i>
                <a href="https://facebook.com{{$social->facebook}}"><span>facebook</span></a>
            </div>

            <div class="content">
                <i class=" fa-brands fa-whatsapp"></i>
                <a href="https://whatsapp.com{{$social->whatsapp}}"><span>whatsApp</span></a>

            </div>
            <div class="content">
                <i class=" fa-solid fa-envelope"></i>
                <a href="{{$social->email}}"><span>Email</span></a>

            </div>
    </div>
    <script src="{{asset('frontend/Js/external/jquery.slim.min.js')}}"></script>
    <script src="{{asset('frontend/Js/external/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('frontend/Js/external/slick.min.js')}}"></script>
    <script src="{{asset('frontend/Js/main.js')}}"></script>

</body>

</html>
