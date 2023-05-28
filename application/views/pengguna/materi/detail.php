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
	<div class="col-md-7 mb-7 mb-md-0">
		<div class="pe-md-4">
			<div class="card-pinned">
				<!-- Swiper Main Slider -->
				<div class="js-swiper-shop-product swiper">
					<div class="swiper-wrapper">
						<!-- Slide -->
						<div class="swiper-slide">
							<div class="card card-bordered shadow-none">
								<img class="card-img" src="<?= base_url();?><?= $materi->poster;?>"
									alt="Image Description">
							</div>
						</div>
						<!-- End Slide -->
					</div>

					<!-- Arrows -->
					<div class="js-swiper-shop-product-button-next swiper-button-next"></div>
					<div class="js-swiper-shop-product-button-prev swiper-button-prev"></div>
				</div>
				<!-- End Swiper Main Slider -->

				<!-- Swiper Thumb Slider -->
				<div class="position-absolute bottom-0 end-0 start-0 zi-1 p-4">
					<div class="js-swiper-shop-product-thumb swiper" style="max-width: 15rem;">
						<div class="swiper-wrapper">
							<!-- Slide -->
							<div class="swiper-slide">
								<a class="avatar avatar-circle" href="javascript:;">
									<img class="avatar-img" src="<?= base_url();?><?= $materi->poster;?>"
										alt="Image Description">
								</a>
							</div>
							<!-- End Slide -->
						</div>
					</div>
				</div>
				<!-- End Swiper Thumb Slider -->
			</div>
		</div>
	</div>
	<!-- End Col -->

	<div class="col-md-5">

		<!-- Heading -->
		<div class="mb-5">
			<h1 class="h2"><?= $materi->judul;?></h1>
			<p><?= $materi->deskripsi;?></p>
		</div>
		<!-- End Heading -->

		<!-- Price -->
		<div class="mb-5">
			<span class="d-block mb-2">Harga:</span>
			<div class="d-flex align-items-center">
				<h3 class="mb-0"><?= $materi->harga_txt;?></h3>
			</div>
		</div>
		<!-- End Price -->

		<div class="d-grid mb-4">
			<a href="<?= site_url('pengguna/materi/kerjakan-soal/'.$materi->id);?>" class="btn btn-primary btntransition">kerjakan soal</a>
		</div>
	</div>
	<!-- End Col -->
</div>
<!-- End Row -->
