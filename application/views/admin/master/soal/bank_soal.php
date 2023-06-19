<!-- Page Header -->
<div class="page-header pb-3">
	<div class="row align-items-end">
		<div class="col-sm mb-2 mb-sm-0">
			<h1 class="docs-page-header-title"><?= $page_title;?></h1>
			<p class="docs-page-header-text"><?= $sub_page_title;?></p>
		</div>
		<!-- End Col -->

		<div class="col-sm-auto">
			<a href="<?= site_url('master/initBuatMateri');?>" class="btn btn-primary btn-sm">Buat soal baru</a>
		</div>
		<!-- End Col -->
	</div>
	<!-- End Row -->
</div>
<!-- End Page Header -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header py-3">
				<h4 class="card-header-title">Filter data soal</h4>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm mb-2 mb-sm-0">
						<label for="">Judul</label>
						<input type="text" id="filter_name" class="form-control form-control-sm"
							placeholder="Filter judul">
					</div>
					<div class="col-sm mb-2 mb-sm-0">
						<label for="">Kategori</label>
						<div class="tom-select-custom">
							<select class="js-select form-select form-select-sm" id="filter_categories"
								autocomplete="off" data-hs-tom-select-options='{"placeholder": "Semua kategori"}'>
								<option value="0">Semua kategori</option>
								<?php if(!empty($kategori)):?>
								<?php foreach($kategori as $key => $val):?>
								<option value="<?= $val->id;?>"><?= $val->categories;?></option>
								<?php endforeach;?>
								<?php endif;?>
							</select>
						</div>
					</div>
					<div class="col-sm mb-2 mb-sm-0">
						<label for="">Status</label>
						<div class="tom-select-custom">
							<select class="js-select form-select form-select-sm" id="filter_status"
								autocomplete="off" data-hs-tom-select-options='{"placeholder": "Semua status"}'>
								<option value="-1">Semua status</option>
								<option value="0">Draft</option>
								<option value="1">Aktif</option>
								<option value="2">Arsip</option>
							</select>
						</div>
					</div>
					<div class="col-sm mb-2 mb-sm-0">
						<button class="btn btn-sm btn-soft-info mt-4 me-1" type="button" id="searchBtn"
							onclick="btnSearch()"><i class="bi-search"></i>&nbsp&nbspPencarian</button>
					</div>
				</div>
			</div>
			<div class="card-header py-3">
				<h4 class="card-header-title">Data soal</h4>
			</div>
			<div class="card-body">
				<!-- End Row -->
				<table id="dataTable" class="table table-borderless table-thead-bordered nowrap w-100 align-middle">
					<thead class="thead-light">
						<tr>
							<th scope="col">No</th>
							<th scope="col"></th>
							<th scope="col">Judul</th>
							<th scope="col">Kategori</th>
							<th scope="col">Harga</th>
							<th scope="col">Module</th>
							<th scope="col">Peserta</th>
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
<div class="modal fade" id="mdlSoalDetail" tabindex="-1" aria-labelledby="mdlDeleteLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mdlDeleteLabel">Detail Soal</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" id="modalSoalContent">
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" id="mdlSoalDelete" tabindex="-1" aria-labelledby="mdlDeleteLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mdlDeleteLabel">Hapus Soal</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
				<div class="mb-2">Apakah kamu yakin ingin menghapus soal : <span
						class="mdlSoalDelete_Label" style="font-weight: bold;"></span></div>
			</div>

			<div class="modal-footer">
				<form action="<?= site_url('master/deleteMateri')?> " method="post"
					class="js-validate need-validate" novalidate>
					<input type="hidden" name="id" class="mdlSoalDelete_id">
					<button type="button" class="btn btn-outline-secondary btn-sm"
						data-bs-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-soft-danger btn-sm">Hapus</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" id="mdlSoalArsip" tabindex="-1" aria-labelledby="mdlArsipLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mdlArsipLabel">Arsipkan Soal</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
				<div class="mb-2">Apakah kamu yakin ingin mengarsipkan soal : <span
						class="mdlSoalArsip_Label" style="font-weight: bold;"></span></div>
			</div>

			<div class="modal-footer">
				<form action="<?= site_url('master/arsipMateri')?> " method="post"
					class="js-validate need-validate" novalidate>
					<input type="hidden" name="id" class="mdlSoalArsip_id">
					<button type="button" class="btn btn-outline-secondary btn-sm"
						data-bs-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-soft-warning btn-sm">Arsipkan</button>
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
		'searching': true,
		'scrollX': false,
		'responsive': true,
		'serverMethod': 'post',
		"columnDefs": [{
			"orderable": false,
			"targets": [0, 1]
		}],
		'ajax': {
			'url': "<?= site_url('ajax/master/getAjaxSoal')?>",
			'data': function (d) {
				d.filterName = $('#filter_name').val()
				d.filterCategories = $('#filter_categories').val()
				d.filterStatus = $('#filter_status').val()
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
				data: 'judul'
			},
			{
				data: 'kategori'
			},
			{
				data: 'harga'
			},
			{
				data: 'module'
			},
			{
				data: 'peserta'
			},
			{
				data: 'status'
			}
		]
	});
	const showMdlSoalDetail = id => {
		$('#mdlChecked_id').val(id);

		$("#modalSoalContent").html(
			`<center class="py-5"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sedang memuat ...</center>`
		);

		$('#mdlSoalDetail').modal('show')

		jQuery.ajax({
			url: "<?= site_url('ajax/master/getDetailSoal') ?>",
			type: 'POST',
			data: {
				user_id: id
			},
			success: function (data) {
				$("#modalSoalContent").html(data);
			}
		});
	}

	const showMdlSoalDelete = function (id, judul) {
		$('.mdlSoalDelete_id').val(id);
		$('.mdlSoalDelete_Label').html(`#${judul}`);
		$('#mdlSoalDelete').modal('show')
	}

	const showMdlSoalArsip = function (id, judul) {
		$('.mdlSoalArsip_id').val(id);
		$('.mdlSoalArsip_Label').html(`#${judul}`);
		$('#mdlSoalArsip').modal('show')
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
