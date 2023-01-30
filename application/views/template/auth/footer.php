    </div>
    <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- JS Global Compulsory  -->
    <script src="<?= base_url();?>assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="<?= base_url();?>assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>

    <!-- JS Front -->
    <script src="<?= base_url();?>assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
    	if (Notification.permission !== "denied") {
    		Notification.requestPermission();
    	}

    	(function () {
    		window.onload = function () {

    			// INITIALIZATION OF BOOTSTRAP VALIDATION
    			// =======================================================
    			HSBsValidation.init('.js-validate', {
    				onSubmit: data => {
    					$('button[type=submit]').prop("disabled", true);
    					// add spinner to button
    					$('button[type=submit]').html(
    						`<span class="spinner-border spinner-border-sm text-white" role="status" aria-hidden="true"></span> loading...`
    					);
    					return;
    				}
    			})


    			// INITIALIZATION OF TOGGLE PASSWORD
    			// =======================================================
    			new HSTogglePassword('.js-toggle-password')
    		}
    	})()

    </script>

    <!-- vanilla TOAST -->
    <?php if ($this->session->flashdata('toast')): ?>
    <!-- Toast -->
    <div id="liveToast" class="position-fixed toast hide" role="alert" aria-live="assertive" aria-atomic="true"
    	style="top: 20px; right: 20px; z-index: 1000;">
    	<div class="toast-header">
    		<div class="d-flex align-items-center flex-grow-1">
    			<div class="flex-grow-1">
    				<h5 class="mb-0">Notifikasi</h5>
    			</div>
    			<div class="text-end">
    				<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    			</div>
    		</div>
    	</div>
    	<div class="toast-body">
    		<?php echo $this->session->flashdata('toast'); ?>
    	</div>
    </div>
    <!-- End Toast -->
    <script>
    	// INITIALIZATION OF LIVE TOAST
    	// =======================================================
    	const liveToast = new bootstrap.Toast(document.querySelector('#liveToast'))
    	liveToast.show()

    </script>
    <?php endif;?>

	<!-- sound notif -->
    <?php if($this->session->flashdata('error') || $this->session->flashdata('warning') || $this->session->flashdata('success') || $this->session->flashdata('info') || $this->session->flashdata('notif_error') || $this->session->flashdata('notif_warning') || $this->session->flashdata('notif_success') || $this->session->flashdata('notif_info') || $this->session->flashdata('toast')):?>
    <script>
    	if (Notification.permission === "granted") {
    		var sound = new Audio("<?= base_url();?>assets/sounds/<?= $sound_notif;?>");
    		sound.play();
    	} else if (Notification.permission !== "denied") {
    		Notification.requestPermission().then(function (permission) {
    			if (permission === "granted") {
    				var sound = new Audio("<?= base_url();?>assets/sounds/<?= $sound_notif;?>");
    				sound.play();
    			}
    		});
    	}
    </script>
    <?php endif;?>
    <!-- Sound notif -->
    </body>

    </html>
