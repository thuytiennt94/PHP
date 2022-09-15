@extends('front.layout.master')

@section('title', 'Shopping Cart')

@section('body')

    <!-- Breadcrumb section begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./index.html"><i class="fa fa-home"> Home</i></a>
                        <a href="./shop.html">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb section end -->


    <!-- Shopping Cart section begin -->
    <div class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table >
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($carts as $cart)
                                <tr>
                                    <td class="cart-pic first-row">
                                        <img style="height: 170px;margin-left: 40px" src="front/img/products/{{ $cart->options->images[0]->path }}" alt="">
                                    </td>
                                    <td class="cart-title first-row">
                                        <h5>{{ $cart->name }}</h5>
                                    </td>
                                    <td class="p-price first-row">${{ number_format($cart->price, 2) }}</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="" id="" value="{{ $cart->qty }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">${{ number_format($cart->price * $cart->qty, 2) }}</td>
                                    <td class="close-td first-row"><a href="./cart/delete/{{ $cart->rowId }}"><i class="ti-close"></i></a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="#" class="primary-btn up-cart ">Update</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" name="" id="" placeholder="Enter Your Codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>{{ $total }}</span></li>
                                    <li class="cart-total">Total <span>{{ $subtotal }}</span></li>
                                </ul>
                                <a href="check-out.html" class="proceed-btn">Proceed to check out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shopping Cart section end -->

@endsection
