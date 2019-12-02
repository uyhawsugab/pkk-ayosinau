	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Riwayat Transaksi
					
				</h4>
			</div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Nama Modul</th>
							<th scope="col">Quantity</th>
							<th scope="col">Tota Bayar</th>
							<th scope="col">Bukti</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no=0;
							foreach ($dataTransaksi as $dt) 
							{
								$no++;
								echo '<tr>
										<td>'.$no.'</td>
										<td>'.$dt->tanggal.'</td>
										<td>'.$dt->nama_modul.'</td>
										<td>'.$dt->qty.'</td>
										<td>'.$dt->grandtotal.'</td>
										<td>Belum diupload</td>
										<td><a href="" class="btn btn-danger" onclick="">Lihat</a>
											<a href="" class="btn btn-danger" onclick="">Hapus</a></td>
									</tr>';
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