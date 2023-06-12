@extends('layouts.navbar')

@section('navbar')



<div id="container">
    <div class="services-title">
        <span>Our Services</span>
    </div>
    <div class="box-padding">
        <div class="box">
            <div class="images">
                <img src="{{ asset('site/images/fast-shipping.png')}}" alt="communication png">
            </div>
            <div class="communication-description">
                <div class="title">
                    <span>Fast Shipping</span>
                </div>
                <div class="main-description">
                    <p>We offer fast and reliable shipping to ensure your products reach you on time.</p>
                </div>
                <div class="more-button">
                    <button class="btn">More</button>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="images">
                <img width="250px" src="{{ asset('site/images/safe-checkout.png')}}" alt="">
            </div>
            <div class="communication-description">
                <div class="title">
                    <span>Secure Checkout</span>
                </div>
                <div class="main-description">
                <p>Your transactions are safe and secure with our encrypted checkout process.</p>
                </div>
                <div class="more-button">
                    <button class="btn">More</button>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="images">
                <img src="{{ asset('site/images/customer-service.png')}}" alt="happy customer png">
            </div>
            <div class="communication-description">
                <div class="title">
                    <span>24/7 Customer Support</span>
                </div>
                <div class="main-description">
                <p>Our dedicated support team is available 24/7 to assist you with any queries.</p>
                </div>
                <div class="more-button">
                    <button class="btn">More</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection