<section class="" style="margin-top: 130px;">

	<section class="content">
		<div class="card p-3">
			<div class="card-header">
				Data Transaksi Anda
			</div>
			<div class="card-body p-0">
				<div class="table-responsive">
					<table class="table table-striped m-0">
						<tr>
							<th scope="col">No.</th>
							<th scope="col">Nama Customer</th>
							<th scope="col">Merk Mobil</th>
							<th scope="col">No.Plat</th>
							<th scope="col">Harga Sewa</th>
							<th scope="col">Action</th>
							<th scope="col">Batal</th>
						</tr>

						<?php
						$no = 1;
						foreach ($transaksi as $tr) : ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $tr->nama ?></td>
								<td><?= $tr->merk ?></td>
								<td><?= $tr->no_plat ?></td>
								<td>Rp.<?= number_format($tr->harga, 0, ',', '.') ?></td>
								<td>
									<?php if ($tr->status_rental == "Selesai") { ?>
										<button class="btn btn-sm btn-success">Rental Selesai</button>
									<?php } else { ?>
										<a href="<?= base_url('customer/transaksi/pembayaran/' . $tr->id_rental) ?>" class="btn btn-sm btn-primary">Cek Pembayaran</a>
									<?php } ?>
								</td>
								<td>

									<?php
									if ($tr->status_rental == 'Belum Selesai') { ?>
										<a onclick="return confirm('Yakin anda ingin membatalkan pesanan?')" class="btn btn-sm btn-danger" href="<?= base_url('customer/transaksi/batal_transaksi/' . $tr->id_rental) ?>">Batal</a>
									<?php } else { ?>
										<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
											Batal
										</button>
									<?php } ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>

			</div>
		</div>
	</section>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Maaf, transaksi ini sudah selesai dan tidak bisa dibatalkan.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>

<?php if ($this->session->flashdata('pesan')) : ?>
	<script>
		swal({
			title: "Berhasil!",
			text: "<?php echo $this->session->flashdata('pesan'); ?>",
			icon: 'success',
			button: "Nice"
		});
	</script>
<?php endif; ?>
