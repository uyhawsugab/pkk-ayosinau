<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login User</title>

	<link rel="icon" href="<?= base_url() ?>assets/img/logoicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<!-- animate CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
	<!-- owl carousel CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
	<!-- themify CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/themify-icons.css">
	<!-- flaticon CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css">
	<!-- font awesome CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">
	<!-- swiper CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/slick.css">
	<!-- style CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
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
								<li class="d-none d-lg-block">
									<a class="btn_2" href="#modalRegister" data-target="#modalRegister">Register</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header part end-->

	<section class="" style="margin-top: 10%; ">
		<div class="container">
			<div class="row align-items-sm-center align-items-lg-stretch">

				<div class="col-md-7 col-lg-7">
					<div class="">
						<img src="<?= base_url() ?>assets/img/learning_img.png" alt="">
					</div>
				</div>
				<div class="col-md-5 col-lg-5" style="margin-top: 10%;">
					<h1>SIGN IN</h1>
					<form class="form-contact comment_form" id="sign_in">
						<input class="form-control" name="username" id="username" type="text" placeholder="Username" required="true"><br>
						<input class="form-control" name="password" id="password" type="password" placeholder="Password" required="true"><br>
						<input type="submit" class="btn_1" name="" value="Sign In">
						<br><br>
						<div id="pesan"></div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!--Modal: Login / Register Form-->
	<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog cascading-modal" role="document">
			<!--Content-->
			<div class="modal-content">

				<!--Modal cascading tabs-->
				<div class="modal-c-tabs">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
								Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
								Register</a>
						</li>
					</ul>

					<!-- Tab panels -->
					<div class="tab-content">
						<!--Panel 7-->
						<div class="tab-pane fade in show active" id="panel7" role="tabpanel">

							<!--Body-->
							<div class="modal-body mb-1">
								<div class="md-form form-sm mb-5">
									<i class="fas fa-envelope prefix"></i>
									<input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
									<label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
								</div>

								<div class="md-form form-sm mb-4">
									<i class="fas fa-lock prefix"></i>
									<input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
									<label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
								</div>
								<div class="text-center mt-2">
									<button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
								</div>
							</div>
							<!--Footer-->
							<div class="modal-footer">
								<div class="options text-center text-md-right mt-1">
									<p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
									<p>Forgot <a href="#" class="blue-text">Password?</a></p>
								</div>
								<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
							</div>

						</div>
						<!--/.Panel 7-->

						<!--Panel 8-->
						<div class="tab-pane fade" id="panel8" role="tabpanel">

							<!--Body-->
							<div class="modal-body">
								<div class="md-form form-sm mb-5">
									<i class="fas fa-envelope prefix"></i>
									<input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
									<label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
								</div>

								<div class="md-form form-sm mb-5">
									<i class="fas fa-lock prefix"></i>
									<input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
									<label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
								</div>

								<div class="md-form form-sm mb-4">
									<i class="fas fa-lock prefix"></i>
									<input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
									<label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
								</div>

								<div class="text-center form-sm mt-2">
									<button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
								</div>

							</div>
							<!--Footer-->
							<div class="modal-footer">
								<div class="options text-right">
									<p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
								</div>
								<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!--/.Panel 8-->
					</div>

				</div>
			</div>
			<!--/.Content-->
		</div>
	</div>
	<!--Modal: Login / Register Form-->






	<!-- jquery plugins here-->
	<!-- jquery -->
	<script src="<?= base_url() ?>assets/js/jquery-1.12.1.min.js"></script>
	<!-- popper js -->
	<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<!-- easing js -->
	<script src="<?= base_url() ?>assets/js/jquery.magnific-popup.js"></script>
	<!-- swiper js -->
	<script src="<?= base_url() ?>assets/js/swiper.min.js"></script>
	<!-- swiper js -->
	<script src="<?= base_url() ?>assets/js/masonry.pkgd.js"></script>
	<!-- particles js -->
	<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.nice-select.min.js"></script>
	<!-- swiper js -->
	<script src="<?= base_url() ?>assets/js/slick.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.counterup.min.js"></script>
	<script src="<?= base_url() ?>assets/js/waypoints.min.js"></script>
	<!-- custom js -->
	<script src="<?= base_url() ?>assets/js/custom.js"></script>
	<script type="text/javascript">
		$('#sign_in').submit(function(event) {
			event.preventDefault();
			var datalogin = $('#sign_in').serialize();
			$.ajax({
				url: "<?= base_url() ?>loginUser/loginProses",
				data: datalogin,
				type: "post",
				dataType: "json",
				success: function(hasil) {
					if (hasil['id_level'] == 1) {
						$("#pesan").html("Berhasil Login");
						$("#pesan").show('animate');
						$("#pesan").addClass("alert alert-success");
						setTimeout(function() {
							location.href = "DashboardUser/index";
						}, 500);

					} else if (hasil['id_level'] == 2) {
						$("#pesan").html("Berhasil Login");
						$("#pesan").show('animate');
						$("#pesan").addClass("alert alert-success");
						setTimeout(function() {
							location.href = "Dashboard_guru/index";
						}, 500);
					} else if (hasil['id_level'] == 3) {
						$("#pesan").html("Berhasil Login");
						$("#pesan").show('animate');
						$("#pesan").addClass("alert alert-success");
						setTimeout(function() {
							location.href = "DashboardAdmin/index";
						}, 500);
					} else {
						$("#pesan").html("Username password tidak cocok");
						$("#pesan").show('animate');
						$("#pesan").addClass("alert alert-danger");
						setTimeout(function() {
							$("#pesan").hide('animate');
							$("#pesan").removeClass("alert alert-danger");
						}, 2000);
					}
				}

			});
		});
	</script>
</body>

</html>
