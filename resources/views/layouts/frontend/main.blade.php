<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="shortcut icon" type="image/x-icon" href="">

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Croppie  -->

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@100;600;800&display=swap"
            rel="stylesheet">


        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        @vite(['resources/frontend/lib/animate/animate.min.css', 'resources/frontend/lib/owlcarousel/assets/owl.carousel.min.css', 'resources/frontend/css/bootstrap.min.css', 'resources/frontend/css/style.css'])

        @stack('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/{version}/croppie.min.css">

    </head>

    <body>
        {{-- @if (!Route::is('posts.create')) --}}
            <!-- sidebar-information-area-start -->
            {{-- @include('layouts.frontend.includes.sidebar') --}}
            <!-- sidebar-information-area-end -->
        {{-- @endif --}}


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

        </main>
        <!-- footer area start -->
        @include('layouts.frontend.includes.footer')
        <!-- footer area end -->

        <!-- JS here -->
        @include('layouts.frontend.includes.script')

        @stack('script')
    </body>

</html>
