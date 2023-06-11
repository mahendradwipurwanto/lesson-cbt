<!-- CTA -->
<div class="bg-dark"
	style="background-image: url(<?= base_url();?>assets-frontend/svg/components/wave-pattern-light.svg);">
	<div class="container content-space-2">
		<div class="row justify-content-lg-between align-items-lg-center">
			<div class="col-md mb-5 mb-md-0">
				<h1 class="text-white mb-0"><?= $page_title;?></h1>
				<p class="text-white"><?= $sub_page_title;?></p>
			</div>
			<!-- End Col -->

			<div class="col-md-auto">
				<div class="d-grid d-sm-flex gap-3">
				</div>
			</div>
			<!-- End Col -->
		</div>
		<!-- End Row -->
	</div>
</div>
<div class="container content-space-1">

	<div class="row">
		<div class="col-lg-3">
			<!-- Navbar -->
			<div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5">
				<!-- Navbar Toggle -->
				<!-- Navbar Toggle -->
				<div class="d-grid">
					<button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse"
						data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false"
						aria-controls="navbarVerticalNavMenu">
						<span class="d-flex justify-content-between align-items-center">
							<span class="text-dark">Menu</span>

							<span class="navbar-toggler-default">
								<i class="bi-list"></i>
							</span>

							<span class="navbar-toggler-toggled">
								<i class="bi-x"></i>
							</span>
						</span>
					</button>
				</div>
				<!-- End Navbar Toggle -->
				<!-- End Navbar Toggle -->

				<!-- Navbar Collapse -->
				<div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
					<ul id="navbarSettings"
						class="js-sticky-block js-scrollspy card card-navbar-nav nav nav-tabs nav-lg nav-vertical"
						data-hs-sticky-block-options='{
                     "parentSelector": "#navbarVerticalNavMenu",
                     "targetSelector": "#header",
                     "breakpoint": "lg",
                     "startPoint": "#navbarVerticalNavMenu",
                     "endPoint": "#stickyBlockEndPoint",
                     "stickyOffsetTop": 20
                   }'>
						<li class="nav-item">
							<a class="nav-link active" href="#content">
								<i class="bi-person nav-icon"></i> Basic information
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#passwordSection">
								<i class="bi-key nav-icon"></i> Password
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#deleteAccountSection">
								<i class="bi-trash nav-icon"></i> Delete account
							</a>
						</li>
					</ul>
				</div>
				<!-- End Navbar Collapse -->
			</div>
			<!-- End Navbar -->
		</div>

		<div class="col-lg-9">
			<div class="d-grid gap-3 gap-lg-5">

				<!-- Card -->
				<div class="card">
					<div class="card-header">
						<h2 class="card-title h4">Informasi Pribadi</h2>
					</div>

					<!-- Body -->
					<div class="card-body">
						<!-- Form -->
						<form action="<?= site_url('pengguna/savePribadi');?>" method="POST"
							class="js-validate needs-validation" novalidate>
							<!-- Form -->
							<div class="row mb-4">
								<label for="namalengkapLabel" class="col-sm-3 col-form-label form-label">Nama
									lengkap</label>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="name" id="namalengkapLabel"
										placeholder="Nama lengkap anda" aria-label="Nama lengkap anda"
										value="<?= $user->name;?>" required>
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="row mb-4">
								<label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>

								<div class="col-sm-9">
									<input type="email" class="form-control" name="email" id="emailLabel"
										placeholder="Email" aria-label="Email" value="<?= $user->email;?>" readonly>
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="row mb-4">
								<label for="phoneLabel" class="col-sm-3 col-form-label form-label">Nomor telepon <span
										class="form-label-secondary">(Optional)</span></label>

								<div class="col-sm-9">
									<input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel"
										placeholder="Nomor telepon" aria-label="Nomor telepon"
										value="<?= $user->phone;?>">
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="row mb-4">
								<label for="birthdateLabel" class="col-sm-3 col-form-label form-label">Tanggal
									lahir</label>

								<div class="col-sm-9">
									<input type="date" class="form-control" name="birthdate" id="birthdateLabel"
										placeholder="Your birthdate" aria-label="Your birthdate"
										value="<?= date("Y-m-d", strtotime($user->birthdate));?>" required>
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div id="accountType" class="row mb-4">
								<label class="col-sm-3 col-form-label form-label">Jenis kelamin</label>

								<div class="col-sm-9">
									<div class="input-group input-group-sm-vertical">
										<!-- Radio Check -->
										<label class="form-control" for="gender-laki-laki">
											<span class="form-check">
												<input type="radio" class="form-check-input" name="gender"
													value="laki-laki"
													<?php if($user->gender == 'laki-laki'):?>checked<?php endif;?>
													id="gender-laki-laki" checked>
												<span class="form-check-label">Laki-laki</span>
											</span>
										</label>
										<!-- End Radio Check -->

										<!-- Radio Check -->
										<label class="form-control" for="gender-perempuan">
											<span class="form-check">
												<input type="radio" class="form-check-input" name="gender"
													value="perempuan"
													<?php if($user->gender == 'perempuan'):?>checked<?php endif;?>
													id="gender-perempuan">
												<span class="form-check-label">Peremmpuan</span>
											</span>
										</label>
										<!-- End Radio Check -->
									</div>
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="row mb-4">
								<label for="addressLabel" class="col-sm-3 col-form-label form-label">Alamat</label>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="address" id="addressLabel"
										placeholder="Alamat" aria-label="Alamat" value="<?= $user->address;?>">
								</div>
							</div>
							<!-- End Form -->

							<div class="d-flex justify-content-end">
								<button type="submit" class="btn btn-primary">Simpan perubahan</button>
							</div>
						</form>
						<!-- End Form -->
					</div>
					<!-- End Body -->
				</div>
				<!-- End Card -->

				<!-- Card -->
				<div id="passwordSection" class="card">
					<div class="card-header">
						<h4 class="card-title">Ubah password anda</h4>
					</div>

					<!-- Body -->
					<div class="card-body">
						<!-- Form -->
						<form id="changePasswordForm" action="<?= site_url('pengguna/ubahPassword');?>" method="POST"
							class="js-validate needs-validation" novalidate>
							<!-- Form -->
							<div class="row mb-4">
								<label for="passwordSaatIniLabel" class="col-sm-3 col-form-label form-label">Password
									saat
									ini</label>

								<div class="col-sm-9">
									<input type="password" class="form-control" name="currentPassword"
										id="passwordSaatIniLabel" placeholder="Masukkan password saat ini"
										aria-label="Masukkan password saat ini">
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="row mb-4">
								<label for="newPassword" class="col-sm-3 col-form-label form-label">Password
									baru</label>

								<div class="col-sm-9">
									<input type="password" class="form-control" name="newPassword" id="newPassword"
										placeholder="Masukan password baru" aria-label="Masukan password baru">
								</div>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="row mb-4">
								<label for="confirmNewPasswordLabel"
									class="col-sm-3 col-form-label form-label">Konfirmasi
									password baru</label>

								<div class="col-sm-9">
									<div class="mb-3">
										<input type="password" class="form-control" name="confirmNewPassword"
											id="confirmNewPasswordLabel" placeholder="Konfirmasi password baru"
											aria-label="Konfirmasi password baru">
									</div>

									<h5>Password requirements:</h5>

									<p class="fs-6 mb-2">Ensure that these requirements are met:</p>

									<ul class="fs-6">
										<li>Minimum 8 characters long - the more, the better</li>
										<li>At least one lowercase character</li>
										<li>At least one uppercase character</li>
										<li>At least one number, symbol, or whitespace character</li>
									</ul>
								</div>
							</div>
							<!-- End Form -->

							<div class="d-flex justify-content-end">
								<button type="submit" class="btn btn-primary">Ubah password</button>
							</div>
						</form>
						<!-- End Form -->
					</div>
					<!-- End Body -->
				</div>
				<!-- End Card -->

				<!-- Card -->
				<div id="deleteAccountSection" class="card">
					<div class="card-header">
						<h4 class="card-title">Hapus akun</h4>
					</div>

					<!-- Body -->
					<div class="card-body">
						<p class="card-text">When you delete your account, you lose access to Front account services,
							and
							we
							permanently delete your personal data. You can cancel the deletion for 14 days.</p>

						<div class="mb-4">
							<!-- Form Check -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="deleteAccountCheckbox">
								<label class="form-check-label" for="deleteAccountCheckbox">
									Confirm that I want to delete my account.
								</label>
							</div>
							<!-- End Form Check -->
						</div>

						<div class="d-flex justify-content-end gap-3">
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>
					<!-- End Body -->
				</div>
				<!-- End Card -->
			</div>

			<!-- Sticky Block End Point -->
			<div id="stickyBlockEndPoint"></div>
		</div>
	</div>
	<!-- End Row -->

</div>
