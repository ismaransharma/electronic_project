<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap ko css link gareko -->
    <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">

    <!-- fontawesome ko css link gareko -->
    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css') }}">

    <!-- toastr ko css link gareko -->
    <link rel="stylesheet" href="{{ asset('site/toastr/toastr.css') }}">

    <!-- Css link gareko -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">

    <style>
    .login-btn:hover {
        background: none;
    }

    .cart-table {
        width: 763px;
    }
    </style>
</head>

<body>



    <div class="upper-main-header-and-nav">
        <!-- Top Header Stars Here -->
        <section id="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12 col-12 text-sm-center">
                        <div class="top-header-content">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 top-header-location-padding">
                                    <i class="fa-solid fa-location-dot icon"></i> <span class="top-header-text">Pokhara
                                        -
                                        17, Birauta</span>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 number-padding">
                                    <i class="fa-solid fa-phone icon"></i>
                                    <class class="top-header-text">+977 9876543210</class>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 text-end icons">
                        <div class="top-header-social-icon">
                            <button class="box btn nav-hover" data-bs-toggle="modal" data-bs-target="#checkCartModal">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                            <a href="{{ route('login') }}">
                                <button class="btn login-btn"
                                    style="outline: none; border: none; background: none; color: blue;"><i
                                        class="fa-solid fa-user"></i></button>
                            </a>
                        </div>
                        <!-- <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 text-end icons">
                        <div class="top-header-social-icon">
                            <a class="nav-icon-hover" href="">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a class="nav-icon-hover" href="">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a class="nav-icon-hover" href="">
                                <i class="fa-regular fa-envelope"></i>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Top Header Ends Here -->

        <?php
        $navbar_categories = \App\Models\Category::where('deleted_at', null)
            ->where('status', 'active')
            ->get();
        ?>

        <!-- navbar section starts here -->
        <section id="top-header-navbar">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/')}}">
                        <h4>Gada Electronic</h4>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto text-center">
                            <li class="nav-item">
                                <a class="nav-link {{ $activePage == 'homepage' ? 'activePage' : '' }}"
                                    aria-current="page" href="{{ url('/')}} ">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $activePage == 'aboutpage' ? 'activePage' : '' }}"
                                    href="{{ url('/about-us') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $activePage == 'servicepage' ? 'activePage' : '' }}"
                                    href="{{ url('/services')}}">Our Services</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ $activePage == 'productwithcategory' ? 'activePage' : '' }}"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Products
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach ($navbar_categories as $navbar_category)
                                    <li>
                                        <a class="dropdown-item {{ $activePage == '' ? 'activePage' : ''}}"
                                            href="{{ route('getProductsByCategory', $navbar_category->slug) }}">
                                            {{ $navbar_category->category_title }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $activePage == 'contactpage' ? 'activePage' : '' }}"
                                    aria-current="page" href="{{ url('/contact-us')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <!-- navbar section ends here -->
    </div>


    <!-- Main Content  -->
    <div class="yield">
        @yield('navbar')
    </div>



    <!-- Footer Sectin Starts Here -->
    <!-- <div id="footer" class="footer-container">
        <div class="footer-box-padding">
            <div class="footer-box">
                <div class="footer-content">
                    <div class="first-box-padding footer-inner-box-padding">
                        <div class="first-box">
                            <h3>Quick Links</h3>
                            <h5><a href="{{ url('/')}}">◗ <span style="padding-left: 2px;">Home</span></a></h5>
                            <h5><a href="{{ url('/about-uS')}}">◗ <span style="padding-left: 2px;">About
                                        US</span></a>
                            </h5>
                            <h5><a href="{{ url('/services')}}">◗ <span style="padding-left: 2px;">Our
                                        Services</span></a></h5>
                            <h5><a href="{{ url('/laptop-category')}}">◗ <span style="padding-left: 2px;">Laptop
                                        Category</span></a></h5>
                            <h5><a href="{{ url('/mobile-category')}}">◗ <span style="padding-left: 2px;">Mobile
                                        Category</span></a></h5>
                            <h5><a href="{{ url('/watch-category')}}">◗ <span style="padding-left: 2px;">Watch
                                        Category</span></a></h5>

                        </div>
                    </div>
                    <div class="second-box-padding footer-inner-box-padding">
                        <div class="second-box">
                            <h3>Top Categoies</h3>
                            <h5><a href="{{ url('laptop-category')}}">Laptop</a></h5>
                            <h5><a href="{{ url('/mobile-category')}}">Mobile</a></h5>
                            <h5><a href="{{ ('/watch-category')}}">Watch Category</a></h5>
                        </div>
                    </div>
                    <div class="third-box-padding footer-inner-box-padding">
                        <div class="third-box">
                            <h3>Help</h3>
                            <h5>Delivery</h5>
                            <h5>Returns</h5>
                            <h5>Free Shipping</h5>
                            <h5>Secure Payment</h5>
                            <h5> 24/7 Customer Support</h5>
                        </div>
                    </div>
                    <div class="fourth-box-padding footer-inner-box-padding">
                        <div class="fourth-box">
                            <h3>About Us</h3>
                            <h5>Terms and Conditions of Sales</h5>
                            <h5>Privacy Policy</h5>
                            <h5>Responsibility</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="second-footer-padding">
            <div class="second-footer">
                <div class="shop-name-padding">
                    <div class="shop-name">
                        <h2 style="font-weight: normal; padding-top: 8px;">Gada Electronic</h2>
                    </div>
                </div>
                <div class="store-location-box-padding second-box-width">
                    <div class="store-location">
                        <h3>Store Location</h3>
                        <h5>Andheri Mumbai</h5>
                        <a
                            href="https://www.google.com/maps/place/Gada+Electronics/@19.1134324,72.8680276,17z/data=!3m1!4b1!4m6!3m5!1s0x3be7c94822747c13:0xbad1bc5c1af8d8b4!8m2!3d19.1134273!4d72.8706025!16s%2Fg%2F11fnqxltp5?entry=ttu">
                            <h5><button class="open-in-map">Open In Map</button></h5>
                        </a>
                    </div>
                </div>
                <div class="follow-vans-padding second-box-width">
                    <div class="follow-vans">
                        <h3>Follow Vans</h3>
                        <h5>
                            <i class="fa-brands fa-square-facebook footer-social-icon"></i>
                            <i class="fa-brands fa-square-twitter footer-social-icon"></i>
                            <i class="fa-brands fa-square-youtube footer-social-icon"></i>
                        </h5>
                    </div>
                </div>
                <div class="small-offer-padding second-box-width">
                    <div class="small-offer">
                        <h4>Sign Up to get 10% off in your first product</h4>
                        <form>
                            <input class="email" type="email" name="email" id="email" placeholder="Your Email Address">
                        </form>
                    </div>
                </div>
                <div class="copyright-padding second-box-width">
                    <div class="copyright">
                        <h5><i class="fa-regular fa-copyright"></i> Gada Electronic, All Rights Reserved</h5>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Footer Sectin Ends Here -->


    <?php

        $cart_code = session('cart_code');

        // dd($cart_code);

        $cart_items = \App\models\Cart::where('cart_code', 'abc')->get();

        if($cart_code){
            $cart_items = \App\models\Cart::where('cart_code', $cart_code)->get();
            $total_amount = $cart_items->sum('total_price');
        }

    ?>

    <!-- Shopping Cart Modal -->
    <div class="modal fade" id="checkCartModal" tabindex="-1" aria-labelledby="checkCartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="checkCartModalLabel"><b>Shopping Cart</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($cart_items->count() > 0)
                    <div class="container-fluid">
                        <div class="cart-model-ko-main-content">
                            <div class="cart-system">
                                <div class="row">
                                    <div class="col-md-6 text-dark">
                                        <table class="table table-stripped cart-table">
                                            <thead>
                                                <tr>
                                                    <th>Product Title</th>
                                                    <th>Product Image</th>
                                                    <th>Product Quantity</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach ($cart_items as $cart)
                                            <tbody>
                                                <tr>
                                                    <td class="product_title_cart">
                                                        {{ $cart->getProductFromCart->product_title }}</td>
                                                    <td>
                                                        <img height="45px" width="45px"
                                                            src="{{ asset('uploads/product/' . $cart->getProductFromCart->product_image) }}"
                                                            alt="$cart->getProductFromCart->product_title">
                                                    </td>

                                                    <td>{{ $cart->quantity }}</td>
                                                    <td>Rs.
                                                        {{ $cart->getProductFromCart->orginal_cost - $cart->getProductFromCart->discounted_cost}}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('getDeleteCart', $cart->id) }}">
                                                            <button class="btn btn-danger">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                            <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Total Amount:</td>
                                                    <td>Rs. {{ $total_amount }}</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-buttons mt-2">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <a href="{{ route('getCart') }}">
                                            <button class="go-to-cart-btn cart-buttons">
                                                <h5>Go To Cart</h5>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-md-12 ">
                                        <a href="{{ route('getProceedToCheckout') }}">
                                            <button class="proceed-to-checkout-btn cart-buttons">
                                                <h5>Proceed To Checkout</h5>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @else
                    <div class="modal-body">
                        <div class="alert alert-danger">No data found!</div>
                    </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <input type="submit" class="btn btn-primary" value="Save changes"> -->
                </div>
            </div>
        </div>
    </div>




    <!-- jquery link gareko -->
    <script src="{{ asset('site/jquery/jquery.js') }}"></script>

    <!-- popper javascript link gareko -->
    <script src="{{ asset('site/bootstrap/popper.js') }}"></script>

    <!-- bootstrap ko js link gareko -->
    <script src="{{ asset('site/bootstrap/bootstrap.js') }}"></script>

    <!-- fontawesome ko js link gareko -->
    <script src="{{ asset('site/fontawesome/all.js')}}"></script>

    <!-- Javascript link gareko -->
    <script src="{{ asset('site/javascript/script.js') }}"></script>

    <!-- Toastr Js -->

    <script src="{{ asset('site/toastr/toastr.min.js') }}"></script>

</body>

</html>