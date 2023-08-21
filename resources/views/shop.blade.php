@extends('layouts.app')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1>Cửa hàng</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- product area start-->
    <div class="shop_area shop_fullwidth mt-5 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-3">
                    Total: {{ $products->total() }}
                </div>
                <div class="col-lg-9 col-md-12 mt-3">
                    <div class="search_container search_container_product">
                        <form action="{{ route('shop') }}" method="GET">
                            <div class="hover_category">
                                <select class="select_option" name="category" id="categori1">
                                    <option value="0">All Categories</option>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="{{ route('shop') }}?category={{ $category->id }}">
                                                {{ $category->title }}
                                            </a>
                                        </li>
                                        <option value="{{ $category->id }}" {{ $request->query('category') == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="search_box">
                                <input placeholder="Search product..." type="text" name="title" value="{{ $request->query('title') }}">
                                <button type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="row shop_wrapper grid_4">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{ route('product', $product) }}">
                                                <img src="{{ $product->image }}" alt="">
                                            </a>
                                            @if ($product->label)
                                                <div class="label_product">
                                                    <span class="label_sale">{{ $product->label }}</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="product_price_rating">
                                                <h4 class="product_name">
                                                    <a href="{{ route('product', $product) }}">{{ $product->title }}</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">{{ number_format($product->price) }} đ</span>
                                                    @if ($product->price_old)
                                                        <span class="old_price">{{ number_format($product->price_old) }} đ</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    @if ($products->total())
                        <div class="shop_toolbar t_bottom">
                            {{ $products->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- product area end-->
@endsection
