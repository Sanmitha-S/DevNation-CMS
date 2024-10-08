@extends('layouts.app')

@section('content')
<section class="wrapper bg-gray">
    @include('layouts.inlcudes.nav')
    <div class="container pt-12 pt-md-16 text-center">
        <div class="row">
            <div class="col-lg-8 col-xxl-7 mx-auto text-center" data-cues="slideInDown" data-group="page-title"
                data-delay="600">
                <h2 class="fs-16 text-uppercase ls-xl text-dark mb-4" data-cue="slideInDown" data-group="page-title"
                    data-delay="600" data-show="true"
                    style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
                    Welcome to AJIET Community!</h2>
                <h1 class="display-1 text-xs mb-7" data-cue="slideInDown" data-group="page-title" data-delay="600"
                    data-show="true"
                    style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    A collaborative community of tech enthusiasts guiding young students into open-source through training and skill development.</h1>
                <div class="d-flex justify-content-center mb-5 mb-md-0" data-cues="slideInDown"
                    data-group="page-title-buttons" data-delay="900" data-cue="slideInDown" data-disabled="true"
                    data-show="true"
                    style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true"
                        style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;"><a
                            href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore
                            Now</a></span>
                    <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true"
                        style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;"><a
                            href="{{ route('contact') }}" class="btn btn-lg btn-outline-primary rounded-pill">Contact
                            Us</a></span>
                </div>
                <!-- <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
      <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span> -->
            </div>
        </div>
        <!--/column -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
    <figure class="position-absoute" style="bottom: 0; left: 0;"><img src="assets/img/photos/bg11.jpg"
            alt="" /></figure>
</section>
<!-- /section -->
<section class="wrapper bg-gray">
    <div class="container">
        <div class="card shadow-none my-n13 my-md-n15 my-lg-n17">
            <div class="card-body py-12 py-lg-14 px-lg-11 py-xl-16 px-xl-13">
                <div class="row text-center">
                    <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">What We Do?</h2>
                        <h3 class="display-4 mb-9">AJIET DevNation focuses on mutual learning and improvement through workshops and training led by industry speakers and student experts. Stay updated with the latest technologies while attending and even hosting non-profit events to help others.</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row gx-md-8 gx-xl-12 gy-8 mb-14 mb-md-16 text-center">
                    <div class="col-md-4">
                        <div class="icon btn btn-block btn-lg btn-soft-purple pe-none mb-5"> <i
                                class="uil uil-phone-volume"></i> </div>
                        <h4>24/7 Support</h4>
                        <p class="mb-3"> 
                        We provide round-the-clock support to help you navigate your learning journey. Our dedicated team is here to assist you with any questions or challenges you may face, ensuring you have the resources and guidance you need to succeed.</p>
                        <a href="#" class="more hover link-purple">Learn More</a>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <div class="icon btn btn-block btn-lg btn-soft-green pe-none mb-5"> <i
                                class="uil uil-shield-exclamation"></i> </div>
                        <h4>Secure Payments</h4>
                        <p class="mb-3">  
                        We ensure secure payments for all workshop speakers and related activities. Your transactions are protected, allowing you to focus on learning and collaboration without worry. Trust us to handle payments smoothly and efficiently.</p>
                        <a href="#" class="more hover link-green">Learn More</a>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <div class="icon btn btn-block btn-lg btn-soft-orange pe-none mb-5"> <i
                                class="uil uil-laptop-cloud"></i> </div>
                        <h4>Daily Updates</h4>
                        <p class="mb-3">
                        AJIET DevNation Offers daily updates on upcoming workshops, events, and tech trends. Stay connected and seize every opportunity to enhance your skills.</p>
                        <a href="#" class="more hover link-orange">Learn More</a>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-6">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Our Strategy</h2>
                        <h3 class="display-4 mb-5"> We organize our events through three key steps.</h3>
                        <p>Our Strategy
                        Planning with clear objectives, effective execution via collaboration on workshops and events, and continuous evaluation to enhance future initiatives. This strategic approach ensures impactful experiences that foster learning and community growth.</p>
                        <p class="mb-6"></p>
                        <a href="#" class="btn btn-primary rounded-pill mb-0">Learn More</a>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-block btn-lg btn-soft-purple pe-none mt-1 me-5"><span
                                        class="number fs-22">01</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Collect Ideas</h4>
                                <p class="mb-0">
                                Gather innovative ideas from our community through brainstorming sessions and surveys. Encourage participation from students and industry professionals to ensure diverse perspectives that align with current tech trends.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-8 ms-lg-10">
                            <div>
                                <span class="icon btn btn-block btn-lg btn-soft-green pe-none mt-1 me-5"><span
                                        class="number fs-22">02</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Evaluate Insights</h4>
                                <p class="mb-0"> 
                                Evaluate the collected ideas by analyzing feedback and market trends. Identify the most promising concepts and assess their feasibility to ensure that our workshops and events are relevant and impactful.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-8">
                            <div>
                                <span class="icon btn btn-block btn-lg btn-soft-orange pe-none mt-1 me-5"><span
                                        class="number fs-22">03</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Launch Initiatives</h4>
                                <p class="mb-0">
                                Develop a comprehensive plan for the selected workshops and events, including topics, speakers, and schedules. Ensure all logistics are in place for a smooth execution, creating an engaging and educational experience for participants.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <hr class="my-14 my-md-16" />
                <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-11 align-items-end">
                    <div class="col-lg-4">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Company Facts</h2>
                        <h3 class="display-4 mb-0">We are proud of our works</h3>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-8 mt-lg-2">
                        <div class="row align-items-center counter-wrapper gy-6 text-center">
                            <div class="col-md-4">
                                <h3 class="counter counter-lg" style="visibility: visible;">1000+</h3>
                                <p>Completed Projects</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-4">
                                <h3 class="counter counter-lg" style="visibility: visible;">500+</h3>
                                <p>Happy Clients</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-4">
                                <h3 class="counter counter-lg" style="visibility: visible;">150+</h3>
                                <p>Awards Won</p>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="card bg-gray shadow-lg mb-14 mb-md-17">
                    <div class="row gx-0">
                        <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                            data-image-src="./assets/img/photos/tm1.jpg"
                            style="background-image: url(&quot;./assets/img/photos/tm1.jpg&quot;);">
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <div class="p-10 p-xl-13">
                                <div class="swiper-container dots-closer mb-6 swiper-container-0" data-margin="30"
                                    data-dots="true">
                                    <div
                                        class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                        <div class="swiper-wrapper" id="swiper-wrapper-bdaa3b99a5eb97cf"
                                            aria-live="off"
                                            style="cursor: grab; transform: translate3d(0px, 0px, 0px);">
                                            <div class="swiper-slide swiper-slide-active" role="group"
                                                aria-label="1 / 3" style="width: 510px; margin-right: 30px;">
                                                <blockquote class="icon icon-top fs-lg text-center">
                                                    <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                                        dolor auctor. Vestibulum ligula porta felis euismod semper.”
                                                    </p>
                                                    <div
                                                        class="blockquote-details justify-content-center text-center">
                                                        <div class="info ps-0">
                                                            <h5 class="mb-1">Coriss Ambady</h5>
                                                            <p class="mb-0">Financial Analyst</p>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!--/.swiper-slide -->
                                            <div class="swiper-slide swiper-slide-next" role="group"
                                                aria-label="2 / 3" style="width: 510px; margin-right: 30px;">
                                                <blockquote class="icon icon-top fs-lg text-center">
                                                    <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                                        dolor auctor. Vestibulum ligula porta felis euismod semper.”
                                                    </p>
                                                    <div
                                                        class="blockquote-details justify-content-center text-center">
                                                        <div class="info ps-0">
                                                            <h5 class="mb-1">Cory Zamora</h5>
                                                            <p class="mb-0">Marketing Specialist</p>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!--/.swiper-slide -->
                                            <div class="swiper-slide" role="group" aria-label="3 / 3"
                                                style="width: 510px; margin-right: 30px;">
                                                <blockquote class="icon icon-top fs-lg text-center">
                                                    <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                                        dolor auctor. Vestibulum ligula porta felis euismod semper.”
                                                    </p>
                                                    <div
                                                        class="blockquote-details justify-content-center text-center">
                                                        <div class="info ps-0">
                                                            <h5 class="mb-1">Nikolas Brooten</h5>
                                                            <p class="mb-0">Sales Manager</p>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!--/.swiper-slide -->
                                        </div>
                                        <!--/.swiper-wrapper -->
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    <!-- /.swiper -->
                                    <div class="swiper-controls">
                                        <div
                                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active"
                                                tabindex="0" role="button" aria-label="Go to slide 1"
                                                aria-current="true"></span><span class="swiper-pagination-bullet"
                                                tabindex="0" role="button"
                                                aria-label="Go to slide 2"></span><span
                                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                                aria-label="Go to slide 3"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.swiper-container -->
                            </div>
                            <!--/div -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.card -->
                <div class="row text-center">
                    <div class="col-lg-10 col-xl-10 col-xxl-8 mx-auto">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Case Studies</h2>
                        <h3 class="display-4 mb-9">Check out some of our awesome projects with creative ideas and
                            great design.</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="swiper-container blog grid-view mb-18 swiper-container-1" data-margin="30"
                    data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-20ba4710794d10de2e" aria-live="off"
                            style="cursor: grab; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms; transition-delay: 0ms;">
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4"
                                style="width: 290px; margin-right: 30px;">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#">
                                            <img src="./assets/img/photos/b4.jpg" alt=""><span
                                                class="bg"></span></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-header">
                                        <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                href="./blog-post.html">Ligula tristique quis risus</a></h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                    2022</span></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-file-alt fs-15"></i>Coding</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4"
                                style="width: 290px; margin-right: 30px;">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#">
                                            <img src="./assets/img/photos/b5.jpg" alt=""><span
                                                class="bg"></span></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-header">
                                        <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                href="./blog-post.html">Nullam id dolor elit id nibh</a></h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar
                                                    2022</span></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-file-alt fs-15"></i>Workspace</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide" role="group" aria-label="3 / 4"
                                style="width: 290px; margin-right: 30px;">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#">
                                            <img src="./assets/img/photos/b6.jpg" alt=""><span
                                                class="bg"></span></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-header">
                                        <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb
                                                    2022</span></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-file-alt fs-15"></i>Meeting</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide" role="group" aria-label="4 / 4"
                                style="width: 290px; margin-right: 30px;">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#">
                                            <img src="./assets/img/photos/b7.jpg" alt=""><span
                                                class="bg"></span></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-header">
                                        <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                href="./blog-post.html">Morbi leo risus porta eget</a></h2>
                                    </div>
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7
                                                    Jan 2022</span></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-file-alt fs-15"></i>Business Tips</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <!-- /.swiper -->
                    <div class="swiper-controls">
                        <div
                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 1" aria-current="true"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 3"></span>
                        </div>
                    </div>
                </div>
                <!-- /.swiper-container -->
                <hr class="my-14 my-md-16" />
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                    <div class="col-md-8 col-lg-6 order-lg-2">
                        <figure class="rounded"><img src="assets/img/photos/about24.jpg"
                                srcset="./assets/img/photos/about24@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Our Team</h2>
                        <h3 class="display-4 mb-5">Maximize your potential by partnering with the skilled team at DevNation.</h3>
                        <p class="mb-6">We are a passionate and dedicated team of tech enthusiasts committed to fostering innovation and collaboration in the developer community. Our mission is to empower developers through hands-on workshops, engaging tech events, and insightful discussions that inspire creativity and growth.</p>
                        <div class="row gy-3 gx-xl-8">
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Our team of industry professionals conducts hands-on workshops and provide practical skills.</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>We cover diverse topics, including software development and other skills .</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>We foster an inclusive space for networking and idea-sharing among all developers.</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>We host tech events that foster creativity, collaboration, and the sharing of new ideas.</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="row gy-10 gx-lg-8 gx-xl-12 mb-14 mb-md-16 align-items-center">
                    <div class="col-md-8 col-lg-6">
                        <figure class="rounded"><img src="assets/img/photos/about25.jpg"
                                srcset="./assets/img/photos/about25@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Why Choose Us?</h2>
                        <h3 class="display-4 mb-7">A few reasons why our valued participants choose DevNation.</h3>
                        <div class="accordion accordion-wrapper" id="accordionExample">
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingOne">
                                    <button class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne"> Diverse Learning Opportunities </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>DevNation offers a wide range of tech-related events, workshops, and webinars, catering to various interests and skill levels.

</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingTwo">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo"> Hands-On Experience </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Participants gain practical skills through interactive sessions led by industry experts, enhancing their knowledge and confidence in real-world applications.
                                        </p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingThree">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree"> Networking and Community </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>The platform fosters a vibrant community, allowing learners to connect with peers and professionals, share ideas, and collaborate on projects.</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                        </div>
                        <!--/.accordion -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map"
                    data-image-src="./assets/img/map.png"
                    style="background-image: url(&quot;./assets/img/map.png&quot;);">
                    <div class="container py-md-16 py-lg-18">
                        <div class="row">
                            <div class="col-xl-11 col-xxl-9 mx-auto">
                                <h3 class="display-4 mb-8 px-lg-8">We are trusted by over 5000+ clients. Join them
                                    now and grow your business.</h3>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                        <div class="d-flex justify-content-center">
                            <span><a class="btn btn-primary rounded-pill">Get Started</a></span>
                        </div>
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.wrapper -->
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
</div>
<!-- /.content-wrapper -->
@endsection