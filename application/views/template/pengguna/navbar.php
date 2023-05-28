<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-bordered navbar-spacer-y-0 flex-lg-column">
	<div class="navbar-dark w-100 bg-dark py-2">
		<div class="container">
			<div class="navbar-nav-wrap">
				<!-- Logo -->
				<a class="navbar-brand" href="<?= base_url();?>" aria-label="Front">
					<img class="navbar-brand-logo" src="<?= base_url();?><?= $web_logo;?>" alt="Logo"
						data-hs-theme-appearance="default" />
					<img class="navbar-brand-logo" src="<?= base_url();?><?= $web_logo_white;?>" alt="Logo"
						data-hs-theme-appearance="dark" />
				</a>
				<!-- End Logo -->

				<!-- Content Start -->
				<div class="navbar-nav-wrap-content-start">
				</div>
				<!-- End Content Start -->

				<!-- Content End -->
				<div class="navbar-nav-wrap-content-end">
					<!-- Navbar -->
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="<?= base_url();?>" class="nav-link">Beranda</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('materi');?>" class="nav-link">Materi</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('tentang-kami');?>" class="nav-link">Tentang Kami</a>
						</li>

						<li class="nav-item">
							<!-- Style Switcher -->
							<div class="dropdown ">
								<button type="button" class="btn btn-ghost-light btn-icon rounded-circle"
									id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false"
									data-bs-dropdown-animation>

								</button>

								<div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless"
									aria-labelledby="selectThemeDropdown">
									<a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
										<i class="bi-moon-stars me-2"></i>
										<span class="text-truncate" title="Auto (system default)">Auto (system
											default)</span>
									</a>
									<a class="dropdown-item" href="#" data-icon="bi-brightness-high"
										data-value="default">
										<i class="bi-brightness-high me-2"></i>
										<span class="text-truncate" title="Default (light mode)">Default (light
											mode)</span>
									</a>
									<a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
										<i class="bi-moon me-2"></i>
										<span class="text-truncate" title="Dark">Dark</span>
									</a>
								</div>
							</div>

							<!-- End Style Switcher -->
						</li>

						<li class="nav-item">
							<!-- Account -->
							<div class="dropdown">
								<a class="navbar-dropdown-account-wrapper" href="javascript:;"
									id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false"
									data-bs-auto-close="outside" data-bs-dropdown-animation>
									<div class="avatar avatar-sm avatar-circle">
										<img class="avatar-img" src="<?= base_url();?>assets/img/avatar-1.png"
											alt="Image Description" />
										<span class="avatar-status avatar-sm-status avatar-status-success"></span>
									</div>
								</a>

								<div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account"
									aria-labelledby="accountNavbarDropdown" style="width: 16rem">
									<div class="dropdown-item-text">
										<div class="d-flex align-items-center">
											<div class="avatar avatar-sm avatar-circle">
												<img class="avatar-img" src="<?= base_url();?>assets/img/avatar-1.png"
													alt="Image Description" />
											</div>
											<div class="flex-grow-1 ms-3">
												<h5 class="mb-0">
													<?php $name = explode(" ", $this->session->userdata('name'));echo $name[0]; ?>
												</h5>
												<p class="card-text text-body">
													<?= mb_substr($this->session->userdata('email'), 0, 4) ?>***@<?php $mail = explode("@", $this->session->userdata('email'));echo $mail[1]; ?>
												</p>
											</div>
										</div>
									</div>

									<div class="dropdown-divider"></div>

									<a class="dropdown-item" href="<?= site_url('pengguna');?>">Dashboard</a>
									<a class="dropdown-item"
										href="<?= site_url('pengguna/pengaturan');?>">Pengaturan</a>

									<div class="dropdown-divider"></div>

									<a class="dropdown-item" href="<?= site_url('logout');?>">Logout</a>
								</div>
							</div>
							<!-- End Account -->
						</li>
					</ul>
					<!-- End Navbar -->
				</div>
				<!-- End Content End -->
			</div>
		</div>
	</div>
