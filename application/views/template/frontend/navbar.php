	<!-- ========== HEADER ========== -->
	<header id="header"
		class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide <?= $this->uri->segment(1) == 'materi' && $this->uri->segment(2) ? ' bg-white shadow-sm' : '';?>"
		data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>

		<div class="container">
			<nav class="js-mega-menu navbar-nav-wrap">
				<!-- Default Logo -->
				<a class="navbar-brand" href="<?= base_url();?>" aria-label="Front">
					<img class="navbar-brand-logo" src="<?= base_url();?><?= $web_logo;?>" alt="Logo"
						data-hs-theme-appearance="default" />
				</a>
				<!-- End Default Logo -->

				<!-- Toggler -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
					aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-default">
						<i class="bi-list"></i>
					</span>
					<span class="navbar-toggler-toggled">
						<i class="bi-x"></i>
					</span>
				</button>
				<!-- End Toggler -->

				<!-- Collapse -->
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<div class="navbar-absolute-top-scroller">
						<ul class="navbar-nav">
							<!-- Landings -->
							<li class="nav-item">
								<a href="<?= base_url();?>"
									class="nav-link <?= !$this->uri->segment(1) ? "active" : "";?>">Beranda</a>
							</li>
							<!-- End Landings -->
							<!-- Landings -->
							<li class="nav-item">
								<a href="<?= site_url('materi');?>"
									class="nav-link <?= $this->uri->segment(1) == "materi" ? "active" : "";?>">Materi</a>
							</li>
							<!-- End Landings -->
							<!-- Landings -->
							<li class="nav-item">
								<a href="<?= site_url('tentang-kami');?>"
									class="nav-link <?= $this->uri->segment(1) == "tentang-kami" ? "active" : "";?>">Tentang
									Kami</a>
							</li>
							<!-- End Landings -->
							<?php if($this->session->userdata('logged_in')):?>
							<?php if($this->session->userdata('role') < 2):?>

							<!-- Button -->
							<li class="nav-item">
								<a class="btn btn-primary btn-sm btn-transition"
									href="<?= site_url('admin');?>">dashboard</a>
							</li>
							<!-- Button -->
							<li class="nav-item">
								<a class="btn btn-outline-primary btn-sm btn-transition"
									href="<?= site_url('logout');?>">keluar</a>
							</li>
							<?php else:?>
							<!-- Button -->
							<li class="nav-item">
								<a class="btn btn-outline-primary btn-sm btn-transition"
									href="<?= site_url('pengguna');?>">dashboard</a>
							</li>
							<!-- End Button -->
							<li class="nav-item ms-3">
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
										<a class="dropdown-item"
											href="<?= site_url('pengguna/pengaturan');?>">Pengaturan</a>

										<div class="dropdown-divider"></div>

										<a class="dropdown-item" href="<?= site_url('logout');?>">Logout</a>
									</div>
								</div>
								<!-- End Account -->
							</li>
							<?php endif;?>
							<?php else:?>
							<!-- Button -->
							<li class="nav-item">
								<a class="btn btn-primary btn-sm btn-transition"
									href="<?= site_url('register');?>">Daftar</a>
							</li>
							<!-- Button -->
							<li class="nav-item">
								<a class="btn btn-outline-primary btn-sm btn-transition"
									href="<?= site_url('login');?>">Masuk</a>
							</li>
							<?php endif;?>
						</ul>
					</div>
				</div>
				<!-- End Collapse -->
			</nav>
		</div>
	</header>

	<!-- ========== END HEADER ========== -->

	<!-- ========== MAIN CONTENT ========== -->
	<main id="content" role="main">
