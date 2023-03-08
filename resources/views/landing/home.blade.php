@extends('landing.homeFrame')
@section('content')

<!-- hero area start -->
<div class="hero-area slider-custom" id="slider-area">
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="offset-md-5 col-md-8">
                    <div class="hero-text mr-ri-l">
                        <h1 style="color: black;">Create Your Dynamic QR Code</h1>
                        <p style="color: black;">Reusable, Design Customisable, Live Statistics and trackable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero area end -->
<!-- service area start -->
<section class="service-area gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <div class="service-icon">
                        <img src="{{asset('homepageRecources/img/icon/service-icon-1.png')}}" alt="">
                    </div>
                    <div class="service-content">
                        <h2>Fully Dynamic</h2>
                        <p>Generate, Print, and Forget! After generating once you can change your link anytime.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <div class="service-icon">
                        <img src="{{asset('homepageRecources/img/icon/service-icon-2.png')}}" alt="">
                    </div>
                    <div class="service-content">
                        <h2>Awesome Design</h2>
                        <p>Style, Color, Logo all are in your hand. Generate your creative QR now.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <div class="service-icon">
                        <img width="53px" src="{{asset('homepageRecources/img/icon/favicon.png')}}" alt="">
                    </div>
                    <div class="service-content">
                        <h2>Track Your Statistics</h2>
                        <p>You can track easily your QR scanning statictics. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service area start -->
<!-- About area start -->
<section id="about" class="about-area pt-130">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-content">
                    <h2>What is a QR Code?</h2>
                    <p>QR code is a two-dimensional barcode that can be scanned by the camera of a smartphone or tablet. A QR (Quick Response) code holds information that can be read by a QR code scanner, usually a smartphone camera or app, and can be shared online or printed.</p> 
                    <p>Scanning a QR code triggers a specific action such as bringing a visitor to a particular product page, to your social media account, to connect to WiFi, and so much more. QR codes can also be used to track inventory, product IDs, and documents.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-img">
                    <img style="width: 80%; float: right;" src="{{asset('homepageRecources/img/other/middle-2.png')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About area End -->
<!-- Feature area start -->
<section id="features" class="feature-area gray-bg pt-128 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading pb-85 text-center">
                    <h2>QR Code Applications & <br> Use Cases</h2>
                    <p>Most customers today use smartphones, so they have the ability to easily scan your QR code and connect directly with your business. Find out the best ways to use QR codes to enhance your business, depending on what industry you’re in and how you’d like to serve your users. Use our QR code generator and start enjoying all the benefits it offers.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="awesome-feature text-center">
                    <div class="awesome-feature-icon">
                        <span><i class="icofont icofont-qr-code"></i></span>
                    </div>
                    <div class="awesome-feature-details">
                        <h5>For marketers</h5>
                        <p>Learn how QR codes can help you take your marketing campaigns to the next level</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="awesome-feature text-center">
                    <div class="awesome-feature-icon">
                        <span><i class="icofont icofont-qr-code"></i></span>
                    </div>
                    <div class="awesome-feature-details">
                        <h5>For restaurants</h5>
                        <p>Explore how you can give your customers a safer, more direct experience in your establishment with QR codes</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="awesome-feature text-center">
                    <div class="awesome-feature-icon">
                        <span><i class="icofont icofont-qr-code"></i></span>
                    </div>
                    <div class="awesome-feature-details">
                        <h5>For Commerce</h5>
                        <p>We will show you how you can use QR codes to expand your reach, drive more leads, and boost your conversions</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="awesome-feature text-center">
                    <div class="awesome-feature-icon">
                        <span><i class="icofont icofont-qr-code"></i></span>
                    </div>
                    <div class="awesome-feature-details">
                        <h5>For agencies</h5>
                        <p>Show a whole new world of clients how you can solve their problems and improve their ROI</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature feature area end -->

@endsection