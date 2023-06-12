@extends('layouts.template', ['activePage' => 'homepage'])
@section('navbar')

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
                    <img class="about-wala-image" src="{{ asset('site/images/about-section.jpg') }}" alt="ABOUT IMAGE"
                        title="Gada Electronic" class="img-fluid">
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
            <div class="service-bg">
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

<!-- Category Section Starts Here -->
<div id="category">
    <div class="container">
        <div class="section-title">
            <h6>Our Category</h6>
            <h2>Shop By <span>Category  </span></h2>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="box-padding">
                    <div class="box">

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="box-padding">
                    <div class="box">

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="box-padding">
                    <div class="box">

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="box-padding">
                    <div class="box">

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="box-padding">
                    <div class="box">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category Section Ends Here -->


@endsection