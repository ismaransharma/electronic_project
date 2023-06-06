@extends('layouts.navbar')

@section('navbar')

<head>
    <link rel="stylesheet" href="{{ asset('site/css/laptop.css')}}">
</head>

<section id="product">
    <div class="container">
        <div class="top-header-laptop-category-padding">
            <div class="top-header-laptop-category">
                <div class="laptop-category-all-in-one top-header-category">
                    <a href="{{ url('/laptop-category')}}">
                        <h5 class="latop-category active">All in One</h5>
                    </a>
                </div>
                <div class="laptop-category-gaming-laptop top-header-category">
                    <a href="{{ url('/categroy-gaming-laptop')}}">
                        <h5 class="latop-category">Gaming Laptop</h5>
                    </a>
                </div>
                <div class="laptop-category-budget-laptop top-header-category">
                    <a href="{{ url('/category-budget-laptop')}}">
                        <h5 class="latop-category">Budget Laptop</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="top-sale">
            <h4>Latest Laptops</h4>
        </div>
        <div class="product-row">
            @for ($i = 0; $i < 4; $i++) <div class="box-divider">
                <div class="product-box-padding">
                    <div class="product-box">
                        <div class="product-image">
                            <div class="product-main-image">
                                <img src="{{ asset('site/images/category-images/dell-vostro-3500.png')}}" alt="">
                            </div>
                            <!-- <div class="heart-and-cart">
                                            <span><i class="fa-regular fa-heart"></i></span>
                                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                                        </div> -->
                        </div>
                        <div class="product-details">
                            <div class="product-name">
                                <span class="product-name-title">Dell Vostro 3500</span>
                                <span class="product-price">$596.10</span>
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
                @endfor
        </div>
    </div>
    </div>
    </div>
</section>


@endsection