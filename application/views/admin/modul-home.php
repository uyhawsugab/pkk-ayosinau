<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Data Modul
					<a href="#tambah" data-toggle="modal" class="btn btn-primary" style="float:right">Tambah</a>
				</h4>
			</div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Nama Modul</th>
							<th scope="col">Harga</th>
							<th scope="col">Status</th>
							<th scope="col">Stok</th>
							<th scope="col">Jenis Modul</th>
							<th scope="col">Mapel</th>
							<th scope="col">Gambar</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 0;
						foreach ($dataModul as $data) {
							$no++;
							echo '
						<tr>
						<th scope="row">' . $no . '</th>
						<td>' . $data->nama_modul . '</td>
						<td>' . $data->harga . '</td>
						<td>' . $data->status . '</td>
						<td>' . $data->stok . '</td>
						<td>' . $data->jenis_modul . '</td>
						<td>' . $data->nama_mapel . '</td>
						<td><img width="150px" height="90px" src=' . base_url('assets/uploads/modul/' . $data->gambar) . '></td>
						<td><a herf="#update" class="btn btn-warning" data-toggle="modal" onclick="detail(' . $data->id_modul . ')">Update</a><a style="margin-left:10px" href=' . base_url('ModulController/delete/' . $data->id_modul) . ' class="btn btn-success" onclick="return confirm(\'Anda Yakin ?\')">Delete</a></td>
						</tr>
					';
						}
						?>
					</tbody>
				</table>
				<?php if ($this->session->flashdata('pesan') != null) : ?>
					<div class="alert alert-danger">
						<?= $this->session->flashdata('pesan'); ?>
					</div>
				<?php endif ?>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('ModulController/insert') ?>" method="post" enctype="multipart/form-data">

						<div class="form-group">
							<label for="">Nama Modul</label>
							<input type="text" class="form-control" name="nama_modul">
						</div>
						<div class="form-group">
							<label for="">Harga</label>
							<input type="text" class="form-control" name="harga">
						</div>
						<div class="form-group">
							<label for="">Stok</label>
							<input type="text" class="form-control" name="stok">
						</div>
						<!-- <div class="form-group">
						<label for="">Status</label>
						<select name="status" id="" class="form-control">
						<option value="Tersedia">Tersedia</option>
						<option value="Tidak Tersedia">Tidak Tersedia</option>
						</select>
						</div> -->
						<div class="form-group">
							<label for="">Jenis Modul</label>
							<select name="id_jenis_modul" id="" class="form-control">
								<option value="none">Pilih Jenis Modul</option>
								<?php
								foreach ($dataJenis as $data) {
									echo "<option value='" . $data->id_jenis_modul . "'>" . $data->jenis_modul . "</option>";
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Jenis Mapel</label>
							<select name="id_mapel" id="" class="form-control">
								<option value="none">Pilih Jenis Mapel</option>
								<?php
								foreach ($dataMapel as $data) {
									echo "<option value='" . $data->id_mapel . "'>" . $data->nama_mapel . "</option>";
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="">File Gambar</label>
							<input type="file" name="gambar" id="" class="form-control">
						</div>

				</div>
				<div class=" modal-footer">
					<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
				</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>

<script>
	function detail(id) {
		$.getJSON("<?= base_url() ?>ModulController/show/" + id, function(data) {

		})
	}
</script>
