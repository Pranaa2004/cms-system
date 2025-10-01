<!Doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        @vite([
            'resources/frontend/assets/css/bootstrap.min.css',
            'resources/frontend/assets/css/animate.min.css',
            'resources/frontend/assets/css/magnific-popup.css',
            'resources/frontend/assets/css/fontawesome-all.min.css',
            'resources/frontend/assets/css/odometer.min.css',
            'resources/frontend/assets/css/nice-select.css',
            'resources/frontend/assets/css/meanmenu.css',
            'resources/frontend/assets/css/swiper-bundle.min.css',
            'resources/frontend/assets/css/main.css',
        ])
        
    </head>

    <body>
       <!-- sidebar-information-area-start -->
        <div class="sidebar-info side-info">
            <div class="sidebar-logo-wrapper mb-25">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-8">
                        <div class="sidebar-logo">
                            <a href="index.html"><img src="assets/img/logo/logo-blue-light.png" alt="logo-img"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-4">
                        <div class="sidebar-close-wrapper text-end">
                            <button class="sidebar-close side-info-close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu-wrapper fix">
                <div class="mobile-menu"></div>
            </div>
        </div>
        <div class="offcanvas-overlay"></div>
        <!-- sidebar-information-area-end -->

        <!-- header area start -->
        @include('layouts.frontend.includes.header')
        <!-- header area end -->


        @yield('content')

        <!-- footer area start -->
        @include('layouts.frontend.includes.footer')
        <!-- footer area end -->

		<!-- JS here -->
        @include('layouts.frontend.includes.script')

    </body>
</html>
