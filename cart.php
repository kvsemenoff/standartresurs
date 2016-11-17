<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Карточка товара</title>
	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

	<link href="libs/new.owl/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="libs/new.owl/owl-carousel/owl.theme.css" rel="stylesheet">

</head>
<body>

    <script src="libs/new.owl/assets/js/jquery-1.9.1.min.js"></script> 
    <script src="libs/new.owl/owl-carousel/owl.carousel.js"></script>
	
	<script src="libs/new.owl/assets/js/bootstrap-collapse.js"></script>
<!--     <script src="libs/new.owl/assets/js/bootstrap-transition.js"></script> -->
    <script src="libs/new.owl/assets/js/bootstrap-tab.js"></script>

    <script src="libs/new.owl/assets/js/google-code-prettify/prettify.js"></script>
    <script src="libs/new.owl/assets/js/application.js"></script>

	<script src="libs/new.bootstrap/bootstrap.js"></script>
	<!-- <script src="libs/fancybox/jquery.fancybox.pack.js"></script> -->
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

	<script>
    	new WOW().init();
    </script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>

	<?php require_once('includes/header.php'); ?>
	<?php require_once('includes/test.php'); ?>
	
	<section class="db-wrapper dfbg">
		<div class="container">
		<div class="dd-brad-crumps">
			<a class="dd-f-b" href="#">Главная</a>
			<span><img src="img/b-str.png" alt=""></span>
			<a href="#">Пиломатериалы</a>
			<span><img src="img/b-str.png" alt=""></span>
			<span>Фанера и ОСБ</span>
		</div>
			<div class="main-content-left">
				<?php require_once('includes/sidebar.php'); ?>
			</div>
			<div class="main-content-right">
				<?php require_once('includes/cart-page.php'); ?>
				<?php require_once('includes/newandpopularcart.php'); ?>

			</div>
		</div>
	</section>
	<div class="hr-dashed"></div>
	<?php require_once('includes/slider.php'); ?>
	<?php require_once('includes/footer.php'); ?>
	
</body>
</html>

