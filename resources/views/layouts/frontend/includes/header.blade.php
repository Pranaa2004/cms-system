<header>
    <div class="h2_header-area header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-sm-7 col-6">
                    <div class="h2_header-left">
                        <div class="h2_header-logo">
                            <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/frontend/assets/img/logo/logo.png') }}" alt=""></a>
                        </div>
                        <div class="h2_header-category d-none d-sm-block">
                            <a href="#"><i class="fa-solid fa-grid"></i><span>Category</span></a>
                            <ul class="h2_header-category-submenu">
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Data Science</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-none d-xl-block">
                    <div class="h2_header-middle">
                        <nav class="h2_main-menu mobile-menu" id="mobile-menu">
                            <ul>
                                <li >
                                    <a href="{{ route('home') }}">Home</a>

                                </li>
                                {{-- <li class="menu-has-child">
                                    <a href="course.html">Courses</a>
                                    <ul class="submenu">
                                        <li><a href="course.html">Courses 1</a></li>
                                        <li><a href="course-2.html">Courses 2</a></li>
                                        <li><a href="course-details.html">Course Details</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="{{ route('about') }}">About</a></li>
                                {{-- <li class="menu-has-child">
                                    <a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('teacher') }}">Teacher</a></li>
                                        <li><a href="{{ route('teacher-details') }}">Teacher Details</a></li>
                                        <li><a href="{{ route('events') }}">Events</a></li>
                                        <li><a href="{{ route('event-details') }}">Event Details</a></li>
                                        <li><a href="{{ route('price') }}">Price</a></li>
                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                {{-- <li class="menu-has-child">
                                    <a href="{{  }}">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('blog') }}">Blog</a></li>
                                        <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="{{ route('contact-us') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-5 col-6">
                    <div class="h2_header-right">
                        <div class="h2_header-btn d-none d-sm-block">
                            <a href="{{ route('login_show') }}" class="header-btn theme-btn theme-btn-medium">Sign In</a>
                        </div>
                        <div class="header-menu-bar d-xl-none ml-10">
                            <span class="header-menu-bar-icon side-toggle">
                                <i class="fa-light fa-bars"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
