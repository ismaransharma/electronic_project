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
                <div class="small-offer-padding second-box-width ">
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



    <section id="new-footer">
        <div class="new-footer-box-padding">
            <div class="new-footer-box">
                <div class="row">
                    <div class="col-md-3">
                        <div class="about-info">
                            <h5>ABOUT INFO</h5>
                            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, excepturi!</h6>
                        </div>
                        <div class="icon-and-address">
                            <i></i><span>
                                <h5>Address: Ashok Nagar</h5>
                            </span>
                            <i></i><span>
                                <h5>Email: abc@gmail.com</h5>
                            </span>
                            <i></i><span>
                                <h5>Phone: 9876543210</h5>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-information">
                            <h5>INFORMATION</h5>
                            <h6><i></i><span>Sign in</span></h6>
                            <h6><i></i><span>View Cart</span></h6>
                            <h6><i></i><span>My Wishlist</span></h6>
                            <h6><i></i><span>My Orders</span></h6>
                            <h6><i></i><span>Help</span></h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>INFO LINKS</h5>
                        <h6><i></i>Home</h6>
                        <h6><i></i>About Us</h6>
                        <h6><i></i>Shop</h6>
                        <h6><i></i>Blog</h6>
                        <h6><i></i>Contact Us</h6>
                    </div>
                    <div class="col-md-3">
                        <h5>SUPPORTED AREA</h5>
                        <h6><i></i>Hello &amp; Contact</h6>
                        <h6><i></i>Shipping &amp; Taxes</h6>
                        <h6><i></i>Return Policy</h6>
                        <h6><i></i>Affliates</h6>
                        <h6><i></i>Legal Notice</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>