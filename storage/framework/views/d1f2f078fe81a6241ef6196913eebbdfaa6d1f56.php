<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<link rel="icon" href="<?php echo e(asset('logo.png')); ?>" alt="">
    <title>BINER 4.0 | Technology and Innovation in Millenial Era</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="ca/css/bootstrap.min.css" />

	<!-- Owl Carousel -->

    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/carousel.css')); ?>" />
	<link type="text/css" rel="stylesheet" href="ca/css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="ca/css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="ca/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="ca/css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- Header -->
	<header id="home">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('ca/img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="<?php echo e(url('/')); ?>">
                            <img  class="logo img-responsive" src="<?php echo e(asset('logo.png')); ?>" alt="logo">
                            <!-- <img class="logo-alt img-responsive" src="<?php echo e(asset('logo.png')); ?>" alt="logo"> -->
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
					<li><a href="<?php echo e(url('/')); ?>">Home</a></li>
					<li><a href="#about">Acara</a></li>
					<li><a href="#contact">Hubungi kami</a></li>
                    <li><a href="<?php echo e(route('login')); ?>"><i class="fa fa-user"> login</i></a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1" style="text-align:center">
						<div class="home-content">
                            <img class="img-responsive" width="100%" height="100%" class="logo" src="<?php echo e(asset('logo.png')); ?>" alt="logo">
							<!-- <p class="white-text">Technology and Innovation in Millenial Era
							</p> -->
                            <!-- <button class="white-btn">Get Started!</button> -->
                            <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="btn main-btn">Daftar sekarang</a>
                            <?php endif; ?>

						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Rangkaian Acara</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs"></i>
						<h3>Seminar</h3>
						<p>Seminar yang berfokus pada IoT di bidang industri pertanian yang akan dihadiri oleh pemateri berkompeten serta menarik, dibuka untuk mahasiswa dan umum.
						Seminar ini mengangkat tema "AGRI-COOL-TURE" One Step Closer Towards Smart Farming 4.0 Indonesia.</p>
						<!-- <a href="#">Read more</a> -->
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-magic"></i>
						<h3>Workshop</h3>
						<p>Merupakan pelatihan dasar untuk membuat IOT di bidang pertanian</p>
						<!-- <a href="#">Read more</a> -->
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile"></i>
						<h3>Bussiness Case Competition</h3>
						<p>Kompetisi yang mewadahi peserta dalam mengembangkan ide atau rancangan
						bisnis yang kreatif dan inovatif dalam sektor pertanian.</p>
						<!-- <a href="#">Read more</a> -->
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
    <!-- /About -->

    <!-- Blog -->
    <?php if($berita->count()==0): ?>
    <?php else: ?>
	<div id="blog" class="section md-padding bg-grey">

        <!-- Container -->

		<div class="container">

			<!-- Row -->
			<div class="row">

                <!-- Section header -->


				<div class="section-header text-center">
					<h2 class="title">Info Terkini</h2>
				</div>
                <!-- /Section header -->
                <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img" style="text-align:center">
                        <img  width=350px height=200px src="<?php echo e(asset('storage/upload_gambar/'.$berita->gambar)); ?>" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-clock-o"></i><?php echo e($berita->tanggal); ?></li>
							</ul>
							<h3><?php echo e($berita->kegiatan); ?></h3>
                            <p><?php echo e(substr($berita->deskripsi,0,30)); ?></p>
                            <!-- <a href="blog-single.html" data-toggle="modal" data-target="#ModalExample">Read more</a> -->
                            <a class="btn btn-primary" href="/berita/<?php echo e($berita->slug); ?>">Lihat selengkapnya</a>
						</div>
					</div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<!-- /blog -->

			</div>
			<!-- /Row -->
		</div>
        <!-- /Container -->



	</div>
    <?php endif; ?>






	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Hubungi Kami</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>08121213123</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>binerunj@gmail.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Alamat</h3>
						<p>Universitas Negeri Jakarta, Gedung Dewi Sartika, Lantai 5</p>
					</div>
				</div>
				<!-- /contact -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">



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
	<script type="text/javascript" src="ca/js/jquery.min.js"></script>
	<script type="text/javascript" src="ca/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="ca/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="ca/js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="ca/js/main.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/carousel.js')); ?>"></script>

</body>

</html>
<?php /**PATH /home/asuspc/biner4.0/resources/views/welcome.blade.php ENDPATH**/ ?>