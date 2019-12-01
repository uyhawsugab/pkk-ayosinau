<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<div class="col-md-12">
		<div class="row">
			<div id="showModul"></div>
		</div>
	</div>
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
									'<tr><td>Stok</td><td>' + data['stok'] + '</td></tr>' +
									'<tr><td>Status</td><td>' + data['status'] + '</td></tr>' +
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
</body>

<script>
	//Tampil Modul

	$.getJSON("<?= base_url() ?>getModulController", function(data) {
		let content = "";
		$.each(data, function(key, dt) {
			content += '<div class="col-md-3 card" style="float:left; margin-left:50px; margin-top:20px">' +
				'<img src="<?= base_url('assets/uploads/modul/') ?>' + dt['gambar'] + '" alt="" class="card-img-top" style="width:100% !important">' +
				'<div class="card-body">' +
				'<h5 class="card-title">' + dt['nama_modul'] + '</h5>' +
				'<p class="card-text">Harga Modul : ' + dt['harga'] + '</p>' +
				'<p class="card-text">Status : ' + dt['status'] + '</p>' +
				'<p class="card-text">Stok : ' + dt['stok'] + '</p>' +
				'<p class="card-text">Jenis Modul : ' + dt['jenis_modul'] + '</p>' +
				'<p class="card-text">Mapel Modul : ' + dt['nama_mapel'] + '</p>' +
				'<a class="btn btn-primary" style="margin-top:20px" href="#detail" data-toggle="modal" onclick="tmDet(' + dt['id_modul'] + ')">Beli</a>' +
				'</div>'+
				'</div>';

		});
		$("#showModul").html(content);
	});
</script>

</html>
