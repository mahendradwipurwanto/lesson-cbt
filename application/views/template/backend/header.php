<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required Meta Tags Always Come First -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta Website -->
	<meta name="description" content="<?= $web_desc; ?>">
	<meta property="og:title"
		content="<?= ($this->uri->segment(1) ? ucwords(str_replace('-', ' ', $this->uri->segment(1)) . ' ' . ($this->uri->segment(2) ? str_replace('-', ' ', $this->uri->segment(2)) : "") . $web_title) : $web_title); ?>">
	<meta property="og:description" content="<?= $web_desc; ?>">
	<meta property="og:image" content="<?= base_url(); ?><?= $web_icon?>">
	<meta property="og:url" content="<?= base_url(uri_string()) ?>">

	<title>
		<?= ($this->uri->segment(1) ? ucwords(str_replace('-', ' ', $this->uri->segment(1)) . ' ' . ($this->uri->segment(2) ? str_replace('-', ' ', $this->uri->segment(2)) : "") . " - ".$web_title) : $web_title); ?>
	</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url(); ?><?= $web_icon;?>">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?= base_url();?>assets/vendor/bootstrap-icons/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="<?= base_url();?>assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/vendor/quill/dist/quill.snow.css">

	<!-- plugin styel -->
	<link rel="stylesheet" href="<?= base_url();?>assets/plugin/sweetalert2/sweetalert2.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intro.js@5.0.0/minified/introjs.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugin/intro-js-modern.css">

	<!-- CSS Front Template -->
	<link rel="preload" href="<?= base_url();?>assets/css/theme.min.css" data-hs-appearance="default" as="style" />
	<link rel="preload" href="<?= base_url();?>assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style" />

	<!-- custom style -->
	<link rel="stylesheet" href="<?= base_url();?>assets/css/custom.css?<?= time();?>">

	<style data-hs-appearance-onload-styles>
		* {
			transition: unset !important;
		}

		body {
			opacity: 0;
		}
	</style>
	<script src="<?= base_url();?>assets/js/main.js"></script>

	<!-- javascript -->
	<script type="text/javascript" src="<?= base_url();?>assets/js/jquery-3.6.0.min.js"></script>
	<!-- data tables -->
	<script type="text/javascript" src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
	<!-- sweetalert2 -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/sweetalert2/sweetalert2.min.js"></script>
	<!-- ckeditor -->
	<!-- <script type="text/javascript" src="<?= base_url(); ?>assets/plugin/ckeditor/ckeditor.js"></script> -->
	<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
	<!-- introjs -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/intro.js@5.0.0/minified/intro.min.js"></script>
	<script src="<?= base_url();?>assets/js/apexchart.js"></script>
	</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl">
	<script src="<?= base_url();?>assets/js/hs.theme-appearance.js"></script>
