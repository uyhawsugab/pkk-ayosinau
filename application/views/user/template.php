<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Halaman Utama</title>
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
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
									<a class="nav-link" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Contact</a>
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
	<script>
		function loadTotalCart() {
			$.getJSON("<?= base_url() ?>Transaksi/showCartItems", function(data) {
				$("#cart").html(data['total_cart']);
			});
		}
		loadTotalCart();
	</script>
</body>

</html>
