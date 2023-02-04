<!-- ========== HEADER ========== -->
<header id="header"
	class="navbar navbar-expand-lg navbar-center navbar-light bg-white navbar-absolute-top navbar-show-hide"
	data-hs-header-options='{
            "fixMoment": 0,
            "fixEffect": "slide"
          }'>
	<div class="container-lg">
		<nav class="js-mega-menu navbar-nav-wrap">
			<!-- Logo -->

			<a class="navbar-brand" href="<?= base_url();?>" aria-label="Front">
				<img class="navbar-brand-logo" src="<?= base_url();?><?= $web_logo;?>" alt="Logo"
					data-hs-theme-appearance="default">
				<img class="navbar-brand-logo" src="<?= base_url();?><?= $web_logo_white;?>" alt="Logo"
					data-hs-theme-appearance="dark">
			</a>

			<!-- End Logo -->

			<!-- Secondary Content -->
			<div class="navbar-nav-wrap-secondary-content">
				<!-- Style Switcher -->
				<div class="dropdown">
					<button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
						id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false"
						data-bs-dropdown-animation>

					</button>

					<div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless"
						aria-labelledby="selectThemeDropdown">
						<a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
							<i class="bi-moon-stars me-2"></i>
							<span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
						</a>
						<a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
							<i class="bi-brightness-high me-2"></i>
							<span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
						</a>
						<a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
							<i class="bi-moon me-2"></i>
							<span class="text-truncate" title="Dark">Dark</span>
						</a>
					</div>
				</div>

				<!-- End Style Switcher -->
				<div class="d-flex gap-2">
					<?php if($this->session->userdata('logged_in') == false || !$this->session->userdata('logged_in')):?>
					<a class="btn btn-primary navbar-btn" href="<?= site_url('register');?>">Daftar</a>
					<a class="btn btn-outline-primary navbar-btn" href="<?= site_url('login');?>">Login</a>
					<?php else:?>
					<?php if($this->session->userdata('role') == 0):?>
					<a class="btn btn-primary navbar-btn" href="<?= site_url('admin');?>">Dashboard</a>
					<a class="btn btn-outline-primary navbar-btn" href="<?= site_url('logout');?>">Logout</a>
					<?php elseif($this->session->userdata('role') == 1):?>
					<a class="btn btn-primary navbar-btn" href="<?= site_url('admin');?>">Dashboard</a>
					<a class="btn btn-outline-primary navbar-btn" href="<?= site_url('logout');?>">Logout</a>
					<?php elseif($this->session->userdata('role') == 2):?>
					<a class="btn btn-primary navbar-btn" href="<?= site_url('pengguna');?>">Profil</a>
					<a class="btn btn-outline-primary navbar-btn" href="<?= site_url('logout');?>">Logout</a>
					<?php else:?>
					<a class="btn btn-outline-primary navbar-btn" href="<?= site_url('logout');?>">Logout</a>
					<?php endif;?>
					<?php endif;?>
				</div>
			</div>
			<!-- End Secondary Content -->

			<!-- Toggler -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarContainerNavDropdown" aria-controls="navbarContainerNavDropdown"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-default">
					<i class="bi-list"></i>
				</span>
				<span class="navbar-toggler-toggled">
					<i class="bi-x"></i>
				</span>
			</button>
			<!-- End Toggler -->

			<!-- Collapse -->
			<div class="collapse navbar-collapse" id="navbarContainerNavDropdown">
				<!-- <ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link py-2 py-lg-3" href="<?= base_url();?>">Lesson <span
								class="badge bg-dark rounded-pill ms-1">v1.0.0</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link py-2 py-lg-3"
							href="https://themes.getbootstrap.com/product/front-admin-dashboard-template/"
							target="_blank">Buy Now</a>
					</li>
					<li class="nav-item">
						<a class="nav-link py-2 py-lg-3" href="https://htmlstream.com/contact-us" target="_blank">Support <i
								class="bi-box-arrow-up-right small ms-1"></i></a>
					</li>
				</ul> -->
			</div>
			<!-- End Collapse -->
		</nav>
	</div>
</header>

<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="main">
