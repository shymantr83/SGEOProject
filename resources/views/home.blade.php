

@extends('layouts.app')

@section('content')
    @include('../layout/header')
    @include('../layout/slider')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}
{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--  //start home--}}

<!-- section -->
    <div class="pppp">
            @foreach($companies as $company)
<section class="projects" id="projects">

    <div class="content">

        <div class="project-card">
            <div class="project-img">
                <a href="{{route('company_page',$company->id)}}"><img src='{{asset("company_image/".$company->logo)}}' alt="img"></a>
            </div>
            <div class="project-infro">
                <strong class="project-title">
                    <span>{{$company->name}}</span>
                </strong>
                <p class="project-category"></p>

            </div>
        </div>
    </div>
</section>
    @endforeach
    </div>
<!-- <section class="projects" id="projects">
<div class="contant">
    <div class="project-card">
        <div class="project-img">
            <img src="img/whyusimg.jpg" alt="img">
        </div>
        <div class="project-infro">
            <strong class="project-title">
                <span>company1</span>
            </strong>



        </div>
    </div>
</div>

</section> -->

@include('../layout/footer')

@endsection
