@include('../layout/header')
@include('../layout/slider')
    <!-- section -->
    <section class="projects" id="projects">
        <div class="content">
            <div class="project-card">
                <div class="project-img">
                    <img src="{{asset('frontend/img/Gallery_1702935318423.jpg')}}" alt="img">
                </div>
                <div class="project-infro">
                    <strong class="project-title">
                        <span>company1</span>
                    </strong>
                    <p class="project-category"></p>

                </div>
            </div>
            <div class="project-card">
                <div class="project-img">
                    <img src="{{asset('frontend/img/IMG-20231014-WA0030.jpg')}}" alt="img">
                </div>
                <div class="project-infro">
                    <strong class="project-title">
                        <span>company2</span>
                    </strong>
                    <p class="project-category"></p>

                </div>
            </div>
            <div class="project-card">
                <div class="project-img">
                    <img src="{{asset('frontend/img/IMG-20231014-WA0028.jpg')}}" alt="img">
                </div>
                <div class="project-infro">
                    <strong class="project-title">
                        <span>company3</span>
                    </strong>
                    <p class="project-category"> </p>

                </div>
            </div>
        </div>

    </section>
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

@include('../layout/footer1')

