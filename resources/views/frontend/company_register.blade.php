<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company sign up </title>
    <link href="{{asset('frontend/css/external/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/external/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/external/slick.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style1.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style2.css')}}" rel="stylesheet">

<body>

    <div class="container">
        <div class="form-box">
{{--            <img src="{{asset('frontend/img/IMG-20231218-WA0022.jpg')}}">--}}
            <h1>Sign Up as Company</h1>
            <form action="{{route('company_register')}}" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-address-book"></i>
                        <input type="text" placeholder="Company Name"name="name">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-layer-group"></i>
                        <input type="text" placeholder="specialization" name="specialization">
                    </div>
                    <div class="input-field">
                        <i class="fa-regular fa-image"></i>
                        <input type="file" placeholder="Add logo" name="logo">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-star"></i>
                        <input type="text" placeholder="Company Overview"name="overview">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-star"></i>
                        <input type="text" placeholder="Company Overview" name="location">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email address" name="email">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="password" name="password">
                    </div>
{{--                    <div class="input-field">--}}
{{--                        <i class="fa-solid fa-link"></i>--}}
{{--                        <input type="text" placeholder="Social networking links">--}}
{{--                    </div>--}}
                </div>
                <div class="btn-field">
                    <button class="butt1" type="submit" >sign up</button>
                </div><br>
                <p >Already have an account? </p>
                <a href="{{route('company_loginPage')}}" class="log">log in</a>
            </form>

        </div>
    </div>
    <!-- <div class="container">
    <div class="dialog" id="dialog">
        <h2> Sign Up as</h2>
        <div class="but">
            <button type="button"onclick="closedialog()">User</button>
            <button type="button"onclick="closedialog()">Company</button>
        </div>

    </div>
     -->



    <script src="{{asset('frontend/Js/external/jquery.slim.min.js')}}')}}"></script>
    <script src="{{asset('frontend/Js/external/bootstrap.bundle.js')}}')}}"></script>
    <script src="{{asset('frontend/Js/external/slick.min.js')}}')}}"></script>
    <script src="{{asset('frontend/Js/main.js')}}')}}"></script>
</body>

</html>
