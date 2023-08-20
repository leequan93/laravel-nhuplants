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
                            <li class="menu-item-has-children">
                                <a href="{{ route('home') }}">Trang chủ</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">Danh mục</a>
                                <ul class="sub-menu">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="{{ route('shop') }}?category={{ $category->id }}">
                                                {{ $category->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('shop') }}">shop</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('cart') }}">cart</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('about-us') }}">about us</a>
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
                                    <li>
                                        <a class="active" href="{{ route('home') }}">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Danh mục <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub_menu">
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a href="{{ route('shop') }}?category={{ $category->id }}">
                                                        {{ $category->title }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
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
