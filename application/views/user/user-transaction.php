<div class="col-md-12" style="margin-top:50px;">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Tabel Pembayaran</h4>
			<h6 class="card-subtitle">Add <code>.table-bordered</code> for borders on all sides of the table and cells.</h6>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Modul</th>
						<th scope="col">Qty</th>
						<th scope="col">Sub Total</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody id="tabel-pesanan"></tbody>
			</table>

			<a href="#" data-toggle="modal" onclick="simpan_list_db()" class="btn btn-success col-md-2" style="float:right; margin-bottom:10px; margin-right:20px;">Bayar</a>
		</div>

	</div>
</div>
<div id="msg" class="col-md-12"></div>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="pembayaran" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Pembayaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h3>Terimakasih telah membeli modul di tempat kami</h3>
				<strong>Untuk melanjutkan pembelian, silahkan transfer sejumlah Rp. <span id="totalnya"></span> ke rekening berikut :</strong>

				<strong>Jika sudah melakukan transfer, silahkan upload bukti transfer anda dibawah ini :</strong>
				<form id="uploadBukti" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Metode Pembayaran</label>
						<select name="metode" id="" class="form-control">
							<option value="none">Silahkan Pilih Metode</option>
							<option value="BRI">BRI: 29948200328 a/n Wahyu Bagus Wicaksono </option>
							<option value="BNI">BNI: 12922100328 a/n Wahyu Bagus Wicaksono </option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Upload Bukti Disini</label>
						<input type="file" name="bukti" class="form-control">
					</div>
					<input type="hidden" name="id_nota" id="id_nota">
					<input type="submit" name="submit" value="Kirim" class="btn btn-success" style="float:left;margin-right:10px">
					<!-- <img src="<?= base_url() ?>asset/loading.gif" id="loading" alt=""> -->
					<span id="msg"></span>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

			</div>
		</div>
	</div>
</div>
<script>
	function loadCart() {
		$("#tabel-pesanan").html('');
		$.getJSON("<?= base_url() ?>Transaksi/ViewAllPesanan", function(data) {
			let no = 0;
			$.each(data['data_cart'], function(key, dt) {
				no++;
				$("#tabel-pesanan").append(
					'<tr>' +
					'<th scope="row">' + no + '</td>' +
					'<td>' + dt['name'] + '</td>' +
					'<td>' + dt['qty'] + '</td>' +
					'<td>' + dt['subtotal'] + '</td>' +
					'<td><a href="#" onclick="if(confirm(\'Apakah Yakin?\')){hapus_cart(\'' + dt['rowid'] + '\')}"><i class="material-icons">delete</i></a></td>' +
					'</tr>'
				);
			});
			$("#tabel-pesanan").append(
				'<tr>' +
				'<td colspan="3">Total Keseluruhan</td><td>' + data['total_seluruh'] + '</td><td><a href="#" onclick="if(confirm(\'Apakah anda yakin menghapus data ini ? \')){ hapus_all()}"><i class="material-icons">delete</i></a></td>' +
				'></tr>'
			);
		});
	}
	loadCart();

	function simpan_list_db() {
		$.getJSON("<?= base_url() ?>Transaksi/createPembayaran", function(data) {
			if (data['status'] == 1) {
				$("#msg").html('Anda sukses menyimpan ke nota');
				$("#msg").show('animate');
				$("#msg").addClass("alert alert-success");
				setTimeout(() => {
					$("#msg").hide('animate');
					$("#msg").removeClass("alert alert-success");
					setTimeout(() => {
						$("#totalnya").html(data['total']);
						$("#pembayaran").modal("show");
						$("#id_nota").val(data['id_nota']);
						loadTotalCart();
						loadCart();
					}, 500);
				}, 3000);
			}
		});
	}
	$("#uploadBukti").submit(function(e) {
		e.preventDefault();
		let url = "<?= base_url() ?>Transaksi/uploadBuktiTransfer";
		let formData = new FormData($("#uploadBukti")[0]);
		$.ajax({
			url: url,
			type: "post",
			data: formData,
			contentType: false,
			processData: false,
			dataType: "json",
			beforeSend: function() {
				$("#loading").css("display", "block");
			},
			success: function(data) {
				if (data['status'] == 1) {
					$("#loading").css("display", "none");
					$("#msg").html("Bukti telah terupload");
					$("#msg").show("fade");
					$("#msg").addClass("alert alert-success");
					setTimeout(() => {
						$("#msg").hide("fade");
						setTimeout(() => {
							$("#pembayaran").modal("hide");
							$("#msg").removeClass("alert alert-success");
							location.href="DashboardUser/modulPage";
						}, 500);
					}, 2000);
				} else {
					$("#loading").css("display", "none");
					$("#msg").html("Bukti gagal terupload");
					$("#msg").show("fade");
					$("#msg").addClass("alert alert-danger");
					setTimeout(() => {
						$("#msg").hide("fade");
						setTimeout(() => {
							$("#pembayaran").modal("hide");
							$("#msg").removeClass("alert alert-danger");
						}, 500);
					}, 2000);
				}
			}
		});
	});
</script>
