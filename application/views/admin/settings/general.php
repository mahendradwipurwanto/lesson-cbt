<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<form action="<?= site_url('settings/ubahGeneral');?>" method="post"
					class="js-validate needs-validation" novalidate enctype="multipart/form-data">
					<div class="mb-3">
						<label for="inputWebsiteTitle" class="form-label">Website title </label>
						<input type="text" id="inputWebsiteTitle" class="form-control form-control-sm" name="web_title"
							value="<?= $web_title;?>" required>
						<small class="text-secondary">This is use on metatag as well</small>
					</div>
					<div class="mb-3">
						<label class="form-label" for="inputWebDesc">Website description </label>
						<textarea type="text" id="inputWebDesc" class="form-control editor" rows="4" name="web_desc"
							placeholder="Website Description" required><?= $web_desc;?></textarea>
						<small class="text-secondary">This is use on metatag as well</small>
					</div>
					<div class="mb-3">
						<label class="form-label" for="inputWebsiteAddress">Address </label>
						<textarea type="text" id="inputWebsiteAddress" class="form-control form-control-sm" rows="3"
							name="web_alamat" placeholder="Website Address" required><?= $web_alamat;?></textarea>
					</div>
					<div class="mb-3">
						<label for="inputWebsiteFacebook" class="form-label">Website Facebook</label>
						<input type="text" id="inputWebsiteFacebook" class="form-control form-control-sm"
							name="sosmed_facebook" value="<?= $sosmed_facebook;?>" required>
					</div>
					<div class="mb-3">
						<label for="inputWebsiteInstagram" class="form-label">Website Instagram</label>
						<input type="text" id="inputWebsiteInstagram" class="form-control form-control-sm"
							name="sosmed_ig" value="<?= $sosmed_ig;?>" required>
					</div>
					<div class="mb-3">
						<label for="inputWebsiteTwitter" class="form-label">Website Twitter</label>
						<input type="text" id="inputWebsiteTwitter" class="form-control form-control-sm"
							name="sosmed_twitter" value="<?= $sosmed_twitter;?>" required>
					</div>
					<div class="mb-3">
						<label for="inputWebsiteYoutube" class="form-label">Website Youtube</label>
						<input type="text" id="inputWebsiteYoutube" class="form-control form-control-sm"
							name="sosmed_yt" value="<?= $sosmed_yt;?>" required>
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
