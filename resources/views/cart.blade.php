@extends('layouts.app')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1>Giỏ hàng</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-100">
        <div class="container">
            <form action="{{ route('cart.update') }}" method="POST">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                            <tr id="product_{{ $product->id }}">
                                                <td class="product_remove">
                                                    <a href="javascript:remove('product_{{ $product->id }}')"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                                <td class="product_thumb">
                                                    <a href="{{ route('product', $product) }}">
                                                        <img src="{{ $product->image }}" alt="{{ $product->title }}">
                                                    </a>
                                                </td>
                                                <td class="product_name">
                                                    <a href="{{ route('product', $product) }}">
                                                        {{ $product->title }}
                                                    </a>
                                                </td>
                                                <td class="product-price">{{ number_format($product->price) }} đ</td>
                                                <td class="product_quantity">
                                                    <label>Quantity</label> 
                                                    <input min="1" max="100" value="{{ $product->total }}" type="number" name="cart[{{ $product->id }}]">
                                                </td>
                                                <td class="product_total">{{ number_format($product->price * $product->total) }} đ</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount">£215.00</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Shipping</p>
                                        <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                    </div>
                                    <a href="#">Calculate shipping</a>

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">£215.00</p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="#">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
    <!--shopping cart area end -->
@endsection

@section('js')
    <script type="text/javascript">
        function remove($id) {
            document.getElementById($id).remove();
        }
    </script>
@endsection