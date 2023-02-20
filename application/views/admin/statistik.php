<!-- Stats -->
<div class="row">
	<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
		<!-- Card -->
		<a class="card card-hover-shadow h-100">
			<div class="card-body">
				<h6 class="card-subtitle">Total Member</h6>

				<div class="row align-items-center gx-2 mb-1">
					<div class="col-6">
						<h2 class="card-title text-inherit"><?= number_format($count['member'],0,",",".")?></h2>
					</div>
					<!-- End Col -->

					<div class="col-6 text-end">
						<i class="bi bi-people h1 text-primary"></i>
					</div>
					<!-- End Col -->
				</div>
				<!-- End Row -->
			</div>
		</a>
		<!-- End Card -->
	</div>

	<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
		<!-- Card -->
		<a class="card card-hover-shadow h-100">
			<div class="card-body">
				<h6 class="card-subtitle">Total Materi</h6>

				<div class="row align-items-center gx-2 mb-1">
					<div class="col-6">
						<h2 class="card-title text-inherit"><?= number_format($count['materi'],0,",",".")?></h2>
					</div>
					<!-- End Col -->

					<div class="col-6 text-end">
						<i class="bi bi-journal-bookmark h1 text-primary"></i>
					</div>
					<!-- End Col -->
				</div>
				<!-- End Row -->
			</div>
		</a>
		<!-- End Card -->
	</div>

	<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
		<!-- Card -->
		<a class="card card-hover-shadow h-100">
			<div class="card-body">
				<h6 class="card-subtitle">Total Peserta</h6>

				<div class="row align-items-center gx-2 mb-1">
					<div class="col-6">
						<h2 class="card-title text-inherit"><?= number_format($count['peserta'],0,",",".")?></h2>
					</div>
					<!-- End Col -->

					<div class="col-6 text-end">
						<i class="bi bi-person-lines-fill h1 text-primary"></i>
					</div>
					<!-- End Col -->
				</div>
				<!-- End Row -->
			</div>
		</a>
		<!-- End Card -->
	</div>

	<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
		<!-- Card -->
		<a class="card card-hover-shadow h-100">
			<div class="card-body">
				<h6 class="card-subtitle">Total Pendapatan</h6>

				<div class="row align-items-center gx-2 mb-1">
					<div class="col-6">
						<h2 class="card-title text-inherit">Rp.
							<?= number_format(($count['pendapatan'] > 0 ? $count['pendapatan'] : 0),0,",",".")?>
						</h2>
					</div>
					<!-- End Col -->

					<div class="col-6 text-end">
						<i class="bi bi-cash h1 text-primary"></i>
					</div>
					<!-- End Col -->
				</div>
				<!-- End Row -->
			</div>
		</a>
		<!-- End Card -->
	</div>
</div>
<!-- End Stats -->
