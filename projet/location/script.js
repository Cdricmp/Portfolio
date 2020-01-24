/**************************************/
$(document).ready(function(){
    var $carrousel = $('.carrousel'), 
    $img = $('.carrousel img'), 
    indexImg = $img.length - 1, 
    i = 0, 
    $currentImg = $img.eq(i); 

    $img.css('display', 'none'); 
    $currentImg.css('display', 'block'); 

    $carrousel.after('<div class="controls"> <span class="prev"> ◄ </span> <span class="next"> ► </span> </div>');

    $('.next').click(function(){ 

    i++; // on incrémente le compteur

    if( i <= indexImg ){
        $img.css('display', 'none'); 
        $currentImg = $img.eq(i); 
        $currentImg.css('display', 'block');
    }
    else{
        i = indexImg;
    }

    });

    $('.prev').click(function(){ 

    i--; 

    if( i >= 0 ){
        $img.css('display', 'none');
        $currentImg = $img.eq(i);
        $currentImg.css('display', 'block');
    }
    else{
        i = 0;
    }
    });
});


$(document).ready(function(){
    var $carrousel1 = $('.carrousel1'), 
    $img = $('.carrousel1 img'), 
    indexImg = $img.length - 1, 
    i = 0, 
    $currentImg = $img.eq(i); 

    $img.css('display', 'none'); 
    $currentImg.css('display', 'block'); 

    $carrousel1.after('<div class="controls"> <span class="prev"> ◄ </span> <span class="next"> ► </span> </div>');

    $('.next').click(function(){ 

    i++; // on incrémente le compteur

    if( i <= indexImg ){
        $img.css('display', 'none'); 
        $currentImg = $img.eq(i); 
        $currentImg.css('display', 'block');
    }
    else{
        i = indexImg;
    }

    });

    $('.prev').click(function(){ 

    i--; 

    if( i >= 0 ){
        $img.css('display', 'none');
        $currentImg = $img.eq(i);
        $currentImg.css('display', 'block');
    }
    else{
        i = 0;
    }
    });
});

$(document).ready(function(){
    var $carrousel2 = $('.carrousel2'), 
    $img = $('.carrousel2 img'), 
    indexImg = $img.length - 1, 
    i = 0, 
    $currentImg = $img.eq(i); 

    $img.css('display', 'none'); 
    $currentImg.css('display', 'block'); 

    $carrousel2.after('<div class="controls"> <span class="prev"> ◄ </span> <span class="next"> ► </span> </div>');

    $('.next').click(function(){ 

    i++; // on incrémente le compteur

    if( i <= indexImg ){
        $img.css('display', 'none'); 
        $currentImg = $img.eq(i); 
        $currentImg.css('display', 'block');
    }
    else{
        i = indexImg;
    }

    });

    $('.prev').click(function(){ 

    i--; 

    if( i >= 0 ){
        $img.css('display', 'none');
        $currentImg = $img.eq(i);
        $currentImg.css('display', 'block');
    }
    else{
        i = 0;
    }
    });
});

$(document).ready(function(){
    var $carrousel3 = $('.carrousel3'), 
    $img = $('.carrousel3 img'), 
    indexImg = $img.length - 1, 
    i = 0, 
    $currentImg = $img.eq(i); 

    $img.css('display', 'none'); 
    $currentImg.css('display', 'block'); 

    $carrousel3.after('<div class="controls"> <span class="prev"> ◄ </span> <span class="next"> ► </span> </div>');

    $('.next').click(function(){ 

    i++; // on incrémente le compteur

    if( i <= indexImg ){
        $img.css('display', 'none'); 
        $currentImg = $img.eq(i); 
        $currentImg.css('display', 'block');
    }
    else{
        i = indexImg;
    }

    });

    $('.prev').click(function(){ 

    i--; 

    if( i >= 0 ){
        $img.css('display', 'none');
        $currentImg = $img.eq(i);
        $currentImg.css('display', 'block');
    }
    else{
        i = 0;
    }
    });
});




