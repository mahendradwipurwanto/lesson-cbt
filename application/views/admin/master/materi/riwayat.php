<div class="row">
	<div class="col-12">
		<form action="<?= site_url('master/materi');?>" method="post">
			<div class="row mb-4">
				<div class="col-12">
					<div class="input-group mb-3">
						<input type="text" class="form-control form-control-sm" placeholder="Judul / Konten materi" name="search"
							aria-label="Judul / Konten materi" aria-describedby="search-form" autocomplete="off"
							value="<?= $this->session->userdata('search');?>" autofocus>
						<button type="submit" role="button" class="input-group-text" id="search-form"><i
								class="bi-search me-2"></i> cari</button>
					</div>
				</div>
			</div>
		</form>
		<div class="row">
			<?php if(!empty($materi)):?>
			<?php foreach ($materi as $key => $val):?>
			<div class="col-3">
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
										<a class="dropdown-item" href="<?= site_url('master/materi/edit/'.$val->id);?>">
											<i class="bi-pencil dropdown-item-icon"></i> Edit
										</a>
										<a class="dropdown-item" role="button" data-bs-toggle="modal"
											data-bs-target="#aktif-<?= $val->id;?>">
											<i class="bi-folder-check dropdown-item-icon"></i> Aktifkan
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

				<div id="aktif-<?= $val->id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="arsip"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="detailUserTitle">Aktifkan data</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="<?= site_url('master/aktifMateri');?>" method="post"
									class="js-validate need-validate" novalidate>
									<input type="hidden" name="id" value="<?= $val->id;?>">
									<p>Apakah kamu yakin ingin mengaktifkan kembali data <?= $val->judul;?> ini?</p>
									<div class="modal-footer px-0 pb-0">
										<button type="button" class="btn btn-white btn-sm"
											data-bs-dismiss="modal">Tidak</button>
										<button type="submit" class="btn btn-success btn-sm">Ya</button>
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
	</div>
