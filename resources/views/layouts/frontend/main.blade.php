<!Doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon"
            href="{{ Vite::asset('resources/frontend/assets/img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        @vite(['resources/frontend/assets/css/bootstrap.min.css', 'resources/frontend/assets/css/animate.min.css', 'resources/frontend/assets/css/magnific-popup.css', 'resources/frontend/assets/css/fontawesome-all.min.css', 'resources/frontend/assets/css/odometer.min.css', 'resources/frontend/assets/css/nice-select.css', 'resources/frontend/assets/css/meanmenu.css', 'resources/frontend/assets/css/swiper-bundle.min.css', 'resources/frontend/assets/css/main.css']);

    </head>

    <body>
        @if (!Route::is('posts.create'))
        <!-- sidebar-information-area-start -->
        @include('layouts.frontend.includes.sidebar')
        <!-- sidebar-information-area-end -->
        @endif


        <!-- header area start -->
        @include('layouts.frontend.includes.header')
        <!-- header area end -->

        <main>
            @if (!Route::is('home'))
                <!-- breadcrumb area start -->
                <section class="breadcrumb-area bg-default"
                    data-background="{{ Vite::asset('resources/frontend/assets/img/breadcrumb/breadcrumb-bg.jpg') }}">
                    <img src="{{ Vite::asset('resources/frontend/assets/img/breadcrumb/shape-1.png') }}" alt=""
                        class="breadcrumb-shape">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="breadcrumb-content">
                                    <h2 class="breadcrumb-title">@yield('brd_crm_list')</h2>
                                    <div class="breadcrumb-list">
                                        <a href="{{ route('home') }}">Home</a>
                                        <span>@yield('brd_crm_list')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- breadcrumb area end -->
            @endif

            @yield('content')
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

</html>
