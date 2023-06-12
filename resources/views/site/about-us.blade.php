@extends('layouts.template', ['activePage' => 'aboutpage'])
@section('navbar')


<section id="about-us">
    <div class="about-us-header-padding">
        <div class="about-us-header">
            <h6>About Us</h6>
            <a href="{{ url('/')}}"><span>Home</span></a> / <a href="{{ url('/about-us') }}"><span>About Us</span></a>
        </div>
    </div>
</section>

<section id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h6>About Us</h6>
                    <h2>Learn More <span>About Us</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="about-image">
                    <img class="about-wala-image" src="{{ asset('site/images/about-section.jpg') }}" alt="ABOUT IMAGE"
                        title="Gada Electronic" class="img-fluid">
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque deserunt porro veniam
                        aperiam
                        iure iste sed, ipsa vero architecto nam, harum, laudantium doloribus sunt. Soluta,
                        architecto doloribus. Ipsum, eos omnis.

                    </p>

                    <p style="text-align: center">
                        <a class="btn about-button">Read More</a>
                    </p>
                </div>

                <div class="about-video">
                    <iframe width="350px" height="268px" src="https://www.youtube.com/embed/_sx5QZA-jr8"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection