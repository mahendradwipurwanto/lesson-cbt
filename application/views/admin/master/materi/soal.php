<div class="row">
	<div class="col-9">
		<!-- Card -->
		<div class="card mb-3 mb-lg-5">
			<!-- Header -->
			<div class="card-header card-header-content-between">
				<h4 class="card-header-title">Soal</h4>

				<div>
					<button class="btn btn-ghost-danger btn-sm">
						<i class="bi-clipboard-minus me-2"></i> Hapus
					</button>

					<button class="btn btn-ghost-secondary btn-sm">
						<i class="bi-clipboard-plus me-2"></i> Tambah
					</button>
				</div>
			</div>
			<!-- End Header -->

			<!-- Body -->
			<div class="card-body">
				<!-- Form -->
				<div class="mb-4">
					<div class="row">
						<div class="col-9">
							<label for="soalMateriLabel" class="form-label">Soal</label>

							<input type="text" class="form-control" name="soal" id="soalMateriLabel"
								placeholder="Soal materi" aria-label="Soal materi" required>
						</div>
						<div class="col-3">
							<label for="weightLabel" class="form-label">Jenis</label>

							<div class="tom-select-custom">
								<select class="js-select form-select" name="tipe" id="jenisSoal" autocomplete="off"
									data-hs-tom-select-options='{"placeholder": "Pilih jenis", "hideSearch": true}'
									required>
									<option value="0">Pilihan Ganda</option>
									<option value="1">Essay</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<!-- End Form -->
				<!-- Form -->
				<div class="mb-4 d-block" id="pilihan-ganda">
					<label for="weightLabel" class="form-label">Jawaban</label>
					<div class="row">
						<div class="col-4">
							<div class="input-group mb-3">
								<span class="input-group-text" id="jawaban-a">A</span>
								<input type="text" class="form-control form-control-sm" placeholder="Jawaban A"
									aria-label="Jawaban A" aria-describedby="jawaban-a">
							</div>
						</div>
						<div class="col-4">
							<div class="input-group mb-3">
								<span class="input-group-text" id="jawaban-b">B</span>
								<input type="text" class="form-control form-control-sm" placeholder="Jawaban B"
									aria-label="Jawaban B" aria-describedby="jawaban-b">
							</div>
						</div>
						<div class="col-4">
							<div class="input-group mb-3">
								<span class="input-group-text" id="jawaban-c">C</span>
								<input type="text" class="form-control form-control-sm" placeholder="Jawaban C"
									aria-label="Jawaban C" aria-describedby="jawaban-c">
							</div>
						</div>
						<div class="col-4">
							<div class="input-group mb-3">
								<span class="input-group-text" id="jawaban-d">D</span>
								<input type="text" class="form-control form-control-sm" placeholder="Jawaban D"
									aria-label="Jawaban D" aria-describedby="jawaban-d">
							</div>
						</div>
						<div class="col-4">
							<div class="input-group mb-3">
								<span class="input-group-text" id="jawaban-e">E</span>
								<input type="text" class="form-control form-control-sm" placeholder="Jawaban E"
									aria-label="Jawaban E" aria-describedby="jawaban-e">
							</div>
						</div>
						<div class="col-4">
							<div class="tom-select-custom">
								<select class="js-select form-select" name="tipe" autocomplete="off" required>
									<option value="-" selected>Kunci Jawaban</option>
									<option value="jawaban_a">Jawaban A</option>
									<option value="jawaban_b">Jawaban B</option>
									<option value="jawaban_c">Jawaban C</option>
									<option value="jawaban_d">Jawaban D</option>
									<option value="jawaban_e">Jawaban E</option>
								</select>
							</div>
						</div>
					</div>
					<small class="text-secondary">Kosongi jawaban untuk menentukan jawaban yang tersedia, ex: jika ingin
						hanya muncul A, B, C. Maka kosongi kolomg jawaban D dan E maka secara otomatis hanya akan muncul
						3 jawaban pada peserta</small>
				</div>
				<!-- End Form -->
				<!-- Form -->
				<div class="mb-4 d-none" id="essay">
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
		</div>
		<!-- End Card -->
	</div>
	<div class="col-3">
		<div class="card bg-transparent">
			<div class="card-header bg-white">
				<h4 class="card-header-title">Daftar soal</h4>
			</div>
			<div class="card-body p-2">
				<div class="soal-container">
					<div class="soal active">1</div>
					<div class="soal">2</div>
					<div class="soal">3</div>
					<div class="soal">4</div>
					<div class="soal">5</div>
					<div class="soal">6</div>
					<div class="soal">7</div>
					<div class="soal">8</div>
					<div class="soal">9</div>
					<div class="soal">10</div>
					<div class="soal">11</div>
					<div class="soal">12</div>
					<div class="soal">13</div>
					<div class="soal">14</div>
					<div class="soal">15</div>
					<div class="soal">16</div>
					<div class="soal">17</div>
					<div class="soal">18</div>
					<div class="soal">19</div>
					<div class="soal">20</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="position-fixed start-50 bottom-0 translate-middle-x w-100 zi-99 mb-3" style="max-width: 40rem;">
	<!-- Card -->
	<div class="card card-sm bg-dark border-dark mx-2">
		<div class="card-body">
			<div class="row justify-content-center justify-content-sm-between">
				<div class="col">
					<a href="<?= site_url('master/materi');?>" class="btn btn-ghost-light">Batal</a>
				</div>
				<!-- End Col -->

				<div class="col-auto">
					<div class="d-flex gap-3">
						<button type="button" class="btn btn-primary">Simpan</button>
					</div>
				</div>
				<!-- End Col -->
			</div>
			<!-- End Row -->
		</div>
	</div>
	<!-- End Card -->
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
