<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Info | {{ $berita->kegiatan }}</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('ca/css/bootstrap.min.css') }}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{ asset('ca/css/owl.carousel.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('ca/css/owl.theme.default.css') }}" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="{{ asset('ca/css/magnific-popup.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('ca/css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('ca/css/style.css') }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<!-- Header -->
	<header>

		<!-- Nav -->
		<nav id="nav" class="navbar">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
                        <a href="{{ url('/') }}">
							<img class="logo" src="{{ asset('logo.png') }}" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
                <ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('login') }}"><i class="fa fa-user"> login</i></a></li>
				</ul>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- header wrapper -->
		<div class="header-wrapper sm-padding bg-grey">
			<div class="container">
				<h2>Info terkini</h2>
				<!-- <ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item"><a href="index.html#blog">Blog</a></li>
					<li class="breadcrumb-item active">Single Post</li>
				</ul> -->
			</div>
		</div>
		<!-- /header wrapper -->

	</header>
	<!-- /Header -->

	<!-- Blog -->
	<div id="blog" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Main -->
				<main id="main" class="col-md-9">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="{{asset('storage/upload_gambar/'.$berita->gambar)}}" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>Admin</li>
								<li><i class="fa fa-clock-o"></i>{{ $berita->updated_at }}</li>

							</ul>
							<h3>{{ $berita->kegiatan }}</h3>
							<p>{{ $berita->deskripsi }}</p>
						</div>

					</div>
				</main>
				<!-- /Main -->


				<!-- Aside -->
				<aside id="aside" class="col-md-3">

				</aside>
				<!-- /Aside -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<!-- <div class="footer-logo">
						<a href="index.html"><img src="{{ asset('img/logo-alt.png') }}" alt="logo"></a>
					</div> -->
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="https://instagram.com/default_unj"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2017. All Rights Reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="{{ asset('ca/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('ca/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('ca/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('ca/js/jquery.magnific-popup.js') }}"></script>
	<script type="text/javascript" src="{{ asset('ca/js/main.js') }}"></script>

</body>

</html>