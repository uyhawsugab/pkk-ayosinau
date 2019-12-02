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
				<h4 class="card-title">Data User
					<a href="#tambah" data-toggle="modal" class="btn btn-primary" style="float:right">Tambah</a>
				</h4>
			</div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Nama</th>
							<th scope="col">Email</th>
							<th scope="col">alamat</th>
							<th scope="col">No Telepon</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 0;
						foreach ($dataSiswa as $data) {
							$no++;
							echo '
						<tr>
						<th scope="row">' . $no . '</th>
						<td>' . $data->nama . '</td>
						<td>' . $data->email . '</td>
						<td>' . $data->alamat . '</td>
						<td>' . $data->notelp . '</td>
						<td><a herf="#update" class="btn btn-warning" data-toggle="modal" onclick="detail(' . $data->id_user . ')">Update</a><a style="margin-left:10px" href=' . base_url('Siswa/delete/' . $data->id_user) . ' class="btn btn-success" onclick="return confirm(\'Anda Yakin ?\')">Delete</a></td>
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
				