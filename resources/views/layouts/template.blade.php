<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic | E-Commerce</title>

    <!-- bootstrap ko css link gareko -->
    <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">

    <!-- fontawesome ko css link gareko -->
    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css') }}">

    <!-- Css link gareko -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
</head>

<body>

    @yield('nav')

    <!-- Top Header Stars Here -->
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xl-12 col-sm-12 col-12 text-sm-center">
                    <div class="top-header-content">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <i class="fa-solid fa-location-dot icon"></i> <span class="top-header-text">Pokhara -
                                    17, Birauta</span>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
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
    <section id="header-navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container text-center">
                <a class="navbar-brand nav-title" href="#">Electronic </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active-nav" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Our Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Laptop</a></li>
                                <li><a class="dropdown-item" href="#">Mobile</a></li>
                                <li><a class="dropdown-item" href="#">Watch</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- navbar section ends here -->



    <!-- Silder section Starts Here -->

    <section id="slider">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
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
                    <div class="slider-button">
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
        </div>






















        <!-- Silder section ends Here -->











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