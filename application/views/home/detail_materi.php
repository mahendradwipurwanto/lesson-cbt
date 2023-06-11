<!-- Hero -->
<div class="main-course-detail mt-5 mt-md-0">
	<div class="course-header">
		<div class="container content-space-t-md-3">
			<div class="row">
				<div class="col-sm-12 col-md-3 mb-3">
					<div class="p-2">
						<img class="card-img shadow-sm" src="<?= base_url();?><?= $materi->poster;?>"
							onerror="this.onerror=null;this.src='<?= base_url();?><?= 'assets-frontend/img/placeholder-soal.jpg'?>';"
							alt="Image Description">
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<a class="d-flex gap-1 mb-4" href="#testimoni-siswa">
						<?php if($materi->rating['rating'] == 0):?>
						<i class="bi bi-star text-dark"></i>
						<i class="bi bi-star text-dark"></i>
						<i class="bi bi-star text-dark"></i>
						<i class="bi bi-star text-dark"></i>
						<i class="bi bi-star text-dark"></i>
						<?php else:?>
						<?php for($i = 0; $i < $materi->rating['fullStars']; $i++):?>
						<i class="bi bi-star-fill text-warning"></i>
						<?php endfor;?>
						<?php if($materi->rating['halfStar'] >= 0.5):?>
						<i class="bi bi-star-half text-warning"></i>
						<?php endif;?>
						<?php endif;?>
						<span class="ms-1 text-dark"><?= count($materi->testimoni);?> testimoni</span>
					</a>

					<div class="mb-5">
						<h1 class="h2"><?= $materi->judul;?></h1>
						<p><?= $materi->deskripsi == "" ? "-" : $materi->deskripsi;?></p>
					</div>

					<div class="mb-5">
						<span class="d-block mb-2">Kategori: <span
								class="btn btn-outline-dark btn-xs"><?= $materi->categories;?></span></span>
					</div>
					<div class="mb-5">
						<div class="course-card__info d-flex align-items-center">
							<div class="course-card__info-item">
								<svg width="16" height="16" class="course-card__icon text-gray-500" viewBox="0 0 16 16"
									fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M1.33334 2.66666C1.33334 1.93028 1.9303 1.33333 2.66668 1.33333H10C10.7364 1.33333 11.3333 1.93028 11.3333 2.66666V3.33333H13.3333C14.0697 3.33333 14.6667 3.93028 14.6667 4.66666V13.3333C14.6667 14.0697 14.0697 14.6667 13.3333 14.6667H2.66668C1.9303 14.6667 1.33334 14.0697 1.33334 13.3333V2.66666ZM10 2.66666V3.33333H2.66668V2.66666H10ZM2.66668 13.3333V4.66666H4.66668V13.3333H2.66668ZM6.00001 13.3333H13.3333V4.66666H6.00001V13.3333Z">
									</path>
								</svg>
								<span class="mr-3 ms-2"><?= $materi->total_module;?> Modul</span>
							</div>

							<div class="course-card__info-item">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
									class="course-card__icon text-gray-500" width="16" height="16">
									<path fill-rule="evenodd"
										d="M5 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM4 5a1 1 0 112 0 1 1 0 01-2 0zM11 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM10 5a1 1 0 112 0 1 1 0 01-2 0zM8 9.558a3.667 3.667 0 00-6.667 2.109V14c0 .368.299.667.667.667h12a.667.667 0 00.667-.667v-2.333A3.667 3.667 0 008 9.558zm-.667 3.775v-1.668a2.333 2.333 0 00-4.666.002v1.666h4.666zm1.334-1.668v1.668h4.666v-1.666a2.333 2.333 0 00-4.666-.002z"
										clip-rule="evenodd"></path>
								</svg>
								<span class="mr-3 ms-2"><?= $materi->peserta;?> Peserta Terdaftar</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-3">
					<div class="card border p-3">
						<?php if($materi->type == 0):?>
						<?php if($cek_materi):?>
						<a href="<?= site_url('pengguna/materi/kerjakan-soal/'.$materi->id);?>"
							class="btn btn-dark w-100">Belajar
							sekarang</a>
						<?php else:?>
						<a href="<?= site_url('home/ambilMateri/'.$materi->id);?>" class="btn btn-dark w-100">Ambil
							kelas</a>
						<?php endif;?>
						<?php else:?>
						<a href="#module-materi" class="btn btn-dark w-100">Pelajari materi</a>
						<?php endif;?>
						<hr>
						<a href="#testimoni-siswa" class="btn btn-outline-secondary w-100 mb-3">Testimoni Siswa</a>
						<a href="#faq" class="btn btn-outline-secondary w-100">FAQ</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="course-facilities">
	<div class="container">
		<div class="d-flex justify-content-between mb-3">
			<h5 class="font-weight-bold">Apa yang akan Anda dapatkan</h5>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 mb-3 mb-sm-0">
				<!-- Card -->
				<div class="card border shadow-none h-100 rounded-2">
					<div class="card-body p-3">
						<!-- Icon Blocks -->
						<div class="d-flex" data-aos="fade-up">
							<div class="flex-shrink-0">
								<span class="svg-icon svg-icon-sm text-primary" data-bs-toggle="tooltip"
									data-bs-placement="top" title="" data-bs-original-title="fil/fil024.svg">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
											d="M4.85714 1H11.7364C12.0911 1 12.4343 1.12568 12.7051 1.35474L17.4687 5.38394C17.8057 5.66895 18 6.08788 18 6.5292V19.0833C18 20.8739 17.9796 21 16.1429 21H4.85714C3.02045 21 3 20.8739 3 19.0833V2.91667C3 1.12612 3.02045 1 4.85714 1ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z"
											fill="#035A4B"></path>
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M6.85714 3H14.7364C15.0911 3 15.4343 3.12568 15.7051 3.35474L20.4687 7.38394C20.8057 7.66895 21 8.08788 21 8.5292V21.0833C21 22.8739 20.9796 23 19.1429 23H6.85714C5.02045 23 5 22.8739 5 21.0833V4.91667C5 3.12612 5.02045 3 6.85714 3ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z"
											fill="#035A4B"></path>
									</svg>

								</span>
							</div>
							<div class="flex-grow-1 ms-4">
								<h4>Sertifikat</h4>
								<p>Dapatkan sertifikat standar industri setelah menyelesaikan kelas ini.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Card -->
			</div>
			<div class="col-sm-4 mb-3 mb-sm-0">
				<!-- Card -->
				<div class="card border shadow-none h-100 rounded-2">
					<div class="card-body p-3">
						<!-- Icon Blocks -->
						<div class="d-flex" data-aos="fade-up">
							<div class="flex-shrink-0">
								<span class="svg-icon svg-icon-sm text-primary" data-bs-toggle="tooltip"
									data-bs-placement="top" title="" data-bs-original-title="txt/txt010.svg"
									aria-describedby="tooltip113248">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3"
											d="M17.1 10.5H11.1C10.5 10.5 10.1 10.1 10.1 9.5V8.5C10.1 7.9 10.5 7.5 11.1 7.5H17.1C17.7 7.5 18.1 7.9 18.1 8.5V9.5C18.1 10.1 17.7 10.5 17.1 10.5ZM22.1 4.5V3.5C22.1 2.9 21.7 2.5 21.1 2.5H11.1C10.5 2.5 10.1 2.9 10.1 3.5V4.5C10.1 5.1 10.5 5.5 11.1 5.5H21.1C21.7 5.5 22.1 5.1 22.1 4.5ZM22.1 15.5V14.5C22.1 13.9 21.7 13.5 21.1 13.5H11.1C10.5 13.5 10.1 13.9 10.1 14.5V15.5C10.1 16.1 10.5 16.5 11.1 16.5H21.1C21.7 16.5 22.1 16.1 22.1 15.5ZM18.1 20.5V19.5C18.1 18.9 17.7 18.5 17.1 18.5H11.1C10.5 18.5 10.1 18.9 10.1 19.5V20.5C10.1 21.1 10.5 21.5 11.1 21.5H17.1C17.7 21.5 18.1 21.1 18.1 20.5Z"
											fill="#035A4B"></path>
										<path
											d="M5.60001 10.5C5.30001 10.5 5.00002 10.4 4.80002 10.2C4.60002 9.99995 4.5 9.70005 4.5 9.30005V5.40002C3.7 5.90002 3.40001 6 3.10001 6C2.90001 6 2.6 5.89995 2.5 5.69995C2.3 5.49995 2.20001 5.3 2.20001 5C2.20001 4.6 2.4 4.40005 2.5 4.30005C2.6 4.20005 2.80001 4.10002 3.10001 3.90002C3.50001 3.70002 3.8 3.50005 4 3.30005C4.2 3.10005 4.40001 2.89995 4.60001 2.69995C4.80001 2.39995 4.9 2.19995 5 2.19995C5.1 2.09995 5.30001 2 5.60001 2C5.90001 2 6.10002 2.10002 6.30002 2.40002C6.50002 2.60002 6.5 2.89995 6.5 3.19995V9C6.6 10.4 5.90001 10.5 5.60001 10.5ZM7.10001 21.5C7.40001 21.5 7.69999 21.4 7.89999 21.2C8.09999 21 8.20001 20.8 8.20001 20.5C8.20001 20.2 8.10002 19.9 7.80002 19.8C7.60002 19.6 7.3 19.6 7 19.6H5.10001C5.30001 19.4 5.50002 19.2 5.80002 19C6.30002 18.6 6.69999 18.3 6.89999 18.1C7.09999 17.9 7.40001 17.6 7.60001 17.2C7.80001 16.8 8 16.3 8 15.9C8 15.6 7.90002 15.3 7.80002 15C7.70002 14.7 7.50002 14.5 7.30002 14.2C7.10002 14 6.80001 13.8 6.60001 13.7C6.20001 13.5 5.70001 13.4 5.10001 13.4C4.60001 13.4 4.20002 13.5 3.80002 13.6C3.40002 13.7 3.09999 13.9 2.89999 14.2C2.69999 14.4 2.50002 14.7 2.30002 15C2.20002 15.3 2.10001 15.6 2.10001 15.9C2.10001 16.3 2.29999 16.5 2.39999 16.6C2.59999 16.8 2.80001 16.9 3.10001 16.9C3.50001 16.9 3.70002 16.7 3.80002 16.6C3.90002 16.4 4.00001 16.2 4.10001 16C4.20001 15.8 4.20001 15.7 4.20001 15.7C4.40001 15.4 4.59999 15.3 4.89999 15.3C4.99999 15.3 5.20002 15.3 5.30002 15.4C5.40002 15.5 5.50001 15.5 5.60001 15.7C5.70001 15.8 5.70001 15.9 5.70001 16.1C5.70001 16.2 5.70001 16.4 5.60001 16.6C5.50001 16.8 5.40001 16.9 5.20001 17.1C5.00001 17.3 4.80001 17.5 4.60001 17.6C4.40001 17.7 4.20002 17.9 3.80002 18.3C3.40002 18.6 3.00001 19 2.60001 19.5C2.50001 19.6 2.30001 19.8 2.20001 20.1C2.10001 20.4 2 20.6 2 20.7C2 21 2.10002 21.3 2.30002 21.5C2.50002 21.7 2.80001 21.8 3.20001 21.8H7.10001V21.5Z"
											fill="#035A4B"></path>
									</svg>

								</span>
							</div>
							<div class="flex-grow-1 ms-4">
								<h4>Modul pembelajaran</h4>
								<p>Materi bacaan elektronik disajikan dengan bahasa yang mudah dipahami.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Card -->
			</div>
			<div class="col-sm-4 mb-3 mb-sm-0">
				<!-- Card -->
				<div class="card border shadow-none h-100 rounded-2">
					<div class="card-body p-3">
						<!-- Icon Blocks -->
						<div class="d-flex" data-aos="fade-up">
							<div class="flex-shrink-0">
								<span class="svg-icon svg-icon-sm text-primary" data-bs-toggle="tooltip"
									data-bs-placement="top" title="" data-bs-original-title="art/art008.svg"
									aria-describedby="tooltip478749">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3"
											d="M16.163 17.55C17.0515 16.6633 17.6785 15.5488 17.975 14.329C18.2389 13.1884 18.8119 12.1425 19.631 11.306V11.306L12.694 4.36902C11.8574 5.18796 10.8115 5.76088 9.67099 6.02502C8.15617 6.3947 6.81277 7.27001 5.86261 8.50635C4.91245 9.74268 4.41238 11.266 4.44501 12.825C4.46196 13.6211 4.31769 14.4125 4.0209 15.1515C3.72412 15.8905 3.28092 16.5617 2.71799 17.125L2.28699 17.556C2.10306 17.7402 1.99976 17.9897 1.99976 18.25C1.99976 18.5103 2.10306 18.7598 2.28699 18.944L5.06201 21.719C5.24614 21.9029 5.49575 22.0062 5.75601 22.0062C6.01627 22.0062 6.26588 21.9029 6.45001 21.719L6.88101 21.288C7.44427 20.725 8.11556 20.2819 8.85452 19.9851C9.59349 19.6883 10.3848 19.5441 11.181 19.561C12.1042 19.58 13.0217 19.4114 13.878 19.0658C14.7343 18.7202 15.5116 18.2046 16.163 17.55V17.55Z"
											fill="#035A4B"></path>
										<path
											d="M19.631 11.306L12.694 4.36902L14.775 2.28699C14.9591 2.10306 15.2087 1.99976 15.469 1.99976C15.7293 1.99976 15.9789 2.10306 16.163 2.28699L21.713 7.83704C21.8969 8.02117 22.0002 8.27075 22.0002 8.53101C22.0002 8.79126 21.8969 9.04085 21.713 9.22498L19.631 11.306ZM13.041 10.959C12.6427 10.5604 12.1194 10.3112 11.5589 10.2532C10.9985 10.1952 10.4352 10.332 9.96375 10.6405C9.4923 10.949 9.14148 11.4105 8.97034 11.9473C8.79919 12.4841 8.81813 13.0635 9.02399 13.588L2.98099 19.631L4.36899 21.019L10.412 14.975C10.9364 15.1816 11.5161 15.2011 12.0533 15.0303C12.5904 14.8594 13.0523 14.5086 13.361 14.037C13.6697 13.5654 13.8065 13.0018 13.7482 12.4412C13.6899 11.8805 13.4401 11.357 13.041 10.959V10.959Z"
											fill="#035A4B"></path>
									</svg>

								</span>
							</div>
							<div class="flex-grow-1 ms-4">
								<h4>Ujian</h4>
								<p>Validasi pengetahuan Anda dengan mengerjakan soal-soal ujian.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Card -->
			</div>
		</div>
	</div>
</div>

<?php if($materi->type == 1):?>
<div id="module-materi" class="course-facilities pt-0">
	<div class="container">
		<!-- Accordion -->
		<div class="border-top pt-7">
			<div class="row mb-4">
				<div class="col-8">
					<h3 class="mb-0">Course content</h3>
				</div>
				<!-- End Col -->

				<div class="col-4 text-end">
					<div class="row">
						<div class="col-lg-6">
							<span class="small">186 lectures</span>
						</div>
						<!-- End Col -->
					</div>
					<!-- End Row -->
				</div>
				<!-- End Col -->
			</div>
			<!-- End Row -->

			<!-- Accordion -->
			<div class="accordion accordion-btn-icon-start">
				<!-- Accordion Item -->
				<div class="accordion-item">
					<div class="accordion-header" id="headingBasicsOne">
						<a class="accordion-button" role="button" data-bs-toggle="collapse"
							data-bs-target="#accordionCourseOne" aria-expanded="true"
							aria-controls="accordionCourseOne">
							<div class="flex-grow-1 ps-3">
								<div class="row">
									<div class="col-8">
										Course overview
									</div>
									<!-- End Col -->

									<div class="col-4 text-end">
										<div class="row">
											<div class="col-lg-6">
												<span class="small text-muted fw-normal">5 lectures</span>
											</div>
											<!-- End Col -->

											<div class="col-lg-6">
												<span class="small text-muted fw-normal">15:32</span>
											</div>
											<!-- End Col -->
										</div>
										<!-- End Row -->
									</div>
									<!-- End Col -->
								</div>
								<!-- End Row -->
							</div>
						</a>
					</div>
					<div id="accordionCourseOne" class="accordion-collapse collapse show"
						aria-labelledby="headingBasicsOne">
						<div class="accordion-body">
							<!-- List Group -->
							<div class="list-group list-group-flush list-group-no-gutters">
								<!-- Item -->
								<div class="list-group-item">
									<div class="row">
										<div class="col-8">
											<a class="d-flex" href="#">
												<div class="flex-shrink-0">
													<i class="bi-play-circle-fill small"></i>
												</div>
												<div class="flex-grow-1 ms-2">
													<span class="small">Course introduction</span>
												</div>
											</a>
										</div>
										<!-- End Col -->

										<div class="col-4 text-end">
											<div class="row">
												<div class="col-lg-6">
													<a class="small" href="#">Preview</a>
												</div>
												<!-- End Col -->

												<div class="col-lg-6">
													<span class="text-primary small">06:39</span>
												</div>
												<!-- End Col -->
											</div>
											<!-- End Row -->
										</div>
										<!-- End Col -->
									</div>
								</div>
								<!-- End Item -->

								<!-- Item -->
								<div class="list-group-item">
									<div class="row">
										<div class="col-8">
											<a class="d-flex" href="#">
												<div class="flex-shrink-0">
													<i class="bi-play-circle-fill small"></i>
												</div>
												<div class="flex-grow-1 ms-2">
													<span class="small">Course curriculum overview</span>
												</div>
											</a>
										</div>
										<!-- End Col -->

										<div class="col-4 text-end">
											<div class="row">
												<div class="col-lg-6">
													<a class="small" href="#">Preview</a>
												</div>
												<!-- End Col -->

												<div class="col-lg-6">
													<span class="text-primary small">04:00</span>
												</div>
												<!-- End Col -->
											</div>
											<!-- End Row -->
										</div>
										<!-- End Col -->
									</div>
								</div>
								<!-- End Item -->

								<!-- Item -->
								<div class="list-group-item">
									<div class="row">
										<div class="col-8">
											<a class="d-flex" href="#">
												<div class="flex-shrink-0">
													<i class="bi-play-circle-fill small"></i>
												</div>
												<div class="flex-grow-1 ms-2">
													<span class="small">Python 2 versus Python 3</span>
												</div>
											</a>
										</div>
										<!-- End Col -->

										<div class="col-4 text-end">
											<div class="row">
												<div class="col-lg-6">
													<a class="small" href="#">Preview</a>
												</div>
												<!-- End Col -->

												<div class="col-lg-6">
													<span class="text-primary small">06:39</span>
												</div>
												<!-- End Col -->
											</div>
											<!-- End Row -->
										</div>
										<!-- End Col -->
									</div>
								</div>
								<!-- End Item -->
							</div>
							<!-- End List Group -->
						</div>
					</div>
				</div>
				<!-- End Accordion Item -->

				<!-- Accordion Item -->
				<div class="accordion-item">
					<div class="accordion-header" id="headingBasicsTwo">
						<a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
							data-bs-target="#accordionCourseTwo" aria-expanded="false"
							aria-controls="accordionCourseTwo">
							<div class="ps-3">Python setup</div>
						</a>
					</div>
					<div id="accordionCourseTwo" class="accordion-collapse collapse" aria-labelledby="headingBasicsTwo">
						<div class="accordion-body">
							<!-- List Group -->
							<div class="list-group list-group-flush list-group-no-gutters">
								<!-- Item -->
								<div class="list-group-item">
									<div class="row">
										<div class="col-8">
											<a class="d-flex" href="#">
												<div class="flex-shrink-0">
													<i class="bi-play-circle-fill small"></i>
												</div>
												<div class="flex-grow-1 ms-2">
													<span class="small">Course line courses</span>
												</div>
											</a>
										</div>
										<!-- End Col -->

										<div class="col-4 text-end">
											<div class="row">
												<div class="col-lg-6">
													<a class="small" href="#">Preview</a>
												</div>
												<!-- End Col -->

												<div class="col-lg-6">
													<span class="text-primary small">08:15</span>
												</div>
												<!-- End Col -->
											</div>
											<!-- End Row -->
										</div>
										<!-- End Col -->
									</div>
								</div>
								<!-- End Item -->

								<!-- Item -->
								<div class="list-group-item">
									<div class="row">
										<div class="col-8">
											<a class="d-flex" href="#">
												<div class="flex-shrink-0">
													<i class="bi-play-circle-fill small"></i>
												</div>
												<div class="flex-grow-1 ms-2">
													<span class="small">Installing Python (Step by step)</span>
												</div>
											</a>
										</div>
										<!-- End Col -->

										<div class="col-4 text-end">
											<div class="row">
												<div class="col-lg-6">
													<a class="small" href="#">Preview</a>
												</div>
												<!-- End Col -->

												<div class="col-lg-6">
													<span class="text-primary small">08:18</span>
												</div>
												<!-- End Col -->
											</div>
											<!-- End Row -->
										</div>
										<!-- End Col -->
									</div>
								</div>
								<!-- End Item -->

								<!-- Item -->
								<div class="list-group-item">
									<div class="row">
										<div class="col-8">
											<a class="d-flex" href="#">
												<div class="flex-shrink-0">
													<i class="bi-play-circle-fill small"></i>
												</div>
												<div class="flex-grow-1 ms-2">
													<span class="small">Running Python code</span>
												</div>
											</a>
										</div>
										<!-- End Col -->

										<div class="col-4 text-end">
											<div class="row">
												<div class="col-lg-6">
													<a class="small" href="#">Preview</a>
												</div>
												<!-- End Col -->

												<div class="col-lg-6">
													<span class="text-primary small">17:50</span>
												</div>
												<!-- End Col -->
											</div>
											<!-- End Row -->
										</div>
										<!-- End Col -->
									</div>
								</div>
								<!-- End Item -->

								<!-- Item -->
								<div class="list-group-item text-muted">
									<div class="row">
										<div class="col-8">
											<div class="d-flex">
												<div class="flex-shrink-0">
													<i class="bi-play-circle-fill small"></i>
												</div>
												<div class="flex-grow-1 ms-2">
													<span class="small">Getting the notebooks and the course
														material</span>
												</div>
											</div>
										</div>
										<!-- End Col -->

										<div class="col-4 text-end">
											<div class="row">
												<div class="col-lg-6">
												</div>
												<!-- End Col -->

												<div class="col-lg-6">
													<span class="small">02:22</span>
												</div>
												<!-- End Col -->
											</div>
											<!-- End Row -->
										</div>
										<!-- End Col -->
									</div>
								</div>
								<!-- End Item -->

								<!-- Item -->
								<div class="list-group-item text-muted">
									<div class="row">
										<div class="col-8">
											<div class="d-flex">
												<div class="flex-shrink-0">
													<i class="bi-play-circle-fill small"></i>
												</div>
												<div class="flex-grow-1 ms-2">
													<span class="small">Git and Github overview (Optional)</span>
												</div>
											</div>
										</div>
										<!-- End Col -->

										<div class="col-4 text-end">
											<div class="row">
												<div class="col-lg-6">
												</div>
												<!-- End Col -->

												<div class="col-lg-6">
													<span class="small">02:49</span>
												</div>
												<!-- End Col -->
											</div>
											<!-- End Row -->
										</div>
										<!-- End Col -->
									</div>
								</div>
								<!-- End Item -->
							</div>
							<!-- End List Group -->
						</div>
					</div>
				</div>
				<!-- End Accordion Item -->
			</div>
			<!-- End Accordion -->
		</div>
		<!-- End Accordion -->
	</div>
</div>
<?php endif;?>

<!-- Testimonials -->
<div id="testimoni-siswa" class="container content-space-1">
	<!-- Heading -->
	<div class="w-lg-50 mb-5 mb-md-5">
		<h2>Testimoni Siswa</h2>
	</div>
	<!-- End Heading -->

	<div class="row">
		<?php if(!empty($materi->testimoni)):?>
		<?php foreach($materi->testimoni as $key => $val):?>
		<div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
			<!-- Card -->
			<div class="card h-100">
				<div class="card-body">
					<!-- Rating -->
					<div class="d-flex gap-1 mb-2">
						<?php if($val->rate == 0):?>
						<i class="bi bi-star"></i>
						<i class="bi bi-star"></i>
						<i class="bi bi-star"></i>
						<i class="bi bi-star"></i>
						<i class="bi bi-star"></i>
						<?php else:?>
						<?php for($i = 0; $i < $val->rate; $i++):?>
						<i class="bi bi-star-fill text-warning"></i>
						<?php endfor;?>
						<?php endif;?>
					</div>
					<!-- End Rating -->

					<div class="mb-auto">
						<p class="card-text"><?= $val->komentar;?></p>
					</div>
				</div>

				<div class="card-footer pt-0">
					<!-- Media -->
					<div class="d-flex align-items-center">
						<div class="flex-shrink-0">
							<img class="avatar avatar-circle" src="<?= base_url();?><?= $val->photo;?>"
								alt="Image Description">
						</div>
						<div class="flex-grow-1 ms-3">
							<h5 class="card-title mb-0"><?= $val->name;?></h5>
							<p class="card-text small"><?= $val->jobs;?></p>
						</div>
					</div>
					<!-- End Media -->
				</div>
			</div>
			<!-- End Card -->
		</div>
		<?php endforeach;?>
		<?php else:?>
		<span class="divider-center">Belum ada testimoni</span>
		<?php endif;?>
		<!-- End Col -->
	</div>
	<!-- End Row -->
</div>
<!-- End Testimonials -->
<!-- FAQ -->
<div id="faq" class="container content-space-1">
	<!-- Heading -->
	<div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
		<h2>Punya pertanyaan?</h2>
	</div>
	<!-- End Heading -->

	<div class="w-lg-65 mx-lg-auto">
		<!-- Accordion -->
		<div class="accordion accordion-flush accordion-lg" id="accordionFAQ">
			<!-- Accordion Item -->
			<div class="accordion-item border px-3 mb-4 rounded">
				<div class="accordion-header" id="headingCuriousOne">
					<a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
						data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						Bagaimana Cara Belajar di <?= $web_title;?>?
					</a>
				</div>
				<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingCuriousOne"
					data-bs-parent="#accordionFAQ">
					<div class="accordion-body">
						You can purchase the themes on Bootstrap Themes via any major credit/debit card (via Stripe) or
						with your Paypal account. We don't support cryptocurrencies or invoicing at this time.
					</div>
				</div>
			</div>
			<!-- End Accordion Item -->

			<!-- Accordion Item -->
			<div class="accordion-item border px-3 mb-4 rounded">
				<div class="accordion-header" id="headingCuriousTwo">
					<a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
						data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Cara Memberikan Testimoni Kelulusan Kelas
					</a>
				</div>
				<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingCuriousTwo"
					data-bs-parent="#accordionFAQ">
					<div class="accordion-body">
						If you'd like a refund please reach out to us at <a href="#">themes@getbootstrap.com</a>. If you
						need technical help with the theme before a refund please reach out to the seller first and they
						can get in touch with us if they're unable to resolve the issue.
					</div>
				</div>
			</div>
			<!-- End Accordion Item -->

			<!-- Accordion Item -->
			<div class="accordion-item border px-3 mb-4 rounded">
				<div class="accordion-header" id="headingCuriousThree">
					<a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
						data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						Apa Keuntungan Belajar di <?= $web_title;?>?
					</a>
				</div>
				<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingCuriousThree"
					data-bs-parent="#accordionFAQ">
					<div class="accordion-body">
						You'll receive an email from Bootstrap themes once your purchase is complete.
					</div>
				</div>
			</div>
			<!-- End Accordion Item -->
		</div>
		<!-- End Accordion -->
	</div>
</div>
<!-- End FAQ -->
