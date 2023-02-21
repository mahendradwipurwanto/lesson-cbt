<div class="row">
	<div class="col-9">
		<!-- Card -->
		<div class="card mb-3 mb-lg-5">
			<?php if(!empty($soal)):?>
			<form action="<?= site_url('master/saveSoal');?>" method="post" class="js-validate need-validate"
				novalidate>
				<input type="hidden" name="id" value="<?= $soal->id;?>">
				<input type="hidden" name="materi_id" value="<?= $materi->id;?>">
				<input type="hidden" name="mode" value="<?= $this->uri->segment(2);?>">
				<input type="hidden" name="soal_id" value="<?= $soal_id;?>">
				<!-- Header -->
				<div class="card-header card-header-content-between">
					<h4 class="card-header-title">Soal</h4>

					<button class="btn btn-ghost-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete">
						<i class="bi-clipboard-minus me-2"></i> Hapus
					</button>
				</div>
				<!-- End Header -->

				<!-- Body -->
				<div class="card-body">
					<!-- Form -->
					<div class="mb-4">
						<div class="row">
							<div class="col-9">
								<label for="soalMateriLabel" class="form-label">Pertanyaan</label>

								<input type="text" class="form-control" name="soal" id="soalMateriLabel"
									placeholder="Pertanyaan" aria-label="Pertanyaan" value="<?= $soal->soal;?>"
									required>
							</div>
							<div class="col-3">
								<label for="weightLabel" class="form-label">Jenis</label>

								<div class="tom-select-custom">
									<select class="js-select form-select" name="tipe" id="jenisSoal" autocomplete="off"
										data-hs-tom-select-options='{"placeholder": "Pilih jenis", "hideSearch": true}'
										required>
										<option value="0" <?php if($soal->tipe == 0):?>selected<?php endif;?>>Pilihan
											Ganda</option>
										<option value="1" <?php if($soal->tipe == 1):?>selected<?php endif;?>>Essay
										</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<!-- End Form -->
					<!-- Form -->
					<div class="mb-4 <?= $soal->tipe == 0 ? 'd-block' : 'd-none';?>" id="pilihan-ganda">
						<label for="weightLabel" class="form-label">Jawaban</label>
						<div class="row">
							<div class="col-4">
								<div class="input-group mb-3">
									<span class="input-group-text" id="jawaban-a">A</span>
									<input type="text" class="form-control form-control-sm" name="jawaban_a"
										value="<?= $soal->jawaban_a;?>" placeholder="Jawaban A" aria-label="Jawaban A"
										aria-describedby="jawaban-a">
								</div>
							</div>
							<div class="col-4">
								<div class="input-group mb-3">
									<span class="input-group-text" id="jawaban-b">B</span>
									<input type="text" class="form-control form-control-sm" name="jawaban_b"
										value="<?= $soal->jawaban_b;?>" placeholder="Jawaban B" aria-label="Jawaban B"
										aria-describedby="jawaban-b">
								</div>
							</div>
							<div class="col-4">
								<div class="input-group mb-3">
									<span class="input-group-text" id="jawaban-c">C</span>
									<input type="text" class="form-control form-control-sm" name="jawaban_c"
										value="<?= $soal->jawaban_c;?>" placeholder="Jawaban C" aria-label="Jawaban C"
										aria-describedby="jawaban-c">
								</div>
							</div>
							<div class="col-4">
								<div class="input-group mb-3">
									<span class="input-group-text" id="jawaban-d">D</span>
									<input type="text" class="form-control form-control-sm" name="jawaban_d"
										value="<?= $soal->jawaban_d;?>" placeholder="Jawaban D" aria-label="Jawaban D"
										aria-describedby="jawaban-d">
								</div>
							</div>
							<div class="col-4">
								<div class="input-group mb-3">
									<span class="input-group-text" id="jawaban-e">E</span>
									<input type="text" class="form-control form-control-sm" name="jawaban_e"
										value="<?= $soal->jawaban_e;?>" placeholder="Jawaban E" aria-label="Jawaban E"
										aria-describedby="jawaban-e">
								</div>
							</div>
							<div class="col-4">
								<div class="tom-select-custom">
									<select class="js-select form-select" name="jawaban_benar" autocomplete="off"
										required>
										<option value="-"
											<?php if($soal->jawaban_benar == null):?>selected<?php endif;?>>Kunci
											Jawaban</option>
										<option value="jawaban_a"
											<?php if($soal->jawaban_benar == 'jawaban_a'):?>selected<?php endif;?>>
											Jawaban A
										</option>
										<option value="jawaban_b"
											<?php if($soal->jawaban_benar == 'jawaban_b'):?>selected<?php endif;?>>
											Jawaban B
										</option>
										<option value="jawaban_c"
											<?php if($soal->jawaban_benar == 'jawaban_c'):?>selected<?php endif;?>>
											Jawaban C
										</option>
										<option value="jawaban_d"
											<?php if($soal->jawaban_benar == 'jawaban_d'):?>selected<?php endif;?>>
											Jawaban D
										</option>
										<option value="jawaban_e"
											<?php if($soal->jawaban_benar == 'jawaban_e'):?>selected<?php endif;?>>
											Jawaban E
										</option>
									</select>
								</div>
							</div>
						</div>
						<small class="text-secondary">Kosongi jawaban untuk menentukan jawaban yang tersedia, ex: jika
							ingin
							hanya muncul A, B, C. Maka kosongi kolomg jawaban D dan E maka secara otomatis hanya akan
							muncul
							3 jawaban pada peserta</small>
					</div>
					<!-- End Form -->
					<!-- Form -->
					<div class="mb-4 <?= $soal->tipe == 1 ? 'd-block' : 'd-none';?>" id="essay">
						<label for="weightLabel" class="form-label">Jawaban</label>
						<div class="row">
							<div class="col-12 text-center">
								<span class="text-secondary">soal merupakan essay</span>
							</div>
						</div>
					</div>
					<!-- End Form -->
				</div>
				<!-- Body -->
				<!-- Footer -->
				<div class="card-footer d-flex justify-content-between">
					<a href="<?= site_url('master/'.$this->uri->segment(2).'/'.$materi->id);?>"
						class="btn btn-ghost-secondary">Kembali</a>

					<button class="btn btn-primary btn-sm">
						<i class="bi-clipboard-plus me-2"></i> Simpan soal
					</button>
				</div>
				<!-- End Footer -->
			</form>
			<?php else:?>
			<!-- Header -->
			<div class="card-header card-header-content-between">
				<h4 class="card-header-title">Soal</h4>
			</div>
			<!-- End Header -->

			<!-- Body -->
			<div class="card-body text-center">
				<h3 class="mb-0">Harap pilih soal pada tab list soal, atau tambahkan soal jika tidak ada soal</h3>
			</div>
			<!-- Body -->
			<!-- Footer -->
			<div class="card-footer d-flex justify-content-between">
				<a href="<?= site_url('master/'.$this->uri->segment(2).'/'.$materi->id);?>"
					class="btn btn-ghost-secondary">Kembali</a>
			</div>
			<!-- End Footer -->
			<?php endif;?>
		</div>
		<!-- End Card -->
	</div>
	<div class="col-3">
		<div class="card bg-transparent">
			<div class="card-header bg-white px-2 py-3">
				<h4 class="card-header-title">Daftar soal</h4>
			</div>
			<div class="card-body p-2">
				<?php if(!empty($list_soal)):?>
				<div class="soal-container">
					<?php foreach($list_soal as $key => $val):?>
					<a href="<?= site_url('master/buat-materi/'.$materi->id.'/soal/'.$val->id);?>"
						class="soal <?= $val->id == $soal_id ? 'active': ''?>"><?= $key+1;?></a>
					<?php endforeach;?>
				</div>
				<?php endif;?>
				<a href="<?= site_url('master/tambahSoal/'.$materi->id.'/'.$this->uri->segment(2));?>"
					class="btn btn-light btn-sm w-100 mt-3"><i class="bi-clipboard-plus"></i> tambah soal
					baru</a>
			</div>
		</div>
	</div>
</div>

<div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="detailUserTitle">Hapus data</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= site_url('master/deleteSoal');?>" method="post" class="js-validate need-validate"
					novalidate>
					<input type="hidden" name="id" value="<?= $soal->id;?>">
					<input type="hidden" name="materi_id" value="<?= $materi->id;?>">
					<input type="hidden" name="mode" value="<?= $this->uri->segment(2);?>">
					<input type="hidden" name="soal_id" value="<?= $soal_id;?>">
					<p>Apakah kamu yakin ingin menghapus soal ini?</p>
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
	const selectBox = document.getElementById('jenisSoal');
	const pilihanGanda = document.getElementById('pilihan-ganda');
	const essay = document.getElementById('essay');

	selectBox.addEventListener('change', (event) => {
		const value = event.target.value;

		if (value == '0') {
			pilihanGanda.classList.remove('d-none');
			essay.classList.add('d-none');
		} else if (value == '1') {
			pilihanGanda.classList.add('d-none');
			essay.classList.remove('d-none');
		}
	});

</script>
