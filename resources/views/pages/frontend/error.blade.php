@extends('layouts.frontend.main')

@section('title', '404')

<!-- breadcrumb area start -->
@section('brd_crm_list', '404')
<!-- breadcrumb area end -->

@section('content')

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


@endsection
