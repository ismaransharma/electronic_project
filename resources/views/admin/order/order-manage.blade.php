@extends('layouts.app', ['activePage' => 'Manage'])

@section('content')

<head>
    <style>
    img {
        height: 50px;
        width: 50px;
    }
    </style>
</head>

<?php

// dd($orders);

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Order</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Order</th>
                            <th>Date</th>
                            <th>Customer Details</th>
                            <th>Total</th>
                            <!-- <th>Shipping Address</th> -->
                            <th>Full Address</th>
                            <th>Payment Status</th>
                            <th>Payment Method</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->cart_code }}</td>
                            <td>{{ $order->created_at->format('M d, Y H:m:s') }}</td>
                            <td>
                                {{ $order->name }} <br>
                                {{ $order->email }} <br>
                                {{ $order->mobile_number }}
                            </td>
                            <td>Rs. {{ $order->payment_amount  }}</td>
                            <!-- <td>Shipping Address here</td> -->
                            <td>{{ $order->address }}</td>
                            <td>
                                @if ($order->payment_status == 'Y')
                                <h6 class="fw-bold text-success">Completed</h6>
                                @else
                                <h6 class="fw-bold text-danger">Pending</h6>
                                @endif
                            </td>
                            <td>
                                @if ($order->payment_method == 'cod')
                                <h6 class="fw-bold text-success">Cash on Delivery</h6>
                                @else
                                <h6 class=" fw-bold text-danger">Online Payment</h6>
                                @endif
                            </td>
                            <td style="width: 121px;">
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#view-{{ $order->cart_code }}">View</button>
                                @if ($order->payment_method == 'cod')
                                <br>
                                <div class="toggle-payment-padding" style="padding-top: 5px;">
                                    <a href="{{ route('makePaymentComplete', $order->id) }}"
                                        onclick="return confirm('Are you sure you want to change payment status?');">
                                        Toggle Payment
                                    </a>
                                </div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@foreach ($orders as $order1)
<?php
    $carts = App\Models\Cart::where('cart_code', $order1->cart_code)->get();
    if ($carts) {
        $total_amount = App\Models\Cart::where('cart_code', $order1->cart_code)->sum('total_price');
    }

    // dd($order1->additional_information)
?>

<!-- Modal for view Order-->
<div class="modal fade" id="view-{{ $order1->cart_code }}" tabindex="-1"
    aria-labelledby="#view-{{ $order1->cart_code }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Items - {{ $order1->cart_code }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <table class="table">
                        <tbody>
                            @foreach ($carts as $cart)
                            <tr>
                                <td>
                                    <img src="{{ asset('uploads/product/' . $cart->getProductFromCart->product_image) }}"
                                        alt="{{ $cart->getProductFromCart->product_title }}" class="img-fluid"
                                        style="height: 100px; width: 100px;">
                                </td>
                                <td>
                                    <p>{{ $cart->getProductFromCart->product_title }} <br>
                                        {{ $cart->getProductFromCart->category->category_title }} <br>
                                        Rs.
                                        {{ $cart->getProductFromCart->orginal_cost - $cart->getProductFromCart->discounted_cost }}
                                    </p>
                                    <div class="additional_information">
                                        @if ($order1->additional_information)
                                        <b>Additional Information:- {{ $order1->additional_information }}</b>

                                        @else
                                        <b>Additional Information: Null</b>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row top-bottom-border p-2">
                        <div class="col-md-6">Sub Total:</div>
                        <div class="col-md-6 text-right cost">{{ $total_amount }}
                        </div>
                    </div>
                    <div class="row top-bottom-border p-2">
                        <div class="col-md-6">Shipping Charge:</div>
                        <div class="col-md-6 text-right cost">
                            Rs. 100 | All Over Nepal
                            <!-- {{ $order1->address }} -->
                        </div>
                    </div>
                    <div class="row top-bottom-border p-2">
                        <div class="col-md-6">Grand Total:</div>
                        <div class="col-md-6 text-right cost">Rs. {{ $total_amount + 100}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach


@endsection