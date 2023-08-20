@extends('layouts.app')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1>Về chúng tôi</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--nhuplants store title start-->
    <div class="welcome_lukani_store">
        <div class="container">
            <div class="welcome_lukani_container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="welcome_lukani_thumb">
                            <img src="/nhuplants/assets/images/img-top-vogue3.webp" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="welcome_lukani_content">
                            <div class="welcome_lukani_header">
                                <h3>Welcome to Lukani store</h3>
                                <h2>Lukani History</h2>
                            </div>
                            <div class="welcome_lukani_desc">
                                <p>Commodo sociosqu venenatis cras dolor sagittis integer luctus sem primis eget maecenas sedurna malesuada consectetuer.</p>
                                <p>Ornare integer commodo mauris et ligula purus, praesent cubilia laboriosam viverra. Mattis id rhoncus. Integer lacus eu volutpat fusce. Elit etiam phasellus suscipit suscipit dapibus, condimentum tempor quis, turpis luctus dolor sapien vivamus.</p>
                            </div>
                            <div class="contact_message content mt-5">
                                <ul>
                                    <li><i class="fa fa-fax"></i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                                    <li><i class="fa fa-phone"></i><a href="tel:0123456789">0123456789</a> </li>
                                    <li><i class="fa fa-envelope-o"></i> <a href="#">demo@example.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--nhuplants store titlev end-->

    <!--brand area start-->
    <div class="brand_area brand__three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#">
                                <img src="/nhuplants/assets/images/brand1.webp" alt="">
                            </a>
                        </div>
                        <div class="single_brand">
                            <a href="#">
                                <img src="/nhuplants/assets/images/brand1.webp" alt="">
                            </a>
                        </div>
                        <div class="single_brand">
                            <a href="#">
                                <img src="/nhuplants/assets/images/brand1.webp" alt="">
                            </a>
                        </div>
                        <div class="single_brand">
                            <a href="#">
                                <img src="/nhuplants/assets/images/brand1.webp" alt="">
                            </a>
                        </div>
                        <div class="single_brand">
                            <a href="#">
                                <img src="/nhuplants/assets/images/brand1.webp" alt="">
                            </a>
                        </div>
                        <div class="single_brand">
                            <a href="#">
                                <img src="/nhuplants/assets/images/brand1.webp" alt="">
                            </a>
                        </div>
                        <div class="single_brand">
                            <a href="#">
                                <img src="/nhuplants/assets/images/brand1.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->

    <!--chose us area start-->
    <div class="choseus_area" data-bgimg="/nhuplants/assets/images/about-us-policy-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="/nhuplants/assets/images/About_icon1.webp" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Creative Design</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare
                                velit amet</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="/nhuplants/assets/images/About_icon2.webp" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>100% Money Back Guarantee</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare
                                velit amet</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="/nhuplants/assets/images/About_icon3.webp" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Online Support 24/7</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare
                                velit amet</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--chose us area end-->

    <!--services img area-->
    <div class="about_gallery_section">
        <div class="container">
            <div class="about_gallery_container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="/nhuplants/assets/images/about2.webp" alt="">
                                </div>
                                <figcaption class="about_gallery_content">
                                    <h3>What do we do?</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="/nhuplants/assets/images/about3.webp" alt="">
                                </div>
                                <figcaption class="about_gallery_content">
                                    <h3>Our Mission</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="/nhuplants/assets/images/about4.webp" alt="">
                                </div>
                                <figcaption class="about_gallery_content">
                                    <h3>History Of Us</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--services img end-->

    <!--testimonial area start-->
    <div class="faq-client-say-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="faq-client_title">
                        <h2>What can we do for you ?</h2>
                    </div>
                    <div class="faq-style-wrap" id="faq-five">
                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a id="octagon" class="collapsed" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapse1" aria-expanded="true" aria-controls="faq-collapse1">
                                        <span class="button-faq"></span>Fast Free Delivery</a>
                                </h5>
                            </div>
                            <div id="faq-collapse1" class="collapse show" aria-expanded="true" role="tabpanel"
                                data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                    <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
                                        habent claritatem insitam est usus legentis in iis qui facit eorum claritatem.
                                        Investigationes demonstraverunt lectores legere me.
                                    </p>
                                    <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapse2" aria-expanded="false"
                                        aria-controls="faq-collapse2"> <span class="button-faq"></span>More Than 30
                                        Years In The Business</a>
                                </h5>
                            </div>
                            <div id="faq-collapse2" class="collapse" aria-expanded="false" role="tabpanel"
                                data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                    <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
                                        habent claritatem insitam est usus legentis in iis qui facit eorum claritatem.
                                        Investigationes demonstraverunt lectores legere me.
                                    </p>
                                    <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapse3" aria-expanded="false"
                                        aria-controls="faq-collapse3"> <span class="button-faq"></span>100% Organic
                                        Foods</a>
                                </h5>
                            </div>
                            <div id="faq-collapse3" class="collapse" role="tabpanel" data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                    <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
                                        habent claritatem insitam est usus legentis in iis qui facit eorum claritatem.
                                        Investigationes demonstraverunt lectores legere me.
                                    </p>
                                    <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapse4" aria-expanded="false"
                                        aria-controls="faq-collapse4"> <span class="button-faq"></span>Best Shopping
                                        Strategies</a>
                                </h5>
                            </div>
                            <div id="faq-collapse4" class="collapse" role="tabpanel" data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                    <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
                                        habent claritatem insitam est usus legentis in iis qui facit eorum claritatem.
                                        Investigationes demonstraverunt lectores legere me.
                                    </p>
                                    <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <!--testimonial area start-->
                    <div class="testimonial_area  testimonial_about">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section_title">
                                        <h2>What Our Customers Says ?</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial_container">
                                <div class="row">
                                    <div class="testimonial_carousel owl-carousel">
                                        <div class="col-12">
                                            <div class="single-testimonial">
                                                <div class="testimonial-icon-img">
                                                    <img src="/nhuplants/assets/images/testimonials-icon.webp" alt="">
                                                </div>
                                                <div class="testimonial_content">
                                                    <p>“ When a beautiful design is combined with powerful technology,
                                                        <br>
                                                        it truly is an artwork. I love how my website operates and looks
                                                        with this theme. Thank you for the awesome product. ”
                                                    </p>
                                                    <div class="testimonial_text_img">
                                                        <a href="#"><img src="/nhuplants/assets/images/testimonial1.webp"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="testimonial_author">
                                                        <p><a href="#">Rebecka Filson</a> / <span>CEO of CSC</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-testimonial">
                                                <div class="testimonial-icon-img">
                                                    <img src="/nhuplants/assets/images/testimonials-icon.webp" alt="">
                                                </div>
                                                <div class="testimonial_content">
                                                    <p>“ When a beautiful design is combined with powerful technology,
                                                        <br>
                                                        it truly is an artwork. I love how my website operates and looks
                                                        with this theme. Thank you for the awesome product. ”
                                                    </p>
                                                    <div class="testimonial_text_img">
                                                        <a href="#"><img src="/nhuplants/assets/images/testimonial1.webp"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="testimonial_author">
                                                        <p><a href="#">Amber Laha</a> / <span>CEO of DND</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-testimonial">
                                                <div class="testimonial-icon-img">
                                                    <img src="/nhuplants/assets/images/testimonials-icon.webp" alt="">
                                                </div>
                                                <div class="testimonial_content">
                                                    <p>“ When a beautiful design is combined with powerful technology,
                                                        <br>
                                                        it truly is an artwork. I love how my website operates and looks
                                                        with this theme. Thank you for the awesome product. ”
                                                    </p>
                                                    <div class="testimonial_text_img">
                                                        <a href="#"><img src="/nhuplants/assets/images/testimonial1.webp"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="testimonial_author">
                                                        <p><a href="#">Lindsy Neloms</a> / <span>CEO of SFD</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--testimonial area end-->
                </div>
            </div>
        </div>
    </div>
    <!--testimonial area end-->
@endsection
