@extends('layouts.app')

@section('content')
    <!--slider area start-->
    <section class="slider_section slider_s_two">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="/nhuplants/assets/images/slider/slider7.webp">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <span>AMAZING FROM Lukani </span>
                                <h1>BIG SALE <br> NEW ARRIVALS </h1>
                                <p>Discount 20% Off For Lukani Members </p>
                                <a class="button" href="shop.html">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="/nhuplants/assets/images/slider/slider8.webp">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <span>AMAZING FROM Lukani </span>
                                <h1>lukani <br>
                                    <span>trending 2019</span>
                                </h1>
                                <p>Discount 20% Off For Lukani Members </p>
                                <a class="button" href="shop.html">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="/nhuplants/assets/images/slider/slider9.webp">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <span>AMAZING FROM Lukani </span>
                                <h1>houseplant <br>
                                    <span>amazing cholce</span>
                                </h1>
                                <p>Discount 20% Off For Lukani Members </p>
                                <a class="button" href="shop.html">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!--shipping area start-->
    <div class="shipping_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="/nhuplants/assets/images/shipping1.webp" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Free Delivery</h3>
                            <p>Free shipping around the world for all <br> orders over $120</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping col_2">
                        <div class="shipping_icone">
                            <img src="/nhuplants/assets/images/shipping2.webp" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Safe Payment</h3>
                            <p>With our payment gateway, don’t worry <br> about your information</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping col_3">
                        <div class="shipping_icone">
                            <img src="/nhuplants/assets/images/shipping3.webp" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Friendly Services</h3>
                            <p>You have 30-day return guarantee for <br> every single order</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->

    <!--banner area start-->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="/nhuplants/assets/images/banner1.webp" alt=""></a>
                            <div class="banner_content">
                                <h3>Big Sale Products</h3>
                                <h2>Plants <br> For Interior</h2>
                                <a href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="/nhuplants/assets/images/banner2.webp" alt=""></a>
                            <div class="banner_content">
                                <h3>Top Products</h3>
                                <h2>Plants <br> For Healthy</h2>
                                <a href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <div class="product_area  mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                            <h2>Our Products</h2>
                        </div>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#plant1" role="tab" aria-controls="plant1"
                                        aria-selected="true">
                                        Plant Stands & Movers
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#plant2" role="tab" aria-controls="plant2"
                                        aria-selected="false">
                                        Plant families
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#plant3" role="tab" aria-controls="plant3"
                                        aria-selected="false">
                                        Outdoor Plant Pots
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-7%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">commodo augue
                                                        nisi</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£69.00</span>
                                                    <span class="old_price">£74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">eget
                                                        sagittis</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£65.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">fringilla
                                                        augue</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£68.00</span>
                                                    <span class="old_price">£75.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-5%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">massa massa</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£75.00</span>
                                                    <span class="old_price">£80.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">placerat
                                                        vestibulum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£65.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">Porro Cook</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£62.00</span>
                                                    <span class="old_price">£68.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-4%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">sapien
                                                        libero</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£69.00</span>
                                                    <span class="old_price">£74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">vulputate
                                                        rutrum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£64.00</span>
                                                    <span class="old_price">£72.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">adipiscing
                                                        cursus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£60.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">Donec eu
                                                        cook</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£67.00</span>
                                                    <span class="old_price">£77.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="plant2" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-4%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">sapien
                                                        libero</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£69.00</span>
                                                    <span class="old_price">£74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">vulputate
                                                        rutrum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£64.00</span>
                                                    <span class="old_price">£72.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">adipiscing
                                                        cursus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£60.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">Donec eu
                                                        cook</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£67.00</span>
                                                    <span class="old_price">£77.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-7%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">commodo augue
                                                        nisi</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£69.00</span>
                                                    <span class="old_price">£74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">eget
                                                        sagittis</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£65.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">fringilla
                                                        augue</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£68.00</span>
                                                    <span class="old_price">£75.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-5%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">massa massa</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£75.00</span>
                                                    <span class="old_price">£80.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">placerat
                                                        vestibulum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£65.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">Porro Cook</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£62.00</span>
                                                    <span class="old_price">£68.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="plant3" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">fringilla
                                                        augue</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£68.00</span>
                                                    <span class="old_price">£75.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-5%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">massa massa</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£75.00</span>
                                                    <span class="old_price">£80.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">placerat
                                                        vestibulum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£65.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">Porro Cook</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£62.00</span>
                                                    <span class="old_price">£68.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-4%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">sapien
                                                        libero</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£69.00</span>
                                                    <span class="old_price">£74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">vulputate
                                                        rutrum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£64.00</span>
                                                    <span class="old_price">£72.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-7%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">commodo augue
                                                        nisi</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£69.00</span>
                                                    <span class="old_price">£74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">eget
                                                        sagittis</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£65.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">adipiscing
                                                        cursus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£60.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product') }}"><img
                                                        src="/nhuplants/assets/images/product1.webp" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="{{ route('product') }}">Donec eu
                                                        cook</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£67.00</span>
                                                    <span class="old_price">£77.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--banner fullwidth area-->
    <div class="banner_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_fullwidth_content">
                        <h3>Amazing From Lukani</h3>
                        <h2>Plants The <br> Perfect Choice!</h2>
                        <p>Discount 20% Off For Lukani Members</p>
                        <a href="#">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner fullwidth end-->

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

    <!--blog area start-->
    <section class="blog_section blog_s_three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Our Latest Posts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column3 owl-carousel">
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html">
                                        <img src="/nhuplants/assets/images/blog1.webp" alt="">
                                    </a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="blog-details.html">Libero lorem</a>
                                    </h4>
                                    <div class="articles_date">
                                        <p>By <span>admin / July 16, 2021</span>
                                        </p>
                                    </div>
                                    <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                    <footer class="blog_footer">
                                        <a href="blog-details.html">Continue Reading</a>
                                        <p>
                                            <i class="icon-message-circle"></i>
                                            <span>0</span>
                                        </p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html">
                                        <img src="/nhuplants/assets/images/blog1.webp" alt="">
                                    </a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="blog-details.html">Blog image post</a>
                                    </h4>
                                    <div class="articles_date">
                                        <p>By <span>admin / July 16, 2021</span>
                                        </p>
                                    </div>
                                    <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                    <footer class="blog_footer">
                                        <a href="blog-details.html">Continue Reading</a>
                                        <p>
                                            <i class="icon-message-circle"></i>
                                            <span>0</span>
                                        </p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html">
                                        <img src="/nhuplants/assets/images/blog1.webp" alt="">
                                    </a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="blog-details.html">Post with Gallery</a>
                                    </h4>
                                    <div class="articles_date">
                                        <p>By <span>admin / July 16, 2021</span>
                                        </p>
                                    </div>
                                    <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                    <footer class="blog_footer">
                                        <a href="blog-details.html">Continue Reading</a>
                                        <p>
                                            <i class="icon-message-circle"></i>
                                            <span>0</span>
                                        </p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html">
                                        <img src="/nhuplants/assets/images/blog1.webp" alt="">
                                    </a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="blog-details.html">Post with Audio</a>
                                    </h4>
                                    <div class="articles_date">
                                        <p>By <span>admin / July 16, 2021</span>
                                        </p>
                                    </div>
                                    <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                    <footer class="blog_footer">
                                        <a href="blog-details.html">Continue Reading</a>
                                        <p>
                                            <i class="icon-message-circle"></i>
                                            <span>0</span>
                                        </p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="icon-x"></i>
                    </span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#">
                                                    <img src="/nhuplants/assets/images/product1.webp" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#">
                                                    <img src="/nhuplants/assets/images/product1.webp" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#">
                                                    <img src="/nhuplants/assets/images/product1.webp" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#">
                                                    <img src="/nhuplants/assets/images/product1.webp" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">
                                                    <img src="/nhuplants/assets/images/product1.webp" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">
                                                    <img src="/nhuplants/assets/images/product1.webp" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">
                                                    <img src="/nhuplants/assets/images/product1.webp" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">
                                                    <img src="/nhuplants/assets/images/product1.webp" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook">
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="#">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->
@endsection
