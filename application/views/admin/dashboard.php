<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Dashboard</h1>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-primary">
						<i class="fas fa-user"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Total User</h4>
						</div>
						<div class="card-body">
							<?= $total_user; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-danger">
						<i class="fas fa-car"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Total Mobil</h4>
						</div>
						<div class="card-body">
							<?= $total_mobil; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-warning">
						<i class="far fa-file"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Transaksi</h4>
						</div>
						<div class="card-body">
							<?= $total_transaksi; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-success">
						<i class="fas fa-circle"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Laporan</h4>
						</div>
						<div class="card-body">
							<?= $total_laporan ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
</div>
