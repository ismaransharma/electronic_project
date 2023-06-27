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
    </style>
</head>


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
        <form action="">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h6>Billing Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <h6>Name*</h6>
                                <input type="text" name="name" id="name" class="form-control" required />
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <h6>Mobile Number*</h6>
                                        <input type="number" name="mobile_number" id="mobile_number"
                                            class="form-control" required />
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <h6>Email*</h6>
                                        <input type="email" name="email" id="email" class="form-control" required />
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <h6>Shipping Address*</h6>
                                        <select name="address" id="address" class="form-control " required>
                                            <option value="">Choose Country</option>
                                            <option value="1">Nepal</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <h6>Full Address*</h6>
                                        <input type="text" name="address" id="address" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <h6>Addition Information*</h6>
                                    <textarea name="info" id="info" cols="68" rows="8" class="form-control"
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding-top: 175px;">
                    <div class="payment-section">
                        <div class="card">
                            <div class="card-header">
                                <h6>Your Orders</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-stripped">
                                    <tbody>
                                        <tr>
                                            <td style="border: 1px solid #000;">Pic</td>
                                            <td style="border: 1px solid #000;" class="text-center">
                                                <h6>Product Name</h6>
                                                <h6>Brand</h6>
                                                <span>Quantity</span>
                                                <span>Orginal Cost</span>
                                                <hr>
                                                <h6>Total Price</h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="choose-payment-method">
                                    <select name="" id="" class="form-control">
                                        <option value="">Choose Payment Method</option>
                                        <option value="1">Cash On Delivery</option>
                                    </select>
                                    <div class="place-order mt-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="place-order-button">Place Order</button>
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