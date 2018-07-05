/*=========================================================================================
// INICIO MAIN JS
========================================================================================= */


jQuery(function($) {
	$(document).ready(function() {





//=====================================
// LOAD MORE
//=====================================

    size_li = $("#myList li").size();
    x=3;
    $('#myList li:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+3 <= size_li) ? x+3 : size_li;
        $('#myList li:lt('+x+')').show();
    });
    $('#showLess').click(function () {
        x=(x-3<0) ? 3 : x-3;
        $('#myList li').not(':lt('+x+')').hide();
    });


//====================================
// OWL CAROUSEL
//====================================

var break_sm = 768;
var break_md = 960;
var break_lg = 1200;

/*$('#depoimentos-carousel').owlCarousel({
    loop:true,
    dots: true,
    nav: true,
    responsiveClass: true,
    responsive:{
        0:{
            items:1,
            margin:50,
            nav:false
        },
        768:{
            items:2,
            margin:30,
            //nav:false
        },
        960:{
            items:3,
            margin:30,
            //nav:true,
        }
    }
})


$('#projetos-carousel').owlCarousel({
    loop:true,
    dots: true,
    nav: true,
    responsiveClass: true,
    responsive:{
        0:{
            items:1,
            margin:0,
            nav:false
        },
        768:{
            items:2,
            margin:0,
            //nav:false
        },
        960:{
            items:4,
            margin:0,
            //nav:true,
        }
    }
})




$('#naMidia-carousel').owlCarousel({
    loop:true,
    dots: true,
    nav: true,
    responsiveClass: true,
    responsive:{
        0:{
            items:1,
            margin:0,
            nav:false
        },
        768:{
            items:2,
            margin:0,
            //nav:false
        },
        960:{
            items:3,
            margin:0,
            //nav:true,
        }
    }
})



$('#depoimentos-carousel .owl-prev, #projetos-carousel .owl-prev, #naMidia-carousel .owl-prev').html('<svg class="NavigationButton--controllCarousel u-icon iconArrowLeft"><use xlink:href="#iconArrowLeft"></use></svg>').addClass('navController navController--left navController--prev navController--button navController--border navController--above u-borderRadius50 navController--button--uniSize u-positionAbsolute is-animating u-isActionable ');
$('#depoimentos-carousel .owl-next, #projetos-carousel .owl-next, #naMidia-carousel .owl-next').html('<svg class="NavigationButton--controllCarousel u-icon iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg>').addClass('navController navController--right navController--next navController--button navController--border navController--above u-borderRadius50 navController--button--uniSize u-positionAbsolute is-animating u-isActionable ');



*/


//Parallax
/*
// Stellar
$(function(){
      $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
      });
    });
*/



// /*=========================================================================================
// // CLOSE FUNCTION
// =========================================================================================*/

	});
});


//Paroller
  jQuery(function () {
       jQuery(window).paroller();
    });


// Abre o Lightbox
function LightboxCall(iFrame) {
  //alert( "clicked" );
  jQuery('#Lightbox--container').removeClass('Lightbox--inactive');
  jQuery('#Lightbox--container').addClass('Lightbox--active');
  jQuery('.Lightbox-window-content').html( iFrame );
}
//$( ".LightboxCall" ).on( "click", LightboxCall );


// Fecha o lightbox quando a tecla ESC é pressionada
function KeyUpEsc(evt) {
 
 if (evt.keyCode == 27) {
       jQuery('#Lightbox--container').removeClass('Lightbox--active');
       jQuery('#Lightbox--container').addClass('Lightbox--inactive');
       jQuery('.Lightbox-window-content').html( '' );
    }
}

jQuery(document).on( "keyup", KeyUpEsc );

// Mais formas de Fechar o LightBox

function LightboxClose() {
  //alert( "clicked" );
    jQuery('#Lightbox--container').removeClass('Lightbox--active');
   jQuery('#Lightbox--container').addClass('Lightbox--inactive');
   jQuery('.Lightbox-window-content').html( '' );
}

jQuery( ".LightboxClose" ).on( "click", LightboxClose );
