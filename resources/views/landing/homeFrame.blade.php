<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{$title}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png"> -->
        <!-- Place favicon.ico in the root directory -->
		
		<!-- all css here -->
		<!-- <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{asset('homepageRecources/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('homepageRecources/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('homepageRecources/css/icofont.css')}}">
        <link rel="stylesheet" href="{{asset('homepageRecources/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('homepageRecources/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('homepageRecources/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('homepageRecources/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('homepageRecources/css/animated-headlines.css')}}">
        <link rel="stylesheet" href="{{asset('homepageRecources/css/shortcode/shortcodes.css')}}">
        <link rel="stylesheet" href="{{asset('homepageRecources/style.css')}}">
        <link rel="stylesheet" href="{{asset('homepageRecources/css/responsive.css')}}">
        <script src="{{asset('homepageRecources/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navigation" data-bs-offset="0" tabindex="0">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header area start -->
		<header>
			<nav id="header-top" class="navbar navbar-expand-md">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- <a class="navbar-brand" href="#"><img src="{{asset('homepageRecources/img/icon/logo.png')}}" alt="logo" class="img-responsive"></a> -->
					</div>
					<div class="collapse navbar-collapse" id="navigation">
						<ul class="nav nav-pills navbar-nav navbar-right">
							<li class="nav-item"><a class="nav-link" aria-current="page" href="{{route('home-page')}}">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#">About</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
							<li class="nav-item"><a class="nav-link download-btn" href="{{route('login')}}">Login/Register</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- header area end -->


		@yield('content')


		<!-- Copyright Area Start -->
		<div class="copyright-area bg-bottom ptb-70">
			<div class="container">
				<!-- Contact address left -->
				<div class="conct-border row">
					<div class="col-md-4">
						<div class="single-address">
							<div class="media">
								<div class="media-left">
									<i class="icofont icofont-phone"></i>
								</div>
								<div class="media-body text-center">
									<p>+0799 904 374</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-address">
							<div class="media">
								<div class="media-left">
									<i class="icofont icofont-web"></i>
								</div>
								<div class="media-body text-center">
									<p>info@qrcode.co.ke <br> https://qrcode.co.ke</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-address">
							<div class="media">
								<div class="media-left">
									<i class="icofont icofont-social-google-map"></i>
								</div>
								<div class="media-body text-center">
									<p>Magadi Road, <br> Nairobi, Kenya.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Contact address left -->
				<!-- Copyright right -->
				<div class="row">
					<div class="col-12">
						<div class="copyright-area text-center">
							<!-- Copyright social -->
							<div class="contact-social text-center pt-70 pb-35">
								<ul>
									<li>
										<a href="#"><i class="icofont icofont-social-facebook"></i></a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-social-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-social-linkedin"></i></a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-social-youtube"></i></a>
									</li>
								</ul>
							</div>
							<!-- Copyright social -->
							<div class="copyright-text">
								<p>Copyright &copy;  Global Technologies Ltd. </a> All Rights Reserved.</p>
							</div>
							<!-- Copyright text -->
						</div>
					</div>
				</div>
				<!-- Copyright right -->
			</div>
		</div>
		<!-- Copyright Area End -->
		
		<!-- all js here -->
        <script src="{{asset('homepageRecources/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('homepageRecources/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
        <script src="{{asset('homepageRecources/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('homepageRecources/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('homepageRecources/js/slick.min.js')}}"></script>
        <script src="{{asset('homepageRecources/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('homepageRecources/js/plugins.js')}}"></script>
        <script src="{{asset('homepageRecources/js/main.js')}}"></script>
    </body>
</html>
