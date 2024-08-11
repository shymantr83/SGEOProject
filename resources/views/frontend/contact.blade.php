@include('../layout/header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link href="{{asset('frontend/css/external/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/external/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/external/slick.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/styleCO.CSS')}}" rel="stylesheet">
    <style>
        .header {
            padding: 20px;
            margin-top: -95px;
        }
        .header .links {
            /*margin-top: 22px;*/
            /*margin-right: -8px;*/
            margin-top: -52px;
            margin-left: 1350px;
            margin-right: 172px;
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
    <div class="contact  ">
        <div class="container">
            <div class="contain">
                <h2 class="contact-title"> keep in touch with us </h2>
                <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram </p>

            <!-- </div> -->
            <div class="cont">
                <div class="content">
                    <i class="fa-brands fa-facebook"></i>
                <span> facebook</span>
                <p>666 5th Avekkkkll </p>
                </div>
            <div class="content">
                <i class="fas fa-phone"></i>
                <span> phone Number</span>
                <p>01027453760</p>
            </div>
            <div class="content">
                <i class="fa-solid fa-envelope" ></i>
                <span> Email address:</span>
                <p>shimaa666@gmail.com</p>
            </div>

        </div>
            </div>
        </div>





    <script src="{{asset('frontend/Js/external/jquery.slim.min.js')}}"></script>
    <script src="{{asset('frontend/Js/external/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('frontend/Js/external/slick.min.js')}}"></script>
    <script src="{{asset('frontend/Js/main.js')}}"></script>
    </div>
</body>
@include('../layout/footer')
