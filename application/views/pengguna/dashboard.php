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
	<div class="col-lg-4">

		<!-- Card -->
		<div class="card mb-3 mb-lg-5">
			<!-- Header -->
			<div class="card-header">
				<h4 class="card-header-title">Data diri</h4>
			</div>
			<!-- End Header -->

			<!-- Body -->
			<div class="card-body">
				<ul class="list-unstyled list-py-2 text-dark mb-0">
					<li class="pb-0"><span class="card-subtitle">Informasi pribadi</span></li>
					<li><i class="bi-person dropdown-item-icon"></i> <?= $user->name;?></li>
					<li><i class="bi-gender-ambiguous dropdown-item-icon"></i> <?= $user->gender;?></li>
					<li><i class="bi-calendar-week dropdown-item-icon"></i> <?= $user->birthdate;?></li>

					<li class="pt-4 pb-0"><span class="card-subtitle">Kontak</span></li>
					<li><i class="bi-at dropdown-item-icon"></i> <?= $user->email;?></li>
					<li><i class="bi-phone dropdown-item-icon"></i> <?= $user->phone;?></li>
					<li><i class="bi-house dropdown-item-icon"></i> <?= $user->address;?></li>

					<li class="pt-4 pb-0"><span class="card-subtitle">Aktivitas</span></li>
					<li><i class="bi-journal-bookmark dropdown-item-icon"></i> <?= $user->jumlah_materi;?> materi</li>
					<li><i class="bi-credit-card-2-front dropdown-item-icon"></i> <?= $user->jumlah_transaksi;?>
						transaksi</li>
				</ul>
			</div>
			<!-- End Body -->
		</div>
		<!-- End Card -->
	</div>

	<div class="col-lg-8">
		<div class="d-grid gap-3 gap-lg-5">

			<div class="row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<!-- Card -->
					<div class="card h-100">
						<!-- Header -->
						<div class="card-header">
							<h4 class="card-header-title">Transaksi</h4>
						</div>
						<!-- End Header -->

						<!-- Body -->
						<div class="card-body">
							<ul class="list-unstyled list-py-3 mb-0">
								<?php if(!empty($user->list_transaksi)):?>
								<?php foreach($user->list_transaksi as $key => $val):?>
								<!-- Item -->
								<li>
									<div class="d-flex align-items-center">
										<a class="d-flex align-items-center me-2">
											<div class="flex-grow-1 ms-3">
												<h5 class="text-hover-primary mb-0"><?= $val->amout;?></h5>
												<span class="fs-6 text-body">Materi: <?= $val->judul;?></span>
											</div>
										</a>
										<div class="ms-auto">
											<?php if($val->status === 0):?>
											<span class="badge bg-secondary">pending</span>
											<?php elseif($val->status === 1):?>
											<span class="badge bg-success">paid</span>
											<?php elseif($val->status === 2):?>
											<span class="badge bg-danger">rejected</span>
											<?php elseif($val->status === 3):?>
											<span class="badge bg-warning">expired</span>
											<?php else:?>
											<span class="badge bg-secondary">pending</span>
											<?php endif;?>
										</div>
									</div>
								</li>
								<!-- End Item -->
								<?php endforeach;?>
								<?php else:?>
								<!-- Item -->
								<li>
									<div class="d-flex justify-content-center">
										<span class="d-block text-dark">Belum ada transaksi</span>
									</div>
								</li>
								<!-- End Item -->
								<?php endif;?>
							</ul>
						</div>
						<!-- End Body -->

						<!-- Footer -->
						<a class="card-footer text-center" href="<?= site_url('pengguna/pembayaran');?>">
							Lihat semua transaksi <i class="bi-chevron-right"></i>
						</a>
						<!-- End Footer -->
					</div>
					<!-- End Card -->
				</div>

				<div class="col-sm-6">
					<!-- Card -->
					<div class="card h-100">
						<!-- Header -->
						<div class="card-header">
							<h4 class="card-header-title">Notifikasi</h4>
						</div>
						<!-- End Header -->

						<!-- Body -->
						<div class="card-body">
							<ul class="nav nav-pills card-nav card-nav-vertical nav-pills">
								<?php if(!empty($user->list_notifikasi)):?>
								<?php foreach($user->list_notifikasi as $key => $val):?>
								<!-- Item -->
								<li>
									<a class="nav-link" href="#">
										<div class="d-flex">
											<div class="flex-shrink-0">
												<i class="bi-exclamation-square nav-icon text-dark"></i>
											</div>
											<div class="flex-grow-1 ms-3">
												<span class="d-block text-dark"><?= $val->message;?></span>
												<small class="d-block text-muted"><?= $val->created_at;?></small>
											</div>
										</div>
									</a>
								</li>
								<!-- End Item -->
								<?php endforeach;?>
								<?php else:?>
								<!-- Item -->
								<li>
									<div class="d-flex justify-content-center">
										<span class="d-block text-dark">Belum ada notifikasi</span>
									</div>
								</li>
								<!-- End Item -->
								<?php endif;?>
							</ul>
						</div>
						<!-- End Body -->
					</div>
					<!-- End Card -->
				</div>
			</div>
			<!-- End Row -->

			<!-- Card -->
			<div class="card">
				<!-- Header -->
				<div class="card-header card-header-content-between">
					<h4 class="card-header-title">Materi saya</h4>
				</div>
				<!-- End Header -->

				<!-- Table -->
				<div class="table-responsive">
					<table
						class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
						<thead class="thead-light">
							<tr>
								<th>Materi</th>
								<th class="table-text-end">Status</th>
							</tr>
						</thead>

						<tbody>
							<?php if(!empty($user->list_materi)):?>
							<?php foreach($user->list_materi as $key => $val):?>
							<!-- Item -->
							<tr>
								<td>
									<div class="d-flex">
										<span class="avatar avatar-xs avatar-soft-dark avatar-circle">
											<span class="avatar-initials">M</span>
										</span>
										<div class="ms-3">
											<h5 class="mb-0"><?= $val->judul;?></h5>
											<small><?= $val->created_at;?></small>
										</div>
									</div>
								</td>
								<td class="table-text-end"><span class="badge bg-success">selesai</span></td>
							</tr>
							<!-- End Item -->
							<?php endforeach;?>
							<?php else:?>
							<!-- Item -->
							<tr>
								<td colspan="2" class="text-center">Belum ada materi yang kamu ambil</td>
							</tr>
							<!-- End Item -->
							<?php endif;?>
						</tbody>
					</table>
				</div>
				<!-- End Table -->

				<!-- Footer -->
				<a class="card-footer text-center" href="<?= site_url('pengguna/materi-saya');?>">
					Lihat semua materi <i class="bi-chevron-right"></i>
				</a>
				<!-- End Footer -->
			</div>
			<!-- End Card -->
		</div>
	</div>
</div>
<!-- End Row -->
