<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Register User</title>

	<link rel="icon" href="<?= base_url() ?>assets/img/logoicon.png">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
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
									<a class="btn_1" href="<?= base_url()?>loginUser/index">Sign In</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
    <!-- Header part end-->
    
    <section class="special_cource padding_top">
		<div class="container">
			 <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Sign Up</p>
                        <h2>Daftar Siswa</h2>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col-md-3 col-lg-3">
					
				</div>
				<div class="col-md-6 col-lg-6">
                    <?= $this->session->flashdata('pesan');?>
						<form class="form-contact contact_form" action="<?= base_url()?>loginUser/RegisterUser" method="post">
	                        <div class="row">
	                            <div class="col-12">
	                                <div class="form-group">
	                                    <input class="form-control" name="nama" type="text" placeholder="Nama Lengkap" required="true">
	                                </div>
	                            </div>
	                            <div class="col-12">
	                                <div class="form-group">
	                                    <input class="form-control" name="email" type="email" placeholder="Email" required="true">
	                                </div>
	                            </div>
	                            <div class="col-12">
	                                <div class="form-group">
	                                    <textarea name="alamat" cols="30" rows="10" class="form-control" placeholder="Alamat" required="true"></textarea>
	                                </div>
	                            </div>
	                            <div class="col-12">
	                                <div class="form-group">
	                                    <input class="form-control" name="notelp"  type="text" placeholder="Nomor Telpon" required="true">
	                                </div>
	                            </div>
	                            <div class="col-sm-6">
	                                <div class="form-group">
	                                    <input class="form-control" name="username" type="text" placeholder="Username" required="true">
	                                </div>
	                            </div>
	                            <div class="col-sm-6">
	                                <div class="form-group">
	                                    <input class="form-control" name="password" id="password" type="password" placeholder="Password" required="true">
	                                </div>
	                            </div>
	                            <input type="hidden" name="id_level" value="1">
	                            <div class="form-group mt-3">
	                                <button type="submit" class="button button-contactForm btn_1">Register</button>
	                            </div>
	                        </div>	
						</form>
                    
                </div>
                <div class="col-md-3 col-lg-3">
                
				</div>
			</div>
		</div>
	</section>


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
	
</body>

</html>
