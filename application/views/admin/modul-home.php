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
	
</body>

</html>

<script>
	function detail(id) {
		$.getJSON("<?= base_url() ?>ModulController/show/" + id, function(data) {

		})
	}
</script>
