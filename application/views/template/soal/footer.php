</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->

<!-- End Welcome Message Modal -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- JS Global Compulsory  -->
<script src="<?= base_url();?>assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url();?>assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="<?= base_url();?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="<?= base_url();?>assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
<script src="<?= base_url();?>assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>
<script src="<?= base_url();?>assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
<script src="<?= base_url();?>assets/js/flatpickr.min.js"></script>
<script src="<?= base_url();?>assets/vendor/quill/dist/quill.min.js"></script>
<script src="<?= base_url();?>assets/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
<script src="<?= base_url();?>assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>
<script src="<?= base_url();?>assets/vendor/hs-scrollspy/dist/hs-scrollspy.min.js"></script>
<script src="<?= base_url();?>assets/vendor/datatables.net.extensions/select/select.min.js"></script>

<!-- JS Front -->
<script src="<?= base_url();?>assets/js/theme.min.js"></script>

<!-- JS Plugins Init. -->
<script>
	function tournow() {
		introJs().setOptions({
			disableInteraction: true,
			steps: [{
				intro: "Selamat datang di aplikasi soalkupedia.com, kami akan menjelaskan secara singkat mengenai semua fitur pada aplikasi ini"
			}, {
				element: document.querySelector('#accountNavbarDropdown'),
				intro: "Informasi singkat mengenai profil anda"
			}, {
				element: document.querySelector('#tour-dashboard'),
				intro: "Anda dapat melihat informasi umum pada halaman ini"
			}, {
				element: document.querySelector('#tour-statistik'),
				intro: "Pantau statistik seputar informasi mengenai website anda"
			}, {
				element: document.querySelector('#tour-member'),
				intro: "Kelola data member anda pada halaman ini"
			}, {
				element: document.querySelector('#tour-midtrans'),
				intro: "Atur metode pembayaran midtrans anda"
			}, {
				element: document.querySelector('#tour-transaksi'),
				intro: "Kelola seluruh data transaksi materi anda"
			}, {
				element: document.querySelector('#tour-kategori'),
				intro: "Kelolak kategori produk anda"
			}, {
				element: document.querySelector('#tour-materi'),
				intro: "Kelola seluruh materi yang anda buat pada halaman ini"
			}, {
				element: document.querySelector('#tour-website'),
				intro: "Atur seluruh pengaturan mengenai website anda disini"
			}, {
				element: document.querySelector('#selectThemeDropdown'),
				intro: "Pilih tema untuk tampilan website anda"
			}, {
				element: document.querySelector('#otherLinksDropdown'),
				intro: "Cari tau bantuan lain disini"
			}]
		}).start();
	};

	(function () {
		// INITIALIZATION OF NAVBAR VERTICAL ASIDE
		// =======================================================
		new HSSideNav('.js-navbar-vertical-aside').init()


		// INITIALIZATION OF FORM SEARCH
		// =======================================================
		new HSFormSearch('.js-form-search')


		// INITIALIZATION OF BOOTSTRAP DROPDOWN
		// =======================================================
		HSBsDropdown.init()


		// INITIALIZATION OF SIDEBAR COMBINATIONS WITH OFFCANVAS
		// =======================================================
		const offcanvasInstance = new bootstrap.Offcanvas(document.querySelector('.offcanvas-start'))
		const defaultTransition = window.getComputedStyle(offcanvasInstance._element).getPropertyValue('transition')
		window.addEventListener('resize', function (e) {
			if (window.innerWidth > 1200) {
				if (offcanvasInstance._element.style.transition !== 'none 0s ease 0s') {
					offcanvasInstance._element.style.transition = 'none'
				}

				// Reset offcanvas states
				if (offcanvasInstance._isShown) {
					offcanvasInstance._element.classList.remove('show')
					offcanvasInstance._backdrop._element.remove()
					offcanvasInstance._isShown = false
					offcanvasInstance._backdrop._isAppended = false
				}

				// Show offcanvas if hidden on desktop
				if (offcanvasInstance._element.style.visibility === 'hidden') {
					offcanvasInstance._element.style.visibility = 'visible'
				}
			} else {
				if (offcanvasInstance._element.style.transition === 'none 0s ease 0s') {
					offcanvasInstance._element.style.removeProperty('transition')
				}
			}
		})
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

		// INITIALIZATION OF SELECT
		// =======================================================
		HSCore.components.HSTomSelect.init('.js-select')

		// INITIALIZATION OF QUILLJS EDITOR
		// =======================================================
		HSCore.components.HSQuill.init('.js-quill')

		// INITIALIZATION OF FILE ATTACH
		// =======================================================
		new HSFileAttach('.js-file-attach')

		if ('<?= $this->uri->segment(2);?>' == 'pembayaran') {
			// INITIALIZATION OF DATATABLES
			// =======================================================
			HSCore.components.HSDatatables.init($('#datatable'), {
				select: {
					style: 'multi',
					selector: 'td:first-child input[type="checkbox"]',
					classMap: {
						checkAll: '#datatableCheckAll',
						counter: '#datatableCounter',
						counterInfo: '#datatableCounterInfo'
					}
				},
				language: {
					zeroRecords: `<div class="text-center p-4">
				<img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;"
					data-hs-theme-appearance="default">
				<img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description"
					style="width: 10rem;" data-hs-theme-appearance="dark">
				<p class="mb-0">No data to show</p>
			</div>`
				}
			});

			const datatable = HSCore.components.HSDatatables.getItem('datatable')

			$('.js-datatable-filter').on('change', function () {
				var $this = $(this),
					elVal = $this.val(),
					targetColumnIndex = $this.data('target-column-index');

				datatable.column(targetColumnIndex).search(elVal).draw();
			});

			$('#datatableSearch').on('mouseup', function (e) {
				var $input = $(this),
					oldValue = $input.val();

				if (oldValue == "") return;

				setTimeout(function () {
					var newValue = $input.val();

					if (newValue == "") {
						// Gotcha
						datatable.search('').draw();
					}
				}, 1);
			});

			$('#toggleColumn_order').change(function (e) {
				datatable.columns(1).visible(e.target.checked)
			})

			$('#toggleColumn_date').change(function (e) {
				datatable.columns(2).visible(e.target.checked)
			})

			$('#toggleColumn_customer').change(function (e) {
				datatable.columns(3).visible(e.target.checked)
			})

			$('#toggleColumn_payment_status').change(function (e) {
				datatable.columns(4).visible(e.target.checked)
			})

			$('#toggleColumn_fulfillment_status').change(function (e) {
				datatable.columns(5).visible(e.target.checked)
			})

			$('#toggleColumn_payment_method').change(function (e) {
				datatable.columns(6).visible(e.target.checked)
			})

			datatable.columns(7).visible(false)

			$('#toggleColumn_total').change(function (e) {
				datatable.columns(7).visible(e.target.checked)
			})

			$('#toggleColumn_actions').change(function (e) {
				datatable.columns(8).visible(e.target.checked)
			})
		}
	})()

</script>

<!-- Style Switcher JS -->

<script>
	(function () {
		// STYLE SWITCHER
		// =======================================================
		const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
		const $variants = document.querySelectorAll(
			`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

		// Function to set active style in the dorpdown menu and set icon for dropdown trigger
		const setActiveStyle = function () {
			$variants.forEach($item => {
				if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
					$dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
					return $item.classList.add('active')
				}

				$item.classList.remove('active')
			})
		}

		// Add a click event to all items of the dropdown to set the style
		$variants.forEach(function ($item) {
			$item.addEventListener('click', function () {
				HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
			})
		})

		// Call the setActiveStyle on load page
		setActiveStyle()

		// Add event listener on change style to call the setActiveStyle function
		window.addEventListener('on-hs-appearance-change', function () {
			setActiveStyle()
		})
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

<!-- End Style Switcher JS -->
</body>

</html>
