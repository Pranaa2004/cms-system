@extends('layouts.frontend.main')

@section('title', 'Blog')

@section('brd_crm_list', 'Course Details')

@section('content')
    <!-- blog area start -->
    <section class="innerPage_blog-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="h2_blog-item mb-30">
                            <div class="h2_blog-img">
                                <a href="{{ route('blog-details') }}"><img src="{{ $post->mediaAsset->path }}"
                                        alt="n"></a>
                            </div>
                            <div class="h2_blog-content">
                                <div class="h2_blog-content-meta">
                                    <span><i class="fa-thin fa-user">{{ $post->user->name }}</i></span>
                                    <span><i class="fa-thin fa-clock"></i>{{ $post->published_at }}</span>
                                </div>
                                <h5 class="h2_blog-content-title"><a href="#">{{ $post->body }}</a></h5>
                                <a href="#" class="theme-btn blog-btn t-theme-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="pagination-area mt-20 mb-30">

                        <ul>
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li><a href="#"><i class="fa-light fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->
@endsection
