	<!-- ========== MAIN CONTENT ========== -->
	<main id="content" role="main" class="main">
		<!-- Content -->
		<div class="bg-dark">
			<div class="content container" style="height: 25rem">
				<!-- Page Header -->
				<div class="page-header page-header-light page-header-reset">
					<div class="row align-items-center">
						<div class="col">
							<h1 class="page-header-title">
								<?php if(isset($page_title)):?>
								<?= $page_title;?>
								<?php else:?>
								<?= ($this->uri->segment(1) ? ucwords(str_replace('-', ' ', $this->uri->segment(1)) . ' ' . ($this->uri->segment(2) ? str_replace('-', ' ', $this->uri->segment(2)) : "")) : 'Dashboard'); ?>
								<?php endif;?>
							</h1>
							<?php if(isset($sub_page_title)):?>
							<p class="docs-page-header-text text-white"><?= $sub_page_title;?></p>
							<?php endif;?>
						</div>

						<div class="col-auto">
						</div>
					</div>
					<!-- End Row -->
				</div>
				<!-- End Page Header -->
			</div>
		</div>
		<!-- End Content -->

		<!-- Content -->
		<div class="content container" style="margin-top: -20rem">
			<!-- Navbar Vertical -->
			<div class="navbar-expand-lg">
				<!-- Navbar Toggle -->
				<button class="navbar-toggler text-white border-white-10 w-100 mb-3" type="button"
					data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu" aria-controls="navbarVerticalNavMenu"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="d-flex justify-content-between align-items-center">
						<span class="navbar-toggler-text text-white">Nav menu</span>
						<span class="navbar-toggler-default">
							<i class="bi-list"></i>
						</span>
						<span class="navbar-toggler-toggled">
							<i class="bi-x"></i>
						</span>
					</span>
				</button>
				<!-- End Navbar Toggle -->

				<aside id="navbarVerticalNavMenu"
					class="js-navbar-vertical-aside navbar navbar-vertical navbar-vertical-absolute navbar-vertical-detached navbar-shadow navbar-collapse collapse bg-white rounded-2">
					<div class="navbar-vertical-container">
						<div class="navbar-vertical-footer-offset">
							<!-- Content -->
							<div class="navbar-vertical-content">
								<div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
									<div class="nav-item">
										<a class="nav-link <?= ($this->uri->segment(2) == "dashboard" || !$this->uri->segment(2) && $this->uri->segment(1) != 'settings' ? "active" : "") ?>"
											href="<?= site_url('admin');?>" data-placement="left" id="tour-dashboard">
											<i class="bi-house-door nav-icon"></i>
											<span class="nav-link-title">Dashboard</span>
										</a>
									</div>

									<div class="nav-item">
										<a class="nav-link <?= ($this->uri->segment(2) == "statistik" ? "active" : "") ?>"
											href="<?= site_url('admin/statistik');?>" data-placement="left"
											id="tour-statistik">
											<i class="bi-bar-chart nav-icon"></i>
											<span class="nav-link-title">Statistik</span>
										</a>
									</div>

									<span class="dropdown-header mt-4">Member</span>
									<small class="bi-three-dots nav-subtitle-replacer"></small>

									<div class="nav-item">
										<a class="nav-link <?= ($this->uri->segment(2) == "member" ? "active" : "") ?>"
											href="<?= site_url('admin/member');?>" data-placement="left" id="tour-member">
											<i class="bi-people nav-icon"></i>
											<span class="nav-link-title">Member</span>
										</a>
									</div>

									<span class="dropdown-header mt-4">Pembayaran</span>
									<small class="bi-three-dots nav-subtitle-replacer"></small>

									<div class="nav-item">
										<a class="nav-link <?= ($this->uri->segment(2) == "midtrans" ? "active" : "") ?>"
											href="<?= site_url('master/midtrans');?>" data-placement="left"
											id="tour-midtrans">
											<i class="bi-credit-card nav-icon"></i>
											<span class="nav-link-title">Midtrans</span>
										</a>
									</div>

									<div class="nav-item">
										<a class="nav-link <?= ($this->uri->segment(1) == "transaksi" ? "active" : "") ?>"
											href="<?= site_url('transaksi');?>" data-placement="left" id="tour-transaksi">
											<i class="bi-cash-stack nav-icon"></i>
											<span class="nav-link-title">Transaksi</span>
										</a>
									</div>

									<span class="dropdown-header mt-4">Master</span>
									<small class="bi-three-dots nav-subtitle-replacer"></small>

									<div class="nav-item">
										<a class="nav-link <?= ($this->uri->segment(2) == "kategori" ? "active" : "") ?>"
											href="<?= site_url('master/kategori');?>" data-placement="left"
											id="tour-kategori">
											<i class="bi-tags nav-icon"></i>
											<span class="nav-link-title">Kategori</span>
										</a>
									</div>

									<div class="nav-item">
										<a class="nav-link <?= ($this->uri->segment(2) == "materi" ? "active" : "") ?>"
											href="<?= site_url('master/materi');?>" data-placement="left" id="tour-materi">
											<i class="bi-journal-bookmark nav-icon"></i>
											<span class="nav-link-title">Materi</span>
										</a>
									</div>

									<span class="dropdown-header mt-4">Pengaturan</span>
									<small class="bi-three-dots nav-subtitle-replacer"></small>

									<div class="nav-item">
										<a class="nav-link <?= ($this->uri->segment(1) == "settings" ? "active" : "") ?>"
											href="<?= site_url('settings');?>" data-placement="left" id="tour-website">
											<i class="bi-window-dock nav-icon"></i>
											<span class="nav-link-title">Website</span>
										</a>
									</div>
								</div>
							</div>
							<!-- End Content -->

							<!-- Footer -->
							<div class="navbar-vertical-footer">
								<ul class="navbar-vertical-footer-list">
									<li class="navbar-vertical-footer-list-item">
										<!-- Style Switcher -->
										<div class="dropdown dropup">
											<button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
												id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false"
												data-bs-dropdown-animation></button>

											<div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless"
												aria-labelledby="selectThemeDropdown">
												<a class="dropdown-item" href="#" data-icon="bi-moon-stars"
													data-value="auto">
													<i class="bi-moon-stars me-2"></i>
													<span class="text-truncate" title="Auto (system default)">Auto
														(system default)</span>
												</a>
												<a class="dropdown-item" href="#" data-icon="bi-brightness-high"
													data-value="default">
													<i class="bi-brightness-high me-2"></i>
													<span class="text-truncate" title="Default (light mode)">Default
														(light mode)</span>
												</a>
												<a class="dropdown-item active" href="#" data-icon="bi-moon"
													data-value="dark">
													<i class="bi-moon me-2"></i>
													<span class="text-truncate" title="Dark">Dark</span>
												</a>
											</div>
										</div>

										<!-- End Style Switcher -->
									</li>

									<li class="navbar-vertical-footer-list-item">
										<!-- Other Links -->
										<div class="dropdown dropup">
											<button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
												id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false"
												data-bs-dropdown-animation>
												<i class="bi-info-circle"></i>
											</button>

											<div class="dropdown-menu navbar-dropdown-menu-borderless"
												aria-labelledby="otherLinksDropdown">
												<span class="dropdown-header">Help</span>
												<a class="dropdown-item" href="#">
													<i class="bi-journals dropdown-item-icon"></i>
													<span class="text-truncate"
														title="Resources &amp; tutorials">Documentation</span>
												</a>
												<a class="dropdown-item" role="button" onclick="tournow()">
													<i class="bi-question-square dropdown-item-icon"></i>
													<span class="text-truncate" title="What's new?">Guidelines</span>
												</a>
											</div>
										</div>
										<!-- End Other Links -->
									</li>
								</ul>
							</div>
							<!-- End Footer -->
						</div>
					</div>
				</aside>
			</div>
			<!-- End Navbar Vertical -->

			<!-- Sidebar Detached Content -->
			<div class="sidebar-detached-content mt-3 mt-lg-0">
