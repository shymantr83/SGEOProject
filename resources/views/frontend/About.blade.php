@include('../layout/header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="{{asset('frontend/css/external/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/external/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/external/slick.css')}}" rel="stylesheet">
{{--    <link href="{{asset('frontend/css/style1.css')}}" rel="stylesheet">--}}
    <link href="{{asset('frontend/css/page.css')}}" rel="stylesheet">
    <style>
        .header .links {
            margin-top: -22px;
            margin-left: 180px;
            margin-right: 10px;

        }
        .d-lg-block {
             display: block !important;
             margin-top: 40px;
         }
        .d-none {
            display: none !important;
            margin-left: -62px;
        }</style>
</head>
<body>


<section  class="container">
    <div class="about">
        <h3>About us</h3><br>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. ,Aliquid ad dolor facilis possimus?
            Iure, unde ullam! Id dolor,quae repellat mollitia quos autem. Sit,
            natus non voluptatem esse excepturi repellat  </p>
    </div>
</section>





<script src="{{asset('frontend/Js/external/jquery.slim.min.js')}}"></script>
<script src="{{asset('frontend/Js/external/bootstrap.bundle.js')}}"></script>
<script src="{{asset('frontend/Js/external/slick.min.js')}}"></script>
<script src="{{asset('frontend/Js/main.js')}}"></script>



@include('../layout/footer')
