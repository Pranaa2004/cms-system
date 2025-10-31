@extends('layouts.frontend.main')

@section('title', '404')

@section('content')
    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
            <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-title">404</h2>
                            <div class="breadcrumb-list">
                                <a href="index.html">Home</a>
                                <span>404</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- error area start -->
        <div class="error-area pt-110 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="error-content text-center mb-85">
                            <h2>Sorry, Page Not Found!</h2>
                            <a href="index.html" class="theme-btn theme-btn-big">Go To Homepage</a>
                        </div>
                        <div class="error-content-img w_img">
                            <img src="assets/img/404/404.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- error area end -->

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
    </main>
@endsection
