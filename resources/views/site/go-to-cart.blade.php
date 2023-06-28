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
                <tr>
                    <td>Laptop</td>
                    <td>Laptop.png</td>
                    <td>Rs. 2500</td>
                    <td>1</td>
                    <td>Rs. 2500</td>
                    <td>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
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
                                @foreach ($carts as $cart)
                                <tr>
                                    <td>Sub Total</td>
                                    <td class="text-center">Rs. 2500</td>

                                </tr>
                                <tr>
                                    <td>Shipping Charge</td>
                                    <td class="text-center">Rs. 100 (All Over Nepal)</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td class="text-center">Rs. 2500</td>
                                </tr>
                                @endforeach
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