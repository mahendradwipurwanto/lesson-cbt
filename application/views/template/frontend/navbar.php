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

							<!-- Button -->
							<li class="nav-item">
								<?php if($this->session->userdata('logged_in')):?>
								<?php if($this->session->userdata('role') < 2):?>
								<a class="btn btn-primary btn-sm btn-transition"
									href="<?= site_url('admin');?>">dashboard</a>
								<?php else:?>
								<a class="btn btn-primary btn-sm btn-transition"
									href="<?= site_url('pengguna');?>">dashboard</a>
								<?php endif;?>
								<a class="btn btn-outline-primary btn-sm btn-transition"
									href="<?= site_url('logout');?>">keluar</a>
								<?php else:?>
								<a class="btn btn-primary btn-sm btn-transition"
									href="<?= site_url('register');?>">Daftar</a>
								<a class="btn btn-outline-primary btn-sm btn-transition"
									href="<?= site_url('login');?>">Masuk</a>
								<?php endif;?>
							</li>
							<!-- End Button -->
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
