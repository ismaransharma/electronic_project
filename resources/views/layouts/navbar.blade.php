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

    <!-- Css link gareko -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
</head>

<body>

    <!-- Top Header Stars Here -->
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xl-12 col-sm-12 col-12 text-sm-center">
                    <div class="top-header-content">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 top-header-location-padding">
                                <i class="fa-solid fa-location-dot icon"></i> <span class="top-header-text">Pokhara -
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
                    <h4 style="color: var(--top-header-bg); font-weight: 600;">Gada Electronic</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link home" aria-current="page" href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link our-services" href="{{ url('/services') }}">Our Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item laptop" href="{{ url('/laptop-category')}}">Laptop</a></li>
                                <li><a class="dropdown-item" href="#">Mobile</a></li>
                                <li><a class="dropdown-item" href="#">Watch</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link contact-us" aria-current="page" href="{{ url('/contact-us')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- navbar section ends here -->

    <div class="yield">
        @yield('navbar')
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
</body>

</html>