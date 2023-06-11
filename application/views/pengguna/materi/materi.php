<div class="container content-space-1">
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-end">
			<div class="col-sm mb-2 mb-sm-0">
				<h1 class="page-header-title"><?= $page_title;?></h1>
				<h5 class="page-header-subtitle"><?= $sub_page_title;?></h5>
			</div>
			<!-- End Col -->
		</div>
		<!-- End Row -->
	</div>
	<!-- End Page Header -->

	<!-- Card -->
	<div class="card mb-3 mb-lg-5">
		<!-- Body -->
		<div class="card-body">
			<div class="d-flex align-items-md-center">
				<div class="flex-shrink-0">
					<span class="display-3 text-dark"><?= $user->jumlah_materi;?></span>
				</div>

				<div class="flex-grow-1 ms-3">
					<div class="row mx-md-n3">
						<div class="col-md px-md-4">
							<span class="d-block">Total materi</span>
						</div>
						<!-- End Col -->

						<div class="col-md-9 col-lg-10 column-md-divider px-md-4 d-none">
							<div class="row justify-content-start mb-2">
								<div class="col-auto">
									<span class="legend-indicator bg-primary"></span>
									In progress (10)
								</div>
								<!-- End Col -->

								<div class="col-auto">
									<span class="legend-indicator bg-success"></span>
									Completed (8)
								</div>
								<!-- End Col -->

								<div class="col-auto">
									<span class="legend-indicator"></span>
									To do (6)
								</div>
								<!-- End Col -->
							</div>
							<!-- End Row -->

							<!-- Progress -->
							<div class="progress rounded-pill">
								<div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
									aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar bg-success" role="progressbar" style="width: 30%"
									aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<!-- End Progress -->
						</div>
						<!-- End Col -->
					</div>
					<!-- End Row -->
				</div>
			</div>
		</div>
		<!-- End Body -->
	</div>
	<!-- End Card -->

	<!-- Card -->
	<div class="card">
		<!-- Table -->
		<div class="table-responsive datatable-custom">
			<table id="datatable"
				class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
				style="width: 100%" data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 12,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
				<thead class="thead-light">
					<tr>
						<th>No.</th>
						<th>Materi</th>
						<th>Kategori</th>
						<th>Status</th>
						<th>Tanggal</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php if(!empty($materi)):?>
					<?php $no = 1; foreach($materi as $key => $val):?>

					<tr>
						<td><?= $no++;?></td>
						<td><?= $val->judul;?></td>
						<td>
							<span class="badge bg-soft-warning text-warning">
								<?= $val->categories;?>
							</span>
						</td>
						<td>
							<span class="badge bg-soft-dark text-dark">
								<span class="legend-indicator bg-dark"></span><?= $val->status_txt;?>
							</span>
						</td>
						<td><?= $val->tanggal_txt;?></td>
						<td>
							<a class="btn btn-white btn-sm" href="<?= site_url('materi/'.$val->id);?>">
								<i class="bi-eye me-2"></i> Detail materi
							</a>
						</td>
					</tr>
					<?php endforeach;?>
					<?php else:?>
					<tr>
						<td colspan="6" class="text-center">Belum ada materi</td>
					</tr>
					<?php endif;?>
				</tbody>
			</table>
		</div>
		<!-- End Table -->

		<!-- Footer -->
		<div class="card-footer">
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
								<option value="12" selected>12</option>
								<option value="14">14</option>
								<option value="16">16</option>
								<option value="18">18</option>
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
			<!-- End Row -->
		</div>
		<!-- End Footer -->
	</div>
	<!-- End Card -->
</div>
