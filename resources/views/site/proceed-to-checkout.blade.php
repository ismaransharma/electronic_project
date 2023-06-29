@extends('layouts.template', ['activePage' => 'Cart'])
@section('navbar')

<head>
    <style>
    h6 {
        color: #000;
    }


    .place-order-button {
        border: 1px solid var(--top-header-bg);
        width: 100%;
        height: 45px;
        background: none;
        color: var(--top-header-bg);
        transition: 1s;
    }

    .place-order-button:hover {
        background-color: var(--dec-color);
        color: var(--white);

    }

    .checkout-extra {
        padding-left: 220px;
    }

    .checkout-extra h6 {
        margin: 17px 0px;
    }

    .checkout-extra h6 span {
        font-weight: bold;
    }

    label {
        color: #000;
    }
    </style>
</head>

<?php
// dd($products);
?>


<section id="upper-header">
    <div class="container">
        <div class="box-padding">
            <div class="box">
                <div class="upper-part">
                    <h4>Enjoy Your Shopping</h4>
                    <h6>
                        <a href="{{ url('/') }}">
                            <span class="home">
                                Home
                            </span>
                        </a>
                        <span class="slash">
                            /
                        </span>
                        <a href="{{ route('getProceedToCheckout') }}">
                            <span class="second">
                                Checkout
                            </span>
                        </a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="proceed-to-checkout" class="mt-5 mb-5">
    <div class="container">
        <form action="{{ route('postCheckout') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h6>Billing Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Name*</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" id="name" placeholder="" value="{{ old('name') }}" required>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                            <label for="mobile_number">Mobile Number*</label>
                                            <input type="text"
                                                class="form-control @error('mobile_number') is-invalid @enderror"
                                                name="mobile_number" id="mobile_number" placeholder=""
                                                value="{{ old('mobile_number') }}" required>

                                            @error('mobile_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                            <label for="email">Email*</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                name="email" id="email" placeholder="" value="{{ old('email') }}"
                                                required>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <label for="full_address">Full Address*</label>
                                            <input type="text"
                                                class="form-control @error('full_address') is-invalid @enderror"
                                                name="address" id="full_address" placeholder=""
                                                value="{{ old('full_address') }}" required>

                                            @error('full_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <label for="additional_information">Additon Informations*</label>
                                            <textarea
                                                class="form-control @error('additional_information') is-invalid @enderror"
                                                name="additional_information" id="additional_information"
                                                placeholder="Additional Information"
                                                rows="10">{{ old('additional_information') }}</textarea>

                                            @error('additional_information')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6" style="padding-top: 35px;">
                    <div class="payment-section">
                        <div class="card">
                            <div class="card-header">
                                <h6>Your Orders</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-stripped">
                                    <thead>
                                        @foreach ($carts as $cart)
                                        <tr>
                                            <th style="border: 1px solid #000;">
                                                <img height="100px" width="100px"
                                                    src="{{ asset('uploads/product/'. $cart->getProductFromCart->product_image) }}"
                                                    alt="">
                                            </th>
                                            <th style="border: 1px solid #000;" class="text-center">
                                                <h6>
                                                    <span>Product Name: </span>
                                                    {{ $cart->getProductFromCart->product_title }}
                                                </h6>
                                                <h6>
                                                    @if($cart->getProductFromCart->brand)
                                                    <span>Product Brand: </span>
                                                    {{ $cart->getProductFromCart->brand }}

                                                    @else

                                                    @endif
                                                </h6>
                                                <h6>
                                                    <span>Quantity: </span>
                                                    {{ $cart->quantity }}
                                                </h6>
                                                <h6>
                                                    <span>Price: Rs. </span>
                                                    {{ $cart->getProductFromCart->orginal_cost - $cart->getProductFromCart->discounted_cost}}
                                                </h6>
                                            </th>
                                        </tr>
                                        @endforeach
                                    </thead>
                                </table>
                                <div class="checkout-extra">
                                    <h6>
                                        <span>Shipping Charge: Rs. 100 (All Over Nepal)</span>

                                        <h6>
                                            <span>Total Price: Rs. {{ $carts->sum('total_price') + 100}}</span>

                                        </h6>
                                    </h6>
                                </div>
                                <div class="choose-payment-method">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="payment_method" id=""
                                            value="cod" required>

                                        <img height="100" width="100" src="{{ asset('site/images/cod.png') }}" alt=""
                                            class="img-fluid">
                                    </label>
                                    <div class="place-order mt-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="submit" class="btn w-100 btn-normal place-order-button"
                                                    value="Place Order" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection