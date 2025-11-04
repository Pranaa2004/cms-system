@extends('layouts.frontend.main')

@section('title', 'Contact')

@section('content')

        <!-- breadcrumb area start -->
        @section('brd_crm_list','Gallery')
        <!-- breadcrumb area end -->

        <!-- gallery area start -->
        <section class="innerPage_gallery-area pt-110 pb-90">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-area-2">
                            <h2 class="section-title mb-50">Browse Our
                                <br> Exclusive <span>Gallery <img src="assets/img/banner/2/line.png" alt=""></span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="innerPage_gallery-tab mb-40">
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
                                        aria-controls="pills-profile" aria-selected="false">Courses</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Events</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-four-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-four" type="button" role="tab"
                                        aria-controls="pills-four" aria-selected="false">Students</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-five-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-five" type="button" role="tab"
                                        aria-controls="pills-five" aria-selected="false">Teachers</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="innerPage_gallery-wrap">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/1.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/1.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/2.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/2.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/3.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/3.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/4.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/4.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/5.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/5.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/6.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/6.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/7.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/7.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/8.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/8.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/9.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/9.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/1.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/1.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/2.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/2.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/3.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/3.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/4.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/4.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/5.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/5.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/6.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/6.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/7.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/7.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/8.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/8.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/9.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/9.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/1.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/1.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/2.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/2.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/3.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/3.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/4.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/4.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/5.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/5.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/6.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/6.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/7.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/7.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/8.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/8.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/9.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/9.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/1.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/1.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/2.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/2.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/3.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/3.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/4.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/4.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/5.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/5.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/6.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/6.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/7.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/7.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/8.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/8.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/9.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/9.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-five-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/1.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/1.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/2.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/2.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/3.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/3.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/4.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/4.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/5.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/5.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/6.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/6.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/7.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/7.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/8.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/8.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="innerPage_gallery-item mb-30">
                                        <div class="innerPage_gallery-img">
                                            <img src="assets/img/gallery/innerPage/9.jpg" alt="">
                                        </div>
                                        <div class="innerPage_gallery-content">
                                            <a href="assets/img/gallery/innerPage/9.jpg" class="popup-image"><i
                                                    class="fa-thin fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery area end -->


@endsection
