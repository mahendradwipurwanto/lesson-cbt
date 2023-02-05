<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header py-3">
				<h4 class="card-header-title">Filter data member</h4>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm mb-2 mb-sm-0">
						<label for="">Email</label>
						<input type="text" id="filter_email" class="form-control form-control-sm"
							placeholder="Filter email" />
					</div>

					<div class="col-sm mb-2 mb-sm-0">
						<label for="">Nama</label>
						<input type="text" id="filter_name" class="form-control form-control-sm"
							placeholder="Filter nama">
					</div>
					<div class="col-sm mb-2 mb-sm-0">
						<button class="btn btn-sm btn-soft-info mt-4 me-1" type="button" id="searchBtn"
							onclick="btnSearch()"><i class="bi-search"></i>&nbsp&nbspPencarian</button>
					</div>
				</div>
			</div>
			<div class="card-header py-3">
				<h4 class="card-header-title">Data member</h4>
			</div>
			<div class="card-body">
				<!-- End Row -->
				<table id="dataTable" class="table table-borderless table-thead-bordered nowrap w-100 align-middle">
					<thead class="thead-light">
						<tr>
							<th scope="col">No</th>
							<th scope="col"></th>
							<th scope="col">Nama</th>
							<th scope="col">Email</th>
							<th scope="col">Whatsapp</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="mdlMemberDetail" tabindex="-1" aria-labelledby="mdlDeleteLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mdlDeleteLabel">Detail Member</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" id="modalMemberContent">
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" id="mdlChangePass" tabindex="-1" aria-labelledby="mdlDeleteLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mdlDeleteLabel">Ubah Password</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
				<div class="mb-2">Apakah anda yakin ingin mengubah password member ini menjadi : <span
						class="mdlChangePass_passLabel" style="font-weight: bold;"></span></div>
				<small class="text-secondary">Member akan menerima email mengenai perubahan password ini</small>
			</div>

			<div class="modal-footer">
				<form action="<?= site_url('admin/changeMemberPassword')?> " method="post"
					class="js-validate need-validate" novalidate>
					<input type="hidden" name="id" id="mdlChangePass_id">
					<input type="hidden" name="pass" id="mdlChangePass_pass">
					<button type="button" class="btn btn-outline-secondary btn-sm"
						data-bs-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-soft-success btn-sm">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" id="mdlChangeEmail" tabindex="-1" aria-labelledby="mdlDeleteLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mdlDeleteLabel">Ubah Email</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<form action="<?= site_url('admin/changeMemberEmail')?> " method="post"
					class="js-validate need-validate" novalidate>
					<input type="hidden" name="id" id="mdlChangeEmail_id">
					<div class="mb-3">
						<label for="inputEmailChange" class="form-label">Email baru member</label>
						<input type="email" class="form-control form-control-sm" name="email" id="inputEmailChange"
							placeholder="New email" required>
						<small class="text-secondary">Member akan menerima perubahan email ini, pada email lama dan baru
							member</small>
					</div>

					<div class="modal-footer px-0 mb-0 pb-0">
						<button type="button" class="btn btn-outline-secondary btn-sm"
							data-bs-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-soft-success btn-sm">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->

<script>
	var table = $('#dataTable').DataTable({
		'processing': true,
		'serverSide': true,
		'destroy': true,
		'ordering': false,
		'searching': false,
		'scrollX': true,
		'responsive': true,
		'serverMethod': 'post',
		'ajax': {
			'url': "<?= site_url('ajax/admin/getAjaxMember')?>",
			'data': function (d) {
				d.filterEmail = $('#filter_email').val()
				d.filterName = $('#filter_name').val()
				d.filterNumber = $('#filter_number').val()
			},
			'dataSrc': function (json) {
				doneLoading();
				return json.data;
			}
		},
		'columns': [{
				data: 'no'
			},
			{
				data: 'action'
			},
			{
				data: 'name'
			},
			{
				data: 'email'
			},
			{
				data: 'whatsapp'
			},
			{
				data: 'status'
			}
		]
	});
	const showMdlMemberDetail = id => {
		$('#mdlChecked_id').val(id);

		$("#modalMemberContent").html(
			`<center class="py-5"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sedang memuat ...</center>`
		);

		$('#mdlMemberDetail').modal('show')

		jQuery.ajax({
			url: "<?= site_url('ajax/admin/getDetailMember') ?>",
			type: 'POST',
			data: {
				user_id: id
			},
			success: function (data) {
				$("#modalMemberContent").html(data);
			}
		});
	}

	const showMdlChangePassword = id => {
		const pass = Math.random().toString(36).slice(-8);
		$('#mdlChangePass_id').val(id);
		$('#mdlChangePass_pass').val(pass);
		$('.mdlChangePass_passLabel').html(pass);
		$('#mdlChangePass').modal('show')
	}

	const showMdlChangeEmail = id => {
		$('#mdlChangeEmail_id').val(id);
		$('#mdlChangeEmail').modal('show')
	}

	function doneLoading() {
		$('#searchBtn').prop("disabled", false);
		// add spinner to button
		$('#searchBtn').html(
			`<i class="bi-search"></i>&nbsp&nbspSearch`
		);
	}

	function btnSearch() {
		$('#searchBtn').prop("disabled", true);
		// add spinner to button
		$('#searchBtn').html(
			`<span class="spinner-border spinner-border-sm text-white" role="status" aria-hidden="true"></span> loading...`
		);

		table.ajax.reload();
	}
</script>
