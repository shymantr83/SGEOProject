@include('../layout/header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link href="{{asset('frontend/css/external/all.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/external/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/external/slick.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/styleCO.CSS')}}" rel="stylesheet">
</head>
<body>
    <div class="contain">
        <h3>keep in touch with us </h3>
        <div class="social">
            <div class="content">
                <i class="fas fa-phone"></i>
                <span>phone</span>
                <div class="para">
                <p>0553021987</p>
            </div>
            </div>
                @if(isset($social_media->facebook))
            <div class="content">
                <i class=" fa-brands fa-facebook" ></i>
                <a href="{{$social_media->facebook}}"><span>facebook</span></a>
                <div class="para">
{{--                <p>Programmers</p>--}}
            </div>
            </div>
            @endif
            @if(isset($social_media->whatsapp))
        <div class="content">

            <i class=" fa-brands fa-whatsapp" ></i>
            <a href=" https://www.whatsapp.com/{{$social_media->whatsapp}}"><span>whatsApp</span></a>
            <div class="para">
{{--            <p>{{$social_media->whatsapp}}</p>--}}
        </div>
        </div>
            @endif

        <div class="content">
            <i class=" fa-solid fa-envelope" ></i>
            <a href="{{$company->email}}"><span>Email</span></a>
            <div class="para">
{{--            <p>{{$company->email}}</p>--}}
        </div>
        </div>

    @if(isset($social_media->linkedin))
        <div class="content">
            <i class=" fa-brands fa-linkedin" ></i>
            <a href="{{$social_media->linkedin}}"><span>linkedin</span></a>
            <div class="para">
{{--                <p>{{$social_media->linkedin}}</p>--}}
            </div>
        </div>
    @endif
        </div>
    </div>

</body>
@include('../layout/footer')
