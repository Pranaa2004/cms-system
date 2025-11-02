@extends('layouts.frontend.main')

@section('title', 'School University & Online Education Template | Eduan - eLearning Education')

@section('content')

        <!-- banner area start -->
        <section class="h2_banner-area">
            <div class="h2_single-banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="h2_banner-content">
                                <div class="section-area-2 mb-45 ">
                                    <h1 class="section-title">World's Best Online
                                        Platform <span>Eduan. <img src="{{ Vite::asset('resources/frontend/assets/img/banner/2/line.png') }}" alt=""></span>
                                    </h1>
                                    <p class="section-text">Through a combination of lectures, readings, and discussions,
                                        students will gain a solid foundation in educational psychology.</p>
                                </div>
                                <form action="#" class="h2_banner-form">
                                    <input type="text" placeholder="Search Course">
                                    <button type="submit"><i class="fa-thin fa-magnifying-glass"></i></button>
                                </form>
                                <span class="h2_banner-content-text">Have any questions ? <a href="#">Get Free
                                        Example</a></span>
                                <div class="h2_banner-tutor">
                                    <div class="h2_banner-tutor-img">
                                        <div class="h2_banner-inner-img">
                                            <img src="{{ Vite::asset('resources/frontend/assets/img/banner/2/tutor-1.png') }}" alt="">
                                        </div>
                                        <div class="h2_banner-inner-img">
                                            <img src="{{ Vite::asset('resources/frontend/assets/img/banner/2/tutor-2.png') }}" alt="">
                                        </div>
                                        <div class="h2_banner-inner-img">
                                            <img src="{{ Vite::asset('resources/frontend/assets/img/banner/2/tutor-3.png') }}" alt="">
                                        </div>
                                        <div class="h2_banner-inner-img">
                                            <img src="{{ Vite::asset('resources/frontend/assets/img/banner/2/tutor-4.png') }}" alt="">
                                            <span>2k+</span>
                                        </div>
                                    </div>
                                    <div class="h2_banner-tutor-text">
                                        <span>More Than</span>
                                        <span>2k+ Tutors</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 d-none d-lg-block">
                            <div class="h2_banner-right pl-80">
                                <div class="h2_banner-img">
                                    <img src="{{ Vite::asset('resources/frontend/assets/img/banner/2/banner-bg.png') }}" alt="">
                                </div>
                                <div class="h2_banner-right-shape">
                                    <img class="h2_banner-shape-1" src="{{ Vite::asset('resources/frontend/assets/img/banner/2/shape_1.png') }}" alt="">
                                    <div class="inner-shpae-1">
                                        <img class="h2_banner-shape-2" src="{{ Vite::asset('resources/frontend/assets/img/banner/2/shape_2.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="h2_banner-meta">
                                    <div class="h2_banner-meta-info">
                                        <span>Popular Course</span>
                                        <h5>Start Learning Today!!</h5>
                                    </div>
                                    <div class="h2_banner-meta-rating">
                                        <span><i class="fa-solid fa-star"></i>4.5 (3.4k Reviews)</span>
                                        <h5>Congratulations</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->

        <!-- counter area start -->
        <div class="counter-area pt-120 pb-110">
            <div class="container">
                <div class="counter-wrap">
                    <div class="row g-0">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <i class="fa-thin fa-globe"></i>
                                </div>
                                <div class="counter-info">
                                    <h3 class="counter-info-title">
                                        <span class="odometer count_one" data-count="34">00</span>
                                        <span>k</span>
                                    </h3>
                                    <span class="counter-info-text">Foreign Followers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <i class="fa-thin fa-book-open"></i>
                                </div>
                                <div class="counter-info">
                                    <h3 class="counter-info-title">
                                        <span class="odometer count_one" data-count="12">00</span>
                                        <span>k</span>
                                    </h3>
                                    <span class="counter-info-text">Classes complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <i class="fa-thin fa-user-group"></i>
                                </div>
                                <div class="counter-info">
                                    <h3 class="counter-info-title">
                                        <span class="odometer count_one" data-count="214">00</span>
                                        <span>k</span>
                                    </h3>
                                    <span class="counter-info-text">Students Enrolled</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <i class="fa-thin fa-medal"></i>
                                </div>
                                <div class="counter-info">
                                    <h3 class="counter-info-title">
                                        <span class="odometer count_one" data-count="56">00</span>
                                        <span>k</span>
                                    </h3>
                                    <span class="counter-info-text">Certified teachers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter area end -->

        <!-- category area start -->
        <section class="h2_category-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-area-2 small-section-area-2 text-center">
                            <h2 class="section-title mb-50">Explore <span>Categories <img src="{{ Vite::asset('resources/frontend/assets/img/banner/2/line.png') }}"
                                        alt=""></span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="h2_category-item mb-30">
                            <div class="h2_category-img">
                                <img src="{{ Vite::asset('resources/frontend/assets/img/category/2/1.jpg') }}" alt="">
                            </div>
                            <div class="h2_category-content">
                                <h5><a href="course.html">Digital Marketing</a></h5>
                                <p>26 Items</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="h2_category-item mb-30">
                            <div class="h2_category-img">
                                <img src="{{ Vite::asset('resources/frontend/assets/img/category/2/2.jpg') }}" alt="">
                            </div>
                            <div class="h2_category-content">
                                <h5><a href="course.html">Graphic Design</a></h5>
                                <p>26 Items</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="h2_category-item mb-30">
                            <div class="h2_category-img">
                                <img src="{{ Vite::asset('resources/frontend/assets/img/category/2/3.jpg') }}" alt="">
                            </div>
                            <div class="h2_category-content">
                                <h5><a href="course.html">Writing & Reading</a></h5>
                                <p>26 Items</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="h2_category-item mb-30">
                            <div class="h2_category-img">
                                <img src="{{ Vite::asset('resources/frontend/assets/img/category/2/4.jpg') }}" alt="">
                            </div>
                            <div class="h2_category-content">
                                <h5><a href="course.html">IT & Software</a></h5>
                                <p>26 Items</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="h2_category-item mb-30">
                            <div class="h2_category-img">
                                <img src="{{ Vite::asset('resources/frontend/assets/img/category/2/5.jpg') }}" alt="">
                            </div>
                            <div class="h2_category-content">
                                <h5><a href="course.html">Mobile Application</a></h5>
                                <p>26 Items</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="h2_category-item mb-30">
                            <div class="h2_category-img">
                                <img src="{{ Vite::asset('resources/frontend/assets/img/category/2/6.jpg') }}" alt="">
                            </div>
                            <div class="h2_category-content">
                                <h5><a href="course.html">Art & Humanities</a></h5>
                                <p>26 Items</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="h2_category-item mb-30">
                            <div class="h2_category-img">
                                <img src="{{ Vite::asset('resources/frontend/assets/img/category/2/7.jpg') }}" alt="">
                            </div>
                            <div class="h2_category-content">
                                <h5><a href="course.html">Web Design</a></h5>
                                <p>26 Items</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="h2_category-item mb-30">
                            <div class="h2_category-img">
                                <img src="{{ Vite::asset('resources/frontend/assets/img/category/2/8.jpg') }}" alt="">
                            </div>
                            <div class="h2_category-content">
                                <h5><a href="course.html">UX/UI Design</a></h5>
                                <p>26 Items</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category area end -->

        <!-- course area start -->
        <section class="h2_course-area pt-110 pb-120">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-area-2">
                            <h2 class="section-title mb-50">Browse Our <br> Exclusive <span>Courses <img
                                        src="{{ Vite::asset('resources/frontend/assets/img/banner/2/line.png') }}" alt=""></span></h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="h2_course-tab mb-40">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">See All
                                        <span>New</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Web Design</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Marketing</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-four-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-four" type="button" role="tab"
                                        aria-controls="pills-four" aria-selected="false">Lifestyle</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-five-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-five" type="button" role="tab"
                                        aria-controls="pills-five" aria-selected="false">Graphic Design</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="h2_course-wrap">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Introduction
                                                    to Psychology Subject</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>23 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>45 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-1.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Eric Wid get</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$140</del>$96.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Complete
                                                    Angular Developer in 2023</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>54 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>72 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-2.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Hanson Deck</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$120</del>$70.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">The Science
                                                    of Well-being for Teens</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>67 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>24 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-3.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Max Conversion</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$150</del>$99.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">AWS Machine
                                                    Learning Engineer</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>57 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>98 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-4.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Ravi O'Leigh</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$159</del>$98.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/5.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Introduction
                                                    User Experience Design</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>58 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>50 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-5.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Valentino Morose</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$135</del>$69.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Spoken
                                                    English for Career Develop</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>35 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>24 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-6.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Dylan Meringue</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$230</del>$173</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Introduction
                                                    to Psychology Subject</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>23 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>45 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-1.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Eric Wid get</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$140</del>$96.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Complete
                                                    Angular Developer in 2023</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>54 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>72 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-2.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Hanson Deck</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$120</del>$70.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">The Science
                                                    of Well-being for Teens</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>67 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>24 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-3.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Max Conversion</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$150</del>$99.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">AWS Machine
                                                    Learning Engineer</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>57 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>98 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-4.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Ravi O'Leigh</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$159</del>$98.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/5.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Introduction
                                                    User Experience Design</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>58 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>50 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-5.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Valentino Morose</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$135</del>$69.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Spoken
                                                    English for Career Develop</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>35 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>24 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-6.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Dylan Meringue</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$230</del>$173</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Introduction
                                                    to Psychology Subject</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>23 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>45 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-1.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Eric Wid get</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$140</del>$96.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Complete
                                                    Angular Developer in 2023</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>54 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>72 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-2.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Hanson Deck</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$120</del>$70.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">The Science
                                                    of Well-being for Teens</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>67 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>24 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-3.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Max Conversion</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$150</del>$99.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">AWS Machine
                                                    Learning Engineer</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>57 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>98 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-4.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Ravi O'Leigh</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$159</del>$98.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/5.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Introduction
                                                    User Experience Design</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>58 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>50 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-5.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Valentino Morose</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$135</del>$69.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Spoken
                                                    English for Career Develop</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>35 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>24 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-6.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Dylan Meringue</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$230</del>$173</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Introduction
                                                    to Psychology Subject</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>23 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>45 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-1.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Eric Wid get</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$140</del>$96.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Complete
                                                    Angular Developer in 2023</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>54 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>72 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-2.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Hanson Deck</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$120</del>$70.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">The Science
                                                    of Well-being for Teens</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>67 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>24 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-3.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Max Conversion</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$150</del>$99.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">AWS Machine
                                                    Learning Engineer</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>57 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>98 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-4.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Ravi O'Leigh</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$159</del>$98.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/5.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a
                                                    href="course-details.html">Introduction User Experience Design</a>
                                            </h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>58 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>50 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-5.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Valentino Morose</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$135</del>$69.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Spoken
                                                    English for Career Develop</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>35 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>24 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-6.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Dylan Meringue</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$230</del>$173</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-five-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a
                                                    href="course-details.html">Introduction to Psychology Subject</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>23 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>45 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-1.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Eric Wid get</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$140</del>$96.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Complete
                                                    Angular Developer in 2023</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>54 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>72 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-2.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Hanson Deck</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$120</del>$70.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">The
                                                    Science of Well-being for Teens</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>67 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>24 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-3.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Max Conversion</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$150</del>$99.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">AWS
                                                    Machine Learning Engineer</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>57 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>98 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-4.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Ravi O'Leigh</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$159</del>$98.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/5.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a
                                                    href="course-details.html">Introduction User Experience Design</a>
                                            </h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>58 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>50 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-5.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Valentino Morose</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$135</del>$69.00</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="h2_course-item mb-30">
                                        <div class="h2_course-item-img">
                                            <a href="course-details.html"><img src="assets/img/course/2/6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_course-content">
                                            <div class="h2_course-content-top">
                                                <div class="h2_course-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(03 Reviews)</span>
                                                </div>
                                                <div class="h2_course-save">
                                                    <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="h2_course-content-title"><a href="course-details.html">Spoken
                                                    English for Career Develop</a></h5>
                                            <div class="h2_course-content-info">
                                                <span><i class="fa-thin fa-book-blank"></i>35 Lessons</span>
                                                <span><i class="fa-thin fa-user-group"></i>24 Students</span>
                                            </div>
                                            <p class="h2_course-content-text">
                                                Through a combination of lectures, readings and discussions students.
                                            </p>
                                            <div class="h2_course-content-author">
                                                <div class="h2_course-author-img">
                                                    <img src="assets/img/course/2/author-6.jpg" alt="">
                                                </div>
                                                <div class="h2_course-author-info">
                                                    <span>By <a href="#">Dylan Meringue</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h2_course-content-bottom">
                                            <div class="h2_course-bottom-price">
                                                <span><del>$230</del>$173</span>
                                            </div>
                                            <div class="h2_course-bottom-btn">
                                                <a href="course-details.html">More Details<i
                                                        class="fa-light fa-arrow-right"></i><i
                                                        class="fa-light fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course area end -->

        <!-- about area start -->
        <section class="h2_about-area pt-120 pb-70">
            <img src="assets/img/about/2/shape-5.png" alt="" class="h2_about-top-shape">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="h2_about-img mb-50">
                            <div class="h2_about-inner-img">
                                <img src="assets/img/about/2/1.jpg" alt="" class="h2_inner-img">
                                <img src="assets/img/about/2/shape-4.png" alt="" class="h2_inner-img-shape">
                            </div>
                            <div class="h2_about-inner-img2">
                                <img src="assets/img/about/2/2.jpg" alt="">
                                <div class="h2_about-img-button"><a href="https://www.youtube.com/watch?v=dMlASgogxo4"
                                        class="popup-video"><i class="fa-solid fa-play"></i></a></div>
                            </div>
                            <div class="h2_about-rating d-none d-sm-block">
                                <span><i class="fa-solid fa-star"></i>4.5 (3.4k Reviews)</span>
                                <h5>Congratulations</h5>
                            </div>
                            <div class="h2_about-img-shape d-none d-sm-block">
                                <img class="h2_about-shape-1" src="assets/img/about/2/shape-1.png" alt="">
                                <img class="h2_about-shape-2" src="assets/img/about/2/shape-2.png" alt="">
                                <img class="h2_about-shape-3" src="assets/img/about/2/shape-3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-10 mb-50">
                        <div class="section-area-2 mb-35">
                            <h2 class="section-title mb-20">Education Instructors Play Crucial Role in Shaping The Lives
                                of Their <span>Students <img src="assets/img/banner/2/line.png" alt=""></span>
                            </h2>
                            <p class="section-text">
                                Maecenas Felis Tellus, dictum sed fermentum vel, various condiment dolour. Donec aliquot,
                                denim ut auctor molestee, era elite pharetra masa, at impediment eros qualm sed libero. Sed
                                arco lorem, rut rum.
                            </p>
                        </div>
                        <div class="h2_about-button">
                            <a href="#" class="theme-btn theme-btn-medium">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->

        <!-- cta 2 area start -->
        <div class="h2_cta-area">
            <div class="container">
                <div class="h2_cta-wrap bg-default pt-70 pb-80" data-background="assets/img/cta/2/1.jpg">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="h2_cta-content">
                                <div class="section-area-2 small-section-area-2 text-center">
                                    <h2 class="section-title mb-30">Are You Ready To Start <br>
                                        Your <span>Course? <img src="assets/img/banner/2/line.png"
                                                alt=""></span></h2>
                                </div>
                                <form action="#" class="h2_cta-content-form">
                                    <input type="email" placeholder="Search course">
                                    <button type="submit">Start Learning Today</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta 2 area end -->

        <!-- price area start -->
        <section class="h2_price-area pt-110 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="section-area-2 mb-50 text-center">
                            <h2 class="section-title mb-30">Examining the Costs and
                                Benefits of
                                <span>Education <img src="assets/img/banner/2/line.png" alt=""></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="h2_price-item mb-30">
                            <div class="h2_price-item-title">
                                <h5>Standard</h5>
                            </div>
                            <div class="h2_price-amount">
                                <del>$24.00</del>
                                <div class="h2_price-amount-info">
                                    <h2>$22</h2>
                                    <p>
                                        <span>Per</span>
                                        <span>Month</span>
                                    </p>
                                </div>
                            </div>
                            <div class="h2_price-middle-info">
                                <p class="h2_price-middle-info-1">Discounted Price For USA</p>
                                <p class="h2_price-middle-info-2">Per User, billed annually</p>
                            </div>
                            <div class="h2_price-button">
                                <a href="#">Enroll Now</a>
                            </div>
                            <div class="h3_price-content">
                                <div class="h2_price-content-top"><a href="#">Choose 2 - year plan</a><span>Save
                                        6%</span></div>
                                <div class="h2_price-content-list">
                                    <ul>
                                        <li>Facilizes sed odic morbid quiz.</li>
                                        <li>Design nexus et malasadas fames brand.</li>
                                        <li>Artistic mind will be great for creation.</li>
                                        <li>Roadmap for business agency arborator.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="h2_price-item mb-30">
                            <div class="h2_price-popular-tag">
                                <span>Most Popular</span>
                            </div>
                            <div class="h2_price-item-title">
                                <h5>Professional</h5>
                            </div>
                            <div class="h2_price-amount">
                                <del>$36.00</del>
                                <div class="h2_price-amount-info">
                                    <h2>$28</h2>
                                    <p>
                                        <span>Per</span>
                                        <span>Month</span>
                                    </p>
                                </div>
                            </div>
                            <div class="h2_price-middle-info">
                                <p class="h2_price-middle-info-1">Discounted Price For USA</p>
                                <p class="h2_price-middle-info-2">Per User, billed annually</p>
                            </div>
                            <div class="h2_price-button">
                                <a href="#">Enroll Now</a>
                            </div>
                            <div class="h3_price-content">
                                <div class="h2_price-content-top"><a href="#">Choose 2 - year plan</a><span>Save
                                        24%</span></div>
                                <div class="h2_price-content-list">
                                    <ul>
                                        <li>Facilizes sed odic morbid quiz.</li>
                                        <li>Design nexus et malasadas fames brand.</li>
                                        <li>Artistic mind will be great for creation.</li>
                                        <li>Roadmap for business agency arborator.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="h2_price-item mb-30">
                            <div class="h2_price-item-title">
                                <h5>Business</h5>
                            </div>
                            <div class="h2_price-amount">
                                <del>$74.00</del>
                                <div class="h2_price-amount-info">
                                    <h2>$56</h2>
                                    <p>
                                        <span>Per</span>
                                        <span>Month</span>
                                    </p>
                                </div>
                            </div>
                            <div class="h2_price-middle-info">
                                <p class="h2_price-middle-info-1">Discounted Price For USA</p>
                                <p class="h2_price-middle-info-2">Per User, billed annually</p>
                            </div>
                            <div class="h2_price-button">
                                <a href="#">Enroll Now</a>
                            </div>
                            <div class="h2_price-content">
                                <div class="h2_price-content-top"><a href="#">Choose 2 - year plan</a><span>Save
                                        12%</span></div>
                                <div class="h2_price-content-list">
                                    <ul>
                                        <li>Facilizes sed odic morbid quiz.</li>
                                        <li>Design nexus et malasadas fames brand.</li>
                                        <li>Artistic mind will be great for creation.</li>
                                        <li>Roadmap for business agency arborator.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- price area end -->

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
                                <a href="#" class="theme-btn theme-btn-medium teacher-btn">Become An
                                    Instructor</a>
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
                                <a href="blog-details.html"><img src="assets/img/blog/2/blog-1.jpg"
                                        alt=""></a>
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
                                <a href="blog-details.html"><img src="assets/img/blog/2/blog-2.jpg"
                                        alt=""></a>
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
                                <a href="blog-details.html"><img src="assets/img/blog/2/blog-3.jpg"
                                        alt=""></a>
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
                                <a href="#" class="cta-btn"><i class="fa-brands fa-google-play"></i>Play
                                    Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta area end -->

@endsection
