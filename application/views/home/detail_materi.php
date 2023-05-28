<!-- Hero -->
<div class="main-course-detail mt-5 mt-md-0">
	<div class="course-header">
		<div class="container content-space-t-md-3">
			<div class="row">
				<div class="col-sm-12 col-md-3 mb-3">
					<div class="p-2">
						<img class="card-img shadow-sm" src="<?= base_url();?><?= $materi->poster;?>"
							onerror="this.onerror=null;this.src='<?= base_url();?><?= 'assets-frontend/img/placeholder.jpg'?>';"
							alt="Image Description">
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<a class="d-flex gap-1 mb-4" href="#reviewSection">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<span class="ms-1">287 reviews</span>
					</a>

					<div class="mb-5">
						<h1 class="h2"><?= $materi->judul;?></h1>
						<p><?= $materi->deskripsi == "" ? "-" : $materi->deskripsi;?></p>
					</div>

					<div class="mb-5">
						<span class="d-block mb-2">Kategori: <span
								class="btn btn-outline-dark btn-xs"><?= $materi->categories;?></span></span>
					</div>
				</div>
				<div class="col-sm-12 col-md-3">
					<div class="card border p-3">
						<?php if($cek_materi):?>
						<a href="<?= site_url('pengguna/materi/kerjakan-soal/'.$materi->id);?>"
							class="btn btn-dark w-100">Belajar
							sekarang</a>
						<?php else:?>
						<a href="<?= site_url('home/ambilMateri/'.$materi->id);?>" class="btn btn-dark w-100">Ambil
							kelas</a>
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
<!-- Testimonials -->
<div id="testimoni-siswa" class="container content-space-1">
	<!-- Heading -->
	<div class="w-lg-50 mb-5 mb-md-5">
		<h2>Testimoni Siswa</h2>
	</div>
	<!-- End Heading -->

	<div class="row">
		<div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
			<!-- Card -->
			<div class="card h-100">
				<div class="card-body">
					<!-- Rating -->
					<div class="d-flex gap-1 mb-2">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
					</div>
					<!-- End Rating -->

					<div class="mb-auto">
						<p class="card-text">With Front Pay, you can check out across the web and in apps without having
							to enter any payment information.</p>
					</div>
				</div>

				<div class="card-footer pt-0">
					<!-- Media -->
					<div class="d-flex align-items-center">
						<div class="flex-shrink-0">
							<img class="avatar avatar-circle"
								src="<?= base_url();?>assets-frontend/img/160x160/img8.jpg" alt="Image Description">
						</div>
						<div class="flex-grow-1 ms-3">
							<h5 class="card-title mb-0">Christina Kray</h5>
							<p class="card-text small">Business Manager</p>
						</div>
					</div>
					<!-- End Media -->
				</div>
			</div>
			<!-- End Card -->
		</div>
		<!-- End Col -->

		<div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
			<!-- Card -->
			<div class="card h-100">
				<div class="card-body">
					<!-- Rating -->
					<div class="d-flex gap-1 mb-2">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star-half.svg" alt="Review rating"
							width="16">
					</div>
					<!-- End Rating -->

					<div class="mb-auto">
						<p class="card-text">From boarding passes to transit and movie tickets, there's pretty much
							nothing you can't store with Front Pay.</p>
					</div>
				</div>

				<div class="card-footer pt-0">
					<!-- Media -->
					<div class="d-flex align-items-center">
						<div class="flex-shrink-0">
							<img class="avatar avatar-circle"
								src="<?= base_url();?>assets-frontend/img/160x160/img9.jpg" alt="Image Description">
						</div>
						<div class="flex-grow-1 ms-3">
							<h5 class="card-title mb-0">Andrea Gardy</h5>
							<p class="card-text small">CEO at Slack</p>
						</div>
					</div>
					<!-- End Media -->
				</div>
			</div>
			<!-- End Card -->
		</div>
		<!-- End Col -->

		<div class="col-sm-6 col-lg-4">
			<!-- Card -->
			<div class="card h-100">
				<div class="card-body">
					<!-- Rating -->
					<div class="d-flex gap-1 mb-2">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
						<img src="<?= base_url();?>assets-frontend/svg/illustrations/star.svg" alt="Review rating"
							width="16">
					</div>
					<!-- End Rating -->

					<div class="mb-auto">
						<p class="card-text">I love Front Pay for cash back, reward points and fraud protection – just
							like when you're swiping your card.</p>
					</div>
				</div>

				<div class="card-footer pt-0">
					<!-- Media -->
					<div class="d-flex align-items-center">
						<div class="flex-shrink-0">
							<img class="avatar avatar-circle"
								src="<?= base_url();?>assets-frontend/img/160x160/img3.jpg" alt="Image Description">
						</div>
						<div class="flex-grow-1 ms-3">
							<h5 class="card-title mb-0">Philip Williams</h5>
							<p class="card-text small">Front Pay user</p>
						</div>
					</div>
					<!-- End Media -->
				</div>
			</div>
			<!-- End Card -->
		</div>
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
						What methods of payments are supported?
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
						Can I cancel at anytime?
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
						How do I get a receipt for my purchase?
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
