	<!-- ========== HEADER ========== -->
	<header id="header" class="navbar navbar-expand-lg navbar-fixed-lg navbar-light bg-light">
		<div class="container">
			<div class="navbar-nav-wrap">
				<!-- Logo -->
				<a class="navbar-brand" href="../index.html" aria-label="Front">
					<img class="navbar-brand-logo" src="<?= base_url();?><?= $web_logo;?>" alt="Logo"
						data-hs-theme-appearance="default" />
					<img class="navbar-brand-logo" src="<?= base_url();?><?= $web_logo_white;?>" alt="Logo"
						data-hs-theme-appearance="dark" />
				</a>
				<!-- End Logo -->

				<div class="navbar-nav-wrap-content-start">
				</div>

				<div class="navbar-nav-wrap-content-end">
					<!-- Navbar -->
					<ul class="navbar-nav">

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
												<h5 class="mb-0"><?php $name = explode(" ", $this->session->userdata('name'));echo $name[0]; ?></h5>
												<p class="card-text text-body"><?= mb_substr($this->session->userdata('email'), 0, 4) ?>***@<?php $mail = explode("@", $this->session->userdata('email'));echo $mail[1]; ?></p>
											</div>
										</div>
									</div>

									<div class="dropdown-divider"></div>

									<a class="dropdown-item" href="<?= site_url('admin');?>">Dashboard</a>
									<a class="dropdown-item" href="<?= site_url('settings');?>">Pengaturan</a>

									<div class="dropdown-divider"></div>

									<a class="dropdown-item" href="<?= site_url('logout');?>">Sign out</a>
								</div>
							</div>
							<!-- End Account -->
						</li>
					</ul>
					<!-- End Navbar -->
				</div>
			</div>
		</div>
	</header>
	<!-- ========== END HEADER ========== -->
