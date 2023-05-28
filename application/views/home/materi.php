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
				<div class="row">
					<?php if(!empty($materi)):?>
					<?php foreach ($materi as $key => $val):?>
					<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- Card -->
						<div class="card card-sm h-100">
							<div class="p-2 center-cropped">
								<img class="card-img" src="<?= base_url();?><?= $val->poster;?>"
									onerror="this.onerror=null;this.src='<?= base_url();?><?= 'assets-frontend/img/placeholder.jpg'?>';"
									alt="Image Description">
							</div>

							<div class="card-body">
								<h4 class="card-title"><?= $val->judul;?></h4>
								<p class="card-text"><?= $val->deskripsi == "" ? "-" : substr($val->deskripsi, 0, 50);?></p>
							</div>

							<a class="card-footer card-link border-top" href="<?= site_url('materi/'.$val->id);?>">Lebih
								lanjut <i class="bi-chevron-right small ms-1"></i></a>
						</div>
						<!-- End Card -->
					</div>
					<?php endforeach;?>
					<?php endif;?>
					<!-- End Col -->
				</div>
				<!-- ENd Swiper Slider -->

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
