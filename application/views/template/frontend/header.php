<!DOCTYPE html>
<html lang="en" dir="">

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
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?= base_url();?>assets-frontend/vendor/bootstrap-icons/font/bootstrap-icons.css">
	<link rel="stylesheet" href="<?= base_url();?>assets-frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets-frontend/vendor/aos/dist/aos.css">
	<link rel="stylesheet" href="<?= base_url();?>assets-frontend/vendor/swiper/swiper-bundle.min.css">

	<!-- template -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

	<!-- CSS Front Template -->
	<link rel="stylesheet" href="<?= base_url();?>assets-frontend/css/theme.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets-frontend/css/custom.css?<?= time();?>">
</head>

<body>
