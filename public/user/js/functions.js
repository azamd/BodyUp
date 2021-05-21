/* ==============================================
Preload
=============================================== */
$(window).load(function() { // makes sure the whole site is loaded
'use strict';
    $('[data-loader="circle-side"]').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({'overflow':'visible'});
    $(window).scroll();
	$('.number').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
 	});
});
})

/* ==============================================
Sticky nav
=============================================== */
$(window).scroll(function(){
'use strict';
    if($(this).scrollTop() > 1){
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});

/* ==============================================
	Animation on scroll +  stickysidebar
=============================================== */
new WOW().init();

jQuery('#sidebar').theiaStickySidebar({
additionalMarginTop: 80
});

/* ==============================================
	Login/Register Modal
=============================================== */
jQuery(function($) {
	"use strict";
	function centerModal() {
		$(this).css('display', 'block');
		var $dialog = $(this).find(".modal-dialog"),
			offset = ($(window).height() - $dialog.height()) / 2,
			bottomMargin = parseInt($dialog.css('marginBottom'), 10);
		if (offset < bottomMargin) offset = bottomMargin;
		$dialog.css("margin-top", offset);
	}
	$('.modal').on('show.bs.modal', centerModal);
	$('.modal-popup .close-link').click(function(event){
		event.preventDefault();
		$('.modal').modal('hide');
	});
	$(window).on("resize", function() {
		$('.modal:visible').each(centerModal);
	});
});

/* ==============================================
	Collapse filter close on mobile
=============================================== */
var collapsefilters = $("#filters_col").find(".collapse");	
if( $(this).width() < 991 )
{
collapsefilters.removeClass('in');
collapsefilters.addClass('out');
}
else
{
collapsefilters.removeClass('out');
collapsefilters.addClass('in');
}

/* ==============================================
Common
=============================================== */
/* Tooltip*/
$('.tooltip-1').tooltip({html:true});
	
/* Accordion*/	
function toggleChevron(e) {
	'use strict';
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('icon_plus_alt2 icon_minus_alt2');
}
$('.panel-group').on('hidden.bs.collapse shown.bs.collapse', toggleChevron);

$("#filter_buttons button").click(function () {
    $(this).toggleClass("active");
    $(this).siblings().toggleClass("active",false);
});

/* ==============================================
Video modal dialog + Parallax + Scroll to top  + Hamburgher icon
=============================================== */
$(function () {
'use strict';
$('.video').magnificPopup({type:'iframe'});	/* video modal*/
$('.parallax-window').parallax({}); /* Parallax modal*/

/*  Image popups */
$('.magnific-gallery').each(function() {
	'use strict';
    $(this).magnificPopup({
        delegate: 'a', 
        type: 'image',
        gallery:{enabled:true}
    });
}); 

/* Hamburger icon*/
var toggles = document.querySelectorAll(".cmn-toggle-switch"); 
  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };
  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("active") === true) ? this.classList.remove("active") : this.classList.add("active");
    });
  };
  
  /* Scroll to top*/
  $(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
	$('#toTop').on("click",function() {
		$('body,html').animate({scrollTop:0},500);
	});	
	});	
	
/* Cat nav onclick active */		
var cat_nav = $("#cat_nav").find("li a");
cat_nav.on('click', function(){
	'use strict';
    cat_nav.removeClass('active');
    $(this).addClass('active');
});

/* ==============================================
Carousel
=============================================== */
  $('.carousel_testimonials').owlCarousel({
    items:1,
    loop:true,
	 autoplay:false,
    animateIn: 'flipInX',
	 margin:30,
    stagePadding:30,
    smartSpeed:450,
	responsiveClass:true,
    responsive:{
        600:{
            items:1
        },
		 1000:{
            items:1,
			nav:false
        }
    }
});