
$(document).ready(function(){

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

    $('.df-buy1click>a').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        $('#mask').fadeTo("slow",0.8); 
        var winH = $(window).height();
        var winW = $(window).width();
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement ||document.body.parentNode || document.body).scrollTop;
        $("#log-in2").css('top',  posTop+50);
        $("#log-in2").css('left', winW/2-$("#log-in2").width()/2);
        $("#log-in2").fadeIn(500); 
        $("#log-in2").css('display', 'block');
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

    
/*---------------------------------------------------------------*/

    $('.az-select').each(function(){
        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });

    $(".az-select").click(function(){
        $(this).find('.az-options').slideToggle(0);
        $(this).toggleClass('az-select-focus');
    });


    $('.main-slider').owlCarousel({
        loop: true,
        margin:5,
        items: 1,
        nav: true,
        autoplay: true,
        smartSpeed:1000,
        autoplayTimeout:5000,

        navigation : true,
        navigationText : ["<span><i class='fa fa-chevron-left' aria-hidden='true'></i></span>","<span><i class='fa fa-chevron-right' aria-hidden='true'></i>"],
        pagination : true,
      
        navText:['<span class="arrow-right">ff2222222222222</span>','<span class="arrow-left">ff2222222222222222222222222222</span>'],

        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
          
    });




   $(".dfbutton").on("click", function() {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();  

    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    }  
    else {
     // Don't allow decrementing below zero
      if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
       } else {
        newVal = 1;
      }
    }

  $button.parent().find("input").val(newVal);

});


 });

$(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({
      navigation : true,
      navigationText : ["",""],
      pagination : false,
      items : 8, 
      itemsDesktop : [1000,5], 
      itemsDesktopSmall : [900,4],
      itemsTablet: [600,2], 
      itemsMobile : false 
      
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })
      $(".play").click(function(){
        owl.trigger('owl.play',1000);
      })
      $(".stop").click(function(){
        owl.trigger('owl.stop');
      })


    });
function navigation_scroll(){

    //console.log("buttoned!");

    var offset = $('.dd-header-wrapper').height() || $(window).height() || 150;
    var scroll = $(document).scrollTop();

    if (scroll < 50) {
        $('.df-bg')
            .toggleClass('header-no-fixed', false)
             .toggleClass('header-fixed', false);
       
            
           
     }     
    else if (scroll >= offset) {
        $('.df-bg')
            .toggleClass('header-no-fixed', false)
            .toggleClass('header-fixed', true);
            
    }
    else if (scroll < offset - 50) {
        $('.df-bg')
            .toggleClass('header-fixed', true)
            .toggleClass('header-no-fixed', false);
            
    }
}


$(document).scroll(function(){
    navigation_scroll();


 
});
  
