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
						<h2 class="card-title text-inherit"><?= number_format($count['member'],0,",",".")?></h2>
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
						<h2 class="card-title text-inherit">Rp. <?= number_format($count['transaksi'],0,",",".")?>
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

<!-- Card -->
<div class="card mb-3 mb-lg-5">
	<!-- Header -->
	<div class="card-header">
		<div class="row justify-content-between align-items-center flex-grow-1">
			<div class="col-md">
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="card-header-title">Member</h4>
				</div>
			</div>
			<!-- End Col -->

			<div class="col-auto">
				<!-- Filter -->
				<div class="row align-items-sm-center">
					<div class="col-sm-auto">
						<div class="row align-items-center gx-0">
							<div class="col">
								<span class="text-secondary me-2">Status:</span>
							</div>
							<!-- End Col -->

							<div class="col-auto">
								<!-- Select -->
								<div class="tom-select-custom tom-select-custom-end">
									<select
										class="js-select js-datatable-filter form-select form-select-sm form-select-borderless"
										data-target-column-index="4" data-target-table="datatable" autocomplete="off"
										data-hs-tom-select-options='{
							"searchInDropdown": false,
							"hideSearch": true,
							"dropdownWidth": "10rem"
						}'>
										<option value="null" selected>Semua</option>
										<option value="aktif">Aktif</option>
										<option value="belum verifikasi email">Belum verifikasi email</option>
										<option value="suspend">Suspend</option>
									</select>
								</div>
								<!-- End Select -->
							</div>
							<!-- End Col -->
						</div>
						<!-- End Row -->
					</div>
					<!-- End Col -->

					<div class="col-md">
						<form>
							<!-- Search -->
							<div class="input-group input-group-merge input-group-flush">
								<div class="input-group-prepend input-group-text">
									<i class="bi-search"></i>
								</div>
								<input id="datatableSearch" type="search" class="form-control"
									placeholder="Search users" aria-label="Search users">
							</div>
							<!-- End Search -->
						</form>
					</div>
					<!-- End Col -->
				</div>
				<!-- End Filter -->
			</div>
			<!-- End Col -->
		</div>
		<!-- End Row -->
	</div>
	<!-- End Header -->

	<!-- Table -->
	<div class="table-responsive datatable-custom">
		<table id="datatable"
			class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
			data-hs-datatables-options='{
			"columnDefs": [{
				"targets": [0, 1, 2, 3, 4],
				"orderable": false
			}],
			"order": [],
			"info": {
				"totalQty": "#datatableWithPaginationInfoTotalQty"
			},
			"search": "#datatableSearch",
			"entries": "#datatableEntries",
			"pageLength": 6,
			"isResponsive": false,
			"isShowPaging": false,
			"pagination": "datatablePagination"
			}'>
			<thead class="thead-light">
				<tr>
					<th scope="col" class="table-column-pe-0">No</th>
					<th class="table-column-ps-0">Nama</th>
					<th>Email</th>
					<th>Whatsapp</th>
					<th>Status</th>
				</tr>
			</thead>

			<tbody>
				<?php if(!empty($member)):?>
				<?php $no=1; foreach($member as $key => $val):?>
				<tr>
					<td class="table-column-pe-0"><?= $no++;?></td>
					<td class="table-column-ps-0"><?= $val->name;?></td>
					<td><?= $val->email;?></td>
					<td><?= $val->phone;?></td>
					<td><?= $val->status;?></td>
				</tr>
				<?php endforeach;?>
				<?php endif;?>
			</tbody>
		</table>
	</div>
	<!-- End Table -->

	<!-- Footer -->
	<div class="card-footer">
		<!-- Pagination -->
		<div class="row justify-content-center justify-content-sm-between align-items-sm-center">
			<div class="col-sm mb-2 mb-sm-0">
				<div class="d-flex justify-content-center justify-content-sm-start align-items-center">
					<span class="me-2">Showing:</span>

					<!-- Select -->
					<div class="tom-select-custom">
						<select id="datatableEntries" class="js-select form-select form-select-borderless w-auto"
							autocomplete="off" data-hs-tom-select-options='{
					"searchInDropdown": false,
					"hideSearch": true
					}'>
							<option value="4">4</option>
							<option value="6">6</option>
							<option value="8" selected>8</option>
							<option value="12">12</option>
						</select>
					</div>
					<!-- End Select -->

					<span class="text-secondary me-2">of</span>

					<!-- Pagination Quantity -->
					<span id="datatableWithPaginationInfoTotalQty"></span>
				</div>
			</div>
			<!-- End Col -->

			<div class="col-sm-auto">
				<div class="d-flex justify-content-center justify-content-sm-end">
					<!-- Pagination -->
					<nav id="datatablePagination" aria-label="Activity pagination"></nav>
				</div>
			</div>
			<!-- End Col -->
		</div>
		<!-- End Pagination -->
	</div>
	<!-- End Footer -->
</div>
<!-- End Card -->
