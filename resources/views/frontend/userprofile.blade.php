<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user profile</title>
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
                <img src="{{asset('user_image/'.$user->image)}}">
            </div>
            <h2>{{$user->name}}</h2>
        </div>
        <div class="infro ">
{{--            <p>software engineering department is front end developer<i class="fa-solid fa-clipboard"></i></p>--}}
            <a href="https://{{$user->email}}" class="link1">{{$user->email}}<i class="fa-solid fa-envelope"></i></a><br>
            <a href="https://www.whatsapp.com/{{$user->phone}}"class="link2">{{$user->phone}}<i class="fa-brands fa-whatsapp ml-5 "></i></a><br>
            <h3 href="#"class="link3">{{$user->country}}<i class=""></i></h3><br>
{{--            <a href="#"class="link4"><i class="fa-brands fa-linkedin ml-5"></i></a>--}}
        </div>
    </section>

    <!-- projects -->









    <script src="{{asset('frontend/Js/external/jquery.slim.min.js')}}"></script>
    <script src="{{asset('frontend/Js/external/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('frontend/Js/external/slick.min.js')}}"></script>
    <script src="{{asset('frontend/Js/main.js')}}"></script>

</body>

</html>
