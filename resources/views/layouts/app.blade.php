<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Lukani – Plant and Flower Shop eCommerce HTML Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/nhuplants/assets/images/favicon.ico">
        <!-- CSS 
    ========================= -->
        <!--bootstrap min css-->
        <link rel="stylesheet" href="/nhuplants/assets/css/bootstrap.min.css">
        <!--owl carousel min css-->
        <link rel="stylesheet" href="/nhuplants/assets/css/owl.carousel.min.css">
        <!--slick min css-->
        <link rel="stylesheet" href="/nhuplants/assets/css/slick.css">
        <!--magnific popup min css-->
        <link rel="stylesheet" href="/nhuplants/assets/css/magnific-popup.css">
        <!--font awesome css-->
        <link rel="stylesheet" href="/nhuplants/assets/css/font.awesome.css">
        <!--animate css-->
        <link rel="stylesheet" href="/nhuplants/assets/css/animate.css">
        <!--jquery ui min css-->
        <link rel="stylesheet" href="/nhuplants/assets/css/jquery-ui.min.css">
        <!--slinky menu css-->
        <link rel="stylesheet" href="/nhuplants/assets/css/slinky.menu.css">
        <!--plugins css-->
        <link rel="stylesheet" href="/nhuplants/assets/css/plugins.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="/nhuplants/assets/css/style.css">
        <!--modernizr min js here-->
        <script src="/nhuplants/assets/js/vendor/modernizr-3.7.1.min.js"></script>
    </head>
    <body>
        <!--preloader area start-->
        <div class="preloader" id="preloader">
            <img src="/nhuplants/assets/images/loading.gif" alt="loading" style="width: 30%;">
        </div>
        <!--preloader area end-->

        <!--header area start-->
        <!--offcanvas menu area start-->
        <div class="off_canvars_overlay"></div>
        <div class="offcanvas_menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="canvas_open">
                            <a href="javascript:void(0)">
                                <i class="icon-menu"></i>
                            </a>
                        </div>
                        <div class="offcanvas_menu_wrapper">
                            <div class="canvas_close">
                                <a href="javascript:void(0)">
                                    <i class="icon-x"></i>
                                </a>
                            </div>
                            <div class="call-support">
                                <p>Call Support: <a href="tel:0123456789">0123456789</a>
                                </p>
                            </div>
                            <div id="menu" class="text-left ">
                                <ul class="offcanvas_main_menu">
                                    <li class="menu-item-has-children active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="index.html">Home 1</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">Home 2</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home 3</a>
                                            </li>
                                            <li>
                                                <a href="index-4.html">Home 4</a>
                                            </li>
                                            <li>
                                                <a href="index-5.html">Home 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">blog</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">pages </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="my-account.html">my account</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="about.html">about Us</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="contact.html"> Contact Us 1</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="offcanvas_footer">
                                <span>
                                    <a href="#">
                                        <i class="fa fa-envelope-o"></i> demo@example.com </a>
                                </span>
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
                                            <i class="fa fa-pinterest-p"></i>
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
        <!--offcanvas menu area end-->
        <header>
            <div class="main_header header_3 sticky-header {{ in_array(Route::currentRouteName(), ['home']) ? 'header_transparent' : 'header_not_transparent' }}">
                <div class="header_container">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="logo">
                                    <a href="{{ route('home') }}">
                                        <img src="/nhuplants/assets/images/logo.webp" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!--main menu start-->
                                <div class="main_menu menu_three menu_position">
                                    <nav>
                                        <ul>
                                            <li class="mega_items">
                                                <a class="active" href="{{ route('home') }}">home</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">category <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="sub_menu">
                                                    <li>
                                                        <a href="{{ route('shop') }}">Home shop 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('shop') }}">Home shop 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('shop') }}">Home shop 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('shop') }}">Home shop 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('shop') }}">Home shop 5</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega_items">
                                                <a href="{{ route('shop') }}">shop</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('cart') }}">cart</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('about-us') }}">about us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!--main menu end-->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-5 col-6">
                                <div class="header_right_info header_right_two">
                                    <div class="search_container">
                                        <form action="#">
                                            <div class="search_box">
                                                <input placeholder="Search product..." type="text">
                                                <button type="submit">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="header_account_area">
                                        <div class="header_account-list top_links">
                                            <a href="#">
                                                <i class="icon-users"></i>
                                            </a>
                                            <ul class="dropdown_links">
                                                <li>
                                                    <a href="checkout.html">Checkout </a>
                                                </li>
                                                <li>
                                                    <a href="my-account.html">My Account </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">Shopping Cart</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="header_account-list header_wishlist">
                                            <a href="wishlist.html">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </div>
                                        <div class="header_account-list  mini_cart_wrapper">
                                            <a href="javascript:void(0)">
                                                <i class="icon-shopping-bag"></i>
                                                <span class="item_count">2</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--mini cart-->
            <div class="mini_cart">
                <div class="cart_gallery">
                    <div class="cart_close">
                        <div class="cart_text">
                            <h3>cart</h3>
                        </div>
                        <div class="mini_cart_close">
                            <a href="javascript:void(0)">
                                <i class="icon-x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="cart_item">
                        <div class="cart_img">
                            <a href="#">
                                <img src="/nhuplants/assets/images/product1.webp" alt="">
                            </a>
                        </div>
                        <div class="cart_info">
                            <a href="#">Primis In Faucibus</a>
                            <p>1 x <span> $65.00 </span>
                            </p>
                        </div>
                        <div class="cart_remove">
                            <a href="#">
                                <i class="icon-x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="cart_item">
                        <div class="cart_img">
                            <a href="#">
                                <img src="/nhuplants/assets/images/product1.webp" alt="">
                            </a>
                        </div>
                        <div class="cart_info">
                            <a href="#">Letraset Sheets</a>
                            <p>1 x <span> $60.00 </span>
                            </p>
                        </div>
                        <div class="cart_remove">
                            <a href="#">
                                <i class="icon-x"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mini_cart_table">
                    <div class="cart_table_border">
                        <div class="cart_total">
                            <span>Sub total:</span>
                            <span class="price">$125.00</span>
                        </div>
                        <div class="cart_total mt-10">
                            <span>total:</span>
                            <span class="price">$125.00</span>
                        </div>
                    </div>
                </div>
                <div class="mini_cart_footer">
                    <div class="cart_button">
                        <a href="cart.html">
                            <i class="fa fa-shopping-cart"></i> View cart </a>
                    </div>
                    <div class="cart_button">
                        <a class="active" href="checkout.html">
                            <i class="fa fa-sign-in"></i> Checkout </a>
                    </div>
                </div>
            </div>
            <!--mini cart end-->
        </header>
        <!--header area end-->

        @yield('content')

        <!--footer area start-->
        <footer class="footer_widgets">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="widgets_container contact_us">
                                <h3>Opening Time</h3>
                                <p>
                                    <span>Mon - Fri:</span> 8AM - 10PM
                                </p>
                                <p>
                                    <span>Sat:</span> 9AM-8PM
                                </p>
                                <p>
                                    <span>Suns:</span> 14hPM-18hPM
                                </p>
                                <p>
                                    <b>We Work All The Holidays</b>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="widgets_container widget_menu">
                                <h3>Information</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li>
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                        <li>
                                            <a href="faq.html">Frequently Questions</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="widgets_container widget_app">
                                <div class="footer_logo">
                                    <a href="index.html">
                                        <img src="/nhuplants/assets/images/logo.webp" alt="">
                                    </a>
                                </div>
                                <div class="footer_widgetnav_menu">
                                    <ul>
                                        <li>
                                            <a href="#">Payment</a>
                                        </li>
                                        <li>
                                            <a href="#">Affiliates</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact</a>
                                        </li>
                                        <li>
                                            <a href="#">Internet</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer_social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-youtube" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="widgets_container widget_menu">
                                <h3>My Account</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li>
                                            <a href="my-account.html">My Account</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">Shopping cart</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Shop</a>
                                        </li>
                                        <li>
                                            <a href="#">Order History</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="widgets_container widget_menu">
                                <h3>Customer Service</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li>
                                            <a href="contact.html">Contact Us 3</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms of use</a>
                                        </li>
                                        <li>
                                            <a href="#">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Site Map</a>
                                        </li>
                                        <li>
                                            <a href="my-account.html">My Account</a>
                                        </li>
                                        <li>
                                            <a href="#">Returns</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright_area">
                                <p class="copyright-text">&copy; 2021 <a href="index.html">Lukani</a>. Made with <i class="fa fa-heart text-danger"></i> by <a href="https://hasthemes.com/" target="_blank">HasThemes</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer area end-->

        <!-- JS
============================================ -->
        <!--jquery min js-->
        <script src="/nhuplants/assets/js/vendor/jquery-3.4.1.min.js"></script>
        <!--popper min js-->
        <script src="/nhuplants/assets/js/popper.js"></script>
        <!--bootstrap min js-->
        <script src="/nhuplants/assets/js/bootstrap.min.js"></script>
        <!--owl carousel min js-->
        <script src="/nhuplants/assets/js/owl.carousel.min.js"></script>
        <!--slick min js-->
        <script src="/nhuplants/assets/js/slick.min.js"></script>
        <!--magnific popup min js-->
        <script src="/nhuplants/assets/js/jquery.magnific-popup.min.js"></script>
        <!--counterup min js-->
        <script src="/nhuplants/assets/js/jquery.counterup.min.js"></script>
        <!--jquery countdown min js-->
        <script src="/nhuplants/assets/js/jquery.countdown.js"></script>
        <!--jquery ui min js-->
        <script src="/nhuplants/assets/js/jquery.ui.js"></script>
        <!--jquery elevatezoom min js-->
        <script src="/nhuplants/assets/js/jquery.elevatezoom.js"></script>
        <!--isotope packaged min js-->
        <script src="/nhuplants/assets/js/isotope.pkgd.min.js"></script>
        <!--slinky menu js-->
        <script src="/nhuplants/assets/js/slinky.menu.js"></script>
        <!-- Plugins JS -->
        <script src="/nhuplants/assets/js/plugins.js"></script>
        <!-- Main JS -->
        <script src="/nhuplants/assets/js/main.js"></script>
    </body>
</html>