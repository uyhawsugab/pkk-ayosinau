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
							<th scope="col">No</th>
							<th scope="col">Id Nota</th>
							<th scope="col">Id User</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Bukti</th>
							<th scope="col">Grandtotal</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 0;
						foreach ($nota1 as $data) {
							$no++;
							echo '
						<tr>
						<th scope="row">' . $no . '</th>
						<td>' . $data->id_nota . '</td>
						<td>' . $data->id_user . '</td>
						<td>' . $data->tanggal . '</td>
						<td>' . $data->bukti . '</td>
						<td>' . $data->grandtotal . '</td>
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
				