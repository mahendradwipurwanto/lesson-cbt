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
				<span class="display-3 text-dark">24</span>
			</div>

			<div class="flex-grow-1 ms-3">
				<div class="row mx-md-n3">
					<div class="col-md px-md-4">
						<span class="d-block">Total projects</span>
						<span class="badge bg-soft-danger text-danger rounded-pill p-1">
							<i class="bi-graph-down"></i> -2 late in due
						</span>
					</div>
					<!-- End Col -->

					<div class="col-md-9 col-lg-10 column-md-divider px-md-4">
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

		<div class="d-grid d-sm-flex justify-content-md-end align-items-sm-center gap-2">
			<!-- Datatable Info -->
			<div id="datatableCounterInfo" style="display: none;">
				<div class="d-flex align-items-center">
					<span class="fs-5 me-3">
						<span id="datatableCounter">0</span>
						Selected
					</span>
					<a class="btn btn-outline-danger btn-sm" href="javascript:;">
						<i class="bi-trash"></i> Delete
					</a>
				</div>
			</div>
			<!-- End Datatable Info -->

			<!-- Dropdown -->
			<div class="dropdown">
				<button type="button" class="btn btn-white btn-sm dropdown-toggle w-100" id="usersExportDropdown"
					data-bs-toggle="dropdown" aria-expanded="false">
					<i class="bi-download me-2"></i> Export
				</button>

				<div class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="usersExportDropdown">
					<span class="dropdown-header">Options</span>
					<a id="export-copy" class="dropdown-item" href="javascript:;">
						<img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg"
							alt="Image Description">
						Copy
					</a>
					<a id="export-print" class="dropdown-item" href="javascript:;">
						<img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg"
							alt="Image Description">
						Print
					</a>
					<div class="dropdown-divider"></div>
					<span class="dropdown-header">Download options</span>
					<a id="export-excel" class="dropdown-item" href="javascript:;">
						<img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg"
							alt="Image Description">
						Excel
					</a>
					<a id="export-csv" class="dropdown-item" href="javascript:;">
						<img class="avatar avatar-xss avatar-4x3 me-2"
							src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
						.CSV
					</a>
					<a id="export-pdf" class="dropdown-item" href="javascript:;">
						<img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg"
							alt="Image Description">
						PDF
					</a>
				</div>
			</div>
			<!-- End Dropdown -->

			<!-- Dropdown -->
			<div class="dropdown">
				<button type="button" class="btn btn-white btn-sm w-100" id="usersFilterDropdown"
					data-bs-toggle="dropdown" aria-expanded="false">
					<i class="bi-filter me-1"></i> Filter <span
						class="badge bg-soft-dark text-dark rounded-circle ms-1">2</span>
				</button>

				<div class="dropdown-menu dropdown-menu-sm-end dropdown-card card-dropdown-filter-centered"
					aria-labelledby="usersFilterDropdown" style="min-width: 22rem;">
					<!-- Card -->
					<div class="card">
						<div class="card-header card-header-content-between">
							<h5 class="card-header-title">Filter users</h5>

							<!-- Toggle Button -->
							<button type="button" class="btn btn-ghost-secondary btn-icon btn-sm ms-2">
								<i class="bi-x-lg"></i>
							</button>
							<!-- End Toggle Button -->
						</div>

						<div class="card-body">
							<form>
								<div class="mb-4">
									<small class="text-cap text-body">Role</small>

									<div class="row">
										<div class="col">
											<!-- Check -->
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value=""
													id="usersFilterCheckAll" checked>
												<label class="form-check-label" for="usersFilterCheckAll">
													All
												</label>
											</div>
											<!-- End Check -->
										</div>
										<!-- End Col -->

										<div class="col">
											<!-- Check -->
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value=""
													id="usersFilterCheckEmployee">
												<label class="form-check-label" for="usersFilterCheckEmployee">
													Employee
												</label>
											</div>
											<!-- End Check -->
										</div>
										<!-- End Col -->
									</div>
									<!-- End Row -->
								</div>

								<div class="row">
									<div class="col-sm mb-4">
										<small class="text-cap text-body">Position</small>

										<!-- Select -->
										<div class="tom-select-custom">
											<select class="js-select js-datatable-filter form-select form-select-sm"
												data-target-column-index="2" data-hs-tom-select-options='{
                                      "placeholder": "Any",
                                      "searchInDropdown": false,
                                      "hideSearch": true,
                                      "dropdownWidth": "10rem"
                                    }'>
												<option value="">Any</option>
												<option value="Accountant">Accountant</option>
												<option value="Co-founder">Co-founder</option>
												<option value="Designer">Designer</option>
												<option value="Developer">Developer</option>
												<option value="Director">Director</option>
											</select>
											<!-- End Select -->
										</div>
									</div>
									<!-- End Col -->

									<div class="col-sm mb-4">
										<small class="text-cap text-body">Status</small>

										<!-- Select -->
										<div class="tom-select-custom">
											<select class="js-select js-datatable-filter form-select form-select-sm"
												data-target-column-index="4" data-hs-tom-select-options='{
                                      "placeholder": "Any status",
                                      "searchInDropdown": false,
                                      "hideSearch": true,
                                      "dropdownWidth": "10rem"
                                    }'>
												<option value="">Any status</option>
												<option value="Completed"
													data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-success"></span>Completed</span>'>
													Completed</option>
												<option value="In progress"
													data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-warning"></span>In progress</span>'>
													In progress</option>
												<option value="To do"
													data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-danger"></span>To do</span>'>
													To do</option>
											</select>
										</div>
										<!-- End Select -->
									</div>
									<!-- End Col -->

									<div class="col-12 mb-4">
										<small class="text-cap text-body">Members</small>

										<!-- Select -->
										<div class="tom-select-custom">
											<select class="js-select form-select" autocomplete="off" multiple
												data-hs-tom-select-options='{
                                      "singleMultiple": true,
                                      "hideSelected": false,
                                      "placeholder": "Select member"
                                    }'>
												<option label="empty"></option>
												<option value="AH" selected
													data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/img/160x160/img10.jpg" alt="Image Description" /><span class="text-truncate">Amanda Harvey</span></span>'>
													Amanda Harvey</option>
												<option value="DH" selected
													data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/img/160x160/img3.jpg" alt="Image Description" /><span class="text-truncate">David Harrison</span></span>'>
													David Harrison</option>
												<option value="SK"
													data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/img/160x160/img4.jpg" alt="Image Description" /><span class="text-truncate">Sam Kart</span></span>'>
													Sam Kart</option>
												<option value="FH"
													data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/img/160x160/img5.jpg" alt="Image Description" /><span class="text-truncate">Finch Hoot</span></span>'>
													Finch Hoot</option>
												<option value="CQ" selected
													data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/img/160x160/img6.jpg" alt="Image Description" /><span class="text-truncate">Costa Quinn</span></span>'>
													Costa Quinn</option>
											</select>
										</div>
										<!-- End Select -->
									</div>
									<!-- End Col -->
								</div>
								<!-- End Row -->

								<div class="d-grid">
									<a class="btn btn-primary" href="javascript:;">Apply</a>
								</div>
							</form>
						</div>
					</div>
					<!-- End Card -->
				</div>
			</div>
			<!-- End Dropdown -->
		</div>
	</div>
	<!-- End Header -->

	<!-- Table -->
	<div class="table-responsive datatable-custom">
		<table id="datatable"
			class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
			data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 2, 3, 6, 7],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 15,
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
					<th class="table-column-ps-0">Project</th>
					<th>Tasks</th>
					<th>Members</th>
					<th>Status</th>
					<th>Completion</th>
					<th><i class="bi-paperclip"></i></th>
					<th><i class="bi-chat-left-dots"></i></th>
					<th>Due date</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck1">
							<label class="form-check-label" for="usersDataCheck1"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/guideline-icon.svg" alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Cloud computing web service</span>
								<span class="d-block fs-6 text-body">Updated 2 minutes ago</span>
							</div>
						</a>
					</td>
					<td>
						<div class="d-flex align-items-center">
							120 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;"
								data-bs-toggle="tooltip" data-bs-placement="top" title="tasks completed today">+2</a>
						</div>
					</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Ella Lauda">
								<img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="David Harrison">
								<img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-dark" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Antony Taylor">
								<span class="avatar-initials">A</span>
							</a>
							<a class="avatar avatar-soft-info" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Sara Iwens">
								<span class="avatar-initials">S</span>
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Finch Hoot">
								<img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator"></span>In progress
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 me-2">35%</span>
							<div class="progress table-progress">
								<div class="progress-bar bg-primary" role="progressbar" style="width: 35%"
									aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 10
						</a>
					</td>
					<td>
						<a class="text-body" href="./project-activity.html">
							<i class="bi-chat-left-dots"></i> 2
						</a>
					</td>
					<td>05 May</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck2">
							<label class="form-check-label" for="usersDataCheck2"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<div class="avatar avatar-soft-primary avatar-circle">
								<span class="avatar-initials">I</span>
							</div>
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Improve profile UX <i
										class="tio-verified text-primary" data-bs-toggle="tooltip"
										data-bs-placement="top" title="Earned extra bonus"></i></span>
								<span class="d-block fs-6 text-body">Updated 4 hours ago</span>
							</div>
						</a>
					</td>
					<td>28</td>
					<td>No assignee</td>
					<td>
						<span class="legend-indicator bg-success"></span>Completed
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-success me-2">100%</span>
							<div class="progress table-progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 100%"
									aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>-</td>
					<td>
						<a class="text-body" href="#">
							<i class="bi-chat-left-dots"></i> 17
						</a>
					</td>
					<td>01 May</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck11">
							<label class="form-check-label" for="usersDataCheck11"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/capsule-icon.svg" alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Build stronger customer relationships</span>
								<span class="d-block fs-6 text-body">Updated 1 months ago</span>
							</div>
						</a>
					</td>
					<td>1</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Costa Quinn">
								<img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Clarice Boone">
								<img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-danger" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Adam Keep">
								<span class="avatar-initials">A</span>
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator"></span>To do
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 me-2">0%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 1
						</a>
					</td>
					<td>-</td>
					<td>-</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck5">
							<label class="form-check-label" for="usersDataCheck5"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<div class="avatar avatar-soft-info avatar-circle">
								<span class="avatar-initials">U</span>
							</div>
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Update social banners</span>
								<span class="d-block fs-6 text-body">Updated 1 week ago</span>
							</div>
						</a>
					</td>
					<td>21</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Finch Hoot">
								<img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-dark" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Bob Bardly">
								<span class="avatar-initials">B</span>
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Linda Bates">
								<img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Ella Lauda">
								<img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator bg-primary"></span>In progress
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-primary me-2">5%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 3
						</a>
					</td>
					<td>
						<a class="text-body" href="./project-activity.html">
							<i class="bi-chat-left-dots"></i> 21
						</a>
					</td>
					<td>-</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck6">
							<label class="form-check-label" for="usersDataCheck6"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/mailchimp-icon.svg" alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Update subscription method <i
										class="tio-verified text-primary" data-bs-toggle="tooltip"
										data-bs-placement="top" title="Earned extra bonus"></i></span>
								<span class="d-block fs-6 text-body">Updated 2 hours ago</span>
							</div>
						</a>
					</td>
					<td>0</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Costa Quinn">
								<img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Clarice Boone">
								<img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-danger" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Adam Keep">
								<span class="avatar-initials">A</span>
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator bg-primary"></span>In progress
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-success me-2">100%</span>
							<div class="progress table-progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 100%"
									aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>-</td>
					<td>
						<a class="text-body" href="#">
							<i class="bi-chat-left-dots"></i> 9
						</a>
					</td>
					<td>25 May</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck12">
							<label class="form-check-label" for="usersDataCheck12"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<div class="avatar avatar-soft-primary avatar-circle">
								<span class="avatar-initials">E</span>
							</div>
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Extend Spotify mobile app features</span>
								<span class="d-block fs-6 text-body">Updated 1 day ago</span>
							</div>
						</a>
					</td>
					<td>
						<div class="d-flex align-items-center">
							27 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip"
								data-bs-placement="top" title="tasks completed today">+2</a>
						</div>
					</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Costa Quinn">
								<img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-info" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Bob Bardly">
								<span class="avatar-initials">B</span>
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Clarice Boone">
								<img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Sam Kart">
								<img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator bg-primary"></span>In progress
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-primary me-2">71%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 71%" aria-valuenow="71"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 2
						</a>
					</td>
					<td>-</td>
					<td>19 May</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck9">
							<label class="form-check-label" for="usersDataCheck9"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/spec-icon.svg" alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Install Front pay</span>
								<span class="d-block fs-6 text-body">Updated 23 hours ago</span>
							</div>
						</a>
					</td>
					<td>7</td>
					<td>No assignee</td>
					<td>
						<span class="legend-indicator bg-success"></span>Completed
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-primary me-2">83%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 83%" aria-valuenow="83"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 1
						</a>
					</td>
					<td>
						<a class="text-body" href="./project-activity.html">
							<i class="bi-chat-left-dots"></i> 1
						</a>
					</td>
					<td>30 May</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck7">
							<label class="form-check-label" for="usersDataCheck7"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<div class="avatar avatar-soft-dark avatar-circle">
								<span class="avatar-initials">B</span>
							</div>
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Binance-chain <i
										class="tio-verified text-primary" data-bs-toggle="tooltip"
										data-bs-placement="top" title="Earned extra bonus"></i></span>
								<span class="d-block fs-6 text-body">Updated 14 hours ago</span>
							</div>
						</a>
					</td>
					<td>
						<div class="d-flex align-items-center">
							19 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip"
								data-bs-placement="top" title="tasks completed today">+1</a>
						</div>
					</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Amanda Harvey">
								<img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="David Harrison">
								<img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-info" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Lisa Iston">
								<span class="avatar-initials">L</span>
							</a>
							<a class="avatar avatar-light avatar-circle" href="./user-profile.html"
								data-bs-toggle="tooltip" data-bs-placement="top"
								title="Lewis Clarke, Chris Mathew and 3 more">
								<span class="avatar-initials">+5</span>
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator bg-success"></span>Completed
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-success me-2">100%</span>
							<div class="progress table-progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 100%"
									aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck3">
							<label class="form-check-label" for="usersDataCheck3"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/jira-icon.svg" alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Develop Slack mobile app</span>
								<span class="d-block fs-6 text-body">Updated 18 minutes ago</span>
							</div>
						</a>
					</td>
					<td>
						<div class="d-flex align-items-center">
							32 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip"
								data-bs-placement="top" title="tasks completed today">+5</a>
						</div>
					</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Ella Lauda">
								<img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="David Harrison">
								<img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-dark" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Antony Taylor">
								<span class="avatar-initials">A</span>
							</a>
							<a class="avatar avatar-light avatar-circle" href="./user-profile.html"
								data-bs-toggle="tooltip" data-bs-placement="top"
								title="Sam Kart, Amanda Harvey and 1 more">
								<span class="avatar-initials">+3</span>
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator bg-primary"></span>In progress
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-success me-2">100%</span>
							<div class="progress table-progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 100%"
									aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>-</td>
					<td>-</td>
					<td>25 May</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck10">
							<label class="form-check-label" for="usersDataCheck10"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<div class="avatar avatar-soft-info avatar-circle">
								<span class="avatar-initials">G</span>
							</div>
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Get a complete store audit</span>
								<span class="d-block fs-6 text-body">Updated 2 weeks ago</span>
							</div>
						</a>
					</td>
					<td>
						<div class="d-flex align-items-center">
							10 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip"
								data-bs-placement="top" title="task completed today">+1</a>
						</div>
					</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Finch Hoot">
								<img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-dark" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Bob Bardly">
								<span class="avatar-initials">B</span>
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Clarice Boone">
								<img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-danger" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Adam Keep">
								<span class="avatar-initials">A</span>
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator bg-primary"></span>In progress
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-primary me-2">30%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 3
						</a>
					</td>
					<td>
						<a class="text-body" href="./project-activity.html">
							<i class="bi-chat-left-dots"></i> 15
						</a>
					</td>
					<td>01 June</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck4">
							<label class="form-check-label" for="usersDataCheck4"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/figma-icon.svg" alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Create a new theme <i
										class="tio-verified text-primary" data-bs-toggle="tooltip"
										data-bs-placement="top" title="Earned extra bonus"></i></span>
								<span class="d-block fs-6 text-body">Updated 5 days ago</span>
							</div>
						</a>
					</td>
					<td>2</td>
					<td>No assignee</td>
					<td>
						<span class="legend-indicator"></span>To do
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 me-2">0%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>-</td>
					<td>
						<a class="text-body" href="#">
							<i class="bi-chat-left-dots"></i> 33
						</a>
					</td>
					<td>08 May</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck15">
							<label class="form-check-label" for="usersDataCheck15"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/google-webdev-icon.svg"
								alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Create a new database for Webdev</span>
								<span class="d-block fs-6 text-body">Updated 2 hours ago</span>
							</div>
						</a>
					</td>
					<td>0</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Sam Kart">
								<img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-danger" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Teresa Eyker">
								<span class="avatar-initials">T</span>
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Amanda Harvey">
								<img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-light avatar-circle" href="./user-profile.html"
								data-bs-toggle="tooltip" data-bs-placement="top"
								title="Brian Halligan, Rachel Doe and 7 more">
								<span class="avatar-initials">+9</span>
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator bg-success"></span>Completed
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-success me-2">100%</span>
							<div class="progress table-progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 100%"
									aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 1
						</a>
					</td>
					<td>
						<a class="text-body" href="./project-activity.html">
							<i class="bi-chat-left-dots"></i> 7
						</a>
					</td>
					<td>-</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck14">
							<label class="form-check-label" for="usersDataCheck14"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<div class="avatar avatar-soft-danger avatar-circle">
								<span class="avatar-initials">M</span>
							</div>
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Marketing &amp; Communications</span>
								<span class="d-block fs-6 text-body">Updated 2 months ago</span>
							</div>
						</a>
					</td>
					<td>
						<div class="d-flex align-items-center">
							44 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip"
								data-bs-placement="top" title="tasks completed today">+5</a>
						</div>
					</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Sam Kart">
								<img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-danger" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Teresa Eyker">
								<span class="avatar-initials">T</span>
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Amanda Harvey">
								<img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator bg-primary"></span>In progress
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-primary me-2">37%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 37%" aria-valuenow="37"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 2
						</a>
					</td>
					<td>
						<a class="text-body" href="./project-activity.html">
							<i class="bi-chat-left-dots"></i> 9
						</a>
					</td>
					<td>14 June</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck13">
							<label class="form-check-label" for="usersDataCheck13"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/bookingcom-icon.svg" alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Set up a datatable for Booking.com</span>
								<span class="d-block fs-6 text-body">Updated 13 days ago</span>
							</div>
						</a>
					</td>
					<td>0</td>
					<td>No assignee</td>
					<td>
						<span class="legend-indicator"></span>To do
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 me-2">0%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 10
						</a>
					</td>
					<td>-</td>
					<td>05 May</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck16">
							<label class="form-check-label" for="usersDataCheck16"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<div class="avatar avatar-soft-dark avatar-circle">
								<span class="avatar-initials">C</span>
							</div>
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Create a new marketing campaign</span>
								<span class="d-block fs-6 text-body">Updated 1 day ago</span>
							</div>
						</a>
					</td>
					<td>5</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Costa Quinn">
								<img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Clarice Boone">
								<img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-dark" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Zack Ins">
								<span class="avatar-initials">Z</span>
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator bg-primary"></span>In progress
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-primary me-2">90%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>-</td>
					<td>
						<a class="text-body" href="#">
							<i class="bi-chat-left-dots"></i> 1
						</a>
					</td>
					<td>-</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck8">
							<label class="form-check-label" for="usersDataCheck8"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/prosperops-icon.svg" alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Prosperops</span>
								<span class="d-block fs-6 text-body">Updated 1 hour ago</span>
							</div>
						</a>
					</td>
					<td>21</td>
					<td>No assignee</td>
					<td>
						<span class="legend-indicator bg-success"></span>Completed
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-primary me-2">7%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 7%" aria-valuenow="7"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 2
						</a>
					</td>
					<td>-</td>
					<td>26 May</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck17">
							<label class="form-check-label" for="usersDataCheck17"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<div class="avatar avatar-soft-primary avatar-circle">
								<span class="avatar-initials">I</span>
							</div>
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Increase productivity with reviews</span>
								<span class="d-block fs-6 text-body">Updated 30 minutes ago</span>
							</div>
						</a>
					</td>
					<td>
						<div class="d-flex align-items-center">
							10 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip"
								data-bs-placement="top" title="tasks completed today">+7</a>
						</div>
					</td>
					<td>No assignee</td>
					<td>
						<span class="legend-indicator bg-primary"></span>In progress
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-primary me-2">80%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>-</td>
					<td>
						<a class="text-body" href="#">
							<i class="bi-chat-left-dots"></i> 2
						</a>
					</td>
					<td>06 May</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck18">
							<label class="form-check-label" for="usersDataCheck18"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/spotify-icon.svg" alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Redesigning the Spotify main page</span>
								<span class="d-block fs-6 text-body">Updated 27 minutes ago</span>
							</div>
						</a>
					</td>
					<td>48</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Amanda Harvey">
								<img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="David Harrison">
								<img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-info" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Lisa Iston">
								<span class="avatar-initials">L</span>
							</a>
							<a class="avatar avatar-light avatar-circle" href="./user-profile.html"
								data-bs-toggle="tooltip" data-bs-placement="top"
								title="Lewis Clarke, Chris Mathew and 3 more">
								<span class="avatar-initials">+5</span>
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator"></span>To do
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 me-2">0%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>-</td>
					<td>
						<a class="text-body" href="#">
							<i class="bi-chat-left-dots"></i> 5
						</a>
					</td>
					<td>-</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck19">
							<label class="form-check-label" for="usersDataCheck19"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<div class="avatar avatar-soft-info avatar-circle">
								<span class="avatar-initials">T</span>
							</div>
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">The Hub project <i
										class="tio-verified text-primary" data-bs-toggle="tooltip"
										data-bs-placement="top" title="Earned extra bonus"></i></span>
								<span class="d-block fs-6 text-body">Updated 9 hours ago</span>
							</div>
						</a>
					</td>
					<td>5</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Finch Hoot">
								<img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-dark" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Bob Bardly">
								<span class="avatar-initials">B</span>
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Linda Bates">
								<img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Ella Lauda">
								<img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator bg-primary"></span>In progress
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-success me-2">100%</span>
							<div class="progress table-progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 100%"
									aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 1
						</a>
					</td>
					<td>-</td>
					<td>12 June</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck20">
							<label class="form-check-label" for="usersDataCheck20"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/digitalocean-icon.svg" alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Working on a new Cloud computing</span>
								<span class="d-block fs-6 text-body">Updated 5 days ago</span>
							</div>
						</a>
					</td>
					<td>8</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Costa Quinn">
								<img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Clarice Boone">
								<img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-danger" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Adam Keep">
								<span class="avatar-initials">A</span>
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator bg-success"></span>Completed
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-primary me-2">12%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 12%" aria-valuenow="12"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 4
						</a>
					</td>
					<td>
						<a class="text-body" href="./project-activity.html">
							<i class="bi-chat-left-dots"></i> 29
						</a>
					</td>
					<td>22 July</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck21">
							<label class="form-check-label" for="usersDataCheck21"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<div class="avatar avatar-soft-primary avatar-circle">
								<span class="avatar-initials">L</span>
							</div>
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Launch social network campaign</span>
								<span class="d-block fs-6 text-body">Updated 46 minutes ago</span>
							</div>
						</a>
					</td>
					<td>1</td>
					<td>No assignee</td>
					<td>
						<span class="legend-indicator bg-primary"></span>In progress
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-primary me-2">50%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 5
						</a>
					</td>
					<td>
						<a class="text-body" href="./project-activity.html">
							<i class="bi-chat-left-dots"></i> 11
						</a>
					</td>
					<td>-</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck22">
							<label class="form-check-label" for="usersDataCheck22"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/atlassian-icon.svg" alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">New software tool</span>
								<span class="d-block fs-6 text-body">Updated 7 minutes ago</span>
							</div>
						</a>
					</td>
					<td>22</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Sam Kart">
								<img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-danger" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Teresa Eyker">
								<span class="avatar-initials">T</span>
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Amanda Harvey">
								<img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-light avatar-circle" href="./user-profile.html"
								data-bs-toggle="tooltip" data-bs-placement="top"
								title="Brian Halligan, Rachel Doe and 7 more">
								<span class="avatar-initials">+9</span>
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator"></span>To do
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 me-2">0%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 7
						</a>
					</td>
					<td>-</td>
					<td>05 May</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck23">
							<label class="form-check-label" for="usersDataCheck23"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<img class="avatar" src="./assets/svg/brands/frontapp-icon.svg" alt="Image Description">
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Increase email conversion rating</span>
								<span class="d-block fs-6 text-body">Updated 1 hour ago</span>
							</div>

						</a>
					</td>
					<td>
						<div class="d-flex align-items-center">
							9 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip"
								data-bs-placement="top" title="task completed today">+1</a>
						</div>
					</td>
					<td>
						<!-- Avatar Group -->
						<div class="avatar-group avatar-group-xs avatar-circle">
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Finch Hoot">
								<img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-dark" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Bob Bardly">
								<span class="avatar-initials">B</span>
							</a>
							<a class="avatar" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Clarice Boone">
								<img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
							</a>
							<a class="avatar avatar-soft-danger" href="./user-profile.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Adam Keep">
								<span class="avatar-initials">A</span>
							</a>
						</div>
						<!-- End Avatar Group -->
					</td>
					<td>
						<span class="legend-indicator"></span>To do
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 me-2">0%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>
						<a class="text-body" href="./project-files.html">
							<i class="bi-paperclip"></i> 2
						</a>
					</td>
					<td>
						<a class="text-body" href="./project-activity.html">
							<i class="bi-chat-left-dots"></i> 5
						</a>
					</td>
					<td>01 May</td>
				</tr>

				<tr>
					<td class="table-column-pe-0">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="usersDataCheck24">
							<label class="form-check-label" for="usersDataCheck24"></label>
						</div>
					</td>
					<td class="table-column-ps-0">
						<a class="d-flex align-items-center" href="./project.html">
							<div class="avatar avatar-soft-danger avatar-circle">
								<span class="avatar-initials">E</span>
							</div>
							<div class="ms-3">
								<span class="d-block h5 text-inherit mb-0">Ethereum project</span>
								<span class="d-block fs-6 text-body">Updated 5 days ago</span>
							</div>
						</a>
					</td>
					<td>4</td>
					<td>No assignee</td>
					<td>
						<span class="legend-indicator bg-success"></span>Completed
					</td>
					<td>
						<div class="d-flex align-items-center">
							<span class="fs-6 text-primary me-2">95%</span>
							<div class="progress table-progress">
								<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</td>
					<td>-</td>
					<td>
						<a class="text-body" href="#">
							<i class="bi-chat-left-dots"></i> 1
						</a>
					</td>
					<td>-</td>
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
							<option value="10">10</option>
							<option value="15" selected>15</option>
							<option value="20">20</option>
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
