<!-- Card -->
<div class="row">
	<div class="col-6">
		<div class="card card-body">
			<h4>Master Credentials</h4>
			<form action="<?= site_url('api/website/ubahPasswordMaster');?>" method="post"
				class="js-validate needs-validation" novalidate>
				<div class="mb-3">
					<label for="inputEmailAdmin">Email Admin</label>
					<input type="mail" class="form-control form-control-sm" name="email" placeholder="Input Email"
						value="<?= $admin->email;?>" required>
				</div>
				<div class="mb-3">
					<label for="inputPasswordAdmin">Password Admin</label>
					<input type="password" class="form-control form-control-sm" name="admin" value="">
				</div>
				<div class="mb-3">
					<label for="inputPasswordMaster">Password Master</label>
					<input type="password" class="form-control form-control-sm" name="master" value="" required>
				</div>
				<button type="submit" class="btn btn-primary btn-sm float-end">Save changes</button>
			</form>
		</div>
	</div>
</div>
<!-- End Card -->
