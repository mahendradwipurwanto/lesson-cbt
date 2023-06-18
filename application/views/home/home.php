		<!-- Hero -->
		<div class="gradient-y-sm-primary position-relative zi-2 overflow-hidden">
			<div class="container position-relative content-space-t-3 content-space-t-lg-4 content-space-b-2">
				<!-- Heading -->
				<div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
					<h1 class="display-4 mb-3">Soalkupedia</h1>
					<p class="lead">Pelajari materi dan kerjakan soal latihan dengan mudah</p>
				</div>
				<!-- End Title & Description -->

				<div class="row mb-5 mb-md-0 d-none d-sm-none d-md-flex">
					<?php if(!empty($materi_overview)):?>
					<?php foreach ($materi_overview as $key => $val):?>
					<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<div class="card-course shadow-sm cursor"
							onclick="location.href = '<?= site_url('materi/'.$val->id);?>';">
							<div class="card-content">
								<div class="image-box">
									<img src="<?= base_url();?><?= $val->poster;?>" alt=""
										onerror="this.onerror=null;this.src='<?= base_url();?><?= 'assets-frontend/img/placeholder-soal.jpg'?>';">
								</div>
								<div class="card-course-content">
									<span class="tag"><?= $val->categories;?></span>
									<h2 class="card-course-title"><?= $val->judul;?></h2>
									<div class="rating">
										<?php if($val->rating['rating'] == 0):?>
										<i class="bi bi-star"></i>
										<i class="bi bi-star"></i>
										<i class="bi bi-star"></i>
										<i class="bi bi-star"></i>
										<i class="bi bi-star"></i>
										<?php else:?>
										<?php for($i = 0; $i < $val->rating['fullStars']; $i++):?>
										<i class="bi bi-star-fill text-warning"></i>
										<?php endfor;?>
										<?php if($val->rating['halfStar'] >= 0.5):?>
										<i class="bi bi-star-half text-warning"></i>
										<?php endif;?>
										<?php endif;?>
									</div>
									<div class="price-box">
										<p><?= $val->harga;?></p>
									</div>
									<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
										class="course-card__icon text-gray-400" width="16" height="16">
										<rect width="2.667" height="4.667" x="2.667" y="8" rx="1" class="text-blue-400"
											fill="currentColor">
										</rect>
										<rect width="2.667" height="6.667" x="6.667" y="6" rx="1" class="text-gray-200"
											fill="currentColor">
										</rect>
										<rect width="2.667" height="9.333" x="10.667" y="3.333" rx="1" class="text-gray-200"
											fill="currentColor"></rect>
									</svg>
									<span>Level - <?= $val->level;?></span>
								</div>
							</div>
							<div class="card-description">
								<small
									class="sub-title"><?= $val->deskripsi == "" ? "-" : substr($val->deskripsi, 0, 50);?></small>
								<div class="d-flex justify-content-between">
									<div class="course-card__info-item">
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
											class="course-card__icon text-gray-500" width="16" height="16">
											<path fill-rule="evenodd"
												d="M5 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM4 5a1 1 0 112 0 1 1 0 01-2 0zM11 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM10 5a1 1 0 112 0 1 1 0 01-2 0zM8 9.558a3.667 3.667 0 00-6.667 2.109V14c0 .368.299.667.667.667h12a.667.667 0 00.667-.667v-2.333A3.667 3.667 0 008 9.558zm-.667 3.775v-1.668a2.333 2.333 0 00-4.666.002v1.666h4.666zm1.334-1.668v1.668h4.666v-1.666a2.333 2.333 0 00-4.666-.002z"
												clip-rule="evenodd"></path>
										</svg>
										<span class="mr-3 ms-2"><?= $val->peserta;?> Peserta Terdaftar</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach;?>
					<?php endif;?>
					<!-- End Col -->
				</div>

				<!-- SVG Shape -->
				<figure class="position-absolute zi-n1" style="top: -35rem; left: 50rem; width: 62rem; height: 62rem;">
					<svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 260 260">
						<circle fill="#e7eaf3" opacity=".7" cx="130" cy="130" r="130" />
					</svg>
				</figure>
				<!-- End SVG Shape -->

				<!-- SVG Shape -->
				<figure class="position-absolute zi-n1" style="top: 15rem; left: 70rem; width: 20rem; height: 20rem;">
					<img class="img-fluid" src="<?= base_url();?>assets-frontend/svg/components/circled-stripe.svg"
						alt="Image Description">
				</figure>
				<!-- End SVG Shape -->

			</div>

			<!-- Shape -->
			<div class="shape shape-bottom">
				<svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0 500H3000V0L0 500Z" fill="#fff" />
				</svg>
			</div>
			<!-- End Shape -->
		</div>
		<!-- End Hero -->
		<!-- Clients -->
		<div class="border-bottom">
			<div class="container pb-3 pb-lg-5">
				<div class="w-lg-75 mx-lg-auto">
					<div class="row">
					</div>
					<!-- End Row -->
				</div>
			</div>
		</div>
		<!-- End Clients -->
		<!-- Card Grid -->
		<div class="container content-space-2">
			<div class="row justify-content-lg-between align-items-center" style="background: #f4f4f5; padding: 10px">
				<div class="col-sm-12 col-lg-5 mb-9 mb-lg-0">
					<img class="avatar avatar-xxl avatar-4x3 mb-4 d-none d-sm-none d-md-block"
						src="<?= base_url();?>assets-frontend/svg/illustrations/app-wreath.svg" alt="SVG">

					<!-- Heading -->
					<div class="mb-5">
						<h2>Bank soal untuk kamu</h2>
						<p>Dengan layanan terpercaya dan berbagai pilihan soal berkualitas, siap membantu meraih prestasi
							terbaikmu. Tingkatkan
							kemampuanmu dalam menghadapi ujian dan tes dengan akses mudah ke ribuan soal latihan.</p>
					</div>
					<!-- End Heading -->

					<a class="btn btn-primary btn-transition" href="<?= site_url('materi');?>">Lihat semua soal</a>
				</div>
				<!-- End Col -->

				<div class="col-sm-12 col-lg-6">
					<div class="row mb-5 mb-md-0">
						<div class="owl-carousel">
							<?php if(!empty($materi_soal)):?>
							<?php foreach ($materi_soal as $key => $val):?>
							<div class="col-sm-12 col-lg-12 mb-4 mb-lg-0">
								<div class="card-course shadow-sm cursor"
									onclick="location.href = '<?= site_url('materi/'.$val->id);?>';">
									<div class="card-content">
										<div class="image-box">
											<img src="<?= base_url();?><?= $val->poster;?>" alt=""
												onerror="this.onerror=null;this.src='<?= base_url();?><?= 'assets-frontend/img/placeholder-soal.jpg'?>';">
										</div>
										<div class="card-course-content">
											<span class="tag"><?= $val->categories;?></span>
											<h2 class="card-course-title"><?= $val->judul;?></h2>
											<div class="rating">
												<?php if($val->rating['rating'] == 0):?>
												<i class="bi bi-star"></i>
												<i class="bi bi-star"></i>
												<i class="bi bi-star"></i>
												<i class="bi bi-star"></i>
												<i class="bi bi-star"></i>
												<?php else:?>
												<?php for($i = 0; $i < $val->rating['fullStars']; $i++):?>
												<i class="bi bi-star-fill text-warning"></i>
												<?php endfor;?>
												<?php if($val->rating['halfStar'] >= 0.5):?>
												<i class="bi bi-star-half text-warning"></i>
												<?php endif;?>
												<?php endif;?>
											</div>
											<div class="price-box">
												<p><?= $val->harga;?></p>
											</div>
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
												class="course-card__icon text-gray-400" width="16" height="16">
												<rect width="2.667" height="4.667" x="2.667" y="8" rx="1"
													class="text-blue-400" fill="currentColor">
												</rect>
												<rect width="2.667" height="6.667" x="6.667" y="6" rx="1"
													class="text-gray-200" fill="currentColor">
												</rect>
												<rect width="2.667" height="9.333" x="10.667" y="3.333" rx="1"
													class="text-gray-200" fill="currentColor"></rect>
											</svg>
											<span>Level - <?= $val->level;?></span>
										</div>
									</div>
									<div class="card-description">
										<small
											class="sub-title"><?= $val->deskripsi == "" ? "-" : substr($val->deskripsi, 0, 50);?></small>
										<div class="d-flex justify-content-between">
											<div class="course-card__info-item">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
													viewBox="0 0 16 16" class="course-card__icon text-gray-500" width="16"
													height="16">
													<path fill-rule="evenodd"
														d="M5 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM4 5a1 1 0 112 0 1 1 0 01-2 0zM11 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM10 5a1 1 0 112 0 1 1 0 01-2 0zM8 9.558a3.667 3.667 0 00-6.667 2.109V14c0 .368.299.667.667.667h12a.667.667 0 00.667-.667v-2.333A3.667 3.667 0 008 9.558zm-.667 3.775v-1.668a2.333 2.333 0 00-4.666.002v1.666h4.666zm1.334-1.668v1.668h4.666v-1.666a2.333 2.333 0 00-4.666-.002z"
														clip-rule="evenodd"></path>
												</svg>
												<span class="mr-3 ms-2"><?= $val->peserta;?> Peserta Terdaftar</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach;?>
							<?php endif;?>
						</div>
					</div>
					<!-- End Row -->
				</div>
				<!-- End Col -->
			</div>
			<!-- End Row -->
		</div>
		<!-- End Card Grid -->

		<!-- Icon Blocks -->
		<div class="overflow-hidden">
			<div class="container content-space-t-2 content-space-t-lg-3 content-space-b-1 content-space-b-lg-3">
				<!-- Heading -->
				<div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
					<h2>Belajar Tanpa Batas!</h2>
					<p>Sekolah di mana saja, kapan saja dengan materi pembelajaran dan soal online kami!</p>
				</div>
				<!-- End Heading -->

				<div class="row">
					<div class="col-lg-4 d-none d-lg-block">
						<!-- Card -->
						<div class="position-relative pe-lg-4">
							<a class="card card-transition shadow-none bg-img-start" href="#"
								style="background-image: url(<?= base_url();?>assets-frontend/img/400x500/img26.jpg); min-height: 27rem;">
								<div class="card-body">
									<h4 class="card-title">Mengapa SOALKUPEDIA</h4>
									<p class="card-text text-body">Mengapa harus memilih layanan dari Soalkupedia</p>
								</div>
							</a>

							<!-- SVG Shape -->
							<div class="position-absolute bottom-0 start-0 zi-n1 mb-n7 ms-n7" style="width: 12rem;">
								<img class="w-100" src="<?= base_url();?>assets-frontend/svg/components/dots-lg.svg"
									alt="SVG">
							</div>
							<!-- End SVG Shape -->
						</div>
						<!-- End Card -->
					</div>
					<!-- End Col -->

					<div class="col-lg-8">
						<div class="row">
							<div class="col-sm-6 mb-3 mb-sm-7">
								<!-- Icon Blocks -->
								<div class="pe-lg-6">
									<span class="svg-icon text-primary mb-4">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3"
												d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128V12.9128Z"
												fill="#035A4B" />
											<path
												d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607V10.9128Z"
												fill="#035A4B" />
										</svg>

									</span>

									<h3 class="h4">Materi Pembelajaran yang Lengkap</h3>
									<p>Materi yang disediakan juga disesuaikan dengan kurikulum yang berlaku, sehingga anda
										dapat belajar dengan
										lebih efektif dan efisien.</p>
								</div>
								<!-- End Icon Blocks -->
							</div>

							<div class="col-sm-6 mb-3 mb-sm-7">
								<!-- Icon Blocks -->
								<div class="pe-lg-6">
									<span class="svg-icon text-primary mb-4">
										<svg width="20" height="21" viewBox="0 0 20 21" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3"
												d="M16 0.200012H4C1.8 0.200012 0 2.00001 0 4.20001V16.2C0 18.4 1.8 20.2 4 20.2H16C18.2 20.2 20 18.4 20 16.2V4.20001C20 2.00001 18.2 0.200012 16 0.200012ZM15 10.2C15 10.9 14.8 11.6 14.6 12.2H18V16.2C18 17.3 17.1 18.2 16 18.2H12V14.8C11.4 15.1 10.7 15.2 10 15.2C9.3 15.2 8.6 15 8 14.8V18.2H4C2.9 18.2 2 17.3 2 16.2V12.2H5.4C5.1 11.6 5 10.9 5 10.2C5 9.50001 5.2 8.80001 5.4 8.20001H2V4.20001C2 3.10001 2.9 2.20001 4 2.20001H8V5.60001C8.6 5.30001 9.3 5.20001 10 5.20001C10.7 5.20001 11.4 5.40001 12 5.60001V2.20001H16C17.1 2.20001 18 3.10001 18 4.20001V8.20001H14.6C14.8 8.80001 15 9.50001 15 10.2Z"
												fill="#035A4B" />
											<path
												d="M12 1.40002C15.4 2.20002 18 4.80003 18.8 8.20003H14.6C14.1 7.00003 13.2 6.10003 12 5.60003V1.40002V1.40002ZM5.40001 8.20003C5.90001 7.00003 6.80001 6.10003 8.00001 5.60003V1.40002C4.60001 2.20002 2.00001 4.80003 1.20001 8.20003H5.40001ZM14.6 12.2C14.1 13.4 13.2 14.3 12 14.8V19C15.4 18.2 18 15.6 18.8 12.2H14.6V12.2ZM8.00001 14.8C6.80001 14.3 5.90001 13.4 5.40001 12.2H1.20001C2.00001 15.6 4.60001 18.2 8.00001 19V14.8V14.8Z"
												fill="#035A4B" />
										</svg>

									</span>

									<h4>Soal Latihan yang Beragam</h4>
									<p>Soal-soal ini terdiri dari berbagai tingkat kesulitan, sehingga anda dapat menyesuaikan
										dengan kemampuan
										masing-masing.</p>
								</div>
								<!-- End Icon Blocks -->
							</div>

							<div class="col-sm-6 mb-3 mb-sm-0">
								<!-- Icon Blocks -->
								<div class="pe-lg-6">
									<span class="svg-icon text-primary mb-4">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725V8.725Z"
												fill="#035A4B" />
											<path opacity="0.3"
												d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
												fill="#035A4B" />
										</svg>

									</span>

									<h4>Pembelajaran yang Interaktif</h4>
									<p>Anda dapat mempelajari materi dengan cara yang lebih interaktif, seperti melalui video
										pembelajaran,
										gambar, dan animasi.</p>
								</div>
								<!-- End Icon Blocks -->
							</div>

							<div class="col-sm-6">
								<!-- Icon Blocks -->
								<div class="pe-lg-6">
									<span class="svg-icon text-primary mb-4">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M15 19.5229C15 20.265 15.9624 20.5564 16.374 19.9389L22.2227 11.166C22.5549 10.6676 22.1976 10 21.5986 10H17V4.47708C17 3.73503 16.0376 3.44363 15.626 4.06106L9.77735 12.834C9.44507 13.3324 9.80237 14 10.4014 14H15V19.5229Z"
												fill="#035A4B" />
											<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
												d="M3 6.5C3 5.67157 3.67157 5 4.5 5H9.5C10.3284 5 11 5.67157 11 6.5C11 7.32843 10.3284 8 9.5 8H4.5C3.67157 8 3 7.32843 3 6.5ZM3 18.5C3 17.6716 3.67157 17 4.5 17H9.5C10.3284 17 11 17.6716 11 18.5C11 19.3284 10.3284 20 9.5 20H4.5C3.67157 20 3 19.3284 3 18.5ZM2.5 11C1.67157 11 1 11.6716 1 12.5C1 13.3284 1.67157 14 2.5 14H6.5C7.32843 14 8 13.3284 8 12.5C8 11.6716 7.32843 11 6.5 11H2.5Z"
												fill="#035A4B" />
										</svg>

									</span>

									<h4>Akses Tanpa Batas</h4>
									<p>Anda dapat mengakses layanan ini kapan saja dan di mana saja, selama memiliki akses
										internet.</p>
								</div>
								<!-- End Icon Blocks -->
							</div>
						</div>
					</div>
					<!-- End Col -->
				</div>
				<!-- End Row -->
			</div>
		</div>
		<!-- End Icon Blocks -->
