<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <title>Home</title>
    <link href="{{asset('frontend/css/external/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/external/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/external/slick.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/home.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/page.css')}}" rel="stylesheet">
    <style>

    </style>
    <!-- Modernizer js -->
{{--    <script src="{{asset('frontend2/js/vendor/modernizr-3.5.0.min.js')}}"></script>--}}

</head>
<body>
    <div class="header">
        <div class="row">
            <div class="content">
                <i class="fas fa-search"></i>
                <img src="{{asset('frontend/img/logo.png')}}" class="foot" alt="">
        <div class="col-lg-8 d-none d-lg-block">
            <nav class="mainmenu__nav">
                <ul class="meninmenu d-flex justify-content-start">
                    <li class="drop with--one--item"><a href="{{route('home')}}">{{ __("words.Home") }}</a></li>
                    @if(Auth::user()) <li class="drop with--one--item"><a href="{{route('frontend.about')}}">{{ __("words.About") }} </a></li>@endif
                    @if(!Auth::user()) <li class="drop with--one--item"><a href="{{route('frontend.about_compant',$company->id)}}">{{ __("words.About") }} </a></li>@endif

                    <li class="drop active">{{ __("words.specialisation") }}
                        <div class="megamenu dropdown">
                            <ul class="item item01">
                                @foreach ($specializations as $specialisation)

                                <li><a href="{{route('specialization_links',$specialisation->id)}}">{{$specialisation->name}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </li>
                    @if(Auth::user()) <li class="drop"><a href="{{route('frontend.contact')}}">{{ __("words.Contact") }}</a></li>@endif
                    @if(!Auth::user()) <li class="drop"><a href="{{route('frontend.contact_company',$company->id)}}">{{ __("words.Contact") }}</a></li>@endif
                    <li class="drop with--one--item active">{{ __("words.language") }}
                        <ul id="submenu">
                            <li><a href="">Arabic</a></li>
                            <li><a href="">English</a></li>
                        </ul>
                    </li>
,
                    @if(Auth::user()) <li class="profile drop"><a href="{{route('user_profile')}}"><i class="	fas fa-user-alt"></i>{{__("words.Profile")}}</a></li>@endif
                    @if(!Auth::user()) <li class="profile drop"><a href="{{route('companyprofile',$company->id)}}"><i class="	fas fa-user-alt"></i>{{__("words.Profile")}}</a></li>@endif

                </ul>
            </nav>
        </div>

                <!-- Right Side Of Navbar -->
                                    <ul class="navbar-nav ms-auto">
                                        <!-- Authentication Links -->
                                        @guest
{{--                                            @if (Route::has('login'))--}}
{{--                                                <li class="nav-item">--}}
{{--                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                                </li>--}}
{{--                                            @endif--}}

{{--                                            @if (Route::has('register'))--}}
{{--                                                <li class="nav-item">--}}
{{--                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                                </li>--}}
{{--                                            @endif--}}
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    @if( Auth::user()->name )
                                                        {{ Auth::user()->name }}
{{--                                                        @elseif($company->name)--}}
{{--                                                            {{$company->name}}--}}

                                                    @endif
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('words.logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
        <ul>

            <div class="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>
                    @if(!Auth::user())
                    <li>
                        <a href="{{ route('Company_logout') }}">
                            {{ __("words.login") }}logout</a>
                    </li>@endif
                    {{-- <li><a href="#"><i class="fa fa-home"></i>Home</a></li> --}}

                    {{-- <li><a href="#about"><i class="fa fa-exclamation-triangle"></i>About</a></li> --}}
                    {{-- <li><a href="#"><i class="fa-solid fa-list"></i></a></li> --}}

                    {{-- <li><a href="#contact"><i class="fas fa-message"></i></a></li> --}}
                </ul>
            </div>
        </ul>
            </div>
        </div>
    </div>

