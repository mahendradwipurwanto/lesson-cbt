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
				<div class="d-grid d-sm-flex">
					<p class="m-0 p-0 text-danger h4 fw-normal">Timer: <span id="countdown"
							class="display-4 text-white ms-1"><?= $sisa_waktu_pengerjaan;?></span></p>
					<p id="countdown"></p>
				</div>
			</div>
			<!-- End Col -->
		</div>
		<!-- End Row -->
	</div>
</div>
<!-- End CTA -->
<div class="container content-space-1">
	<div class="row">
		<div class="col-12">
			<!-- Card -->
			<div class="card mb-3 mb-lg-5">
				<?php if(!empty($soal)):?>
				<form action="<?= site_url('pengguna/simpanJawbanSoal');?>" method="post"
					class="js-validate need-validate" novalidate>
					<input type="hidden" name="id" value="<?= $soal->id;?>">
					<input type="hidden" name="t_peserta_id" value="<?= $peserta->id;?>">
					<input type="hidden" name="materi_id" value="<?= $materi->id;?>">
					<input type="hidden" name="is_essay" value="<?= $soal->tipe;?>">
					<input type="hidden" name="jawaban_benar" value="<?= $soal->jawaban_benar;?>">
					<input type="hidden" name="is_expired" value="<?= $is_expired;?>">
					<input type="hidden" name="soal_id" value="<?= $soal->id;?>">
					<input type="hidden" name="is_selesai" value="<?= (end($list_soal)->id) == $soal->id?>">
					<input type="hidden" name="waktu_pengambilan" value="<?= $peserta->waktu_pengambilan;?>">
					<input type="hidden" name="is_first_take" value="<?= is_null($peraturan_selesai) || ($materi->is_panduan == 1 && is_null($panduan_selesai));?>">
					<input type="hidden" name="next_soal" value="<?= !is_null($next_soal) ? $next_soal->id : null;?>">
					<input type="hidden" name="first_soal" value="<?= !empty($list_soal) ? $list_soal[0]->id : null;?>">
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
						<?php if(!is_null($previous_soal)):?>
						<a href="<?= site_url('pengguna/materi/kerjakan-soal/'.$materi->id.'/'.$previous_soal->id);?>"
							class="btn btn-outline-secondary btn-sm">Kembali</a>
						<?php else:?>
						<?php if($materi->is_panduan == 1):?>
						<a href="<?= site_url('pengguna/materi/panduan-soal/'.$materi->id);?>"
							class="btn btn-outline-secondary btn-sm">Kembali</a>
						<?php else:?>
						<a href="<?= site_url('pengguna/materi/peraturan/'.$materi->id);?>"
							class="btn btn-outline-secondary btn-sm">Kembali</a>
						<?php endif;?>
						<?php endif;?>
						<?php if((end($list_soal)->id) == $soal->id):?>
						<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
							data-bs-target="#konfirmasi-selesai">
							Simpan
						</button>
						<?PHP else:?>
						<button type="submit" class="btn btn-primary btn-sm">
							Simpan dan lanjut
						</button>
						<?php endif;?>
					</div>
					<!-- End Footer -->

					<!-- Modal -->
					<div id="konfirmasi-selesai" class="modal fade" tabindex="-1" role="dialog"
						aria-labelledby="konfirmasi-selesaiTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-body text-center">
									<p>Jika telah yakin dengan semua jawaban anda, anda dapat menekan <span
											class="text-primary fw-bold">Simpan dan
											selesai</span> atau anda dapat menekan <span
											class="text-secondary fw-bold">Simpan dan selesai</span> untuk melanjtukan
										pengerjaan soal</p>
								</div>
								<div class="modal-footer">
									<input type="submit" class="btn btn-outline-secondary btn-sm"
										name="konfirmasi_selesai" value="Simpan dan lanjutkan" />
									<input type="submit" class="btn btn-primary btn-sm" name="konfirmasi_selesai"
										value="Simpan dan selesai" />
								</div>
							</div>
						</div>
					</div>
					<!-- End Modal -->
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
					<a href="<?= site_url('pengguna/materi/'.$materi->id);?>"
						class="btn btn-ghost-secondary">Kembali</a>
				</div>
				<!-- End Footer -->
				<?php endif;?>
			</div>
			<!-- End Card -->
		</div>
	</div>
</div>

<script>
	// Initialize the countdown with the target date string in "dd/mm/yyyy H:i:s" format and the ID of the target element
	initCountdown('<?= $timer_pengerjaan;?>', 'countdown');

</script>
