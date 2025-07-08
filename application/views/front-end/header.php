<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Meta Description -->
	<meta
		name="description"
		content="Order your favorite meals with ease using our Food Delivery mobile app. Browse local restaurants, customize your order, and enjoy fast, reliable delivery straight to your door. Download now for convenient, delicious dining at your fingertips." />
	<title>Alpha - Food Order</title>

	<!-- icofont-css-link -->
	<link rel="stylesheet" href="<?php echo base_url('assets/front-end/css/icofont.min.css'); ?>" />
	<!-- Owl-Carosal-Style-link -->
	<link rel="stylesheet" href="<?php echo base_url('assets/front-end/css/owl.carousel.min.css'); ?>" />
	<!-- Bootstrap-Style-link -->
	<link rel="stylesheet" href="<?php echo base_url('assets/front-end/css/bootstrap.min.css'); ?>" />
	<!-- Aos-Style-link -->
	<link rel="stylesheet" href="<?php echo base_url('assets/front-end/css/aos.css'); ?>" />
	<!-- Coustome-Style-link -->
	<link rel="stylesheet" href="<?php echo base_url('assets/front-end/css/style.css'); ?>" />
	<!-- Responsive-Style-link -->
	<link rel="stylesheet" href="<?php echo base_url('assets/front-end/css/responsive.css'); ?>" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/front-end/images/favicon.webp'); ?>" type="image/x-icon" />
	<!-- font 1 -->
	<link rel="preconnect" href="https://fonts.googleapis.com/" />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;display=swap"
		rel="stylesheet" />
	<!-- font 2 -->
	<link rel="preconnect" href="https://fonts.googleapis.com/" />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap"
		rel="stylesheet" />
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="loader"></div>
	</div>

	<!-- Header Start -->
	<header>
		<!-- container start -->
		<div class="container">
			<!-- navigation bar -->
			<nav class="navbar navbar-expand-lg">
				<a class="navbar-brand" href="index.html">
					<img src="<?php echo base_url('assets/front-end/images/logo.png'); ?>" alt="Logo" />
				</a>
				<button
					class="navbar-toggler"
					type="button"
					data-toggle="collapse"
					data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<!-- <i class="icofont-navigation-menu ico_menu"></i> -->
						<span class="toggle-wrap">
							<span class="toggle-bar"></span>
						</span>
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav m-auto">
						<!-- secondery menu start -->
						<li class="nav-item has_dropdown">
							<a class="nav-link" href="#home_sec">Home</a>
						</li>
						<!-- secondery menu end -->

						<li class="nav-item">
							<a class="nav-link" href="#feature_sec">About us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#why_sec">Service</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#galleryId">Gallery</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- navigation end -->
		</div>
		<!-- container end -->
	</header>

	<!-- Jquery-js-Link -->
	<script src="<?php echo base_url('assets/front-end/js/jquery.js'); ?>"></script>
	<!-- owl-js-Link -->
	<script src="<?php echo base_url('assets/front-end/js/owl.carousel.min.js'); ?>"></script>
	<!-- bootstrap-js-Link -->
	<script src="<?php echo base_url('assets/front-end/js/bootstrap.min.js'); ?>"></script>
	<!-- aos-js-Link -->
	<script src="<?php echo base_url('assets/front-end/js/aos.js'); ?>"></script>
	<!-- Typed Js Cdn -->
	<script src="<?php echo base_url('assets/front-end/js/typed.min.js'); ?>"></script>
	<!-- main-js-Link -->
	<script src="<?php echo base_url('assets/front-end/js/main.js'); ?>"></script>

	<script>
		$("#typed").typed({
			strings: ["Fastest delivery", "Hygine Food", "5000+ Dishes."],
			typeSpeed: 100,
			startDelay: 0,
			backSpeed: 60,
			backDelay: 2000,
			loop: true,
			cursorChar: "|",
			contentType: "html",
		});

		// Fixed Discount Dish JS
		$(document).ready(function() {
			let cardBlock = document.querySelectorAll(".task_block");
			let topStyle = 120;

			cardBlock.forEach((card) => {
				card.style.top = `${topStyle}px`;
				topStyle += 30;
			});
		});

		// Scroll Down Window
		$(document).ready(function() {
			// Attach a click event handler to the button
			$("#scrollButton").click(function() {
				// Scroll down smoothly 200 pixels from the current position
				$("html, body").animate({
						scrollTop: $(window).scrollTop() + 600
					},
					800
				); // Adjust the speed (800ms) as needed
			});
		});
	</script>
</body>

</html>
