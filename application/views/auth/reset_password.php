<a class="d-flex justify-content-center mb-5" href="<?= base_url();?>">
	<img class="zi-2" src="<?= base_url();?><?= $web_logo;?>" alt="Image Description" style="width: 8rem;">
</a>

<div class="mx-auto" style="max-width: 30rem;">
	<!-- Card -->
	<div class="card card-lg mb-5">
		<div class="card-body">
			<!-- Form -->
			<form action="<?= site_url('auth/proses_resetPassword');?>" method="POST"
				class="js-validate needs-validation" novalidate>
				<div class="text-center">
					<div class="mb-5">
						<h1 class="display-5">Reset password?</h1>
						<p>Enter the new password for your account, to reset your password account with these new
							password. You will be require to login after resetting your password</p>
					</div>
				</div>

				<!-- Form -->
				<div class="mb-4">
					<label class="form-label" for="resetPasswordSrEmail" tabindex="0">Your email</label>

					<input type="email" class="form-control form-control-lg" name="email" id="resetPasswordSrEmail"
						tabindex="1" placeholder="Enter your email address" value="<?= $email;?>" aria-label="Enter your email address"
						readonly>
					<span class="invalid-feedback">Please enter a valid email address.</span>
				</div>
				<!-- End Form -->

				<!-- Form -->
				<div class="mb-4">
					<label class="form-label" for="signupSrPassword">Password</label>

					<div class="input-group input-group-merge" data-hs-validation-validate-class>
						<input type="password" class="js-toggle-password form-control form-control-lg" name="password"
							id="signupSrPassword" placeholder="8+ characters required"
							aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
					"target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
					"defaultClass": "bi-eye-slash",
					"showClass": "bi-eye",
					"classChangeTarget": ".js-toggle-password-show-icon-1"
					}'>
						<a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;">
							<i class="js-toggle-password-show-icon-1 bi-eye"></i>
						</a>
					</div>

					<span class="invalid-feedback">Your password is invalid. Please try again.</span>
				</div>
				<!-- End Form -->

				<!-- Form -->
				<div class="mb-4">
					<label class="form-label" for="signupSrConfirmPassword">Confirm password</label>

					<div class="input-group input-group-merge" data-hs-validation-validate-class>
						<input type="password" class="js-toggle-password form-control form-control-lg"
							name="confirmPassword" id="signupSrConfirmPassword" placeholder="8+ characters required"
							aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
					"target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
					"defaultClass": "bi-eye-slash",
					"showClass": "bi-eye",
					"classChangeTarget": ".js-toggle-password-show-icon-2"
					}'>
						<a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;">
							<i class="js-toggle-password-show-icon-2 bi-eye"></i>
						</a>
					</div>

					<span class="invalid-feedback">Password does not match the confirm password.</span>
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
	</div>
	<!-- End Footer -->
</div>
