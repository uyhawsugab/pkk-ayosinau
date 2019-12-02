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
				<h4 class="card-title">Data Pemateri / Pengajar
					
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
						foreach ($dataGuru as $data1) {
							$no++;
							echo '
						<tr>
						<th scope="row">' . $no . '</th>
						<td>' . $data1->nama . '</td>
						<td>' . $data1->email . '</td>
						<td>' . $data1->alamat . '</td>
						<td>' . $data1->notelp . '</td>
						<td><a style="margin-left:10px" href=' . base_url('Siswa/delete/' . $data1->id_user) . ' class="btn btn-danger" onclick="return confirm(\'Anda Yakin ?\')">Blokir</a></td>
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
	
				