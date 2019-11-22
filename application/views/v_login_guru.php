<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Guru</title>
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
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="<?= base_url()?>assets/img/LOGOPKK.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="d-none d-lg-block">
                                    <a class="btn_2" href="#login">Register</a>
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
                        <img src="<?= base_url()?>assets/img/learning_img.png" alt="">
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



   

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?= base_url()?>assets/js/jquery-1.12.1.min.js"></script>
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
    <script type="text/javascript">
      $('#sign_in').submit(function(event){
          event.preventDefault();
          var datalogin=$('#sign_in').serialize();
          $.ajax({
            url:"<?= base_url()?>Login_guru/login",
            data:datalogin,
            type:"post",
            dataType:"json",
            success:function(hasil){
                if (hasil['status']==1) 
                {
                    $("#pesan").html("Berhasil Login");
                    $("#pesan").show('animate');
                    $("#pesan").addClass("alert alert-success");
                    //setTimeout(function(){
                     // location.href="pelanggan/C_dashboard_pelanggan";
                    //}, 500);
                }
                else
                {
                    $("#pesan").html("Username password tidak cocok");
                    $("#pesan").show('animate');
                    $("#pesan").addClass("alert alert-danger");
                    setTimeout(function(){
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