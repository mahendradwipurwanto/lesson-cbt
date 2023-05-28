<!-- Page Header -->
<div class="page-header">
	<div class="row align-items-end">
		<div class="col-sm mb-2 mb-sm-0">
			<h1 class="page-header-title"><?= $page_title;?></h1>
			<h5 class="page-header-subtitle"><?= $sub_page_title;?></h5>
		</div>
		<!-- End Col -->
	</div>
	<!-- End Row -->
</div>
<!-- End Page Header -->

<div class="row">
	<div class="col-9">
		<!-- Card -->
		<div class="card mb-3 mb-lg-5">
			<?php if(!empty($soal)):?>
			<form action="<?= site_url('pengguna/simpanJawbanSoal');?>" method="post" class="js-validate need-validate"
				novalidate>
				<input type="hidden" name="id" value="<?= $soal->id;?>">
				<input type="hidden" name="t_peserta_id" value="<?= $peserta->id;?>">
				<input type="hidden" name="materi_id" value="<?= $materi->id;?>">
				<input type="hidden" name="is_essay" value="<?= $soal->tipe;?>">
				<input type="hidden" name="jawaban_benar" value="<?= $soal->jawaban_benar;?>">
				<input type="hidden" name="soal_id" value="<?= $soal->id;?>">
				<input type="hidden" name="is_selesai" value="<?= (end($list_soal)->id) == $soal->id?>">
				<!-- Header -->
				<div class="card-header card-header-content-between">
					<h4 class="card-header-title">Soal</h4>
				</div>
				<!-- End Header -->

				<!-- Body -->
				<div class="card-body">
					<!-- Form -->
					<div class="mb-4">
						<div class="row">
							<div class="col-12">
								<label for="soalMateriLabel" class="form-label">Pertanyaan</label>

								<p><?= $soal->soal;?></p>
							</div>
						</div>
					</div>
					<!-- End Form -->
					<!-- Form -->
					<div class="mb-4 <?= $soal->tipe == 0 ? 'd-block' : 'd-none';?>" id="pilihan-ganda">
						<label for="weightLabel" class="form-label">Jawaban</label>
						<div class="row">
							<?php if(!is_null($soal->jawaban_a) && $soal->jawaban_a !== ''):?>
							<div class="col-4 mb-3">
								<!-- Form Radio -->
								<label class="form-control" for="jawaban_a">
									<span class="form-check">
										<input type="radio" class="form-check-input" name="jawaban" id="jawaban_a"
											value="1" <?php if($soal->jawaban_peserta == 1):?>checked<?php endif;?>>
										<span class="form-check-label"><?= $soal->jawaban_a;?></span>
									</span>
								</label>
								<!-- End Form Radio -->
							</div>
							<?php endif;?>
							<?php if(!is_null($soal->jawaban_b) && $soal->jawaban_b !== ''):?>
							<div class="col-4 mb-3">
								<!-- Form Radio -->
								<label class="form-control" for="jawaban_b">
									<span class="form-check">
										<input type="radio" class="form-check-input" name="jawaban" id="jawaban_b"
											value="2" <?php if($soal->jawaban_peserta == 2):?>checked<?php endif;?>>
										<span class="form-check-label"><?= $soal->jawaban_b;?></span>
									</span>
								</label>
								<!-- End Form Radio -->
							</div>
							<?php endif;?>
							<?php if(!is_null($soal->jawaban_c) && $soal->jawaban_c !== ''):?>
							<div class="col-4 mb-3">
								<!-- Form Radio -->
								<label class="form-control" for="jawaban_c">
									<span class="form-check">
										<input type="radio" class="form-check-input" name="jawaban" id="jawaban_c"
											value="3" <?php if($soal->jawaban_peserta == 3):?>checked<?php endif;?>>
										<span class="form-check-label"><?= $soal->jawaban_c;?></span>
									</span>
								</label>
								<!-- End Form Radio -->
							</div>
							<?php endif;?>
							<?php if(!is_null($soal->jawaban_d) && $soal->jawaban_d !== ''):?>
							<div class="col-4 mb-3">
								<!-- Form Radio -->
								<label class="form-control" for="jawaban_d">
									<span class="form-check">
										<input type="radio" class="form-check-input" name="jawaban" id="jawaban_d"
											value="4" <?php if($soal->jawaban_peserta == 4):?>checked<?php endif;?>>
										<span class="form-check-label"><?= $soal->jawaban_d;?></span>
									</span>
								</label>
								<!-- End Form Radio -->
							</div>
							<?php endif;?>
							<?php if(!is_null($soal->jawaban_e) && $soal->jawaban_e !== ''):?>
							<div class="col-4 mb-3">
								<!-- Form Radio -->
								<label class="form-control" for="jawaban_e">
									<span class="form-check">
										<input type="radio" class="form-check-input" name="jawaban" id="jawaban_e"
											value="5" <?php if($soal->jawaban_peserta == 5):?>checked<?php endif;?>>
										<span class="form-check-label"><?= $soal->jawaban_e;?></span>
									</span>
								</label>
								<!-- End Form Radio -->
							</div>
							<?php endif;?>
						</div>
					</div>
					<!-- End Form -->
					<!-- Form -->
					<div class="mb-4 <?= $soal->tipe == 1 ? 'd-block' : 'd-none';?>" id="essay">
						<label for="weightLabel" class="form-label">Jawaban</label>
						<div class="mb-3">
							<textarea name="essay" class="form-control form-control-sm" cols="3"></textarea>
						</div>
					</div>
					<!-- End Form -->
				</div>
				<!-- Body -->
				<!-- Footer -->
				<div class="card-footer d-flex justify-content-between">
					<a href="<?= site_url('pengguna/materi/'.$materi->id);?>"
						class="btn btn-ghost-secondary">Kembali</a>
					<?php if((end($list_soal)->id) == $soal->id):?>
					<button type="submit" class="btn btn-primary btn-sm">
						Simpan dan selesai
					</button>
					<?PHP else:?>
					<button type="submit" class="btn btn-primary btn-sm">
						Simpan jawaban
					</button>
					<?php endif;?>
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
				<a href="<?= site_url('pengguna/materi/'.$materi->id);?>" class="btn btn-ghost-secondary">Kembali</a>
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
					<a href="<?= site_url('pengguna/materi/kerjakan-soal/'.$materi->id.'/'.$val->id);?>"
						class="soal <?= $val->id == $soal_id ? 'active': ''?>"><?= $key+1;?></a>
					<?php endforeach;?>
				</div>
				<?php endif;?>
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
