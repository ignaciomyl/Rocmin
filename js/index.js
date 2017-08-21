// Script de galería
$(document).ready(function () {
    $('.gallery .filax:lt(1)').show();
    $('.less').hide();
    var items =  3;
    var shown =  1;
    $('.gallery .filax').not(':lt(1)').slideUp('fast');
    $('.more').click(function () {
        // $('.less').show();
        shown = $('.gallery .filax:visible').size()+1;
        if(shown< items) {$('.gallery .filax:lt('+shown+')').slideDown(900);}
        else {$('.gallery .filax:lt('+items+')').slideDown(900);
             $('.more').hide();
             $('.less').show();
             }
    });
    $('.less').click(function () {
        $('.gallery .filax').not(':lt(1)').slideUp(500);
        $('.more').show();
        $('.less').hide();
    });
});

//script de navbar scrolling
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
        $(".navbar").addClass("scrolling");
    } else {
        $(".navbar").removeClass("scrolling");
    }
});
