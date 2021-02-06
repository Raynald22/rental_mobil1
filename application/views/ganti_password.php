<div id="app">
	<section class="section">
		<div class="container" style="margin-top: 100px">
			<div class="row">
				<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
					<!-- <div class="login-brand">
                <img
                  src="../assets/img/stisla-fill.svg"
                  alt="logo"
                  width="100"
                  class="shadow-light rounded-circle"
                />
              </div> -->

					<div class="card card-primary">
						<div class="card-header text-center">
							<h4 style="font-family: 'Poppins', sans-serif; font-weight: 600">
								Ganti Password
							</h4>
						</div>

						<div class="card-body">
							<!-- <p class="text-muted">
                    We will send a link to reset your password
                  </p> -->
							<form method="POST" action="<?= base_url('auth/ganti_password_aksi') ?>">
								<div class="form-group">
									<label for="pass_baru">Password Baru</label>
									<input id="pass_baru" type="password" class="form-control" name="pass_baru" tabindex="2" />
									<?= form_error('pass_baru', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label for="ulang_pass">Konfirmasi Password</label>
									<input id="ulang_pass" type="password" class="form-control" name="ulang_pass" tabindex="2" />
									<?= form_error('ulang_pass', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<button type="submit" class="btn1 btn-block" tabindex="4">
										Reset Password
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php if ($this->session->flashdata('pesan_password_sukses')) : ?>
	<script>
		swal({
			title: "Error",
			text: "<?php echo $this->session->flashdata('pesan_password_sukses'); ?>",
			icon: 'error',
			button: "Ok"
		});
	</script>
<?php endif; ?>
