<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 mb-6">

	<div class="col mb-4">
		<!-- Card -->
		<a class="card card-sm card-transition h-100" href="<?= site_url('settings?p=general'); ?>"
			data-aos="fade-up">
			<img class="card-img p-2" src="<?= base_url(); ?>assets/svg/design-system/docs-bs-icons.svg"
				alt="Image Description">
			<div class="card-body">
				<h4 class="card-title text-inherit">General</h4>
				<p class="card-text small text-body">Manage website general information</p>
			</div>
		</a>
		<!-- End Card -->
	</div>
	<?php if($this->session->userdata('role') == 0):?>
	<!-- End Col -->
	<div class="col mb-4">
		<!-- Card -->
		<a class="card card-sm card-transition h-100" href="<?= site_url('settings?p=credentials'); ?>"
			data-aos="fade-up">
			<img class="card-img p-2" src="<?= base_url(); ?>assets/svg/design-system/docs-toasts.svg"
				alt="Image Description">
			<div class="card-body">
				<h4 class="card-title text-inherit">Credentials</h4>
				<p class="card-text small text-body">Manage admin & user credentials</p>
			</div>
		</a>
		<!-- End Card -->
	</div>
	<!-- End Col -->
	<?php endif;?>
	<div class="col mb-4">
		<!-- Card -->
		<a class="card card-sm card-transition h-100" href="<?= site_url('settings?p=user-log'); ?>"
			data-aos="fade-up">
			<img class="card-img p-2" src="<?= base_url(); ?>assets/svg/design-system/docs-divider.svg"
				alt="Image Description">
			<div class="card-body">
				<h4 class="card-title text-inherit">User Log</h4>
				<p class="card-text small text-body">Manage all user log</p>
			</div>
		</a>
		<!-- End Card -->
	</div>

	<?php if($this->session->userdata('role') == 0):?>
	<div class="col mb-4">
		<!-- Card -->
		<a class="card card-sm card-transition h-100" href="<?= base_url(); ?>ngodingin.php" data-aos="fade-up">
			<img class="card-img p-2" src="<?= base_url(); ?>assets/svg/design-system/docs-divider.svg"
				alt="Image Description">
			<div class="card-body">
				<h4 class="card-title text-inherit">Database <span class="badge bg-danger ms-2">private</span></h4>
				<p class="card-text small text-body">Manage website database</p>
			</div>
		</a>
		<!-- End Card -->
	</div>
	<?php endif;?>
	<!-- End Col -->
	<div class="col mb-4">
		<!-- Card -->
		<a class="card card-sm card-transition h-100" href="<?= site_url('settings?p=mailer'); ?>"
			data-aos="fade-up">
			<img class="card-img p-2" src="<?= base_url(); ?>assets/svg/design-system/docs-quill.svg"
				alt="Image Description">
			<div class="card-body">
				<h4 class="card-title text-inherit">Mailer</h4>
				<p class="card-text small text-body">Manage mailer information</p>
			</div>
		</a>
		<!-- End Card -->
	</div>
	<!-- End Col -->
</div>
<!-- End Row -->
