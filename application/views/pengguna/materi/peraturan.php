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
					<?php if(is_null($peraturan_selesai) || ($materi->is_panduan == 1 && is_null($panduan_selesai)) || $peserta->waktu_pengambilan == 0):?>
					<p class="m-0 p-0 text-danger h4 fw-normal">Timer: <span id="countdown"
							class="display-4 text-white ms-1"><?= $waktu_pengerjaan;?></span></p>
					<?php else:?>
					<p class="m-0 p-0 text-danger h4 fw-normal">Timer: <span id="countdown"
							class="display-4 text-white ms-1"><?= $sisa_waktu_pengerjaan;?></span></p>
					<?php endif;?>
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
				<form action="<?= site_url('pengguna/simpanJawbanSoal');?>" method="post"
					class="js-validate need-validate" novalidate>
					<input type="hidden" name="id" value="null">
					<input type="hidden" name="t_peserta_id" value="<?= $peserta->id;?>">
					<input type="hidden" name="materi_id" value="<?= $materi->id;?>">
					<input type="hidden" name="is_essay" value="null">
					<input type="hidden" name="jawaban_benar" value="null">
					<input type="hidden" name="is_expired" value="<?= $is_expired;?>">
					<input type="hidden" name="soal_id" value="0">
					<input type="hidden" name="is_selesai" value="0">
					<input type="hidden" name="is_benar" value="false">
					<input type="hidden" name="waktu_pengambilan" value="<?= $peserta->waktu_pengambilan;?>">
					<input type="hidden" name="is_first_take" value="<?= is_null($peraturan_selesai) || ($materi->is_panduan == 1 && is_null($panduan_selesai));?>">
					<input type="hidden" name="next_soal" value="<?= $materi->is_panduan == 1 ? -1 : "null";?>">
					<div class="card-body">
						<h1>Peraturan Pengerjaan Soal</h1>
						<?= $materi->panduan;?>
					</div>
					<div class="card-footer d-flex justify-content-end">
						<?php if($materi->is_panduan == 1):?>
						<button type="submit" class="btn btn-primary btn-sm">lanjukan</button>
						<?php else:?>
						<button type="submit" class="btn btn-primary btn-sm">mengerti dan kerjakan</button>
						<?php endif;?>
					</div>
				</form>
			</div>
			<!-- End Card -->
		</div>
	</div>
</div>

<?php if($peserta->waktu_pengambilan > 0):?>
<script>
	// Initialize the countdown with the target date string in "dd/mm/yyyy H:i:s" format and the ID of the target element
	initCountdown('<?= $timer_pengerjaan;?>', 'countdown');

</script>
<?php endif;?>
