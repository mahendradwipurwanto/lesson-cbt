<a class="d-flex justify-content-center mb-5" href="<?= base_url();?>">
	<img class="zi-2" src="<?= base_url();?>/<?= $web_logo;?>" alt="Image Description" style="width: 8rem;">
</a>

<div class="mx-auto" style="max-width: 30rem;">
	<!-- Card -->
	<div class="card card-lg mb-5">
		<div class="card-body">
			<!-- Form -->
			<form action="<?= site_url('auth/proses_lupaPassword');?>" method="POST" class="js-validate needs-validation" novalidate>
				<div class="text-center">
					<div class="mb-5">
						<h1 class="display-5">Forgot password?</h1>
						<p>Enter the email address you used when you joined and we'll send you instructions to reset
							your password.</p>
					</div>
				</div>

				<!-- Form -->
				<div class="mb-4">
					<label class="form-label" for="resetPasswordSrEmail" tabindex="0">Your email</label>

					<input type="email" class="form-control form-control-lg" name="email" id="resetPasswordSrEmail"
						tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address"
						required>
					<span class="invalid-feedback">Please enter a valid email address.</span>
				</div>
				<!-- End Form -->

				<div class="d-grid gap-2">
					<button type="submit" class="btn btn-primary btn-lg">Submit</button>

					<div class="text-center">
						<a class="btn btn-link" href="<?= site_url('login');?>">
							<i class="bi-chevron-left"></i> Back to Sign in
						</a>
					</div>
				</div>
			</form>
			<!-- End Form -->
		</div>
	</div>
	<!-- End Card -->

	<!-- Footer -->
	<div class="position-relative text-center zi-1">
		<small class="text-cap text-body mb-4">Trusted by the world's best teams</small>

		<div class="w-85 mx-auto">
			<div class="row justify-content-between">
				<div class="col">
					<img class="img-fluid" src="<?= base_url();?>/assets/svg/brands/gitlab-gray.svg" alt="Logo">
				</div>
				<!-- End Col -->

				<div class="col">
					<img class="img-fluid" src="<?= base_url();?>/assets/svg/brands/fitbit-gray.svg" alt="Logo">
				</div>
				<!-- End Col -->

				<div class="col">
					<img class="img-fluid" src="<?= base_url();?>/assets/svg/brands/flow-xo-gray.svg" alt="Logo">
				</div>
				<!-- End Col -->

				<div class="col">
					<img class="img-fluid" src="<?= base_url();?>/assets/svg/brands/layar-gray.svg" alt="Logo">
				</div>
				<!-- End Col -->
			</div>
			<!-- End Row -->
		</div>
	</div>
	<!-- End Footer -->
</div>
