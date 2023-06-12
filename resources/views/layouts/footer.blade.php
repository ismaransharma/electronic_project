<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="{{ asset('site/css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css')}}">
</head>

<body>
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
                        <h5><button class="open-in-map">Open In Map</button></h5>
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

    <div class="yield">
        @yield('footer')
    </div>



</body>

</html>












