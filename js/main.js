
$(document).ready(function(){
    $('.aboutme').hide();
    $('.autobio').hide();
    $('.lu').hide();
    $('.presentation').hide();
    $('.front').hide();
    $('.back').hide();
    $('.projo').hide();
    $('.titre_1').css({ cursor: "pointer" });

    $('.first').click(function(){
        $('.presentation').animate({height : 'toggle' }, 1500);
        $('.aboutme').animate({height : 'toggle' }, 1500);
    });

    $('.btn-message').click(function(){
        $('.autobio').slideDown();
        $('.lu').fadeIn(2000);
        $('.nbmsg').html("0");
    });

    $('.second').click(function(){
        $('.front').animate({height : 'toggle' },1000);
        $('.back').animate({height : 'toggle' },800);
    });

    $('.third').click(function(){
        $('.projo').animate({height : 'toggle' }, 950);
        
    });

});
