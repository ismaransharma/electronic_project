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

    .col-md-5 {
        color: #000;
    }

    label {
        color: #000;
    }

    img {
        height: 100px;
        width: 100px;
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

<?php

$cart_code = session('cart_code');

// dd($cart_code);

$cart_items = \App\models\Cart::where('cart_code', 'abc')->get();

if($cart_code){
    $cart_items = \App\models\Cart::where('cart_code', $cart_code)->get();
    $total_amount = $cart_items->sum('total_cost');
    $quantity = $cart_items->sum('quantity');
}

?>

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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Your Orders</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    @foreach ($carts as $cart)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('uploads/product/' . $cart->getProductFromCart->product_image) }}"
                                                alt="{{ $cart->getProductFromCart->product_title }}" class="img-fluid">
                                        </td>
                                        <td>
                                            <p>Product:- {{ $cart->getProductFromCart->product_title }} <br>
                                                {{ $cart->getProductFromCart->category->category_title }}<br>
                                                Quantity:- {{ $cart->quantity }}<br>
                                                Cost:- Rs.
                                                {{ $cart->getProductFromCart->orginal_cost - $cart->getProductFromCart->discounted_cost }}
                                            </p>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row top-bottom-border">
                                <div class="col-md-5">Sub Total:</div>
                                @if ($carts->sum('total_price') > 0)
                                <div class="col-md-5 text-right cost">Rs. {{ $carts->sum('total_price') }}
                                </div>

                                @else

                                @endif
                            </div>
                            <div class="row top-bottom-border">
                                <div class="col-md-5">Shipping Charge:</div>
                                @if ($carts->sum('total_price') > 0)
                                <div class="col-md-5 text-right cost" style="width: 176px;">Rs. 100 (All over Nepal)
                                </div>
                                @else

                                @endif
                            </div>
                            <div class="row top-bottom-border">
                                <div class="col-md-5">Grand Total:</div>
                                <div class="col-md-5 text-right cost">
                                    @if ($carts->sum('total_price') > 0)
                                    Rs. {{ $carts->sum('total_price') + 100 }}

                                    @else
                                    <!-- Rs. 0 -->

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-check">
                                <!-- <label class="form-check-label mb-2">
                                    <input type="radio" class="form-check-input" name="payment_method" id=""
                                        value="online" required>
                                    <img src="{{ asset('site/image/esewa.png') }}" alt="" class="img-fluid">
                                </label> <br> -->
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="payment_method" id="" value="cod"
                                        required>

                                    <img src="{{ asset('site/images/cod.png') }}" alt="" class="img-fluid">
                                </label>

                                @error('payment_method')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row model-footer">
                                <div class="col-md-12 text-center mt-5 place-order-button">
                                    <input type="submit" class="btn w-100 btn-normal" value="Place Order">
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