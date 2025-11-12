@extends('layouts.frontend.main')

@section('title', 'Blog-Details')

@section('brd_crm_list', 'Blog Details')

@section('content')
    <!-- blog details area start -->
    <section class="blog_details-area pt-120 pb-80">
        <div class="container">
            <div class="blog_details-img">
                <img src="{{ asset('storage/' . $post->mediaAsset->path) }}" alt="">
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog_details-wrap mb-60">
                        <div class="blog_details-top mb-50">
                            <h3 class="blog_details-title">{{ $post->title }}
                            </h3>
                            <div class="blog_details-meta">
                                <div class="blog_details-author">
                                    <div class="blog_details-author-img">
                                        <img src="assets/img/blog/details/author-1.jpg" alt="">
                                    </div>
                                    <div class="blog_details-author-info">
                                        <span>$post->user->name</span>
                                        <h5><a href="team.html">Dylan Meringue</a></h5>
                                    </div>
                                </div>
                                <div class="blog_details-category">
                                    <span>Categories</span>
                                    <h5><a href="#">Online Teaching</a></h5>
                                </div>
                                <div class="blog_details-rating">
                                    <span>Review</span>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog_details-content">
                            <div class="blog_details-inner-text mr-80">
                                <p class="mb-25">{{ $post->body }}</p>

                            </div>
                            <blockquote class="blog_details-quote">
                                <p>My experience of distance learning has been exciting and enlightening! I have got toknow
                                    people from various countries and continents.</p>
                                <h6>Dylan Meringue</h6>
                                <span class="blog_details-quote-icon">
                                    <i class="fa-solid fa-quote-right"></i>
                                </span>
                            </blockquote>
                            <div class="blog_details-highlight">
                                <div class="blog_details-highlight-img">
                                    <img src="assets/img/blog/details/2.jpg" alt="">
                                </div>
                                <div class="blog_details-highlight-text">
                                    <h3>Education Week News and View on Education Policy and Practice.</h3>
                                </div>
                            </div>
                            <div class="blog_details-inner-text">
                                <p class="mb-40">Curabitur tempus tincidunt tellus ac placerat. Nullam non lib ero nisi.
                                    Fusce congue est eget nisl tristique ornare. Vestibulum id massa felis. Nullam vehicula
                                    bibendum nulla eu vulputate. Aenean fringilla tortor ut laoreet congue magna, a viverra
                                    turpis consectetur porta.</p>
                            </div>
                            <div class="blog_details-content-meta">
                                <div class="blog_details-content-tag">
                                    <h6>Tags :</h6>
                                    <ul>
                                        <li><a href="#">Education</a></li>
                                        <li><a href="#">Branding</a></li>
                                        <li><a href="#">JavaScript</a></li>
                                    </ul>
                                </div>
                                <div class="blog_details-content-social">
                                    <h6>Social Network :</h6>
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog_details-bottom mb-50">
                            <div class="blog_details-bottom-item">
                                <span><i class="fa-thin fa-angle-left"></i></span>
                                <h5><a href="#">How to Brand Yourself and Your Business</a></h5>
                            </div>
                            <div class="blog_details-bottom-item inner-item-2 text-end">
                                <h5><a href="#">Only One thing Impossible For God Find Sense</a></h5>
                                <span><i class="fa-light fa-angle-right"></i></span>
                            </div>
                        </div>
                        <div class="blog_details-related mb-45">
                            <h3 class="blog_details-related-title">Related Blogs</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="h2_blog-item mb-30">
                                        <div class="h2_blog-img">
                                            <a href="blog-details.html"><img src="assets/img/blog/2/blog-1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_blog-content">
                                            <div class="h2_blog-content-meta">
                                                <span><i class="fa-thin fa-user"></i>Admin</span>
                                                <span><i class="fa-thin fa-clock"></i>June 23, 2023</span>
                                            </div>
                                            <h5 class="h2_blog-content-title"><a href="blog-details.html">Education Week
                                                    News and View on Education Policy and Practice.</a></h5>
                                            <a href="#" class="theme-btn blog-btn t-theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="h2_blog-item mb-30">
                                        <div class="h2_blog-img">
                                            <a href="blog-details.html"><img src="assets/img/blog/2/blog-2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="h2_blog-content">
                                            <div class="h2_blog-content-meta">
                                                <span><i class="fa-thin fa-user"></i>Admin</span>
                                                <span><i class="fa-thin fa-clock"></i>June 23, 2023</span>
                                            </div>
                                            <h5 class="h2_blog-content-title"><a href="blog-details.html">The Learning
                                                    Network Teaching and Learning With The New York.</a></h5>
                                            <a href="#" class="theme-btn blog-btn t-theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog_details-comment pb-40">
                            <h4 class="blog_details-comment-title">3 Comments:</h4>
                            <div class="blog_details-comment-item">
                                <div class="blog_details-comment-img">
                                    <img src="assets/img/blog/details/author-2.jpg" alt="">
                                </div>
                                <div class="blog_details-comment-content">
                                    <h6>Russell Sprout</h6>
                                    <span>march 29,2023 at 10:47 pm</span>
                                    <p>There are many variations passages of lorem qoree available, but the majority have
                                        content marketing suffered alteration in some form.</p>
                                    <a href="#" class="comment-reply">Reply</a>
                                </div>
                            </div>
                            <div class="blog_details-comment-item ml-80">
                                <div class="blog_details-comment-img">
                                    <img src="assets/img/blog/details/author-3.jpg" alt="">
                                </div>
                                <div class="blog_details-comment-content">
                                    <h6>Brian Cumin</h6>
                                    <span>march 29,2023 at 10:47 pm</span>
                                    <p>There are many variations passages of lorem qoree available, but the majority have
                                        content marketing suffered alteration in some form.</p>
                                    <a href="#" class="comment-reply">Reply</a>
                                </div>
                            </div>
                            <div class="blog_details-comment-item ml-80">
                                <div class="blog_details-comment-img">
                                    <img src="assets/img/blog/details/author-4.jpg" alt="">
                                </div>
                                <div class="blog_details-comment-content">
                                    <h6>Parsley Montana</h6>
                                    <span>march 29,2023 at 10:47 pm</span>
                                    <p>There are many variations passages of lorem qoree available, but the majority have
                                        content marketing suffered alteration in some form.</p>
                                    <a href="#" class="comment-reply">Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_details-message">
                            <h3 class="blog_details-message-title">Send Me Message</h3>
                            <form action="#" class="blog_details-form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="blog_details-form-input mb-30">
                                            <input type="text" placeholder="Your Name">
                                            <span class="inner-icon"><i class="fa-thin fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="blog_details-form-input mb-30">
                                            <input type="email" placeholder="Email Address">
                                            <span class="inner-icon"><i class="fa-thin fa-envelope"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="blog_details-form-input mb-30">
                                            <input type="text" placeholder="Your Number">
                                            <span class="inner-icon"><i class="fa-thin fa-phone-volume"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="blog_details-form-input blog_details-form-input-select">
                                            <span class="inner-icon"><i class="fa-thin fa-circle-exclamation"></i></span>
                                            <select name="select" class="blog_details-form-list has-nice-select mb-30">
                                                <option value="1">Select Subject</option>
                                                <option value="2">Art & Design</option>
                                                <option value="3">Graphic Design</option>
                                                <option value="4">Web Design</option>
                                                <option value="5">UX/UI Design</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="blog_details-form-input mb-50 blog_details-form-textarea">
                                            <textarea name="message" cols="30" rows="10" placeholder="Feel free to get in touch!"></textarea>
                                            <span class="inner-icon"><i class="fa-thin fa-pen"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="blog_details-form-submit">
                                            <div class="blog_details-form-btn">
                                                <a href="#" class="theme-btn blog_details-btn">Send Message</a>
                                            </div>
                                            <div class="blog_details-form-condition">
                                                <label class="condition_label">I agree that my data is collected and
                                                    stored.
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="blog_details-sidebar mb-60">
                        <div class="blog_details-widget">
                            <h4 class="blog_details-widget-title">Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search here...">
                                <button type="submit"><i class="fa-thin fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="blog_details-widget">
                            <h4 class="blog_details-widget-title">Recent Posts</h4>
                            <div class="blog_details-widget-post">
                                <div class="blog_details-post-img">
                                    <a href="#"><img src="assets/img/blog/details/post-1.jpg" alt=""></a>
                                </div>
                                <div class="blog_details-post-info">
                                    <span><i class="fa-thin fa-clock"></i>March 23, 2023</span>
                                    <h6><a href="#">Education Week Policy and Practice.</a></h6>
                                </div>
                            </div>
                            <div class="blog_details-widget-post">
                                <div class="blog_details-post-img">
                                    <a href="#"><img src="assets/img/blog/details/post-2.jpg" alt=""></a>
                                </div>
                                <div class="blog_details-post-info">
                                    <span><i class="fa-thin fa-clock"></i>March 23, 2023</span>
                                    <h6><a href="#">The Learning way Teaching
                                            & Learning.</a></h6>
                                </div>
                            </div>
                            <div class="blog_details-widget-post">
                                <div class="blog_details-post-img">
                                    <a href="#"><img src="assets/img/blog/details/post-3.jpg" alt=""></a>
                                </div>
                                <div class="blog_details-post-info">
                                    <span><i class="fa-thin fa-clock"></i>March 23, 2023</span>
                                    <h6><a href="#">Only One thing Impossible to
                                            Find.</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="blog_details-widget widget-category">
                            <h4 class="blog_details-widget-title">Categories</h4>
                            <div class="blog_details-widget-category">
                                <ul>
                                    <li><a href="#">College</a></li>
                                    <li><a href="#">High School</a></li>
                                    <li><a href="#">Primary</a></li>
                                    <li><a href="#">University</a></li>
                                    <li><a href="#">Crouse</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog_details-widget">
                            <h4 class="blog_details-widget-title">Popular Courses</h4>
                            <div class="blog_details-widget-course">
                                <div class="blog_details-course-img">
                                    <a href="#"><img src="assets/img/blog/details/course-1.jpg" alt=""></a>
                                </div>
                                <div class="blog_details-course-info">
                                    <h6><a href="#">The Complete JS Course
                                            For Expert!</a></h6>
                                    <a href="#" class="inner-course-rate">Free</a>
                                </div>
                            </div>
                            <div class="blog_details-widget-course">
                                <div class="blog_details-course-img">
                                    <a href="#"><img src="assets/img/blog/details/course-2.jpg" alt=""></a>
                                </div>
                                <div class="blog_details-course-info">
                                    <h6><a href="#">Medical Visual
                                            Deployment and Usability</a></h6>
                                    <a href="#" class="inner-course-rate">Free</a>
                                </div>
                            </div>
                            <div class="blog_details-widget-course">
                                <div class="blog_details-course-img">
                                    <a href="#"><img src="assets/img/blog/details/course-3.jpg" alt=""></a>
                                </div>
                                <div class="blog_details-course-info">
                                    <h6><a href="#">The Graphic Design with
                                            Project Course</a></h6>
                                    <a href="#" class="inner-course-rate">Free</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_details-widget">
                            <h4 class="blog_details-widget-title">Tags</h4>
                            <div class="blog_details-widget-tag">
                                <ul>
                                    <li><a href="#">Consulting</a></li>
                                    <li><a href="#">Student</a></li>
                                    <li><a href="#">Course</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">School</a></li>
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">Learning</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Online Courses</a></li>
                                    <li><a href="#">UI Design</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course details area end -->
@endsection
