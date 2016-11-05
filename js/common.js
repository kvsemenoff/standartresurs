

$(document).ready(function(){

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
