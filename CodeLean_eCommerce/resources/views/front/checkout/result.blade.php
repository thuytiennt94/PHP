@extends('front.layout.master')

@section('title', 'Result')

@section('body')

    <!-- Breadcrumb section begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i class="fa fa-home"> Home</i></a>
                        <a href="./checkout">Check Out</a>
                        <span>Result</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb section end -->


    <!-- Shopping cart section begin -->
    <div class="checkout-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>{{ $notification }}</h4>

                    <a href="./" class="primary-btn mt-3">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Shopping cart section end -->


@endsection
