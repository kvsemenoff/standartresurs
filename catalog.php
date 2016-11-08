<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Каталог</title>
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
	<?php require_once('includes/test.php'); ?>
	<section class="db-wrapper db-wrapper2">
		<div class="container">
			<div class="dd-brad-crumps">
				<a class="dd-f-b" href="#">Главная</a>
				<span><img src="img/b-str.png" alt=""></span>
				<a href="#">Пиломатериалы</a>
				<span><img src="img/b-str.png" alt=""></span>
				<span>Фанера и ОСБ</span>
			</div>
			<div class="main-content-left">
				<?php require_once('includes/sidebar-index2.php'); ?>
			</div>
			<div class="main-content-right">
				<!-- Место для ваших includ-ов -->
				<div class="dd-poisk-wrap">
						<form class="dd-poisk" action="#">
							<input class="dd-input" placeholder="Поиск по сайту" type="text">
							<a class="dd-button" href="#">Найти на сайте</a>
							<div class="dd-poisk-txt hidden-xs hidden-sm">
								<span>Например:<a class="dd-y" href="#">штукатурка</a></span>
							</div>
						</form>
					</div>
				<?php require_once('includes/materials.php'); ?>
				<div class="dd-select-wrap">
						<div class="dd-select-txt">
							<span>Соритровать по</span>
						</div>
						<div  class="az-select az-margin-bottom10">
							<select name="" id="">
								<option value="1">Цене</option>
								<option value="2">Типу</option>
								<option value="3">Цене</option>
								<option value="4">Типу</option>
							</select>
						</div>
						<a href="#">
							<div class="dd-sort">
							<div class="dd-im-sp">
								
							</div>
							<!-- <i class="fa fa-th-list" aria-hidden="true"></i> -->
							<span>Список</span>
							</div>
						</a>
						<a href="#">
							<div class="dd-sort dd-sort2">
							<div class="dd-im-pl">
							
							</div>
							<!-- <i class="fa fa-th" aria-hidden="true"></i> -->
							<span>Плитка</span>
							</div>
						</a>
						<div class="clearfix"></div>
					</div>
				<?php require_once('includes/newandpopular2.php'); ?>
				<?php require_once('includes/hits.php'); ?>
				<?php require_once('includes/pagination.php'); ?>

<div class="df-new-popular-text df-new-popular-text2">
	<div class="dftext1">
		<h3>Для чего используется плиточный клей?</h3>
		<p>Кафельная плитка на сегодняшний день является одним из самых востребованных и популярных отделочных материалов. Её используют в ванной и на кухнях, в помещениях и вне помещений. Но чтобы она продержалась действительно долго, не доставляя лишних проблем владельцу, при монтаже необходимо использовать качественный клей плиточный.
		Он используется для максимально прочного прилегания плитки к любым типам поверхности – полу, потолку или стенам. И в первую очередь от него зависит, продержатся ли плитки многие годы, пока не возникнет необходимость демонтажа, или же отвалятся через считанные недели или месяцы.</p>
	</div>
	<div class="dftext2">
		<h3>Виды современного плиточного клея.</h3>
		<p>Одним из показателей, на который обращает внимание большинство непрофессионалов, покупая клей плиточный, это цена. А ведь есть ещё немало факторов, которые обязательно нужно учитывать при выборе материала. Сегодня на рынке можно увидеть большое количество самых разных марок плиточного клея, каждый из которых нередко имеет довольно узкую специализацию. О наиболее распространенных видах клея будет полезно знать.</p>
	</div>
</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<?php require_once('includes/slider.php'); ?>
	</section>
	
	<?php require_once('includes/footer2.php'); ?>

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