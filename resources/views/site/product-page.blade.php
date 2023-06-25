@extends('layouts.template', ['activePage' => 'productwithcategory'])
@section('navbar')


<head>
    <style>
    .rating {
        color: var(--dec-color);
    }

    .cart-button {
        width: 150px;
        transition: 1.3s ease-in-out;
        height: 45px;
    }

    .cart-button:hover {
        border: 1px solid var(--top-header-bg);
        background-color: var(--top-header-bg);
    }
    </style>
</head>


<section id="upper-header">
    <div class="container">
        <div class="box-padding">
            <div class="box">
                <div class="upper-part">
                    <h4>{{ $product->product_title }}</h4>
                    <h6>
                        <a href="{{ url('/') }}">
                            <span class="home">
                                Home
                            </span>
                        </a>
                        <a href="">
                            <span class="category">
                                / {{ $product->category->category_title}}
                            </span>
                        </a>
                        <span class="slash">
                            /
                        </span>
                        <a href="{{ route('productPage', $product->slug) }}">
                            <span class="second">
                                {{ $product->product_title }}
                            </span>
                        </a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="product-main-content">
    <div class="container">
        <div class="product-content">
            <div class="row">
                <div class="col-md-5">
                    <div class="product-image">
                        <img width="430px" src="{{ asset('uploads/product/' . $product->product_image) }}"
                            alt="{{ $product->product_title }}">
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="product-title" style="color: var(--top-header-bg);">
                        <h3 class="fw-bold">{{ $product->product_title }}</h3>
                    </div>
                    <div class="product-rating">
                        <span><i class="fa-solid fa-star rating"></i></span>
                        <span><i class="fa-solid fa-star rating"></i></span>
                        <span><i class="fa-solid fa-star rating"></i></span>
                        <span><i class="fa-solid fa-star rating"></i></span>
                        <span><i class="fa-regular fa-star-half-stroke rating"></i></span>
                        <span class="rating-in-percent text-dark fw-bold">4.5%</span>
                        <div class="add-review">
                            <button class="btn btn-sm text-primary" style="outline: none; border: none;">
                                <h6>Add Reviews.</h6>
                            </button>
                        </div>
                    </div>
                    <div class="product-cost" style="color: var(--top-header-bg);">
                        <p class="fw-bold"><span>Rs. {{ $product->orginal_cost }}</span></p>
                    </div>
                    <div class="product-page-add-to-cart">
                        <button class="btn btn-outline-dark cart-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="add-to-cart-title">Add To Cart</span>
                        </button>
                    </div>
                    <hr class="text-dark fw-bold">
                    <div class="product-description text-dark">
                        <h6 class="fw-bold">Description</h6>
                        <p>{{ $product->product_full_description }}</p>
                    </div>
                    <div class="brand-name text-dark">
                        <h6 class="fw-bold ">Brand: {{ $product->brand }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection