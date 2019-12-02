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
				<h4 class="card-title">Data Modul Berbayar
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
						<td>' . $data->jenis_modul . '</td>
						<td>' . $data->nama_mapel . '</td>
						<td><img width="150px" height="90px" src=' . base_url('assets/uploads/modul/' . $data->gambar) . '></td>
						<td><a href="#ubah" class="btn btn-warning" data-toggle="modal" onclick="tm_detail(' . $data->id_modul . ')">Update</a><a style="margin-left:10px" href=' . base_url('ModulController/delete/' . $data->id_modul) . ' class="btn btn-success" onclick="return confirm(\'Anda Yakin ?\')">Delete</a></td>
						</tr>
					';
						}
						?>
					</tbody>
				</table>
				<?php if ($this->session->flashdata('pesan') != null) : ?>
						<?= $this->session->flashdata('pesan'); ?>
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
							<input type="text" class="form-control" name="nama_modul" required="true">
						</div>
						<div class="form-group">
							<label for="">Harga</label>
							<input type="text" class="form-control" name="harga" required="true">
						</div>
						<div class="form-group">
							<label for="">Link Modul</label>
							<input type="text" class="form-control" name="link_modul" required="true">
						</div>
						<div class="form-group">
							<label for="">Deskripsi</label>
							<input type="text" class="form-control" name="deskripsi" required="true">
						</div>
						<div class="form-group">
							<label for="">Jenis Mapel</label>
							<select name="id_mapel" class="form-control" required="true">
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
							<input type="file" name="gambar" class="form-control" required="true">
						</div>

				</div>
				<div class=" modal-footer">
					<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
				</div>
				</form>
			</div>
		</div>
	</div>


	<div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('ModulController/update') ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id_modul" id="id_modul">
						<div class="form-group">
							<label for="">Nama Modul</label>
							<input type="text" class="form-control" name="nama_modul" id="nama_modul" required="true">
						</div>
						<div class="form-group">
							<label for="">Harga</label>
							<input type="text" class="form-control" name="harga" id="harga" required="true">
						</div>
						<div class="form-group">
							<label for="">Link Modul</label>
							<input type="text" class="form-control" name="link_modul" id="link_modul" required="true">
						</div>
						<div class="form-group">
							<label for="">Deskripsi</label>
							<input type="text" class="form-control" name="deskripsi" id="deskripsi" required="true">
						</div>
						<div class="form-group">
							<label for="">Jenis Mapel</label>
							<select name="id_mapel" class="form-control" id="id_mapel" required="true">
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
							<input type="file" name="gambar" id="gambar" class="form-control" required="true">
						</div>

				</div>
				<div class=" modal-footer">
					<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
				</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function tm_detail(id_modul)
		{
			$.getJSON("<?= base_url()?>ModulController/show/"+id_modul,function(data){
				$('#id_modul').val(data['id_modul']);
				$('#nama_modul').val(data['nama_modul']);
				$('#harga').val(data['harga']);
				$('#link_modul').val(data['link_modul']);
				$('#deskripsi').val(data['deskripsi']);
				$('#id_mapel').val(data['id_mapel']);
				$('#gambar').val(data['gambar']);
			});
		}
	</script>
