@extends('front.layout.master')

@section('title', 'Check Out')

@section('body')

    <!-- Breadcrumb section begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i class="fa fa-home"> Home</i></a>
                        <a href="./shop">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb section end -->


    <!-- Shopping cart section begin -->
    <div class="checkout-section spad">
        <div class="container">
            <form action="" method="post" class="checkout-form">
                @csrf
                <div class="row">

                    @if(Cart::count() >0)
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="login.html" class="content-btn">Click here to login</a>
                        </div>
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">First Name <span>*</span></label>
                                <input type="text" name="first_name" id="fir">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Last Name <span>*</span></label>
                                <input type="text" name="last_name" id="last">
                            </div>
                            <div class="col-lg-12">
                                <label for="fir">Company Name </label>
                                <input type="text" name="company_name" id="cun-name">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun">Country <span>*</span></label>
                                <input type="text" name="country" id="cun">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Street Address <span>*</span></label>
                                <input type="text" name="street_address" id="street" class="street-first">
                            </div>
                            <div class="col-lg-12">
                                <label for="zip">Postcode / ZIP (optional)</label>
                                <input type="text" name="postcode_zip" id="zip">
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Town / City <span>*</span></label>
                                <input type="text" name="town_city" id="town">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email Address <span>*</span></label>
                                <input type="text" name="email" id="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone <span>*</span></label>
                                <input type="text" name="phone" id="phone">
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Create an account?
                                        <input type="checkbox" name="" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" name="" id="" placeholder="Enter Your Coupon Code" >
                        </div>
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>

                                    @foreach($carts as $cart)
                                        <li class="fw-normal">{{ $cart->name }}  x  {{ $cart->qty }} <span>${{ $cart->price * $cart->qty }}</span></li>
                                    @endforeach

                                    <li class="fw-normal">Subtotal <span>{{ $subtotal }}</span></li>
                                    <li class="total-price">Total <span>{{ $total }}</span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Pay later
                                            <input type="radio" name="payment_later" id="pc-check" value="pay_later" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Online Payment
                                            <input type="radio" name="payment_later" id="pc-paypal" value="online_payment">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Placce Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="col-lg-12">
                            <h4>Your cart is empty.</h4>
                        </div>
                    @endif

                </div>
            </form>
        </div>
    </div>
    <!-- Shopping cart section end -->


@endsection
