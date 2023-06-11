		<!-- Hero -->
		<div class="gradient-y-sm-primary position-relative zi-2 overflow-hidden">
			<div class="container position-relative content-space-t-3 content-space-t-lg-4 content-space-b-2">
				<!-- Heading -->
				<div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
					<h3 class="display-5 mb-3">Materi kami</h3>
					<p class="lead">Pelajari materi dan kerjakan soal latihan dengan mudah</p>
				</div>
				<!-- End Title & Description -->

				<!-- Swiper Slider -->

				<div class="row mb-5 mb-md-0">
					<?php if(!empty($materi_soal)):?>
					<?php foreach ($materi_soal as $key => $val):?>
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
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star"></i>
										<i class="bi bi-star"></i>
										<i class="bi bi-star"></i>
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
										<span class="mr-3 ms-2"><?= $val->total_peserta;?> Peserta Terdaftar</span>
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
