<div class="container mt-5 mb-5">

	<div class="card" style="margin-top:200px;">
		<div class="card-body">
			<?php foreach ($detail as $dt) : ?>
				<div class="row">
					<div class="col-md-6">
						<img style="width: 70%;" src="<?= base_url('assets/upload/' . $dt->gambar) ?>">
					</div>
					<div class="col-md-6">
						<table class="table">
							<tr>
								<th>Merk</th>
								<td><?= $dt->merk ?></td>
							</tr>
							<tr>
								<th>No Plat</th>
								<td><?= $dt->no_plat ?></td>
							</tr>
							<tr>
								<th>Warna</th>
								<td><?= $dt->warna ?></td>
							</tr>
							<tr>
								<th>Tahun</th>
								<td><?= $dt->tahun ?></td>
							</tr>
							<tr>
								<th>Harga</th>
								<td><?= $dt->harga ?></td>
							</tr>
							<tr>
								<th>Denda</th>
								<td><?= $dt->denda ?></td>
							</tr>
							<tr>
								<th>AC</th>
								<td><?php if ($dt->ac == "1") {
										echo "Tersedia";
									} else {
										echo "Tidak Tersedia/Sedang Dirental";
									} ?></td>
							</tr>
							<tr>
								<th>Supir</th>
								<td><?php if ($dt->supir == "1") {
										echo "Tersedia";
									} else {
										echo "Tidak Tersedia/Sedang Dirental";
									} ?></td>
							</tr>
							<tr>
								<th>MP3 Player</th>
								<td><?php if ($dt->mp3_player == "1") {
										echo "Tersedia";
									} else {
										echo "Tidak Tersedia/Sedang Dirental";
									} ?></td>
							</tr>
							<tr>
								<th>Central Lock</th>
								<td><?php if ($dt->central_lock == "1") {
										echo "Tersedia";
									} else {
										echo "Tidak Tersedia/Sedang Dirental";
									} ?></td>
							</tr>
							<tr>
								<th>Status</th>
								<td><?php if ($dt->status == "1") {
										echo "Tersedia";
									} else {
										echo "Tidak Tersedia/Sedang Dirental";
									} ?></td>
							</tr>
							<tr>
								<td><?php if ($dt->status == "1") {
										echo anchor('customer/rental/tambah_rental/' . $dt->id_mobil, '<span class="btn btn-warning mt-1">Rental</span>');
									} else {
										echo "<span class='btn btn-danger mt-1' style='background-color: #E65540;''>Tidak Tersedia</span>";
									} ?>
								<td><a href="<?= base_url('customer/data_mobil') ?>" class="btn btn-outline-secondary mt-1">Kembali</a></td>
							</tr>
						</table>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
