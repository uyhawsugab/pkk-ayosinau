<section class="special_cource padding_top" style="margin-bottom: 5%;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-5">
				<div class="section_tittle text-center">
					<p>Dashboard</p>
					<h2>Modul Yang Tersedia</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12"><input type="text" name="search" class="form-control" placeholder="Cari Modul" id="search"></div>
			<div class="col-md-2" style="margin-top:28px;">
				<!-- <div class="accordion">
				
			</div> -->
				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Berdasarkan Jenis Modul
								</button>
							</h2>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card" style="width:100%">
								<ul class="list-group list-group-flush">
									<li class="list-group-item"><a href="#" onclick="gratis()">Modul Gratis</a></li>
									<li class="list-group-item"><a href="#" onclick="berbayar()">Modul Berbayar</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Berdasarkan Mata Pelajaran
								</button>
							</h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card" style="width:100%">
								<ul class="list-group list-group-flush">
									<li class="list-group-item"><a href="#" onclick="lain()">Pemrograman</a></li>
									<li class="list-group-item"><a href="#" onclick="big()">Bahasa Inggris</a></li>
									<li class="list-group-item"><a href="#" onclick="bin()">Bahasa Indonesia</a></li>
									<li class="list-group-item"><a href="#" onclick="mat()">Matematika</a></li>
									<li class="list-group-item"><a href="#" onclick="pai()">Pendidikan Agama Islam</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-10" id="showModul"></div>

		</div>
	</div>
</section>
<!--::blog_part end::-->


<!-- Modal -->
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<div id="gambar"></div>
					</div>
					<div class="col-md-6">
						<div id="deskripsi"></div>
						<div id="jumlah"></div>
						<br>
						<div id="button"></div>
						<br>
						<div id="msg"></div>
					</div>
				</div>
				<script>
					//Detail
					function tmDet(id) {
						$.getJSON("<?= base_url() ?>getModulController/detail/" + id, function(data) {
							$("#gambar").html(
								'<img src="<?= base_url() ?>assets/uploads/modul/' + data['gambar'] + '" style="width:100%">'
							);
							$("#deskripsi").html(
								'<table class="table table-hover table-striped">' +
								'<tr><td>Nama Modul</td><td>' + data['nama_modul'] + '</td></tr>' +
								'<tr><td>Harga Modul</td><td>' + data['harga'] + '</td></tr>' +
								'<tr><td>Deskripsi</td><td>' + data['deskripsi'] + '</td></tr>' +
								'<tr><td>Jenis Modul</td><td>' + data['jenis_modul'] + '</td></tr>' +
								'<tr><td>Mapel Modul</td><td>' + data['nama_mapel'] + '</td></tr>' +
								'</table>'
							);
							$("#jumlah").html(
								'<input type="number" id="jumlah_item" value="0" class="form-control">'
							);
							$("#button").html(
								'<button id="buy" onclick="beli(' + data['id_modul'] + ')" class="btn btn-info">Buy</button>' +
								'<a href="<?= base_url() ?>Transaksi" style="margin-left:20px" class="btn btn-primary">Check Out</a>'
							);
						});
					}
				</script>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script>
	function gratis() {
		$.getJSON("<?= base_url() ?>getModulController/gratis", function(data) {
			let content = "";
			$.each(data, function(key, dt) {
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-warning" href="'+dt['link_modul']+'" target="_blank">Download</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			});
			$("#showModul").html(content);
		});
	}

	function berbayar() {
		$.getJSON("<?= base_url() ?>getModulController/bayar", function(data) {
			let content = "";
			$.each(data, function(key, dt) {
				content +=
					'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
					'<div class="single_special_cource">' +
					'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; class="special_img">' +
					'<div class="special_cource_text">' +
					'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
					'<h4>' + dt['harga'] + '</h4>' +
					'<a href="#">' +
					'<h3>' + dt['nama_modul'] + '</h3>' +
					'</a>' +
					'<p>' + dt['deskripsi'] + '</p>' +
					'<a class="btn btn-primary" href="#detail" data-toggle="modal" onclick="tmDet(' + dt['id_modul'] + ')">Beli</a>' +
					'</div>' +
					'</div>' +
					'</div>';
			});
			$("#showModul").html(content);
		});
	}

	function lain() {
		$.getJSON("<?= base_url() ?>getModulController/lain", function(data) {
			let content = "";
			$.each(data, function(key, dt) {
				if (dt['harga']=="gratis") 
			{
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-warning" href="'+dt['link_modul']+'" target="_blank">Download</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			}
			else
			{
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-primary" href="#detail" data-toggle="modal" onclick="tmDet(' + dt['id_modul'] + ')">Beli</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			}
			});
			$("#showModul").html(content);
		});
	}

	function bin() {
		$.getJSON("<?= base_url() ?>getModulController/bin", function(data) {
			let content = "";
			$.each(data, function(key, dt) {
				if (dt['harga']=="gratis") 
			{
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-warning" href="'+dt['link_modul']+'" target="_blank">Download</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			}
			else
			{
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-primary" href="#detail" data-toggle="modal" onclick="tmDet(' + dt['id_modul'] + ')">Beli</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			}
			});
			$("#showModul").html(content);
		});
	}

	function big() {
		$.getJSON("<?= base_url() ?>getModulController/big", function(data) {
			let content = "";
			$.each(data, function(key, dt) {
				if (dt['harga']=="gratis") 
			{
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-warning" href="'+dt['link_modul']+'" target="_blank">Download</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			}
			else
			{
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-primary" href="#detail" data-toggle="modal" onclick="tmDet(' + dt['id_modul'] + ')">Beli</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			}
			});
			$("#showModul").html(content);
		});
	}

	function mat() {
		$.getJSON("<?= base_url() ?>getModulController/mat", function(data) {
			let content = "";
			$.each(data, function(key, dt) {
				if (dt['harga']=="gratis") 
			{
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-warning" href="'+dt['link_modul']+'" target="_blank">Download</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			}
			else
			{
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-primary" href="#detail" data-toggle="modal" onclick="tmDet(' + dt['id_modul'] + ')">Beli</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			}
			});
			$("#showModul").html(content);
		});
	}

	function pai() {
		$.getJSON("<?= base_url() ?>getModulController/pai", function(data) {
			let content = "";
			$.each(data, function(key, dt) {
				if (dt['harga']=="gratis") 
			{
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-warning" href="'+dt['link_modul']+'" target="_blank">Download</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			}
			else
			{
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-primary" href="#detail" data-toggle="modal" onclick="tmDet(' + dt['id_modul'] + ')">Beli</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			}
			});
			$("#showModul").html(content);
		});
	}



	//Tampil Modul

	$.getJSON("<?= base_url() ?>getModulController", function(data) {
		let content = "";
		$.each(data, function(key, dt) {
			if (dt['harga']=="gratis") 
			{
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-warning" href="'+dt['link_modul']+'" target="_blank">Download</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			}
			else
			{
				content +=
				'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left">' +
				'<div class="single_special_cource">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" style="width:100% !important;height:300px !important; "class="special_img">' +
				'<div class="special_cource_text">' +
				'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
				'<h4>' + dt['harga'] + '</h4>' +
				'<a href="#">' +
				'<h3>' + dt['nama_modul'] + '</h3>' +
				'</a>' +
				'<p>' + dt['deskripsi'] + '</p>' +
				'<a class="btn btn-primary" href="#detail" data-toggle="modal" onclick="tmDet(' + dt['id_modul'] + ')">Beli</a>' +
				'</div>' +
				'</div>' +
				'</div>';
			}

		});
		$("#showModul").html(content);
	});

	//Search
	$("#search").on('keyup', (function() {
		$.getJSON("<?= base_url() ?>getModulController/search/" + $("#search").val(),
			function(data) {
				let content = "";
				$.each(data, function(key, dt) {
					content +=
						'<div class="col-sm-6 col-lg-4" style="margin-top:20px; float:left"">' +
						'<div class="single_special_cource">' +
						'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '"  alt="" style="width:100% !important;height:300px !important; class="special_img">' +
						'<div class="special_cource_text">' +
						'<a href="#" class="btn_4">' + dt['nama_mapel'] + '</a>' +
						'<h4>' + dt['harga'] + '</h4>' +
						'<a href="#">' +
						'<h3>' + dt['nama_modul'] + '</h3>' +
						'</a>' +
						'<p>' + dt['deskripsi'] + '</p>' +
						'<a class="btn btn-primary" href="#detail" data-toggle="modal" onclick="tmDet(' + dt['id_modul'] + ')">Beli</a>' +
						'</div>' +
						'</div>' +
						'</div>';
				});
				$("#showModul").html(content);
			});
	}));

	//add to cart
	function beli(id) {
		let jumlah = $("#jumlah_item").val();
		$("#pesan").hide();
		$("#pesan").removeClass("alert alert-success");
		$.getJSON("<?= base_url() ?>Transaksi/tambahCart/" + id + "/" + jumlah, function(result) {

			$("#cart").html(result['total_cart']);
			$("#msg").html("Item anda telah ditambahkan ke cart");
			$("#msg").addClass("alert alert-success");
			$("#msg").show('animate');
			setTimeout(() => {
				$("#msg").hide("fade");
			}, 3000);
		});
	}
</script>

</html>
