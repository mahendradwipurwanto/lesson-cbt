<div class="row">
	<div class="col-12">
		<!-- Card -->
		<div class="card card-body mb-3 mb-lg-5">
			<div class="row col-lg-divider gx-lg-6">
				<div class="col-lg-3">
					<!-- Media -->
					<div class="d-flex">
						<div class="flex-grow-1">
							<h6 class="card-subtitle mb-3">Materi</h6>
							<h3 class="card-title"><?= number_format($count['materi'],0,",",".")?></h3>

							<div class="d-flex align-items-center">
								<span class="d-block fs-6">total seluruh materi</span>
							</div>
						</div>

						<span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
							<i class="bi-bookmark"></i>
						</span>
					</div>
					<!-- End Media -->
				</div>
				<!-- End Col -->

				<div class="col-lg-3">
					<!-- Media -->
					<div class="d-flex">
						<div class="flex-grow-1">
							<h6 class="card-subtitle mb-3">Draft</h6>
							<h3 class="card-title"><?= number_format($count['draft'],0,",",".")?></h3>

							<div class="d-flex align-items-center">
								<span class="d-block fs-6">total draft materi</span>
							</div>
						</div>

						<span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
							<i class="bi-bookmark-dash"></i>
						</span>
					</div>
					<!-- End Media -->
				</div>
				<!-- End Col -->

				<div class="col-lg-3">
					<!-- Media -->
					<div class="d-flex">
						<div class="flex-grow-1">
							<h6 class="card-subtitle mb-3">Aktif</h6>
							<h3 class="card-title"><?= number_format($count['aktif'],0,",",".")?></h3>

							<div class="d-flex align-items-center">
								<span class="d-block fs-6">total materi aktif</span>
							</div>
						</div>

						<span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
							<i class="bi-bookmark-check"></i>
						</span>
					</div>
					<!-- End Media -->
				</div>
				<!-- End Col -->

				<div class="col-lg-3">
					<!-- Media -->
					<div class="d-flex">
						<div class="flex-grow-1">
							<h6 class="card-subtitle mb-3">Pengguna</h6>
							<h3 class="card-title"><?= number_format($count['peserta'],0,",",".")?></h3>

							<div class="d-flex align-items-center">
								<span class="d-block fs-6">total pengguna</span>
							</div>
						</div>

						<span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
							<i class="bi-journal-text"></i>
						</span>
					</div>
					<!-- End Media -->
				</div>
				<!-- End Col -->
			</div>
			<!-- End Row -->
		</div>
		<!-- End Card -->
	</div>
</div>

<div class="row">
	<div class="col-9">
		<form action="<?= site_url('master/materi');?>" method="post">
			<div class="row mb-4">
				<div class="col-4">
					<!-- Select -->
					<div class="tom-select-custom">
						<select class="js-select form-select" autocomplete="off" name="status"
							data-hs-tom-select-options='{"placeholder": "Pilih status", "hideSearch": true}'>
							<option value="-1">Semua status</option>
							<option value="1"
								<?php if($this->session->userdata('status') == 1):?>selected<?php endif;?>>Aktif
							</option>
							<option value="0"
								<?php if($this->session->userdata('status') == 0):?>selected<?php endif;?>>Draft
							</option>
						</select>
					</div>
					<!-- End Select -->
				</div>
				<div class="col-8">
					<div class="input-group mb-3">
						<input type="text" class="form-control form-control-sm" placeholder="Judul / Konten materi"
							name="search" aria-label="Judul / Konten materi" aria-describedby="search-form"
							autocomplete="off" value="<?= $this->session->userdata('search');?>" autofocus>
						<button type="submit" role="button" class="input-group-text" id="search-form"><i
								class="bi-search me-2"></i> cari</button>
					</div>
				</div>
			</div>
		</form>
		<div class="row">
			<?php if(!empty($materi)):?>
			<?php foreach ($materi as $key => $val):?>
			<div class="col-4">
				<div class="card card-hover-shadow mb-3">
					<div class="card-body">
						<div class="d-flex mb-3">
							<div class="me-2">
								<h4 class="text-wrap ellipsis"><?= $val->judul;?></h4>
								<span class="badge bg-soft-primary"><?= $val->categories;?></span>
								<?php if($val->status == 1):?>
								<span class="badge bg-soft-success">Aktif</span>
								<?php elseif($val->status == 0):?>
								<span class="badge bg-soft-warning">Draft</span>
								<?php elseif($val->status == 2):?>
								<span class="badge bg-soft-info">Arsip</span>
								<?php endif;?>
							</div>

							<div class="ms-auto">
								<!-- Dropdown -->
								<div class="dropdown">
									<button type="button"
										class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle"
										id="dropdown-menu-<?= $val->id;?>" data-bs-toggle="dropdown"
										aria-expanded="false">
										<i class="bi-three-dots-vertical"></i>
									</button>

									<div class="dropdown-menu dropdown-menu-end"
										aria-labelledby="dropdown-menu-<?= $val->id;?>">
										<a class="dropdown-item"
											href="<?= site_url('master/materi/detail/'.$val->id);?>">
											<i class="bi-eye dropdown-item-icon"></i> Detail
										</a>
										<a class="dropdown-item" href="<?= site_url('master/edit-materi/'.$val->id);?>">
											<i class="bi-pencil dropdown-item-icon"></i> Edit
										</a>
										<a class="dropdown-item" role="button" data-bs-toggle="modal"
											data-bs-target="#arsip-<?= $val->id;?>">
											<i class="bi-folder dropdown-item-icon"></i> Arsipkan
										</a>

										<div class="dropdown-divider"></div>

										<a class="dropdown-item text-danger" role="button" data-bs-toggle="modal"
											data-bs-target="#delete-<?= $val->id;?>">
											<i class="bi-trash dropdown-item-icon text-danger"></i>
											Hapus
										</a>
									</div>
								</div>
								<!-- End Dropdown -->
							</div>
						</div>

						<div class="row">
							<div class="col-4">
								<!-- Stats -->
								<div class="text-center">
									<span class="d-block h4 mb-1"><?= number_format($val->konten,0,",",".")?></span>
									<span class="d-block fs-6">Konten</span>
								</div>
								<!-- End Stats -->
							</div>
							<!-- End Col -->

							<div class="col-4">
								<!-- Stats -->
								<div class="text-center">
									<span class="d-block h4 mb-1"><?= number_format($val->soal,0,",",".")?></span>
									<span class="d-block fs-6">Soal</span>
								</div>
								<!-- End Stats -->
							</div>
							<!-- End Col -->

							<div class="col-4">
								<!-- Stats -->
								<div class="text-center">
									<span class="d-block h4 mb-1"><?= number_format($val->peserta,0,",",".")?></span>
									<span class="d-block fs-6">Peserta</span>
								</div>
								<!-- End Stats -->
							</div>
							<!-- End Col -->
						</div>
						<!-- End Row -->
					</div>
					<a class="stretched-link" href="<?= site_url('master/materi/detail/'.$val->id);?>""></a>
				</div>
			</div>

			<div id=" delete-<?= $val->id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete"
						aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="detailUserTitle">Hapus data</h4>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="<?= site_url('master/deleteMateri');?>" method="post"
										class="js-validate need-validate" novalidate>
										<input type="hidden" name="id" value="<?= $val->id;?>">
										<p>Apakah kamu yakin ingin menghapus data <?= $val->judul;?> ini?</p>
										<div class="modal-footer px-0 pb-0">
											<button type="button" class="btn btn-white btn-sm"
												data-bs-dismiss="modal">Tidak</button>
											<button type="submit" class="btn btn-danger btn-sm">Ya</button>
										</div>
									</form>
								</div>
							</div>
						</div>
				</div>

				<div id="arsip-<?= $val->id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="arsip"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="detailUserTitle">Arispkan data</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="<?= site_url('master/arsipMateri');?>" method="post"
									class="js-validate need-validate" novalidate>
									<input type="hidden" name="id" value="<?= $val->id;?>">
									<p>Apakah kamu yakin ingin mengarsipkan data <b><?= $val->judul;?></b> ini?</p>
									<small>Anda dapat arsip materi pada menu riwayat</small>
									<div class="modal-footer px-0 pb-0">
										<button type="button" class="btn btn-white btn-sm"
											data-bs-dismiss="modal">Tidak</button>
										<button type="submit" class="btn btn-info btn-sm">Ya</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach;?>

				<?= $this->pagination->create_links();?>
				<?php else:?>
				<div class=" col-12">
					<div class="row justify-content-sm-center text-center">
						<div class="col-sm-7 col-md-5">
							<div class="card card-body">
								<img class="img-fluid mb-5"
									src="<?= base_url();?>assets/svg/illustrations/oc-browse.svg"
									alt="Image Description" data-hs-theme-appearance="default">
								<img class="img-fluid mb-5"
									src="<?= base_url();?>assets/svg/illustrations-light/oc-browse.svg"
									alt="Image Description" data-hs-theme-appearance="dark">

								<h3 class="mb-0">Tidak ada data</h3>
							</div>
						</div>
					</div>
					<!-- End Row -->
				</div>
				<?php endif;?>
			</div>
		</div>
		<div class="col-3">
			<div class="card mb-3">
				<!-- Header -->
				<div class="card-header">
					<h4 class="card-header-title">Kelola</h4>
				</div>
				<!-- End Header -->
				<div class="card-body">
					<!-- Card -->
					<div class="card card-sm card-hover-shadow h-100 mb-3">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<i class="bi-bookmark-plus fs-2 text-body me-2"></i>

								<h5 class="text-truncate ms-2 mb-0">Buat baru</h5>
							</div>
						</div>
						<a class="stretched-link" href="<?= site_url('master/initBuatMateri');?>"></a>
					</div>
					<!-- End Card -->
					<!-- Card -->
					<div class="card card-sm card-hover-shadow h-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<i class="bi-journal-bookmark-fill fs-2 text-body me-2"></i>

								<h5 class="text-truncate ms-2 mb-0">Riwayat</h5>
							</div>
						</div>
						<a class="stretched-link" href="<?= site_url('master/riwayat-materi');?>"></a>
					</div>
					<!-- End Card -->
				</div>
			</div>
		</div>
	</div>
