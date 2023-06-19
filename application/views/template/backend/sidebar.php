<!-- Navbar Vertical -->
<aside
	class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
	<div class="navbar-vertical-container">
		<div class="navbar-vertical-footer-offset">
			<!-- Logo -->

			<a class="navbar-brand" href="<?= site_url('admin');?>" aria-label="Front">
				<img class="navbar-brand-logo" src="<?= base_url();?><?= $web_logo;?>" alt="Logo"
					data-hs-theme-appearance="default">
				<img class="navbar-brand-logo" src="<?= base_url();?><?= $web_logo_white;?>" alt="Logo"
					data-hs-theme-appearance="dark">
				<img class="navbar-brand-logo-mini" src="<?= base_url();?><?= $web_icon;?>" alt="Logo"
					data-hs-theme-appearance="default">
				<img class="navbar-brand-logo-mini" src="<?= base_url();?><?= $web_icon;?>" alt="Logo"
					data-hs-theme-appearance="dark">
			</a>

			<!-- End Logo -->

			<!-- Navbar Vertical Toggle -->
			<button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
				<i class="bi-arrow-bar-left navbar-toggler-short-align"
					data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
					data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
				<i class="bi-arrow-bar-right navbar-toggler-full-align"
					data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
					data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
			</button>

			<!-- End Navbar Vertical Toggle -->

			<!-- Content -->
			<div class="navbar-vertical-content">
				<div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">

					<div class="nav-item">
						<a class="nav-link <?= ($this->uri->segment(2) == "dashboard" || !$this->uri->segment(2) && $this->uri->segment(1) != 'settings' ? "active" : "") ?>"
							href="<?= site_url('admin');?>" data-placement="left">
							<i class="bi-house-door nav-icon"></i>
							<span class="nav-link-title">Dashboard</span>
						</a>
					</div>

					<div class="nav-item">
						<a class="nav-link <?= ($this->uri->segment(2) == "statistik" ? "active" : "") ?>"
							href="<?= site_url('admin/statistik');?>" data-placement="left">
							<i class="bi-bar-chart nav-icon"></i>
							<span class="nav-link-title">Statistik</span>
						</a>
					</div>

					<span class="dropdown-header mt-4">Member</span>
					<small class="bi-three-dots nav-subtitle-replacer"></small>

					<div class="nav-item">
						<a class="nav-link <?= ($this->uri->segment(2) == "member" ? "active" : "") ?>"
							href="<?= site_url('admin/member');?>" data-placement="left">
							<i class="bi-people nav-icon"></i>
							<span class="nav-link-title">Member</span>
						</a>
					</div>

					<div class="nav-item">
						<a class="nav-link <?= ($this->uri->segment(2) == "kategori" ? "active" : "") ?>"
							href="<?= site_url('master/kategori');?>" data-placement="left" id="tour-kategori">
							<i class="bi-tags nav-icon"></i>
							<span class="nav-link-title">Kategori</span>
						</a>
					</div>

					<div class="nav-item">
						<a class="nav-link <?= ($this->uri->segment(2) == "soal" ? "active" : "") ?>"
							href="<?= site_url('master/soal');?>" data-placement="left" id="tour-soal">
							<i class="bi-clipboard nav-icon"></i>
							<span class="nav-link-title">Bank Soal</span>
						</a>
					</div>

					<div class="nav-item">
						<a class="nav-link <?= ($this->uri->segment(2) == "materi" ? "active" : "") ?>"
							href="<?= site_url('master/materi');?>" data-placement="left" id="tour-materi">
							<i class="bi-journal-bookmark nav-icon"></i>
							<span class="nav-link-title">Materi</span>
						</a>
					</div>

					<span class="dropdown-header mt-4">Pembayaran</span>
					<small class="bi-three-dots nav-subtitle-replacer"></small>

					<div class="nav-item">
						<a class="nav-link <?= ($this->uri->segment(2) == "midtrans" ? "active" : "") ?>"
							href="<?= site_url('master/midtrans');?>" data-placement="left" id="tour-midtrans">
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
								<a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
									<i class="bi-moon-stars me-2"></i>
									<span class="text-truncate" title="Auto (system default)">Auto
										(system default)</span>
								</a>
								<a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
									<i class="bi-brightness-high me-2"></i>
									<span class="text-truncate" title="Default (light mode)">Default
										(light mode)</span>
								</a>
								<a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
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
									<span class="text-truncate" title="Resources &amp; tutorials">Documentation</span>
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

<!-- End Navbar Vertical -->

<!-- Content -->
<div class="content container">
