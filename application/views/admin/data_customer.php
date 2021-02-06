<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Customer</h1>
		</div>

		<a href="<?= base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-primary mb-3">Tambah Data</a>

		<?php if ($this->session->flashdata('pesan')) : ?>
			<script>
				swal({
					title: "Done",
					text: "<?php echo $this->session->flashdata('pesan'); ?>",
					icon: 'success',
					button: "Nice"
				});
			</script>
		<?php endif; ?>

		<table class="table table-striped table-responsive table-border">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Alamat</th>
					<th>Gender</th>
					<th>No.Telp</th>
					<th>No.KTP</th>
					<th>Password</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($customer as $cs) : ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $cs->nama ?></td>
						<td><?= $cs->username ?></td>
						<td><?= $cs->alamat ?></td>
						<td><?= $cs->gender ?></td>
						<td><?= $cs->no_telp ?></td>
						<td><?= $cs->no_ktp ?></td>
						<td><?= $cs->password ?></td>

						<td><a href="<?= base_url('admin/data_customer/delete_customer/') . $cs->id_customer ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
							<a href="<?= base_url('admin/data_customer/update_customer/') . $cs->id_customer ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</section>
</div>
