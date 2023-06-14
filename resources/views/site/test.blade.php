<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"" />

</head>

<body>
    <section id="upper-header">
    <div class="container">
        <div class="box-padding">
            <div class="box">
                <h4>Get in Touch</h4>
                <h6><a href="{{ url('/') }}"><span class="home">Home</span>
                    </a> <span class="slash">/</span>
                    <a href="#"><span class="contact-us">Contact Us</span>
                    </a>
                </h6>
            </div>
        </div>
    </div>
    </section>

    <section id="map-here">
        <div class="container">
            <div class="map-box-padding">
                <div class="map-box">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3293.7260874667436!2d72.86802757449111!3d19.11343235079771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c94822747c13%3A0xbad1bc5c1af8d8b4!2sGada%20Electronics!5e1!3m2!1sen!2snp!4v1686645220471!5m2!1sen!2snp"
                        width="800" height="500" style="border:0;" class="gada-electronic-map" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="second-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box-padding">
                        <div class="box">
                            <i class="fa-solid fa-location-crosshairs"></i>
                            <h3>Location - Shop</h3>
                            <h5>Ashok Nagar, Mumbai</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-padding">
                        <div class="box">
                            <i class="fa-solid fa-phone"></i>
                            <h3>Phone</h3>
                            <h5><span>061 005550</span>, <span>+977-9876543210</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-padding">
                        <div class="box">
                            <i class="fa-solid fa-message"></i>
                            <h3>Email</h3>
                            <h5>gadaelectronic@gmail.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-form">
        <div class="container">
            <form>

                <div class="form-flex">
                    <div class="form-content">
                        <h6><input class="contact-form" type="text" name="name" placeholder="Name"></h6>
                        <h6><input class="contact-form" type="email" name="email" placeholder="Email"></h6>
                        <h6><input class="contact-form" type="text" name="subject" placeholder="Subject"></h6>
                    </div>

                    <div class="form-contact-message">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message..."></textarea>
                    </div>
                </div>

                <div class="submit-form">
                    <button class="button" id="submit-button">Submit Form</button>
                </div>
            </form>
        </div>
    </section>





    <script>
    const submitButton = document.getElementById('submit-button');

    function moveButtonRandomly() {
        const randomX = Math.floor(Math.random() * 400) - 190; // Random value between -200 and 200
        const randomY = Math.floor(Math.random() * 200) - 90; // Random value between -100 and 100
        submitButton.style.transform = `translate(${randomX}px, ${randomY}px)`;
    }

    submitButton.addEventListener('mouseover', moveButtonRandomly);
    </script>

    </body>

</html>