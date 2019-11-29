 <!--::review_part start::-->
    <section class="special_cource padding_top" style="margin-bottom: 10%;">
        <div class="container">
             <?= $this->session->flashdata('pesan');?>
            <div class="row" id="tampil_modul">
                
            </div> 
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- Modal Tambah-->
    <div class="modal fade" id="tambah_modul" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
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
                         <input class="form-control" name="file_modul" type="file" placeholder="File Modul" required="true">
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
    
    <!-- Modal Tambah-->
    <div class="modal fade" id="update_modul" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Modul</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-contact contact_form" action="<?= base_url()?>Dashboard_guru/update_modul" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_modul" id="id_modul">
                <div class="col-md-12">
                    <div class="form-group">
                         <input class="form-control" name="nama_modul" type="text" placeholder="Judul Modul" id="nama_modul">
                    </div>
                </div>
               <div class="col-md-12">
                    <div class="form-group">
                         <input class="form-control" name="file_modul" type="file" placeholder="File Modul" id="file_modul">
                         <span style="color: red;">*kosongkan jika tidak ada perubahan</span>
                    </div>
                </div>
                <div class="col-md-12">
                     <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_1">
                            Update
                        </button>
                    </div>
                </div>
               
                
            </form>
          </div>
         
        </div>
      </div>
    </div>
    
  <script type="text/javascript">
    //tampil modul
        $.getJSON("<?= base_url()?>Dashboard_guru/get_modul",function(data){
            var tampil = "";
            $.each(data,function(key,dt){
                tampil+=
                    '<div class="col-sm-6 col-lg-4">'+
                        '<div class="single_special_cource">'+
                            '<div class="special_cource_text">'+  
                            '<a href="#" class="btn_4">Lihat Modul</a>'+
                                '<h4>'+dt['harga']+'</h4>'+
                                '<a href="#">'+
                                    '<h3>'+dt['nama_modul']+'</h3>'+
                                '</a>'+
                                '<p>Berisi deskripsi tentang modul yang telah diupload</p>'+
                                '<a href="#update_modul" class="btn btn-primary btn-sm" onclick="tm_detail('+dt['id_modul']+')" data-toggle="modal">update</a>&nbsp'+
                                '<a href="<?= base_url()?>Dashboard_guru/hapus_modul/'+dt['id_modul']+'" onclick="return confirm(\'anda yakin menghapus modul ini?\')" class="btn btn-danger btn-sm">delete</a>'+
                               
                            '</div>'+

                        '</div>'+
                    '</div>';
            });
            $('#tampil_modul').html(tampil);
        });


        function tm_detail(id)
        {
            $.getJSON("<?= base_url()?>Dashboard_guru/detail_modul/"+id,function(data){
              $('#id_modul').val(data['id_modul']);
              $('#nama_modul').val(data['nama_modul']);
              $('#file_modul').val(data['file_modul']);
            });
        }
  </script>