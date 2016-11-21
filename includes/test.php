<section class="df-bg hidden-xs hidden-sm">
	<div class="container">
		<div class="df-logotip">
			<div class="df-img-logo">
				<div class="df-img-wrap">
					<img src="/img/dd-logo2.png" alt="">
				</div>
				<div class="dfimgtext">
					<span>standart</span>
					<span>resurs</span>
				</div>
			</div>
			
			<div class="df-numbers">
				<span>+7 (495)<em> 749 85 35 </em></span>
				<span>+7 (919)<em> 997 90 20</em></span>			
			</div>
			<div class="df-basket">
				<a href="#">
					<span class="df-ellips">3</span>
					<span class="df-pricebasket">5 450 <em>р.</em></span>
				</a>
			</div>
			<div class="df-button-buy">
				<a href="#log-in" name="modal">Заказать звонок</a>
			</div>
			
			<div class="clear"></div>
		</div>			
	</div>
</section>


<div id="mask"></div>
<div id="log-in" class="window">
	<div class="dd-slide-wrap2">
		<div class="dd-close"></div>
		<div class="dd-popup-title">
			<h2>Заказать звонок</h2>
		</div>
        <div class="dd-pop-poisk-wrap">
            <form class="dd-pop-form" action="#">
                <input class="dd-inputs" placeholder="Представьтесь пожалуйста" type="text">
                <input class="dd-inputs" placeholder="Ваш номер телефона" type="text">
            
        </div>
        <div class="dd-popup-txt">
            <span>Мы перезвоним вам в ближайшее время</span>
        </div>
        <div class="dd-pop-button">
            <a href="#" class="dd-header-button">Перезвоните мне</a>
        </div>
        </form>
	</div>
</div>

<script>	
    $('a[name=modal]').click(function(e) {

    	//console.log("we in!");

        e.preventDefault(); 
        var id = $(this).attr('href');
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        $('#mask').fadeTo("slow",0.8); 
        var winH = $(window).height();
        var winW = $(window).width();
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement ||document.body.parentNode || document.body).scrollTop;
        $(id).css('top',  posTop+50);
        $(id).css('left', winW/2-$(id).width()/2);
        $(id).fadeIn(500); 
    });


    $('.window .dd-close').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();
        $('.window').hide();
    }); 
      
    $('#mask, .an-exit__krest').click(function () {
        $('#mask').hide();
        $('.window').hide();
    }); 
</script>