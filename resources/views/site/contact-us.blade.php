@extends('layouts.navbar')

@section('navbar')

<head>
    <link rel="stylesheet" href="{{ asset('site/css/contact-us.css')}}">
</head>

<section id="contact-us">
    <div class="container">
        <div class="box-padding">
            <div class="box">
                <div class="white-box">
                    <div class="contact-us-title">
                        <h4>Contact Us</h4>
                    </div>
                    <div class="inner-box-padding">
                        <div class="inner-box">
                            <div class="small-pic-padding">
                                <div class="small-pic">
                                    <img src="{{ asset('site/images/small-img.png')}}" alt="">
                                </div>
                                <div class="first-box-padding">
                                    <div class="first-box">
                                        <h4>Talk to a memeber of our community</h4>
                                    </div>
                                    <div class="first-box-description">
                                        <p>We will help you to find the right product and pricing for your business.</p>
                                    </div>
                                </div>
                                <div class="contact-sales-button">
                                    <button class="contact-sales">Contact Sale</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-box">
                    <img src="{{ asset('site/images/contact-us-bg.jpg') }}" alt="contact-us-background-image">
                    <div class="inner-box-padding">
                        <div class="innerbox">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection