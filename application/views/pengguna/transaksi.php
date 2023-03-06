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
<div class="card">
	<!-- Header -->
	<div class="card-header card-header-content-md-between">
		<div class="mb-2 mb-md-0">
			<form>
				<!-- Search -->
				<div class="input-group input-group-merge input-group-flush">
					<div class="input-group-prepend input-group-text">
						<i class="bi-search"></i>
					</div>
					<input id="datatableSearch" type="search" class="form-control" placeholder="Search users"
						aria-label="Search users">
				</div>
				<!-- End Search -->
			</form>
		</div>

		<div class="d-grid d-sm-flex gap-2">
		</div>
	</div>
	<!-- End Header -->

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
									id="ordersExportDropdown1" data-bs-toggle="dropdown" aria-expanded="false"></button>

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
									id="ordersExportDropdown2" data-bs-toggle="dropdown" aria-expanded="false"></button>

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
								src="<?= base_url();?>assets/svg/brands/paypal-icon.svg" alt="Image Description">
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
									id="ordersExportDropdown3" data-bs-toggle="dropdown" aria-expanded="false"></button>

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
									id="ordersExportDropdown4" data-bs-toggle="dropdown" aria-expanded="false"></button>

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
								src="<?= base_url();?>assets/svg/brands/paypal-icon.svg" alt="Image Description">
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
									id="ordersExportDropdown5" data-bs-toggle="dropdown" aria-expanded="false"></button>

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
								src="<?= base_url();?>assets/svg/brands/paypal-icon.svg" alt="Image Description">
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
									id="ordersExportDropdown6" data-bs-toggle="dropdown" aria-expanded="false"></button>

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
									id="ordersExportDropdown7" data-bs-toggle="dropdown" aria-expanded="false"></button>

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
									id="ordersExportDropdown8" data-bs-toggle="dropdown" aria-expanded="false"></button>

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
								src="<?= base_url();?>assets/svg/brands/paypal-icon.svg" alt="Image Description">
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
									id="ordersExportDropdown9" data-bs-toggle="dropdown" aria-expanded="false"></button>

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
								src="<?= base_url();?>assets/svg/brands/paypal-icon.svg" alt="Image Description">
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
								src="<?= base_url();?>assets/svg/brands/paypal-icon.svg" alt="Image Description">
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
					<td><a class="text-danger" href="./ecommerce-customer-details.html">Kamilia Williams</a></td>
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
								src="<?= base_url();?>assets/svg/brands/paypal-icon.svg" alt="Image Description">
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
								src="<?= base_url();?>assets/svg/brands/paypal-icon.svg" alt="Image Description">
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
								src="<?= base_url();?>assets/svg/brands/paypal-icon.svg" alt="Image Description">
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
