jQuery(document).ready(function() {
    "use strict";


/* ------- Preloader ------ */
jQuery(window).load(function() {
    jQuery(".status").fadeOut();
    jQuery(".preloader").delay(1000).fadeOut("slow");
});


/* -------- Appears Menu ------ */
	$(window).on('ready , scroll', function() {
	    if ($(window).scrollTop() > 30) {
	        $('.main-menu').addClass('minified');
	    } else {
	        $('.main-menu').removeClass('minified');
	    }
	});

/* ---------- Hide Menu-------- */
  jQuery(".nav a").on("click", function () {
      jQuery("#nav-menu").removeClass("in").addClass("collapse");
  });

/* --------- One Page Navigation -------- */
	$('#collapsingNavbar').onePageNav({
	    currentClass: 'active',
	    scrollSpeed: 500,
	    easing: 'linear'
	});

/* ---------- Wow Js ---------- */
var wow = new WOW(
  {
    boxClass:     'wow',      
    animateClass: 'animated', 
    offset:       250,        
    mobile:       true,       
    live:         true,       
    callback:     function(box) {
          }
  }
);
wow.init();

 
/* --------- Scroll Up --------- */
	$.scrollUp({
		scrollName: 'scrollUp', 
		scrollDistance: 300, 
		scrollFrom: 'top', 
		scrollSpeed: 5000, 
		easingType: 'linear', 
		animation: 'fade', 
		animationInSpeed: 200, 
		animationOutSpeed: 200, 
		scrollText: 'Scroll to top',
		scrollTitle: false, 
		scrollImg: true, 
		activeOverlay: false, 
		zIndex: 99998 
	});

/* ---------- lightbox ---------- */
	$('.featured-work-img').magnificPopup({
	  type: 'image',
	  gallery:{
	    enabled:true
	  }
	});

	$('.flickr-gallery-img').magnificPopup({
	  type: 'image',
	  gallery:{
	    enabled:true
	  }
	});


/* --------- Carousel Slider ---------- */

	// Feature Works
	$("#teams").owlCarousel({
		items : 3,
		itemsDesktop: [1199,1],
		itemsDesktopSmall: [979,1],
		itemsTablet: [768,1],
		itemsMobile : [520,1],
		autoPlay: 5000
	});

/* ------------ Stellar ----------- */
$(window).stellar({
	responsive: true,
    positionProperty: 'position'
});

/* ---------- ISoptope --------- */
  var $container = $('.portfolio-items');

  // filter items on button click
   $container.isotope({
          filter: '*',
          itemSelector: '.item',
          animationOptions: {
              duration: 750,
              easing: 'linear',
              queue: false
          }
      });


  $('#portfolio-filter ul li a').on('click',function(){
      var selector = $(this).attr('data-filter');
      $container.isotope({
          filter: selector,
          animationOptions: {
              duration: 750,
              easing: 'linear',
              queue: false
          }
      });
    return false;
  });

  var $optionSets = $('#portfolio-filter ul'),
         $optionLinks = $optionSets.find('a');

         $optionLinks.on('click',function(){
            var $this = $(this);
       
        if ( $this.hasClass('selected') ) {
            return false;
        }
     var $optionSet = $this.parents('#portfolio-filter ul');
     $optionSet.find('.selected').removeClass('selected');
     $this.addClass('selected');
  });

/* ------------ Home Slider ------------- */
$( '#slider' ).sliderPro({
	width: '100%',
    height: 600,
    fade: true,
    waitForLayers: true,
    buttons: true,
    autoplay: true,
    autoScaleLayers: false,
    slideAnimationDuration: 1500,
    breakpoints: {
        600: {
            height: 480
        }
	}
});


});

