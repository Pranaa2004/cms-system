@extends('layouts.frontend.main')

@section('title', 'Contact')

<!-- breadcrumb area start -->
@section('brd_crm_list', 'About US')
<!-- breadcrumb area end -->
@section('content')
    <!-- about area start -->
    <section class="about-area pt-140 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img mb-50">
                        <img src="assets/img/about/1/1.png" alt="">
                        <div class="about-img-meta">
                            <span><i class="fa-solid fa-star"></i>4.5 (3.4k Reviews)</span>
                            <h5>Congratulations</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="about-content mb-50">
                        <div class="section-area mb-20">
                            <span class="section-subtitle">Start learning Free</span>
                            <h2 class="section-title mb-15">Online Course can be Tailored to Need of learners</h2>
                            <p class="section-text">
                                Through a combination of lectures, readings, discussions, students will gain a solid
                                foundation in educational psychology.
                            </p>
                        </div>
                        <div class="about-content-list">
                            <ul>
                                <li>International course collection in 14 languages</li>
                                <li>Top certifications in tech and business</li>
                                <li>Access to 35,000+ top Eduan courses, anytime, anywhere</li>
                            </ul>
                        </div>
                        <div class="about-content-button">
                            <a href="{{ route('about') }}" class="theme-btn about-btn theme-btn-medium">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- teacher area start -->
    <section class="h2_teacher-area pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-12 mb-30">
                    <div class="h2_teacher-section bg-default" data-background="assets/img/teacher/2/bg.jpg">
                        <div class="section-area-2">
                            <h2 class="section-title mb-30">Our Most <br> Experience
                                <span>Professor <img src="assets/img/banner/2/line.png" alt=""></span>
                            </h2>
                        </div>
                        <div class="h2_teacher-button">
                            <a href="#" class="theme-btn theme-btn-medium teacher-btn">Become An Instructor</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="h2_teacher-item mb-30">
                        <div class="h2_teacher-img">
                            <img src="assets/img/teacher/2/1.jpg" alt="">
                        </div>
                        <div class="h2_teacher-content">
                            <h5 class="h2_teacher-content-title">
                                <a href="#">Parsley Montana</a>
                            </h5>
                            <span>Lead Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="h2_teacher-item mb-30">
                        <div class="h2_teacher-img">
                            <img src="assets/img/teacher/2/2.jpg" alt="">
                        </div>
                        <div class="h2_teacher-content">
                            <h5 class="h2_teacher-content-title">
                                <a href="#">Parsley Montana</a>
                            </h5>
                            <span>Lead Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="h2_teacher-item mb-30">
                        <div class="h2_teacher-img">
                            <img src="assets/img/teacher/2/3.jpg" alt="">
                        </div>
                        <div class="h2_teacher-content">
                            <h5 class="h2_teacher-content-title">
                                <a href="#">Parsley Montana</a>
                            </h5>
                            <span>Lead Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="h2_teacher-item mb-30">
                        <div class="h2_teacher-img">
                            <img src="assets/img/teacher/2/4.jpg" alt="">
                        </div>
                        <div class="h2_teacher-content">
                            <h5 class="h2_teacher-content-title">
                                <a href="#">Parsley Montana</a>
                            </h5>
                            <span>Lead Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="h2_teacher-item mb-30">
                        <div class="h2_teacher-img">
                            <img src="assets/img/teacher/2/5.jpg" alt="">
                        </div>
                        <div class="h2_teacher-content">
                            <h5 class="h2_teacher-content-title">
                                <a href="#">Parsley Montana</a>
                            </h5>
                            <span>Lead Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="h2_teacher-item mb-30">
                        <div class="h2_teacher-img">
                            <img src="assets/img/teacher/2/6.jpg" alt="">
                        </div>
                        <div class="h2_teacher-content">
                            <h5 class="h2_teacher-content-title">
                                <a href="#">Parsley Montana</a>
                            </h5>
                            <span>Lead Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teacher area end -->

    <!-- blog area start -->
    <section class="h2_blog-area pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-area-2 mb-50 text-center h2_blog-section-area">
                        <h2 class="section-title mb-30">Our Latest
                            <span>Articles <img src="assets/img/banner/2/line.png" alt=""></span>
                        </h2>
                        <p class="section-text">
                            Through a combination of lectures, readings, discussions, students will gain a solid
                            foundation in educational psychology.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="h2_blog-item mb-30">
                        <div class="h2_blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/2/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="h2_blog-content">
                            <div class="h2_blog-content-meta">
                                <span><i class="fa-thin fa-user"></i>Admin</span>
                                <span><i class="fa-thin fa-clock"></i>June 23, 2023</span>
                            </div>
                            <h5 class="h2_blog-content-title"><a href="blog-details.html">Education Week News and
                                    Views on Education Policy and Practice.</a></h5>
                            <a href="#" class="theme-btn blog-btn t-theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="h2_blog-item mb-30">
                        <div class="h2_blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/2/blog-2.jpg" alt=""></a>
                        </div>
                        <div class="h2_blog-content">
                            <div class="h2_blog-content-meta">
                                <span><i class="fa-thin fa-user"></i>Admin</span>
                                <span><i class="fa-thin fa-clock"></i>June 23, 2023</span>
                            </div>
                            <h5 class="h2_blog-content-title"><a href="blog-details.html">The Learning Network
                                    Teaching and Learning With The New York Times.</a></h5>
                            <a href="#" class="theme-btn blog-btn t-theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="h2_blog-item mb-30">
                        <div class="h2_blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/2/blog-3.jpg" alt=""></a>
                        </div>
                        <div class="h2_blog-content">
                            <div class="h2_blog-content-meta">
                                <span><i class="fa-thin fa-user"></i>Admin</span>
                                <span><i class="fa-thin fa-clock"></i>June 23, 2023</span>
                            </div>
                            <h5 class="h2_blog-content-title"><a href="blog-details.html">Nothing is Impossible to
                                    Learn If you are Passionate About this Subject</a></h5>
                            <a href="#" class="theme-btn blog-btn t-theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

    <!-- cta area start -->
    <div class="cta-area">
        <div class="container">
            <div class="cta-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="cta-content mb-30 mb-lg-0">
                            <span class="cta-subtitle">Download App</span>
                            <h2 class="cta-title">Are you Ready to Start your
                                Online Course?</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="cta-button">
                            <a href="#" class="cta-btn"><i class="fa-brands fa-apple"></i>Apple Store</a>
                            <a href="#" class="cta-btn"><i class="fa-brands fa-google-play"></i>Play Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta area end -->

@endsection
