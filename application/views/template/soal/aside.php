</div>
<!-- End Fluid Content -->

<!-- Offcanvas Content -->
<div class="offcanvas offcanvas-start splitted-content-small splitted-content-bordered d-flex flex-column" tabindex="-1"
	id="splittedOffcanvasContent">
	<div class="offcanvas-body py-5">
		<div class="module-list__header d-flex justify-content-end">
			<div class="module-list__header--title">
				<h1 class="fw-bold mb-0 ms-0 ms-md-2 display-5">Daftar Modul</h1>
			</div>
		</div>
		<div class="module-list__study-progress">
			<div class="progress-module">
				<div class="progress-bar bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"
					aria-valuenow="0" style="width:0%;" title="0% Selesai">
				</div>
			</div>
			<p class="mb-0">0% Selesai</p>
		</div>
		<div class="mx-3">
			<span class="dropdown-header my-3 custom-divider">Pendahuluan</span>
			<div class="nav-item mb-3">
				<a class="nav-link <?= !is_null($peraturan_selesai) ? 'text-primary' : '';?>"
					href="<?= site_url('pengguna/materi/peraturan/'.$materi->id);?>" data-placement="left">
					<i class="bi-clipboard nav-icon me-2"></i>
					<span class="nav-link-title">Peraturan</span>
					<?php if(!is_null($peraturan_selesai)):?>
					<i class="bi-check text-primary float-end h3 m-0"></i>
					<?php endif;?>
				</a>
			</div>
			<?php if($materi->is_panduan == 1):?>
			<div class="nav-item">
				<a class="nav-link <?= !is_null($panduan_selesai) ? 'text-primary' : '';?>"
					href="<?= site_url('pengguna/materi/panduan-soal/'.$materi->id);?>" data-placement="left">
					<i class="bi-receipt nav-icon me-2"></i>
					<span class="nav-link-title">Panduan</span>
					<?php if(!is_null($panduan_selesai)):?>
					<i class="bi-check text-primary float-end h3 m-0"></i>
					<?php endif;?>
				</a>
			</div>
			<?php endif;?>
			<span class="dropdown-header my-3 custom-divider">Soal</span>
			<?php if(!empty($list_soal)):?>
			<div class="soal-container">
				<?php foreach($list_soal as $key => $val):?>
				<?php if(is_null($peraturan_selesai) || ($materi->is_panduan == 1 && is_null($panduan_selesai))):?>
				<button type="button" class="soal bg-soft-secondary text-white" disabled><?= $key+1;?></button>
				<?php else:?>
				<?php if(!is_null($val->pengerjaan)):?>
				<a href="<?= site_url('pengguna/materi/kerjakan-soal/'.$materi->id.'/'.$val->id);?>"
					class="soal <?= $val->id == $soal_id ? 'active': 'bg-primary text-white'?>"><?= $key+1;?></a>
				<?php else:?>
				<a href="<?= site_url('pengguna/materi/kerjakan-soal/'.$materi->id.'/'.$val->id);?>"
					class="soal <?= $val->id == $soal_id ? 'active': ''?>"><?= $key+1;?></a>
				<?php endif;?>
				<?php endif;?>
				<?php endforeach;?>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>
<!-- End Offcanvas Content -->
