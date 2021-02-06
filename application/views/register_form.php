<body>
	<div class="container-fluid">
		<div class="row no-gutter">
			<div class="col-md-6">
				<div class="login d-flex align-items-center py-5">
					<div class="container">
						<div class="row">
							<div class="col-md-10 mx-auto">
								<h3 class="login-heading mb-5 w-100">Create your account</h3>
								<?php if ($this->session->flashdata('pesan')) : ?>
									<script>
										swal({
											title: "Sukses",
											text: "<?php echo $this->session->flashdata('pesan'); ?>",
											icon: 'success',
											button: "Ok"
										});
									</script>
								<?php endif; ?>
								<form method="POST" action="<?= base_url('register') ?>">
									<div class="row">
										<div class="form-group col-6">
											<label for="nama">Nama</label>
											<input id="nama" type="text" class="form-control" name="nama" autofocus />
											<?= form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
										</div>
										<div class="form-group col-6">
											<label for="username">Username</label>
											<input id="username" type="text" class="form-control" name="username" />
											<?= form_error('username', '<div class="text-small text-danger">', '</div>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="alamat">Alamat</label>
										<input id="alamat" type="text" class="form-control" name="alamat" />
										<?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
										<div class="invalid-feedback"></div>
									</div>

									<div class="row">
										<div class="form-group col-6">
											<label for="gender" class="d-block">Gender</label>
											<select name="gender" class="form-control">
												<option class="pgender" value="">
													-- Pilih Gender --
												</option>
												<option>Laki-laki</option>
												<option>Perempuan</option>
											</select>
											<?= form_error('gender', '<div class="text-small text-danger">', '</div>') ?>
										</div>
										<div class="form-group col-6">
											<label for="no_telp" class="d-block">No. Telephone</label>
											<input id="no_telp" type="text" class="form-control" name="no_telp" />
											<?= form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-6">
											<label>No.KTP</label>
											<input type="text" name="no_ktp" class="form-control" />
											<?= form_error('no_ktp', '<div class="text-small text-danger">', '</div>') ?>
										</div>
										<div class="form-group col-6">
											<label>Password</label>
											<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
											<input type="password" name="password" class="form-control" />
											<?= form_error('password', '<div class="text-small text-danger">', '</div>') ?>
										</div>
									</div>

									<button class="btn1 text-uppercase mb-4" type="submit">
										Register
									</button>
									<div>
										<p class="small text-center">
											Already have an account ? <a href="<?= base_url('auth/login') ?>">Login</a>
										</p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="d-none d-md-flex col-md-4 col-lg-6">
				<img class="bg-image img-fluid" src="<?= base_url('assets/assets_auth') ?>/images/register.svg" alt="" />
			</div>
		</div>
	</div>
