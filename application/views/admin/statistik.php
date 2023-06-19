<!-- Page Header -->
<div class="page-header pb-3">
	<div class="row align-items-end">
		<div class="col-sm mb-2 mb-sm-0">
			<h1 class="docs-page-header-title"><?= $page_title;?></h1>
			<p class="docs-page-header-text"><?= $sub_page_title;?></p>
		</div>
		<!-- End Col -->

		<div class="col-sm-auto">
		</div>
		<!-- End Col -->
	</div>
	<!-- End Row -->
</div>
<!-- End Page Header -->
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
<div class="row">
	<div class="col-md-12 com-sm-12 mb-4">
		<div class="card card-body">
			<h4 class="card-title">Pengguna baru</h4>
			<div id="chartGraphRegister"></div>
		</div>
	</div>
</div>


<script>
	$(document).ready(function () {

		var graphRegister = {
			series: [{
				name: 'Register Account',
				data: [ <?= implode(',', $arrChartDailyAccount['jmlPeserta']) ?>]
			}, {
				name: 'Submit submission',
				data: [ <?= implode(',', $arrChartDaily['jmlPeserta']) ?>]
			}],
			chart: {
				height: 350,
				type: 'area'
			},
			dataLabels: {
				enabled: false
			},
			stroke: {
				curve: 'straight'
			},
			xaxis: {
				type: 'datetime',
				categories: [ <?= implode(',', $arrChartDailyDate) ?>]
			},
			tooltip: {
				x: {
					format: 'dd/MM/yy HH:mm'
				},
			},
		};
		var chartGraphRegister = new ApexCharts(document.querySelector("#chartGraphRegister"),
			graphRegister);
			
		chartGraphRegister.render();

	})

</script>

