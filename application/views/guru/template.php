<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashboard Guru</title>
	
    <link rel="icon" href="<?= base_url()?>assets/img/logoicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">

    <!-- jquery -->
    <script src="<?= base_url()?>assets/js/jquery-1.12.1.min.js"></script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#"> <img src="<?= base_url()?>assets/img/LOGOPKK.png" alt="logo"> </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url()?>Dashboard_guru/index">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Akun
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= base_url()?>loginUser/logout">logout</a>
                                    </div>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#tambah_modul" data-toggle="modal">Tambah Modul</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

   

   <?php
        $this->load->view($konten);
   ?>
   

    <!-- jquery plugins here-->
    
    <!-- popper js -->
    <script src="<?= base_url()?>assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?= base_url()?>assets/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url()?>assets/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url()?>assets/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="<?= base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url()?>assets/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url()?>assets/js/slick.min.js"></script>
    <script src="<?= base_url()?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url()?>assets/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="<?= base_url()?>assets/js/custom.js"></script>
</body>

</html>
