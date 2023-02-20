<form action="<?= site_url('master/saveMateri');?>" method="post" class="js-validate needs-validation" novalidate
	enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $materi->id;?>">
	<div class="row">
		<div class="col-lg-8 mb-3 mb-lg-0">
			<!-- Card -->
			<div class="card mb-3 mb-lg-5">
				<!-- Header -->
				<div class="card-header">
					<h4 class="card-header-title">Overview materi</h4>
				</div>
				<!-- End Header -->

				<!-- Body -->
				<div class="card-body">
					<!-- Form -->
					<div class="mb-4">
						<label for="judulMateriLabel" class="form-label">Judul</label>

						<input type="text" class="form-control form-control-sm" name="judul" id="judulMateriLabel"
							placeholder="Judul materi" value="<?= $materi->judul;?>" aria-label="Judul materi" required>
					</div>
					<!-- End Form -->

					<div class="row">
						<div class="col-sm-6">
							<!-- Form -->
							<div class="mb-4">
								<label for="weightLabel" class="form-label">Kategori</label>

								<div class="tom-select-custom">
									<select class="js-select form-select" name="m_kategori_id" autocomplete="off"
										required>
										<?php if(!empty($kategori)):?>
										<?php foreach($kategori as $key => $val):?>
										<option value="<?= $val->id;?>"
											<?php if($val->id == $materi->m_kategori_id):?>selected<?php endif;?>>
											<?= $val->categories;?></option>
										<?php endforeach;?>
										<?php else:?>
										<option>belum ada kategori</option>
										<?php endif;?>
									</select>
								</div>
							</div>
							<!-- End Form -->
						</div>
						<!-- End Col -->
						<div class="col-sm-6">
							<!-- Form -->
							<div class="mb-4">
								<label for="hargaMateri" class="form-label">Harga</label>
								<div class="input-group">
									<span class="input-group-text" id="pratinjauMateri-link">Rp.</span>
									<input type="text" class="form-control form-control-sm" name="harga"
										placeholder="10000" aria-label="10000" value="<?= $materi->harga;?>"
										aria-describedby="pratinjauMateri-link required">
								</div>
								<small>Set 0 untuk gratis</small>
							</div>
							<!-- End Form -->
						</div>
						<!-- End Col -->
					</div>
					<!-- End Row -->

					<label class="form-label" for="deskripsiMateri">Deskripsi <span
							class="form-label-secondary">(Optional)</span></label>

					<textarea type="text" id="deskripsiMateri" class="form-control editor" rows="4" name="deskripsi"
						placeholder="Deskripsi materi"><?= $materi->deskripsi;?></textarea>
				</div>
				<!-- Body -->
			</div>
			<!-- End Card -->

			<!-- Card -->
			<div class="card mb-3 mb-lg-5 d-none">
				<!-- Header -->
				<div class="card-header card-header-content-between">
					<h4 class="card-header-title">Konten <small class="text-secondary">(optional)</small></h4>

					<button class="btn btn-ghost-secondary btn-sm">
						<i class="bi-window-plus me-2"></i> Tambah konten
					</button>
				</div>
				<!-- End Header -->

				<!-- Body -->
				<div class="card-body">
				</div>
				<!-- Body -->
			</div>
			<!-- End Card -->
		</div>
		<!-- End Col -->

		<div class="col-lg-4">
			<!-- Card -->
			<div class="card mb-3 mb-lg-5">
				<!-- Header -->
				<div class="card-header">
					<h4 class="card-header-title">CBT</h4>
				</div>
				<!-- End Header -->

				<!-- Body -->
				<div class="card-body">
					<!-- Card -->
					<div class="card card-sm card-hover-shadow h-100 mb-3" id="index-panduan">
					</div>
					<!-- End Card -->
					<!-- Card -->
					<div class="card card-sm card-hover-shadow h-100">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex align-items-center">
									<i class="bi-card-list fs-2 text-body me-2"></i>
									<h5 class="text-truncate ms-2 mb-0">Soal</h5>
								</div>
								<?php if($materi->is_soal):?>
								<i class="bi-check-square fs-1 text-success float-end"></i>
								<?php else:?>
								<i class="bi-square fs-1 text-secondary float-end"></i>
								<?php endif;?>
							</div>
						</div>
						<a class="stretched-link" href="<?= site_url('master/buat-materi/soal');?>"></a>
					</div>
					<!-- End Card -->
				</div>
				<!-- Body -->
			</div>
			<!-- End Card -->

			<!-- Card -->
			<div class="card">
				<!-- Header -->
				<div class="card-header">
					<h4 class="card-header-title">Informasi tambahan</h4>
				</div>
				<!-- End Header -->

				<!-- Body -->
				<div class="card-body">
					<!-- Form -->
					<div class="mb-4 d-none">
						<label for="posterMateri" class="form-label">Poster <small
								class="text-secondary">(optional)</small></label>
						<input class="form-control form-control-sm" type="file" name="poster" id="posterMateri">
					</div>
					<!-- End Form -->
					<!-- Form -->
					<div class="mb-4">
						<label for="pratinjauMateri" class="form-label">Pratinjau <small
								class="text-secondary">(optional)</small></label>
						<div class="input-group mb-3">
							<span class="input-group-text" id="pratinjauMateri-link"><i class="bi-youtube"></i></span>
							<input type="text" class="form-control form-control-sm" name="pratinjau"
								value="<?= $materi->pratinjau;?>"
								placeholder="https://www.youtube.com/watch?v=fiGwZ1PdvG4"
								aria-label="https://www.youtube.com/watch?v=fiGwZ1PdvG4"
								aria-describedby="pratinjauMateri-link">
						</div>
					</div>
					<!-- End Form -->
					<!-- Form -->
					<div class="mb-4 d-none">
						<label for="tagMateri" class="form-label">Tag <small
								class="text-secondary">(optional)</small></label>

						<textarea type="text" class="form-control form-control-sm" name="tag" id="tagMateri" rows="3"
							placeholder="Biologi" aria-label="Biologi"><?= $materi->tag;?></textarea>
					</div>
					<!-- End Form -->
				</div>
				<!-- Body -->
			</div>
			<!-- End Card -->
		</div>
		<!-- End Col -->
	</div>
	<!-- End Row -->

	<div class="position-fixed start-50 bottom-0 translate-middle-x w-100 zi-99 mb-3" style="max-width: 40rem;">
		<!-- Card -->
		<div class="card card-sm bg-dark border-dark mx-2">
			<div class="card-body">
				<div class="row justify-content-center justify-content-sm-between">
					<div class="col">
						<button type="button" data-bs-toggle="modal" data-bs-target="#hapus"
							class="btn btn-ghost-danger">Hapus</button>
					</div>
					<!-- End Col -->

					<div class="col-auto">
						<div class="d-flex gap-3">
							<a href="<?= site_url('master/materi');?>" class="btn btn-ghost-light">Kembali</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
					<!-- End Col -->
				</div>
				<!-- End Row -->
			</div>
		</div>
		<!-- End Card -->
	</div>
</form>
<!-- Modal -->
<div id="panduan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="detailUserTitle">Panduan CBT</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="save-panduan" novalidate>
					<input type="hidden" name="id" value="<?= $materi->id;?>">
					<div class="mb-3">
						<!-- Checkbox Switch -->
						<div class="form-check form-switch mb-4">
							<input type="checkbox" class="form-check-input" name="is_panduan" id="statusPanduanMateri"
								<?php if($materi->is_panduan == 1):?>checked<?php endif;?>>
							<label class="form-check-label" for="statusPanduanMateri">Aktifkan panduan</label>
						</div>
						<!-- End Checkbox Switch -->
					</div>

					<div class="mb-3">
						<label for="formPanduan" class="form-label">Pandauan</label>
						<textarea class="form-control form-control-sm editor" id="" type="text" name="panduan"
							placeholder="Ketikkan panduan anda"><?= $materi->panduan;?></textarea>
					</div>

					<div class="modal-footer px-0 pb-0">
						<button type="button" class="btn btn-white btn-sm" id="batal-panduan"
							data-bs-dismiss="modal">batal</button>
						<button type="submit" class="btn btn-primary btn-sm" id="simpan-panduan">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="detailUserTitle">Hapus data</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= site_url('master/deleteMateri');?>" method="post" class="js-validate need-validate"
					novalidate>
					<input type="hidden" name="id" value="<?= $materi->id;?>">
					<p>Apakah kamu yakin ingin menghapus ini?</p>
					<div class="modal-footer px-0 pb-0">
						<button type="button" class="btn btn-white btn-sm" data-bs-dismiss="modal">Tidak</button>
						<button type="submit" class="btn btn-danger btn-sm">Ya</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<script>
	function showIndexPanduan() {
		jQuery.ajax({
			url: "<?= site_url('ajax/master/getIndexPanduan') ?>",
			type: 'POST',
			data: {
				id: '<?= $materi->id;?>'
			},
			success: function (data) {
				$("#index-panduan").html(data);
			}
		});
	}

	showIndexPanduan()

	function submitForm(event) {
		event.preventDefault(); // Prevent the default form submission

		$('#simpan-panduan').prop("disabled", true);
		// add spinner to button
		$('#simpan-panduan').html(
			`<span class="spinner-border spinner-border-sm text-white" role="status" aria-hidden="true"></span> loading...`
		);

		const form = event.target; // Get the form element
		const formData = new FormData(form); // Get the form data

		const xhr = new XMLHttpRequest(); // Create a new XMLHttpRequest object

		xhr.open('POST', "<?= site_url('master/savePanduan');?>"); // Set the request method and URL

		xhr.onreadystatechange = function () {
			if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
				// The request was successful, do something with the response

				var Toast = Swal.mixin({
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					timer: 3000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					}
				})

				Toast.fire({
					icon: 'success',
					title: "Berhasil menyimpan panduan materi"
				})

				$('#simpan-panduan').prop("disabled", false);
				// add spinner to button
				$('#simpan-panduan').html("simpan");
				$('#panduan').modal('hide');
				showIndexPanduan()
			} else {
				var Toast = Swal.mixin({
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					timer: 3000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					}
				})

				Toast.fire({
					icon: 'error',
					title: "Terjadi kesalahan saat menyimpan panduan"
				})
			}
		};

		xhr.send(formData); // Send the form data
	}

	const form = document.querySelector('.save-panduan'); // Get the form element by class
	form.addEventListener('submit', submitForm); // Attach the event listener

</script>
