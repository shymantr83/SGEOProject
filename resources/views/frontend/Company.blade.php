@include('../layout/header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <link href="{{asset('frontend/css/external/all.css')}}"rel="stylesheet">
    <link href="{{asset('frontend/css/external/bootstrap.css')}}"rel="stylesheet">
    <link href="{{asset('frontend/css/external/slick.css')}}"rel="stylesheet">
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
    <STYLE>
        .row p{
            margin-right: 91px;
            margin-left: 364px;

        }
    </STYLE>
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

       <!-- projects -->

    <section class="projects" id="projects">
        <h2 class="title">projects</h2>
        @foreach($projects as $project)
        <div class="content">
            <div class="project-card">
                <div class="project-img">
                    <img src="{{asset('project_image/'.$project->image1)}}" alt="img">
                </div>
                <div class="project-infro">
                    <strong class="project-title">
                        <span>{{$project->name}}</span>
                    </strong>
                    <p class="project-category">{{$project->description}}</p>

                </div>
            </div>
            @endforeach
        </div>


    </section>
    <a href="{{route('company_contact',$company->id)}}" class="main-btn">contact us</a>

    <script src="{{asset('frontend/Js/external/jquery.slim.min.js')}}"></script>
    <script src="{{asset('frontend/Js/external/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('frontend/Js/external/slick.min.js')}}"></script>
    <script src="{{asset('frontend/Js/main.js')}}"></script>

</body>
@include('../layout/footer')
