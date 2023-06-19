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
	<div class="col-8">
		<div class="card">
			<div class="card-body">
				<form action="<?= site_url('api/website/ubahGeneral');?>" method="post" class="js-validate needs-validation"
					novalidate enctype="multipart/form-data">
					<div class="mb-3">
						<label for="inputWebsiteTitle" class="form-label">title <small class="text-danger">*</small></label>
						<input type="text" id="inputWebsiteTitle" class="form-control form-control-sm" name="web_title"
							value="<?= $web_title;?>" required>
						<small class="text-secondary">This is use on metatag as well</small>
					</div>
					<div class="mb-3">
						<figure class="w-25">
							<img src="<?= base_url();?><?= $web_logo;?>" id="metodeTambah-preview" class="img-thumbnail img-fluid"
								alt="Thumbnail image"
								onerror="this.onerror=null;this.src='<?= base_url();?><?= 'assets/images/placeholder.jpg'?>';">
						</figure>
						<label for="metodeTambah-upload" class="form-label">Logo <small class="text-muted">(optional)</small>:</label>
						<div class="input-group">
							<input type="file" class="form-control form-control-sm imgprev" name="image" accept="image/*, .svg"
								id="metodeTambah-upload">
						</div>
						<small class="text-muted">Max file size 1Mb</small>
					</div>
					<div class="mb-3">
						<label class="form-label" for="inputWebDesc">Description <small class="text-danger">*</small></label>
						<textarea type="text" id="inputWebDesc" class="form-control editor" rows="4" name="web_desc"
							placeholder="Description" required><?= $web_desc;?></textarea>
						<small class="text-secondary">This is use on metatag as well</small>
					</div>
					<div class="mb-3">
						<label class="form-label" for="inputWebsiteAddress">Address <small class="text-danger">*</small></label>
						<textarea type="text" id="inputWebsiteAddress" class="form-control form-control-sm" rows="3" name="web_alamat"
							placeholder="Address" required><?= $web_alamat;?></textarea>
					</div>
					<div class="mb-3">
						<label for="inputWebsiteFacebook" class="form-label">Facebook<small class="text-danger">*</small></label>
						<input type="text" id="inputWebsiteFacebook" class="form-control form-control-sm" name="sosmed_facebook"
							value="<?= $sosmed_facebook;?>" required>
					</div>
					<div class="mb-3">
						<label for="inputWebsiteInstagram" class="form-label">Instagram<small class="text-danger">*</small></label>
						<input type="text" id="inputWebsiteInstagram" class="form-control form-control-sm" name="sosmed_ig"
							value="<?= $sosmed_ig;?>" required>
					</div>
					<div class="mb-3">
						<label for="inputWebsiteTwitter" class="form-label">Twitter<small class="text-danger">*</small></label>
						<input type="text" id="inputWebsiteTwitter" class="form-control form-control-sm" name="sosmed_twitter"
							value="<?= $sosmed_twitter;?>" required>
					</div>
					<div class="mb-3">
						<label for="inputWebsiteYoutube" class="form-label">Youtube<small class="text-danger">*</small></label>
						<input type="text" id="inputWebsiteYoutube" class="form-control form-control-sm" name="sosmed_yt"
							value="<?= $sosmed_yt;?>" required>
					</div>
					<div class="card-footer px-0">
						<button type="submit" class="btn btn-primary btn-sm float-end">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	//  ckeditor
	$('textarea.editor').each(function () {

		CKEDITOR.replace($(this).attr('id'));

	});
</script>
