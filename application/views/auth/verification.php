<a class="d-flex justify-content-center mb-5" href="<?= base_url();?>">
	<img class="zi-2" src="<?= base_url();?><?= $web_logo;?>" alt="Image Description" style="width: 8rem;">
</a>

<div class="mx-auto" style="max-width: 30rem;">
	<!-- Card -->
	<div class="card card-lg mb-5">
		<div class="card-body text-center">
			<div class="mb-4">
				<img class="avatar avatar-xxl avatar-4x3"
					src="<?= base_url();?>assets/svg/illustrations/oc-email-verification.svg"
					alt="Image Description" data-hs-theme-appearance="default">
				<img class="avatar avatar-xxl avatar-4x3"
					src="<?= base_url();?>assets/svg/illustrations-light/oc-email-verification.svg"
					alt="Image Description" data-hs-theme-appearance="dark">
			</div>

			<h1 class="display-5">Verifikasi email</h1>

			<p class="mb-1">Kami telah mengirim email verifikasi ke:</p>

			<span class="d-block text-dark fw-semibold mb-1"><?= $this->session->userdata('email');?></span>

			<p>Please follow the link inside to continue.</p>

			<p>Belum menerima email? <a href="<?= site_url('email-verification?act=resend-email'); ?>">Kirim
					ulang</a></p>
		</div>
	</div>
	<!-- End Card -->

	<!-- Footer -->
	<div class="position-relative text-center zi-1">
		<small class="text-cap text-body mb-4">Trusted by the world's best teams</small>
	</div>
	<!-- End Footer -->
</div>
