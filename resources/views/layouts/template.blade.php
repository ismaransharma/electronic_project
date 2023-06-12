<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gada Electronic | Home </title>

    <!-- bootstrap ko css link gareko -->
    <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">

    <!-- fontawesome ko css link gareko -->
    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css') }}">

    <!-- Css link gareko -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">


</head>

<body>

    @yield('nav')

    <div class="upper-main-header-and-nav">
        <!-- Top Header Stars Here -->
        <section id="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-xl-12 col-sm-12 col-12 text-sm-center">
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

                    <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 text-end d-none d-md-block icons">
                        <div class="top-header-social-icon">
                            <a href="">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fa-regular fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Top Header Ends Here -->

        <!-- navbar section starts here -->
        <section id="top-header-navbar">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/home')}}">
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
                                <a class="nav-link home" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/services')}}">Our Services</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/laptop-category')}}">Laptop</a></li>
                                    <li><a class="dropdown-item" href="#">Mobile</a></li>
                                    <li><a class="dropdown-item" href="#">Watch</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link contact-us" aria-current="page"
                                    href="{{ url('/contact-us')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <!-- navbar section ends here -->
    </div>



    <!-- Silder section Starts Here -->

    <section id="slider">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="200">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="slider-center">
                                    <div class="slider-content">
                                        <h1>
                                            Choose Your latest <br> <span>Electronic</span> Products
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa saepe
                                            laudantium
                                            voluptate facilis quis debitis!
                                        </p>

                                        <div class="button">
                                            <a href="" class="btn">Explore Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 sm-hide">
                                <div class="slider-content">
                                    <div class="slider-center">
                                        <div class="slider-image">
                                            <img src="{{ asset('site/images/slider1.png') }}" alt=""
                                                class="img-fluid sliders">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="slider-center">
                                    <div class="slider-content">
                                        <h1>
                                            Choose Your latest <br> <span>Electronic</span> Products
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa saepe
                                            laudantium
                                            voluptate facilis quis debitis!
                                        </p>

                                        <div class="button">
                                            <a href="" class="btn">Explore Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 sm-hide">
                                <div class="slider-content">
                                    <div class="slider-center">
                                        <div class="slider-image">
                                            <img src="{{ asset('site/images/slider2.png') }}" alt=""
                                                class="img-fluid sliders">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="slider-center">
                                    <div class="slider-content">
                                        <h1>
                                            Choose Your latest <br> <span>Electronic</span> Products
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa saepe
                                            laudantium
                                            voluptate facilis quis debitis!
                                        </p>

                                        <div class="button">
                                            <a href="" class="btn">Explore Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 sm-hide">
                                <div class="slider-content">
                                    <div class="slider-center">
                                        <div class="slider-image">
                                            <img src="{{ asset('site/images/slider3.png') }}" alt=""
                                                class="img-fluid sliders3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Section Ends Here -->

    <!-- About Section Starts Here -->
    <section id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h6>About Us</h6>
                        <h2>Learn More <span>About Us</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="about-image">
                        <img class="about-wala-image" src="{{ asset('site/images/about-section.jpg') }}"
                            alt="ABOUT IMAGE" title="Gada Electronic" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque deserunt porro veniam
                            aperiam
                            iure iste sed, ipsa vero architecto nam, harum, laudantium doloribus sunt. Soluta,
                            architecto doloribus. Ipsum, eos omnis.

                        </p>

                        <p style="text-align: center">
                            <a class="btn about-button">Read More</a>
                        </p>
                    </div>

                    <div class="about-video">
                        <iframe width="350px" height="268px" src="https://www.youtube.com/embed/_sx5QZA-jr8"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Ends Here -->

    <!-- Services Section Starts Here -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="services-bg">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="services-box">
                                <i class="fa-solid fa-truck-fast icon"></i>
                                <h3>Free Shipping</h3>
                                <p>Order Over $100</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="services-box">
                                <i class="fa-solid fa-shield icon"></i>
                                <h3>Secure Payment</h3>
                                <p>100% Secure Payment</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="services-box">
                                <i class="fa-solid fa-anchor icon"></i>
                                <h3>Best Price</h3>
                                <p>Guaranteed Low Cost</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="services-box">
                                <i class="fa-solid fa-right-left icon"></i>
                                <h3>Easy Return</h3>
                                <p>Within 30 Days returns</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section Ends Here -->

    <!-- Product item starts here -->
    <section id="product">
        <div class="container">
            <div class="top-sale">
                <h4>Latest Products</h4>
            </div>
            <div class="product-row">
                @for ($i = 0; $i < 4; $i++) <div class="col-md-3">
                    <div class="box-divider">
                        <div class="product-box-padding">
                            <div class="product-box">
                                <div class="product-image">
                                    <div class="product-main-image">
                                        <img src="{{ asset('site/images/earbuds.png')}}" alt="">
                                    </div>
                                    <!-- <div class="heart-and-cart">
                                        <span><i class="fa-regular fa-heart"></i></span>
                                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                                    </div> -->
                                </div>
                                <div class="product-details">
                                    <div class="product-name">
                                        <span class="product-name-title">Wireless Earbuds</span>
                                        <span class="product-price">$10.56</span>
                                    </div>
                                    <div class="product-description">
                                        Lorem ipsum dolor sit amet.
                                    </div>
                                    <div class="product-rating">
                                        <span><i class="fa-solid fa-star rating"></i></span>
                                        <span><i class="fa-solid fa-star rating"></i></span>
                                        <span><i class="fa-solid fa-star rating"></i></span>
                                        <span><i class="fa-solid fa-star rating"></i></span>
                                        <span><i class="fa-regular fa-star-half-stroke rating"></i></span>
                                        <span class="rating-in-percent">4.5%</span>
                                    </div>
                                    <div class="product-add-to-cart">
                                        <span class="btn">Add to Cart 🛒</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
            </div>
        </div>
        </div>
    </section>
    <!-- Product item ends here -->


    <!-- Categories Section Starts Here -->
    <section id="categories">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('site/images/category-laptop.png')}}" alt="">
                            <h6>Laptop</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('site/images/category-laptop.png')}}" alt="">
                            <h6>Laptop</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('site/images/category-laptop.png')}}" alt="">
                            <h6>Laptop</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

























    <!-- Footer Section Starts Here -->
    <div id="footer" class="footer-container">
        <div class="footer-box-padding">
            <div class="footer-box">
                <div class="footer-content">
                    <div class="first-box-padding footer-inner-box-padding">
                        <div class="first-box">
                            <h3>Quick Links</h3>
                            <h5><a href="{{ url('/')}}">◗ <span style="padding-left: 2px;">Home</span></a></h5>
                            <h5><a href="{{ url('/about-uS')}}">◗ <span style="padding-left: 2px;">About US</span></a>
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
                        <h5><a href="https://google.com/maps/place/Gada+Electronics/@19.1134324,72.8680276,17z/data=!3m1!4b1!4m6!3m5!1s0x3be7c94822747c13:0xbad1bc5c1af8d8b4!8m2!3d19.1134273!4d72.8706025!16s%2Fg%2F11fnqxltp5?entry=ttu"><button class="open-in-map">Open In Map</button></a></h5>
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
                <!-- <div class="copyright-padding second-box-width">
                    <div class="copyright">
                        <h5><i class="fa-regular fa-copyright"></i> Gada Electronic, All Rights Reserved</h5>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Footer Section Ends Here -->







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
</body>

</html>