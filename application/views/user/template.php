<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Etrain</title>
	<link rel="icon" href="<?= base_url() ?>assets/img/logoicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/css/bootstrap.min.css">
	<!-- animate CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/css/animate.css">
	<!-- owl carousel CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/css/owl.carousel.min.css">
	<!-- themify CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/css/themify-icons.css">
	<!-- flaticon CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/css/flaticon.css">
	<!-- font awesome CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/css/magnific-popup.css">
	<!-- swiper CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/css/slick.css">
	<!-- style CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/css/style.css">
</head>

<body>
	<!--::header part start::-->
	<header class="main_menu home_menu">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="index.html"> <img src="<?= base_url() ?>assets/img/LOGOPKK.png" alt="logo"> </a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
							<ul class="navbar-nav align-items-center">
								<li class="nav-item active">
									<a class="nav-link" href="index.html">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about.html">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="cource.html">Courses</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="blog.html">Blog</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Account
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="single-blog.html">Single blog</a>
										<a class="dropdown-item" href="<?= base_url() ?>loginUser/logout">Logout</a>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.html">Contact</a>
								</li>
								<li class="d-none d-lg-block">
									<a class="btn_1" href="#">Get a Quote</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header part end-->

	<div class="container-fluid">
		<?php
		$this->load->view($content);
		?>
	</div>















	<!-- jquery plugins here-->
	<!-- jquery -->
	<script src="<?= base_url() ?>assets/user/js/jquery-1.12.1.min.js"></script>
	<!-- popper js -->
	<script src="<?= base_url() ?>assets/user/js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="<?= base_url() ?>assets/user/js/bootstrap.min.js"></script>
	<!-- easing js -->
	<script src="<?= base_url() ?>assets/user/js/jquery.magnific-popup.js"></script>
	<!-- swiper js -->
	<script src="<?= base_url() ?>assets/user/js/swiper.min.js"></script>
	<!-- swiper js -->
	<script src="<?= base_url() ?>assets/user/js/masonry.pkgd.js"></script>
	<!-- particles js -->
	<script src="<?= base_url() ?>assets/user/js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/jquery.nice-select.min.js"></script>
	<!-- swiper js -->
	<script src="<?= base_url() ?>assets/user/js/slick.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/jquery.counterup.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/waypoints.min.js"></script>
	<!-- custom js -->
	<script src="<?= base_url() ?>assets/user/js/custom.js"></script>
</body>

</html>
