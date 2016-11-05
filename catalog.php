<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>
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
    <!-- <script src="libs/new.owl/assets/js/bootstrap-transition.js"></script> -->
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
	
	<section class="db-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<?php require_once('includes/sidebar.php'); ?>
				</div>
				<div class="col-md-8 col-sm-8 col-xs-12">
					<!-- Место для ваших includ-ов -->
					<?php require_once('includes/newandpopular.php'); ?>
					<?php require_once('includes/hits.php'); ?>
					<?php require_once('includes/pagination.php'); ?>
				</div>
			</div>
		</div>
	</section>

<section class="dg-slider">
	<div class="container">
		<div class="row wor">
			<div id="owl-demo" class="owl-carousel owl-theme">
			  <div class="item"><img src="img/slide1.png" alt=""></div>
			  <div class="item"><img src="img/slide2.png" alt=""></div>
			  <div class="item"><img src="img/slide3.png" alt=""></div>
			  <div class="item"><img src="img/slide4.png" alt=""></div>
			  <div class="item"><img src="img/slide5.png" alt=""></div>
			  <div class="item"><img src="img/slide6.png" alt=""></div>
			  <div class="item"><img src="img/slide7.png" alt=""></div>
			  <div class="item"><img src="img/slide8.png" alt=""></div>
			  <div class="item"><img src="img/slide3.png" alt=""></div>
			  <div class="item"><img src="img/slide1.png" alt=""></div>
			  <div class="item"><img src="img/slide5.png" alt=""></div>
			  <div class="item"><img src="img/slide4.png" alt=""></div>
			  <div class="item"><img src="img/slide6.png" alt=""></div>
			</div>
		</div>
	</div>
</section>

<footer class="dg-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<ul>
						<li><a href="#">Главная</a></li>
						<li><a href="#">Магазин</a></li>
						<li><a href="#">Бренд</a></li>
						<li><a href="#">Оплата и доставка</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<ul>
						<li><a href="#">Интернет-магазин</a></li>
						<li><a href="#">Новости</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="#">Информация</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<ul>
						<li><a href="#">Наш адрес</a></li>
						<li><a href="#">Напишите нам</a></li>
						<li><a href="#">О компании</a></li>
					</ul>
				</div>
				<div class="clear"></div>
				<div class="leftbottom">
					<div class="col-md-5 col-sm-5 col-xs-12 logo nopadding">
						<img src="img/logo-footer.png" alt="">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<p>Контактные телефоны</p>
						<span><span class="light">+7 (495)</span> 749 85 35</span><br>
						<span><span class="light">+7 (919)</span> 997 90 20</span>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12 nopadding">
						<a href="#" data-toggle="modal" data-target="#myModal">Заказать звонок</a>
					</div>
				</div>
			</div>
			<div class="right-footer col-md-5">
				<div class="col-md-12">
					<div class="col-md-12">
						<span>Наш адрес:</span>
						<p>65 км. МКАД Строительный комплекс "Синдика". <br>
						Павильон ОВ-17</p>
						<div class="cartbox nopadding">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=MI5JyoYR0DOpkwrjU7tX5TYNo4eEPBXV&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bot">
		<div class="container">
			<div class="row relative">
				<div class="col-md-12">
					<p>© 2010 - 2016 гг. Стандарт Ресурс <br> 
					Интернет-магазин строительных материалов</p>
				</div>
				<div class="col-md-12 liveint">
					<a href="#"><img src="img/liveint.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
    	<div class="row dg-form">
    		<h4 class="dg-zakaz">Заказать звонок</h4>
	        <form action="#">
	        	<div class="col-md-12">
	        		<input type="text" name="username" placeholder="Представьтесь пожалуйста">
	        	</div>
	        	<div class="col-md-12">
	        		<input type="text" name="number" placeholder="Ваш номер телефона">
	        	</div>
	        	<span>Мы перезвоним вам в ближайшее время</span>
	        	<input type="submit" class="dg-button" name="submit" value="Перезвоните мне"><span class="dg-icon"></span>
	        </form>
    	</div>
      </div>
    </div>
  </div>
</div>

	
</body>
</html>