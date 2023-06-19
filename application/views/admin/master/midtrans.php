<!-- Page Header -->
<div class="page-header pb-3">
	<div class="row align-items-end">
		<div class="col-sm mb-2 mb-sm-0">
			<h1 class="docs-page-header-title"><?= $page_title;?></h1>
			<p class="docs-page-header-text"><?= $sub_page_title;?></p>
		</div>
		<!-- End Col -->

		<div class="col-sm-auto">
		</div>
		<!-- End Col -->
	</div>
	<!-- End Row -->
</div>
<!-- End Page Header -->

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<form action="<?= site_url('master/ubahMidtrans');?>" method="post"
					class="js-validate needs-validation" novalidate enctype="multipart/form-data">
					<div class="mb-3">
						<label class="form-label">Mode</label>
						<!-- Form Switch -->
						<div class="form-check form-switch form-switch-between">
							<label class="form-check-label">Test mode</label>
							<input name="_midtrans_prod" class="js-toggle-switch form-check-input" type="checkbox"
								<?php if($_midtrans_prod == 1):;?>checked<?php endif;?>>
							<label class="form-check-label text-primary form-switch-promotion">
								Live mode
							</label>
						</div>
						<!-- End Form Switch -->
					</div>
					<div class="mb-3">
						<label for="inputWebsiteTitle" class="form-label">Server key test mode <small
								class="text-danger">*</small></label>
						<input type="text" id="inputWebsiteTitle" class="form-control form-control-sm"
							name="_server_key_sandbox" value="<?= $_server_key_sandbox;?>" required>
					</div>
					<div class="mb-3">
						<label for="inputWebsiteTitle" class="form-label">Client key test mode <small
								class="text-danger">*</small></label>
						<input type="text" id="inputWebsiteTitle" class="form-control form-control-sm"
							name="_client_key_sandbox" value="<?= $_client_key_sandbox;?>" required>
					</div>
					<div class="mb-3">
						<label for="inputWebsiteTitle" class="form-label">Server key live mode <small
								class="text-danger">*</small></label>
						<input type="text" id="inputWebsiteTitle" class="form-control form-control-sm"
							name="_server_key_production" value="<?= $_server_key_production;?>" required>
					</div>
					<div class="mb-3">
						<label for="inputWebsiteTitle" class="form-label">Client key live mode <small
								class="text-danger">*</small></label>
						<input type="text" id="inputWebsiteTitle" class="form-control form-control-sm"
							name="_client_key_production" value="<?= $_client_key_production;?>" required>
					</div>
					<div class="card-footer px-0">
						<button type="submit" class="btn btn-primary btn-sm float-end">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
