<div class="card-body">
	<div class="d-flex justify-content-between align-items-center">
		<div class="d-flex align-items-center">
			<i class="bi-question-square fs-2 text-body me-2"></i>
			<h5 class="text-truncate ms-2 mb-0">Panduan</h5>
		</div>
		<?php if($materi->is_panduan):?>
		<i class="bi-check-square fs-1 text-success float-end"></i>
		<?php else:?>
		<i class="bi-square fs-1 text-secondary float-end"></i>
		<?php endif;?>
	</div>
</div>
<a class="stretched-link" role="button" data-bs-toggle="modal" data-bs-target="#panduan"></a>
