{{-- <!Doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>404</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon"
            href="{{ Vite::asset('resources/frontend/assets/img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        @vite(['resources/frontend/assets/css/bootstrap.min.css', 'resources/frontend/assets/css/animate.min.css', 'resources/frontend/assets/css/magnific-popup.css', 'resources/frontend/assets/css/fontawesome-all.min.css', 'resources/frontend/assets/css/odometer.min.css', 'resources/frontend/assets/css/nice-select.css', 'resources/frontend/assets/css/meanmenu.css', 'resources/frontend/assets/css/swiper-bundle.min.css', 'resources/frontend/assets/css/main.css']);

    </head>

    <body>
        <!-- header area start -->
        @include('layouts.frontend.includes.header')
        <!-- header area end -->

        <main>
            <!-- error area start -->
            <div class="error-area pt-110 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="error-content-img w_img">
                                <img src="{{ Vite::asset('resources/frontend/assets/img/404/404.png') }}"
                                    alt="404">
                            </div>
                            <div class="error-content text-center mb-85">
                                <h2>Sorry, Page Not Found!</h2>
                                <a href="{{ route('home') }}" class="theme-btn theme-btn-big">Go To Homepage</a>
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
                                    <a href="#" class="cta-btn"><i class="fa-brands fa-google-play"></i>Play
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cta area end -->
        </main>
        <!-- footer area start -->
        @include('layouts.frontend.includes.footer')
        <!-- footer area end -->

        <!-- JS here -->
        @include('layouts.frontend.includes.script')
    </body>

</html> --}}

@extends('layouts.frontend.main')

@section('title', 'Page not found . CMS System')

@section('content')
    <!-- 404 Start -->
    <div class="container-fluid py-5">
        <div class="container py-5 text-center">
            <ol class="breadcrumb justify-content-center mb-5">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-dark">404</li>
            </ol>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-secondary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to
                        our home page or try to use a search?</p>
                    <a class="btn link-hover border border-primary rounded-pill py-3 px-5" href="index.html">Go Back To
                        Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
@endsection
