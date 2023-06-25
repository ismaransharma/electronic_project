@extends('layouts.template', ['activePage' => 'productwithcategory'])
@section('navbar')

<section id="upper-header">
    <div class="container">
        <div class="box-padding">
            <div class="box">
                <div class="upper-part">
                    <h4>{{ $category->category_title }}</h4>
                    <h6>
                        <a href="{{ url('/') }}">
                            <span class="home">
                                Home
                            </span>
                        </a>
                        <a href="">
                            <span class="category">
                                / {{ $category->category_title}}
                            </span>
                        </a>
                        <span class="slash">
                            /
                        </span>
                        <a href="">
                            <span class="second">
                                {{ $category->category_title }}
                            </span>
                        </a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>





<section id="product" class="section mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="product-row">
                @foreach($category->activeProducts as $product)
                <div class="col-md-3">
                    <div class="box-divider">
                        <div class="product-box-padding">
                            <div class="product-box">
                                <a href="{{ route('productPage', $product->slug) }}">
                                    <button class="home-product-button">
                                        <div class="product-image">
                                            <div class="product-main-image">
                                                <img src="{{ asset('uploads/product/'. $product->product_image)}}"
                                                    alt="{{ $product->product_title }}">
                                            </div>
                                            <!-- <div class="heart-and-cart">
                                            <span><i class="fa-regular fa-heart"></i></span>
                                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                                        </div> -->
                                        </div>
                                        <div class="product-details">
                                            <div class="product-name">
                                                <span class="product-name-title">{{ $product->product_title }}</span>
                                                <br>
                                                <span class="product-price">{{ $product->orginal_cost }}</span>
                                                <!-- <span class="product-price">RS. {{ $product->discounted_cost }}</span> -->
                                            </div>
                                            <div class="product-description mt-2" style="height: 60px;">
                                                <p>{{ Str::limit($product->product_full_description ?? 'No Title', 50)}}Read
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
                    </div>
                    @endforeach
                </div>
            </div>
</section>


@endsection