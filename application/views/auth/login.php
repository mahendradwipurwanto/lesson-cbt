<a class="d-flex justify-content-center mb-5" href="<?= base_url();?>">
	<img class="zi-2" src="<?= base_url();?><?= $web_logo;?>" alt="Image Description" style="width: 8rem;">
</a>

<div class="mx-auto" style="max-width: 30rem;">
	<!-- Card -->
	<div class="card card-lg mb-5">
		<div class="card-body">
			<!-- Form -->
			<form action="<?= site_url('auth/proses_login');?>" method="POST" class="js-validate needs-validation" novalidate>
				<div class="text-center">
					<div class="mb-5">
						<h1 class="display-5">Sign in</h1>
						<p>Don't have an account yet? <a class="link" href="<?= site_url('register');?>">Sign up
								here</a></p>
					</div>
				</div>

				<!-- Form -->
				<div class="mb-4">
					<label class="form-label" for="signinSrEmail">Your email</label>
					<input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail"
						tabindex="1" placeholder="email@address.com" aria-label="email@address.com" value="admin@lesson.sch.id" required>
					<span class="invalid-feedback">Please enter a valid email address.</span>
				</div>
				<!-- End Form -->

				<!-- Form -->
				<div class="mb-4">
					<label class="form-label w-100" for="signupSrPassword" tabindex="0">
						<span class="d-flex justify-content-between align-items-center">
							<span>Password</span>
							<a class="form-label-link mb-0" href="<?= site_url('forgot-password');?>">Forgot
								Password?</a>
						</span>
					</label>

					<div class="input-group input-group-merge" data-hs-validation-validate-class>
						<input type="password" class="js-toggle-password form-control form-control-lg" name="password"
							id="signupSrPassword" placeholder="8+ characters required" value="12341234"
							aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
					"target": "#changePassTarget",
					"defaultClass": "bi-eye-slash",
					"showClass": "bi-eye",
					"classChangeTarget": "#changePassIcon"
					}'>
						<a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
							<i id="changePassIcon" class="bi-eye"></i>
						</a>
					</div>

					<span class="invalid-feedback">Please enter a valid password.</span>
				</div>
				<!-- End Form -->

				<div class="d-grid">
					<button type="submit" class="btn btn-primary btn-lg">Login</button>
				</div>
			</form>
			<!-- End Form -->
		</div>
	</div>
	<!-- End Card -->

	<!-- Footer -->
	<div class="position-relative text-center zi-1">
		<small class="text-cap text-body mb-4">Trusted by the world's best teams</small>
	</div>
	<!-- End Footer -->
</div>
