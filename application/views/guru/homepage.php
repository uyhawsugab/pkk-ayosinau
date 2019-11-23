 <!--::review_part start::-->
    <section class="special_cource padding_top" style="margin-bottom: 10%;">
        <div class="container">
             <?= $this->session->flashdata('pesan');?>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="<?= base_url()?>assets/img/special_cource_2.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Web Development</a>
                            <h4>$130.00</h4>
                            <a href="course-details.html">
                                <h3>Web Development</h3>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="<?= base_url()?>assets/img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="<?= base_url()?>assets/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?= base_url()?>assets/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?= base_url()?>assets/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?= base_url()?>assets/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?= base_url()?>assets/img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
               <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="<?= base_url()?>assets/img/special_cource_2.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Web Development</a>
                            <h4>$130.00</h4>
                            <a href="course-details.html">
                                <h3>Web Development</h3>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="<?= base_url()?>assets/img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="<?= base_url()?>assets/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?= base_url()?>assets/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?= base_url()?>assets/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?= base_url()?>assets/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?= base_url()?>assets/img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- Modal -->
    <div class="modal fade" id="tambah_modul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Modul</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-contact contact_form" action="<?= base_url()?>Dashboard_guru/tambah_modul" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="form-group">
                         <input class="form-control" name="nama_modul" type="text" placeholder="Judul Modul" required="true">
                    </div>
                </div>
               <div class="col-md-12">
                    <div class="form-group">
                         <input class="form-control" name="gambar" type="file" placeholder="Gambar" required="true">
                    </div>
                </div>
                <div class="col-md-12">
                     <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_1">
                            Insert
                        </button>
                    </div>
                </div>
               
                
            </form>
          </div>
         
        </div>
      </div>
    </div>
  