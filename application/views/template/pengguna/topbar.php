<div class="container">
	<nav class="js-mega-menu flex-grow-1">
		<!-- Collapse -->
		<div class="collapse navbar-collapse" id="navbarDoubleLineContainerNavDropdown">
			<ul class="navbar-nav">

				<li class="nav-item">
					<a class="nav-link <?= ($this->uri->segment(1) == "pengguna" && !$this->uri->segment(2) ? "active" : "") ?>" href="<?= site_url('pengguna');?>">
						<i class="bi-grid-1x2 dropdown-item-icon"></i> Dashboard
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link <?= ($this->uri->segment(1) == "pengguna" && $this->uri->segment(2) == 'materi-saya' ? "active" : "") ?>" href="<?= site_url('pengguna/materi-saya');?>">
						<i class="bi-journal-bookmark dropdown-item-icon"></i> Materi Saya
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link <?= ($this->uri->segment(1) == "pengguna" && $this->uri->segment(2) == 'pembayaran' ? "active" : "") ?>" href="<?= site_url('pengguna/pembayaran');?>" data-placement="left">
						<i class="bi-credit-card-2-front dropdown-item-icon"></i> Pembayaran
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link <?= ($this->uri->segment(1) == "pengguna" && $this->uri->segment(2) == 'pengaturan' ? "active" : "") ?>" href="<?= site_url('pengguna/pengaturan');?>" data-placement="left">
						<i class="bi-sliders2 dropdown-item-icon"></i> Pengaturan
					</a>
				</li>
			</ul>

		</div>
		<!-- End Collapse -->
	</nav>
</div>
</header>
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="main">
	<!-- Content -->
	<div class="content container">
