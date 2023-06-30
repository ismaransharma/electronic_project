@extends('layouts.template', ['activePage' => 'Cart'])
@section('navbar')


<head>
    <style>
    #cart-content table thead tr {
        border: 1px solid #000;
    }

    #cart-content table thead tr th {
        border: 1px solid #000;
        text-align: center;
        padding: 30px;
    }

    #cart-content table tbody tr {
        border: 1px solid #000;
    }

    #cart-content table tbody tr td {
        border: 1px solid #000;
        text-align: center;
        height: 100px;
        width: 250px;
    }

    #after-cart-content table tbody tr {
        border: 1px solid #000;
    }

    #after-cart-content table tbody tr td {
        border: 1px solid #000;
        width: 285px;
    }

    #after-cart-content .last-button {
        border: 1px solid #000;
        transition: 1s;
        color: #000;
    }

    #after-cart-content .last-button:hover {
        background-color: var(--dec-color);

    }
    </style>
</head>

<section id="upper-header">
    <div class="container">
        <div class="box-padding">
            <div class="box">
                <div class="upper-part">
                    <h4>Your Shopping Cart</h4>
                    <h6>
                        <a href="{{ url('/') }}">
                            <span class="home">
                                Home
                            </span>
                        </a>
                        <span class="slash">
                            /
                        </span>
                        <a href="{{ route('getCart') }}">
                            <span class="second">
                                Cart
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
    $total_amount = $cart_items->sum('total_price');
    $quantity = $cart_items->sum('quantity');
}

?>

<section id="cart-content" class="mt-5">
    <div class="container">
        <table clas="cart-table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart_items as $cart)
                <tr>
                    <td>{{ $cart->getProductFromCart->product_title }}</td>
                    <td>
                        <img height="45px" width="45px"
                            src="{{ asset('uploads/product/' . $cart->getProductFromCart->product_image) }}"
                            alt="$cart->getProductFromCart->product_title">
                    </td>
                    <td>Rs. {{ $cart->getProductFromCart->orginal_cost - $cart->getProductFromCart->discounted_cost}}
                    </td>
                    <td>{{ $cart->quantity }}</td>
                    <td>Rs.
                        {{ $cart->quantity * ($cart->getProductFromCart->orginal_cost - $cart->getProductFromCart->discounted_cost) }}
                    </td>
                    <td>
                        <a href="{{ route('getDeleteCart', $cart->id) }}">
                            <button class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>


<section id="after-cart-content" class="mt-3 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Shipping Details</h5>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus eaque explicabo,
                            adipisci enim sequi dolorum, quaerat molestias eveniet ducimus tempora magnam temporibus
                            doloremque repellendus vel eos. Placeat veniam dolorem dignissimos ipsum aspernatur velit?
                            Recusandae quibusdam quas eligendi!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Card Totals</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-stripped">
                            <tbody>
                                <tr>
                                    <td>Sub Total</td>
                                    <td class="text-center">Rs.
                                        {{ $total_amount }}
                                    </td>

                                </tr>
                                <tr>
                                    <td>Shipping Charge</td>
                                    <td class="text-center">Rs. 100 (All Over Nepal)</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    @if(is_null($cart_items))
                                    <td class="text-center">Rs. 0</td>

                                    @else
                                    <td class="text-center">Rs. {{ $total_amount + 100}}</td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <a href="{{ route('getHome') }}">
                    <button class="btn last-button back-to-shopping">Back To Shopping</button>
                </a>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('getProceedToCheckout') }}">
                    <button class="btn last-button proceed-to-checkout">Proceed To Checkout</button>
                </a>
            </div>
        </div>
    </div>
</section>


@endsection