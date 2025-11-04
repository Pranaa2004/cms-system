@extends('layouts.backend.main')

@section('title', 'Teacher Details')

@section('content')
    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
            <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-title">Our Professor</h2>
                            <div class="breadcrumb-list">
                                <a href="index.html">Home</a>
                                <span>Our Professor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- teacher details area start -->
        <section class="teacher_details-area pt-120 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="teacher_details-img w_img mb-50">
                            <img src="assets/img/teacher/2/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="teacher_details-content mb-50">
                            <div class="teacher_details-admin">
                                <h4 class="teacher_details-title">Marvin McKinney</h4>
                                <span>Web Designer, Researcher</span>
                            </div>
                            <div class="teacher_details-rating">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span>(03 Reviews)</span>
                            </div>
                            <h5 class="teacher_details-title2">About Me</h5>
                            <p class="mb-20">Lorem ipsum dolor sit amet, consectetur elit sed do eius mod tempor incidid
                                labore dolore magna aliqua. enim ad minim eniam quis nostrud exercitation ullamco laboris
                                nisi aliquip ex commodo consequat. duis aute irure dolor in repreed ut perspiciatis unde
                                omnis iste natus error sit voluptat em acus antium.</p>
                            <p class="mb-30">doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore
                                veritatis et quasi arch itecto beatae vitae dicta sunt explicabo.</p>
                            <h5 class="teacher_details-title2">Contact Me</h5>
                            <div class="teacher_details-info">
                                <ul>
                                    <li><span>Address:</span>Hilton Conference Centre</li>
                                    <li><span>Email:</span><a href="mailto:Example@gmail.com">Example@gmail.com</a></li>
                                    <li><span>Phone:</span><a href="tel:+123548645850">+123 548 6458 50</a></li>
                                </ul>
                                <div class="teacher_details-social">
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- teacher details area end -->

        <!-- course area start -->
        <section class="course-area pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="course-section-area">
                            <div class="section-area section-area-top">
                                <h2 class="section-title mb-50">Our Featured Courses</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="h2_course-item mb-30">
                            <div class="h2_course-item-img">
                                <a href="course-details.html"><img src="assets/img/course/2/1.jpg" alt=""></a>
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
                                <h5 class="h2_course-content-title"><a href="course-details.html">Introduction to Psychology
                                        Subject</a></h5>
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
                                    <a href="course-details.html">More Details<i class="fa-light fa-arrow-right"></i><i
                                            class="fa-light fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="h2_course-item mb-30">
                            <div class="h2_course-item-img">
                                <a href="course-details.html"><img src="assets/img/course/2/2.jpg" alt=""></a>
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
                                <h5 class="h2_course-content-title"><a href="course-details.html">Complete Angular
                                        Developer in 2023</a></h5>
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
                                    <a href="course-details.html">More Details<i class="fa-light fa-arrow-right"></i><i
                                            class="fa-light fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="h2_course-item mb-30">
                            <div class="h2_course-item-img">
                                <a href="course-details.html"><img src="assets/img/course/2/3.jpg" alt=""></a>
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
                                <h5 class="h2_course-content-title"><a href="course-details.html">The Science of
                                        Well-being for Teens</a></h5>
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
                                    <a href="course-details.html">More Details<i class="fa-light fa-arrow-right"></i><i
                                            class="fa-light fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course area end -->


    </main>
@endsection
