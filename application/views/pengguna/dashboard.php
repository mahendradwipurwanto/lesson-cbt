<!-- CTA -->
<div class="bg-dark"
	style="background-image: url(<?= base_url();?>assets-frontend/svg/components/wave-pattern-light.svg);">
	<div class="container content-space-2">
		<div class="row justify-content-lg-between align-items-lg-center">
			<div class="col-md mb-5 mb-md-0">
				<h1 class="text-white mb-0">Selamat datang <?= $user->name;?></h1>
				<p class="text-white">Semoga aktivitas belajarmu menyenangkan.</p>
			</div>
			<!-- End Col -->

			<div class="col-md-auto">
				<div class="d-grid d-sm-flex gap-3">
					<a class="btn btn-light btn-transition" href="<?= site_url('materi');?>">Cari soal / Materi <i
							class="bi-chevron-right small ms-1"></i></a>
				</div>
			</div>
			<!-- End Col -->
		</div>
		<!-- End Row -->
	</div>
</div>
<!-- End CTA -->
<div class="container mt-3">
	<!-- Nav -->
	<div class="text-left">
		<ul class="nav nav-segment mb-5" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="nav-one-eg1-tab" href="#nav-one-eg1" data-bs-toggle="pill"
					data-bs-target="#nav-one-eg1" role="tab" aria-controls="nav-one-eg1" aria-selected="true"><i
						class="bi bi-bookmark me-2"></i> Aktivitas Belajar</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="nav-two-eg1-tab" href="#nav-two-eg1" data-bs-toggle="pill"
					data-bs-target="#nav-two-eg1" role="tab" aria-controls="nav-two-eg1" aria-selected="false"><i
						class="bi bi-credit-card me-2"></i> Pembayaran</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="nav-three-eg1-tab" href="#nav-three-eg1" data-bs-toggle="pill"
					data-bs-target="#nav-three-eg1" role="tab" aria-controls="nav-three-eg1" aria-selected="false"><i
						class="bi bi-wrench me-2"></i> Pengaturan</a>
			</li>
		</ul>
	</div>
	<!-- End Nav -->

	<!-- Tab Content -->
	<div class="tab-content">
		<div class="tab-pane fade show active" id="nav-one-eg1" role="tabpanel" aria-labelledby="nav-one-eg1-tab">
			<!-- End Tab Content -->
			<div class="row">
				<?php if(!empty($user->list_materi)):?>
				<?php foreach ($user->list_materi as $key => $val):?>
				<div class="col-xs-12 col-md-4">
					<div class="course-card shadow-sm cursor" onclick="location.href = '<?= site_url('materi/'.$val->id);?>';">
						<div class="course-card__leading">

							<div class="course-card__content">
								<div class="pt-md-2">
									<div class="d-flex align-items-center mb-3 font-weight-bold text-xs">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16"
											width="16" height="16" class="mr-2">
											<path fill="#fff" d="M0 0h16v16H0z"></path>
											<path stroke="#3F3F46" stroke-linejoin="round" stroke-width="1.5"
												d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"></path>
										</svg>
										<?= $val->categories;?>
									</div>
									<h5 class="course-card__name"><?= $val->judul;?></h5>
								</div>

								<div class="course-card__meta">
									<?php if(!is_null($val->jam_belajar)):?>
									<div class="course-card__meta-item">
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
											class="course-card__icon text-turqouise-400" width="16" height="16">
											<path fill-rule="evenodd"
												d="M8 14.667A6.667 6.667 0 1 0 8 1.334a6.667 6.667 0 0 0 0 13.333Zm.667-10a.667.667 0 0 0-1.333 0v3.334c0 .176.07.346.195.471l2.334 2.333a.667.667 0 0 0 .942-.942L8.667 7.725V4.667Z"
												clip-rule="evenodd"></path>
										</svg>
										<span class="mr-2"><?= $val->jam_belajar;?> Jam</span>
									</div>
									<?php endif;?>

									<div class="course-card__meta-item">
										<svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
											xmlns="http://www.w3.org/2000/svg"
											class="course-card__icon text-yellow-400">
											<path
												d="M8 0L10.2899 4.84829L15.6085 5.52786L11.7051 9.20385L12.7023 14.4721L8 11.8957L3.29772 14.4721L4.29494 9.20385L0.391548 5.52786L5.71015 4.84829L8 0Z"
												fill=""></path>
										</svg>
										<span class="mr-2"><?= $val->rating;?></span>
									</div>

									<div class="course-card__meta-item">
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
											class="course-card__icon text-gray-400" width="16" height="16">
											<rect width="2.667" height="4.667" x="2.667" y="8" rx="1"
												class="text-blue-400" fill="currentColor"></rect>
											<rect width="2.667" height="6.667" x="6.667" y="6" rx="1"
												class="text-gray-200" fill="currentColor"></rect>
											<rect width="2.667" height="9.333" x="10.667" y="3.333" rx="1"
												class="text-gray-200" fill="currentColor"></rect>
										</svg>
										<span>Level - <?= $val->level;?></span>
									</div>
								</div>
							</div>
						</div>
						<div class="course-card__info d-flex align-items-center">
							<div class="course-card__info-item">
								<svg width="16" height="16" class="course-card__icon text-gray-500" viewBox="0 0 16 16"
									fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M1.33334 2.66666C1.33334 1.93028 1.9303 1.33333 2.66668 1.33333H10C10.7364 1.33333 11.3333 1.93028 11.3333 2.66666V3.33333H13.3333C14.0697 3.33333 14.6667 3.93028 14.6667 4.66666V13.3333C14.6667 14.0697 14.0697 14.6667 13.3333 14.6667H2.66668C1.9303 14.6667 1.33334 14.0697 1.33334 13.3333V2.66666ZM10 2.66666V3.33333H2.66668V2.66666H10ZM2.66668 13.3333V4.66666H4.66668V13.3333H2.66668ZM6.00001 13.3333H13.3333V4.66666H6.00001V13.3333Z">
									</path>
								</svg>
								<span class="mr-3"><?= $val->total_module;?> Modul</span>
							</div>

							<div class="course-card__info-item">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
									class="course-card__icon text-gray-500" width="16" height="16">
									<path fill-rule="evenodd"
										d="M5 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM4 5a1 1 0 112 0 1 1 0 01-2 0zM11 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM10 5a1 1 0 112 0 1 1 0 01-2 0zM8 9.558a3.667 3.667 0 00-6.667 2.109V14c0 .368.299.667.667.667h12a.667.667 0 00.667-.667v-2.333A3.667 3.667 0 008 9.558zm-.667 3.775v-1.668a2.333 2.333 0 00-4.666.002v1.666h4.666zm1.334-1.668v1.668h4.666v-1.666a2.333 2.333 0 00-4.666-.002z"
										clip-rule="evenodd"></path>
								</svg>
								<span class="mr-3"><?= $val->total_peserta;?> Peserta Terdaftar</span>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php endif;?>
			</div>
		</div>

		<div class="tab-pane fade" id="nav-two-eg1" role="tabpanel" aria-labelledby="nav-two-eg1-tab">
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
							<th class="table-column-pe-0">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
									<label class="form-check-label" for="datatableCheckAll"></label>
								</div>
							</th>
							<th class="table-column-ps-0">Order</th>
							<th>Date</th>
							<th>Customer</th>
							<th>Payment status</th>
							<th>Fulfillment status</th>
							<th>Payment method</th>
							<th>Total</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck1">
									<label class="form-check-label" for="ordersCheck1"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#35463</a>
							</td>
							<td>Aug 17, 2020, 5:48 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Jase Marley</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-info text-info">
									<span class="legend-indicator bg-info"></span>Fulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/mastercard.svg" alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull; 4242</span>
								</div>
							</td>
							<td>$256.39</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown1" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown1">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck2">
									<label class="form-check-label" for="ordersCheck2"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#23513</a>
							</td>
							<td>Aug 17, 2020, 2:01 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Mathew Gustaffson</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-dark text-dark">
									<span class="legend-indicator bg-dark"></span>Unfulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/mastercard.svg" alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull; 2390</span>
								</div>
							</td>
							<td>$2,125.00</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown2" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown2">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck3">
									<label class="form-check-label" for="ordersCheck3"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#62311</a>
							</td>
							<td>Aug 17, 2020, 1:55 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Mathew Gustaffson</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-dark text-dark">
									<span class="legend-indicator bg-dark"></span>Unfulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/paypal-icon.svg"
										alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
								</div>
							</td>
							<td>$532.99</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown3" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown3">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck4">
									<label class="form-check-label" for="ordersCheck4"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#12453</a>
							</td>
							<td>Aug 17, 2020, 1:54 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Nicky Olvsson</a>
							</td>
							<td>
								<span class="badge bg-soft-warning text-warning">
									<span class="legend-indicator bg-warning"></span>Pending
								</span>
							</td>
							<td>
								<span class="badge bg-soft-dark text-dark">
									<span class="legend-indicator bg-dark"></span>Unfulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/mastercard.svg" alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull; 3535</span>
								</div>
							</td>
							<td>$1,035.02</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown4" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown4">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck5">
									<label class="form-check-label" for="ordersCheck5"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#84223</a>
							</td>
							<td>Aug 17, 2020, 1:04 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">David Nunez</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-info text-info">
									<span class="legend-indicator bg-info"></span>Fulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/paypal-icon.svg"
										alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
								</div>
							</td>
							<td>$68.53</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown5" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown5">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck6">
									<label class="form-check-label" for="ordersCheck6"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#46542</a>
							</td>
							<td>Aug 17, 2020, 1:01 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Brian Jackson</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-info text-info">
									<span class="legend-indicator bg-info"></span>Fulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/paypal-icon.svg"
										alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
								</div>
							</td>
							<td>$100.00</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown6" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown6">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck7">
									<label class="form-check-label" for="ordersCheck7"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a class="text-danger" href="./ecommerce-order-details.html">#35378</a>
								<i class="bi-exclamation-diamond-fill text-warning"></i>
							</td>
							<td>Aug 17, 2020, 12:56 (ET)</td>
							<td class="text-danger">No customer</td>
							<td>
								<span class="badge bg-soft-warning text-warning">
									<span class="legend-indicator bg-warning"></span>Pending
								</span>
							</td>
							<td>
								<span class="badge bg-soft-dark text-dark">
									<span class="legend-indicator bg-dark"></span>Unfulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/mastercard.svg" alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull; 9901</span>
								</div>
							</td>
							<td class="text-danger">$89.46</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown7" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown7">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck8">
									<label class="form-check-label" for="ordersCheck8"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a class="text-danger" href="./ecommerce-order-details.html">#24562</a>
								<i class="bi-exclamation-diamond-fill text-warning"></i>
							</td>
							<td>Aug 17, 2020, 12:54 (ET)</td>
							<td class="text-danger">No customer</td>
							<td>
								<span class="badge bg-soft-warning text-warning">
									<span class="legend-indicator bg-warning"></span>Pending
								</span>
							</td>
							<td>
								<span class="badge bg-soft-dark text-dark">
									<span class="legend-indicator bg-dark"></span>Unfulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/mastercard.svg" alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull; 2278</span>
								</div>
							</td>
							<td class="text-danger">$3,535.46</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown8" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown8">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck9">
									<label class="form-check-label" for="ordersCheck9"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#78531</a>
							</td>
							<td>Aug 17, 2020, 12:48 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Mathew Gustaffson</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-info text-info">
									<span class="legend-indicator bg-info"></span>Fulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/paypal-icon.svg"
										alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
								</div>
							</td>
							<td>$23.89</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown9" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown9">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck10">
									<label class="form-check-label" for="ordersCheck10"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#34634</a>
							</td>
							<td>Aug 17, 2020, 12:41 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Jase Marley</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-info text-info">
									<span class="legend-indicator bg-info"></span>Fulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/paypal-icon.svg"
										alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
								</div>
							</td>
							<td>$77.00</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown10" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown10">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck11">
									<label class="form-check-label" for="ordersCheck11"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a class="text-danger" href="./ecommerce-order-details.html">#93817</a>
								<i class="bi-exclamation-diamond-fill text-warning"></i>
							</td>
							<td>Aug 17, 2020, 12:36 (ET)</td>
							<td><a class="text-danger" href="./ecommerce-customer-details.html">Jase Marley</a></td>
							<td>
								<span class="badge bg-soft-warning text-warning">
									<span class="legend-indicator bg-warning"></span>Pending
								</span>
							</td>
							<td>
								<span class="badge bg-soft-dark text-dark">
									<span class="legend-indicator bg-dark"></span>Unfulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/paypal-icon.svg"
										alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
								</div>
							</td>
							<td class="text-danger">$77.00</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown11" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown11">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck12">
									<label class="form-check-label" for="ordersCheck12"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#43113</a>
							</td>
							<td>Aug 17, 2020, 12:25 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Jacky Ferguson</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-info text-info">
									<span class="legend-indicator bg-info"></span>Fulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/mastercard.svg" alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull; 5533</span>
								</div>
							</td>
							<td>$1,421.47</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown12" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown12">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck13">
									<label class="form-check-label" for="ordersCheck13"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#12412</a>
							</td>
							<td>Aug 16, 2020, 4:31 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Brian Jackson</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-info text-info">
									<span class="legend-indicator bg-info"></span>Fulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/mastercard.svg" alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull; 4440</span>
								</div>
							</td>
							<td>$45.00</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown13" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown13">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck14">
									<label class="form-check-label" for="ordersCheck14"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a class="text-danger" href="./ecommerce-order-details.html">#92271</a>
								<i class="bi-exclamation-diamond-fill text-warning"></i>
							</td>
							<td>Aug 16, 2020, 3:26 (ET)</td>
							<td><a class="text-danger" href="./ecommerce-customer-details.html">Kamilia Williams</a>
							</td>
							<td>
								<span class="badge bg-soft-warning text-warning">
									<span class="legend-indicator bg-warning"></span>Pending
								</span>
							</td>
							<td>
								<span class="badge bg-soft-dark text-dark">
									<span class="legend-indicator bg-dark"></span>Unfulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/mastercard.svg" alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull; 6182</span>
								</div>
							</td>
							<td class="text-danger">$2,577.00</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown14" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown14">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck15">
									<label class="form-check-label" for="ordersCheck15"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a class="text-danger" href="./ecommerce-order-details.html">#62555</a>
								<i class="bi-exclamation-diamond-fill text-warning"></i>
							</td>
							<td>Aug 16, 2020, 2:54 (ET)</td>
							<td class="text-danger">No customer</td>
							<td>
								<span class="badge bg-soft-warning text-warning">
									<span class="legend-indicator bg-warning"></span>Pending
								</span>
							</td>
							<td>
								<span class="badge bg-soft-dark text-dark">
									<span class="legend-indicator bg-dark"></span>Unfulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/paypal-icon.svg"
										alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
								</div>
							</td>
							<td class="text-danger">$63.46</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown15" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown15">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck16">
									<label class="form-check-label" for="ordersCheck16"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#35331</a>
							</td>
							<td>Aug 16, 2020, 2:48 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Victoria Vicky</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-info text-info">
									<span class="legend-indicator bg-info"></span>Fulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/paypal-icon.svg"
										alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
								</div>
							</td>
							<td>$4,639.00</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown16" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown16">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck17">
									<label class="form-check-label" for="ordersCheck17"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#45321</a>
							</td>
							<td>Aug 16, 2020, 2:40 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Anna Alexsandrova</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-dark text-dark">
									<span class="legend-indicator bg-dark"></span>Unfulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/paypal-icon.svg"
										alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
								</div>
							</td>
							<td>$5,253.00</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown17" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown17">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck18">
									<label class="form-check-label" for="ordersCheck18"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#23541</a>
							</td>
							<td>Aug 16, 2020, 1:59 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Max Norway</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-info text-info">
									<span class="legend-indicator bg-info"></span>Fulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/mastercard.svg" alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull; 3091</span>
								</div>
							</td>
							<td>$499.00</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown18" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown18">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck19">
									<label class="form-check-label" for="ordersCheck19"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#68681</a>
							</td>
							<td>Aug 16, 2020, 1:55 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Williams Tonston</a>
							</td>
							<td>
								<span class="badge bg-soft-success text-success">
									<span class="legend-indicator bg-success"></span>Paid
								</span>
							</td>
							<td>
								<span class="badge bg-soft-info text-info">
									<span class="legend-indicator bg-info"></span>Fulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/mastercard.svg" alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull; 8837</span>
								</div>
							</td>
							<td>$171.00</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown19" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown19">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>

						<tr>
							<td class="table-column-pe-0">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="ordersCheck20">
									<label class="form-check-label" for="ordersCheck20"></label>
								</div>
							</td>
							<td class="table-column-ps-0">
								<a href="./ecommerce-order-details.html">#78323</a>
							</td>
							<td>Aug 16, 2020, 1:15 (ET)</td>
							<td>
								<a class="text-body" href="./ecommerce-customer-details.html">Victor Martinov</a>
							</td>
							<td>
								<span class="badge bg-soft-warning text-warning">
									<span class="legend-indicator bg-warning"></span>Pending
								</span>
							</td>
							<td>
								<span class="badge bg-soft-dark text-dark">
									<span class="legend-indicator bg-dark"></span>Unfulfilled
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center">
									<img class="avatar avatar-xss avatar-4x3 me-2"
										src="<?= base_url();?>assets/svg/brands/mastercard.svg" alt="Image Description">
									<span class="text-dark">&bull;&bull;&bull;&bull; 3566</span>
								</div>
							</td>
							<td>$348.55</td>
							<td>
								<div class="btn-group" role="group">
									<a class="btn btn-white btn-sm" href="./ecommerce-order-details.html">
										<i class="bi-eye"></i> View
									</a>

									<!-- Button Group -->
									<div class="btn-group">
										<button type="button"
											class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
											id="ordersExportDropdown20" data-bs-toggle="dropdown"
											aria-expanded="false"></button>

										<div class="dropdown-menu dropdown-menu-end mt-1"
											aria-labelledby="ordersExportDropdown20">
											<span class="dropdown-header">Options</span>
											<a class="js-export-copy dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/copy-icon.svg"
													alt="Image Description">
												Copy
											</a>
											<a class="js-export-print dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/illustrations/print-icon.svg"
													alt="Image Description">
												Print
											</a>
											<div class="dropdown-divider"></div>
											<span class="dropdown-header">Download options</span>
											<a class="js-export-excel dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/excel-icon.svg"
													alt="Image Description">
												Excel
											</a>
											<a class="js-export-csv dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/components/placeholder-csv-format.svg"
													alt="Image Description">
												.CSV
											</a>
											<a class="js-export-pdf dropdown-item" href="javascript:;">
												<img class="avatar avatar-xss avatar-4x3 me-2"
													src="<?= base_url();?>assets/svg/brands/pdf-icon.svg"
													alt="Image Description">
												PDF
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;">
												<i class="bi-trash dropdown-item-icon"></i> Delete
											</a>
										</div>
									</div>
									<!-- End Unfold -->
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- End Table -->
		</div>

		<div class="tab-pane fade" id="nav-three-eg1" role="tabpanel" aria-labelledby="nav-three-eg1-tab">
			<div class="d-grid gap-3 gap-lg-5">

				<!-- Card -->
				<div class="card">
					<div class="card-header">
						<h2 class="card-title h4">Informasi Pribadi</h2>
					</div>

					<!-- Body -->
					<div class="card-body">
						<!-- Form -->
						<form action="<?= site_url('pengguna/savePribadi');?>" method="POST"
							class="js-validate needs-validation" novalidate>
							<!-- Form -->
							<div class="row mb-4">
								<label for="namalengkapLabel" class="col-sm-3 col-form-label form-label">Nama
									lengkap</label>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="name" id="namalengkapLabel"
										placeholder="Nama lengkap anda" aria-label="Nama lengkap anda"
										value="<?= $user->name;?>" required>
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="row mb-4">
								<label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>

								<div class="col-sm-9">
									<input type="email" class="form-control" name="email" id="emailLabel"
										placeholder="Email" aria-label="Email" value="<?= $user->email;?>" readonly>
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="row mb-4">
								<label for="phoneLabel" class="col-sm-3 col-form-label form-label">Nomor telepon <span
										class="form-label-secondary">(Optional)</span></label>

								<div class="col-sm-9">
									<input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel"
										placeholder="Nomor telepon" aria-label="Nomor telepon"
										value="<?= $user->phone;?>">
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="row mb-4">
								<label for="birthdateLabel" class="col-sm-3 col-form-label form-label">Tanggal
									lahir</label>

								<div class="col-sm-9">
									<input type="date" class="form-control" name="birthdate" id="birthdateLabel"
										placeholder="Your birthdate" aria-label="Your birthdate"
										value="<?= date("Y-m-d", strtotime($user->birthdate));?>" required>
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div id="accountType" class="row mb-4">
								<label class="col-sm-3 col-form-label form-label">Jenis kelamin</label>

								<div class="col-sm-9">
									<div class="input-group input-group-sm-vertical">
										<!-- Radio Check -->
										<label class="form-control" for="gender-laki-laki">
											<span class="form-check">
												<input type="radio" class="form-check-input" name="gender"
													value="laki-laki"
													<?php if($user->gender == 'laki-laki'):?>checked<?php endif;?>
													id="gender-laki-laki" checked>
												<span class="form-check-label">Laki-laki</span>
											</span>
										</label>
										<!-- End Radio Check -->

										<!-- Radio Check -->
										<label class="form-control" for="gender-perempuan">
											<span class="form-check">
												<input type="radio" class="form-check-input" name="gender"
													value="perempuan"
													<?php if($user->gender == 'perempuan'):?>checked<?php endif;?>
													id="gender-perempuan">
												<span class="form-check-label">Peremmpuan</span>
											</span>
										</label>
										<!-- End Radio Check -->
									</div>
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="row mb-4">
								<label for="addressLabel" class="col-sm-3 col-form-label form-label">Alamat</label>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="address" id="addressLabel"
										placeholder="Alamat" aria-label="Alamat" value="<?= $user->address;?>">
								</div>
							</div>
							<!-- End Form -->

							<div class="d-flex justify-content-end">
								<button type="submit" class="btn btn-primary">Simpan perubahan</button>
							</div>
						</form>
						<!-- End Form -->
					</div>
					<!-- End Body -->
				</div>
				<!-- End Card -->

				<!-- Card -->
				<div id="passwordSection" class="card">
					<div class="card-header">
						<h4 class="card-title">Ubah password anda</h4>
					</div>

					<!-- Body -->
					<div class="card-body">
						<!-- Form -->
						<form id="changePasswordForm" action="<?= site_url('pengguna/ubahPassword');?>" method="POST"
							class="js-validate needs-validation" novalidate>
							<!-- Form -->
							<div class="row mb-4">
								<label for="passwordSaatIniLabel" class="col-sm-3 col-form-label form-label">Password
									saat
									ini</label>

								<div class="col-sm-9">
									<input type="password" class="form-control" name="currentPassword"
										id="passwordSaatIniLabel" placeholder="Masukkan password saat ini"
										aria-label="Masukkan password saat ini">
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="row mb-4">
								<label for="newPassword" class="col-sm-3 col-form-label form-label">Password
									baru</label>

								<div class="col-sm-9">
									<input type="password" class="form-control" name="newPassword" id="newPassword"
										placeholder="Masukan password baru" aria-label="Masukan password baru">
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="row mb-4">
								<label for="confirmNewPasswordLabel"
									class="col-sm-3 col-form-label form-label">Konfirmasi
									password baru</label>

								<div class="col-sm-9">
									<div class="mb-3">
										<input type="password" class="form-control" name="confirmNewPassword"
											id="confirmNewPasswordLabel" placeholder="Konfirmasi password baru"
											aria-label="Konfirmasi password baru">
									</div>

									<h5>Password requirements:</h5>

									<p class="fs-6 mb-2">Ensure that these requirements are met:</p>

									<ul class="fs-6">
										<li>Minimum 8 characters long - the more, the better</li>
										<li>At least one lowercase character</li>
										<li>At least one uppercase character</li>
										<li>At least one number, symbol, or whitespace character</li>
									</ul>
								</div>
							</div>
							<!-- End Form -->

							<div class="d-flex justify-content-end">
								<button type="submit" class="btn btn-primary">Ubah password</button>
							</div>
						</form>
						<!-- End Form -->
					</div>
					<!-- End Body -->
				</div>
				<!-- End Card -->

				<!-- Card -->
				<div id="deleteAccountSection" class="card">
					<div class="card-header">
						<h4 class="card-title">Hapus akun</h4>
					</div>

					<!-- Body -->
					<div class="card-body">
						<p class="card-text">When you delete your account, you lose access to Front account services,
							and we
							permanently delete your personal data. You can cancel the deletion for 14 days.</p>

						<div class="mb-4">
							<!-- Form Check -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="deleteAccountCheckbox">
								<label class="form-check-label" for="deleteAccountCheckbox">
									Confirm that I want to delete my account.
								</label>
							</div>
							<!-- End Form Check -->
						</div>

						<div class="d-flex justify-content-end gap-3">
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>
					<!-- End Body -->
				</div>
				<!-- End Card -->
			</div>
		</div>
	</div>
</div>
