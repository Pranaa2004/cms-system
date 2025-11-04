@extends('layouts.frontend.main')

@section('title', 'Event Details')

@section('content')

        <!-- breadcrumb area start -->
        @section('brd_crm_list','Events Details')
        <!-- breadcrumb area end -->

        <!-- event details area start -->
        <section class="event_details-area pt-120 pb-60">
            <div class="container">
                <div class="event_details-img">
                    <img src="assets/img/event/details/1.jpg" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="event_details-wrap mb-55">
                            <div class="event_details-content">
                                <h3 class="event_details-content-title">These are Designed to Provide Hands Training and
                                    Skill-Building.</h3>
                                <p class="mb-25">Curabitur tempus tincidunt tellus ac placerat. Nullam non libero nisi.
                                    Fusce congue est eget nisl tristique ornare. Vestibulum id massa felis. Nullam vehicula
                                    bibendum nulla eu vulputate. Aenean fringilla tortor ut laoreet congue magna, a viverra
                                    turpis consectetur porta.</p>
                                <p class="mb-45">Curabitur tempus tincidunt tellus ac placerat. Nullam non libero nisi.
                                    Fusce congue est eget nisl tristique ornare. Vestibulum id massa felis. Nullam vehicula
                                    bibendum nulla eu vulputate. Aenean fringilla tortor ut laoreet congue magna, a viverra
                                    turpis consectetur porta.</p>
                            </div>
                            <div class="event_details-inner-img">
                                <img src="assets/img/event/details/2.jpg" alt="">
                                <img src="assets/img/event/details/3.jpg" alt="">
                            </div>
                            <div class="event_details-content">
                                <h3 class="event_details-content-title">The Whole Child Fostering Social and Emotional
                                    Development.</h3>
                                <div class="event_details-content-list">
                                    <ul>
                                        <li>Etyma protium et olio gravida cur abitur est dui viverrid non mi egret</li>
                                        <li>Dictum Bibendum sapiens internum malasada fames ac ante ipsum primes</li>
                                        <li>Fauci bus cur abitur pulvinar rut rum masa sed so dales sapiens utricles</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="event_details-sidebar mb-60">
                            <div class="event_details-sidebar-content mb-40">
                                <h4 class="event_details-sidebar-content-title">Buy Ticket</h4>
                                <ul>
                                    <li>
                                        <span>Total Slots</span>
                                        <span>354</span>
                                    </li>
                                    <li>
                                        <span>Booked Slots</span>
                                        <span>03</span>
                                    </li>
                                    <li>
                                        <span>Cost</span>
                                        <span>Free</span>
                                    </li>
                                    <li>
                                        <span>Quantity</span>
                                        <span>1</span>
                                    </li>
                                </ul>
                                <div class="event_details-sidebar-btn">
                                    <a href="#" class="theme-btn theme-btn-big theme-btn-full">Buy Ticket</a>
                                </div>
                            </div>
                            <div class="event_details-sidebar-map">
                                <h4 class="event_details-sidebar-content-title">Map</h4>
                                <div class="inner-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d147120.012062842!2d13.706000467398074!3d51.075159941942076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1senveto!5e0!3m2!1sen!2sbd!4v1680961754336!5m2!1sen!2sbd"
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- event details area end -->



@endsection
