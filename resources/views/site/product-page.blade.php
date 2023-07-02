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

<?php

// dd($category->slug);

?>

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
                        <div class="product-main-image">
                            <img width="430px" src="{{ asset('uploads/product/' . $product->product_image) }}"
                                alt="{{ $product->product_title }}">
                        </div>
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
                        <span class="fw-bold">Rs. {{ $product->orginal_cost - $product->discounted_cost }}</span>
                        <span class="fw-bold"
                            style="font-size: 14px; padding-left: 5px; text-decoration: line-through;">Rs.
                            {{ $product->orginal_cost }}</span>


                        <div class="show-stock" style="color: var(--top-header-bg);">
                            <p class="fw-bold">Stock: {{ $product->product_stock }}</p>
                        </div>
                    </div>
                    <div class=" product-page-add-to-cart">
                        <div class="row">
                            <form action="{{ route('postAddToCart', $product->slug) }}" method="POST" class="form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="number" name="quantity" id="quantity" min="1" max="30" value="1"
                                            placeholder="Quantity"
                                            style="height: 45px; width: 170px; text-align: center;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="add-to-cart-button">
                                            <button class="btn btn-outline-dark cart-button">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                                <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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

<?php $related_products = App\Models\Product::where('category_id', $product->category_id)
        ->where('deleted_at', null)
        ->where('status', 'active')
        ->where('id', '!=', $product->id)
        ->limit(4)
        ->get(); ?>
<section id="product" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-sale">
                    <h4>Related Product</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($related_products as $item)
            <div class="product-box-padding" style="padding-left: 54px;">
                <div class="product-box">
                    <div class="product-image">
                        <div class="product-main-image">
                            <img src="{{ asset('uploads/product/'. $item->product_image)}}"
                                alt="{{ $item->product_title }}" />
                        </div>
                        <div class="heart-and-cart">
                            <a href="#">
                                <button>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <a href="{{ route('productPage', $item->slug) }}">
                        <button class="home-product-button">
                            <div class="product-details">
                                <div class="product-name">
                                    <span class="product-name-title">{{ $item->product_title }}</span>
                                    <br>
                                    @if ($item->discounted_cost > 0)
                                    <span
                                        class="product-price">Rs.{{ $item->orginal_cost - $item->discounted_cost}}</span>
                                    <span class="fw-bold"
                                        style="font-size: 14px; text-decoration: line-through; padding-left: 5px;">Rs.
                                        {{ $item->orginal_cost }}</span>

                                    @else
                                    <span class="fw-bold">Rs. {{ $item->orginal_cost }}</span>
                                    @endif
                                    <!-- <span class="product-price">RS. {{ $product->discounted_cost }}</span> -->
                                </div>
                                <div class="product-description mt-2" style="height: 60px;">
                                    <p>{{ Str::limit($item->product_full_description ?? 'No Title', 50)}}Read
                                        More..</p>
                                    <!-- <p>{{ $product->product_little_description }} Read More..</p> -->
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
                                    <span class="btn">View Details</span>
                                </div>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection