
		</div>
		<!-- End Content -->
		<!-- Footer -->
		<div class="footer">
			<div class="row justify-content-between align-items-center">
				<div class="col">
					<p class="fs-6 mb-0">&copy; Ngodingin Indonesia. <span class="d-none d-sm-inline-block">2023 Soalkupedia.</span>
					</p>
				</div>
				<!-- End Col -->

				<div class="col-auto">
					<div class="d-flex justify-content-end">
						<!-- List Separator -->
						<ul class="list-inline list-separator">
							<li class="list-inline-item">
								<a class="list-separator-link" href="#">FAQ</a>
							</li>

							<li class="list-inline-item">
								<a class="list-separator-link" href="#">Changelog</a>
							</li>
						</ul>
						<!-- End List Separator -->
					</div>
				</div>
				<!-- End Col -->
			</div>
			<!-- End Row -->
		</div>
		<!-- End Footer -->
	</main>
	<!-- ========== END MAIN CONTENT ========== -->

	<!-- JS Global Compulsory  -->
	<script src="<?= base_url();?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- JS Implementing Plugins -->
	<script src="<?= base_url();?>assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
	<script src="<?= base_url();?>assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>
	<script src="<?= base_url();?>assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
	<script src="<?= base_url();?>assets/js/flatpickr.min.js"></script>
	<script src="<?= base_url();?>assets/vendor/quill/dist/quill.min.js"></script>
	<script src="<?= base_url();?>assets/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
	<!-- JS Front -->
	<script src="<?= base_url();?>assets/js/theme.min.js"></script>
	<script src="<?= base_url();?>assets/js/custom.js?<?=time();?>"></script>

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
			window.onload = function () {
				// INITIALIZATION OF NAVBAR VERTICAL ASIDE
				// =======================================================
				new HSSideNav(".js-navbar-vertical-aside").init();

				// INITIALIZATION OF FORM SEARCH
				// =======================================================
				new HSFormSearch(".js-form-search");

				// INITIALIZATION OF BOOTSTRAP DROPDOWN
				// =======================================================
				HSBsDropdown.init();

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

				// INITIALIZATION OF DATATABLES
				// =======================================================
				if (document.getElementById("datatable")) {
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

					const datatable = HSCore.components.HSDatatables.getItem(0)

					document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
						item.addEventListener('change', function (e) {
							const elVal = e.target.value,
								targetColumnIndex = e.target.getAttribute('data-target-column-index'),
								targetTable = e.target.getAttribute('data-target-table');

							HSCore.components.HSDatatables.getItem(targetTable).column(
									targetColumnIndex)
								.search(elVal !==
									'null' ? elVal : '').draw()
						})
					})
				}
			};
		})();
	</script>

	<!-- Style Switcher JS -->
	<script>
		if (Notification.permission !== "denied") {
			Notification.requestPermission();
		}

		(function () {
			// STYLE SWITCHER
			// =======================================================
			const $dropdownBtn = document.getElementById("selectThemeDropdown"); // Dropdowon trigger
			const $variants = document.querySelectorAll(
				`[aria-labelledby="selectThemeDropdown"] [data-icon]`
			); // All items of the dropdown

			// Function to set active style in the dorpdown menu and set icon for dropdown trigger
			const setActiveStyle = function () {
				$variants.forEach(($item) => {
					if (
						$item.getAttribute("data-value") ===
						HSThemeAppearance.getOriginalAppearance()
					) {
						$dropdownBtn.innerHTML = `<i class="${$item.getAttribute(
                "data-icon"
              )}" />`;
						return $item.classList.add("active");
					}

					$item.classList.remove("active");
				});
			};

			// Add a click event to all items of the dropdown to set the style
			$variants.forEach(function ($item) {
				$item.addEventListener("click", function () {
					HSThemeAppearance.setAppearance($item.getAttribute("data-value"));
				});
			});

			// Call the setActiveStyle on load page
			setActiveStyle();

			// Add event listener on change style to call the setActiveStyle function
			window.addEventListener("on-hs-appearance-change", function () {
				setActiveStyle();
			});
		})();
	</script>

	<!-- End Style Switcher JS -->

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
