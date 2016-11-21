<!-- <div class="dd-test-modal">
	<a href="#log-in" name="modal" class="">00000000</a>
</div> -->

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

<!-- <script>	
    $('a[name=modal]').click(function(e) {
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
</script> -->