@extends('layouts.frontend.main')

@section('title', 'Price')

@section('content')
    <main>
        <!-- breadcrumb area start -->
        @section('brd_crm_list','Pricing')
        <!-- breadcrumb area end -->

        <!-- price area start -->
        <section class="innerPage_price-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="h2_price-item mb-30">
                            <div class="h2_price-item-title">
                                <h5>Standard</h5>
                            </div>
                            <div class="h2_price-amount">
                                <del>$24.00</del>
                                <div class="h2_price-amount-info">
                                    <h2>$22</h2>
                                    <p>
                                        <span>Per</span>
                                        <span>Month</span>
                                    </p>
                                </div>
                            </div>
                            <div class="h2_price-middle-info">
                                <p class="h2_price-middle-info-1">Discounted Price For USA</p>
                                <p class="h2_price-middle-info-2">Per User, billed annually</p>
                            </div>
                            <div class="h2_price-button">
                                <a href="#">Enroll Now</a>
                            </div>
                            <div class="h3_price-content">
                                <div class="h2_price-content-top"><a href="#">Choose 2 - year plan</a><span>Save
                                        6%</span></div>
                                <div class="h2_price-content-list">
                                    <ul>
                                        <li>Facilizes sed odic morbid quiz.</li>
                                        <li>Design nexus et malasadas fames brand.</li>
                                        <li>Artistic mind will be great for creation.</li>
                                        <li>Roadmap for business agency arborator.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="h2_price-item mb-30">
                            <div class="h2_price-popular-tag">
                                <span>Most Popular</span>
                            </div>
                            <div class="h2_price-item-title">
                                <h5>Professional</h5>
                            </div>
                            <div class="h2_price-amount">
                                <del>$36.00</del>
                                <div class="h2_price-amount-info">
                                    <h2>$28</h2>
                                    <p>
                                        <span>Per</span>
                                        <span>Month</span>
                                    </p>
                                </div>
                            </div>
                            <div class="h2_price-middle-info">
                                <p class="h2_price-middle-info-1">Discounted Price For USA</p>
                                <p class="h2_price-middle-info-2">Per User, billed annually</p>
                            </div>
                            <div class="h2_price-button">
                                <a href="#">Enroll Now</a>
                            </div>
                            <div class="h3_price-content">
                                <div class="h2_price-content-top"><a href="#">Choose 2 - year plan</a><span>Save
                                        24%</span></div>
                                <div class="h2_price-content-list">
                                    <ul>
                                        <li>Facilizes sed odic morbid quiz.</li>
                                        <li>Design nexus et malasadas fames brand.</li>
                                        <li>Artistic mind will be great for creation.</li>
                                        <li>Roadmap for business agency arborator.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="h2_price-item mb-30">
                            <div class="h2_price-item-title">
                                <h5>Business</h5>
                            </div>
                            <div class="h2_price-amount">
                                <del>$74.00</del>
                                <div class="h2_price-amount-info">
                                    <h2>$56</h2>
                                    <p>
                                        <span>Per</span>
                                        <span>Month</span>
                                    </p>
                                </div>
                            </div>
                            <div class="h2_price-middle-info">
                                <p class="h2_price-middle-info-1">Discounted Price For USA</p>
                                <p class="h2_price-middle-info-2">Per User, billed annually</p>
                            </div>
                            <div class="h2_price-button">
                                <a href="#">Enroll Now</a>
                            </div>
                            <div class="h2_price-content">
                                <div class="h2_price-content-top"><a href="#">Choose 2 - year plan</a><span>Save
                                        12%</span></div>
                                <div class="h2_price-content-list">
                                    <ul>
                                        <li>Facilizes sed odic morbid quiz.</li>
                                        <li>Design nexus et malasadas fames brand.</li>
                                        <li>Artistic mind will be great for creation.</li>
                                        <li>Roadmap for business agency arborator.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- price area end -->

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
