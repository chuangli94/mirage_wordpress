/**
 * custom.js
 *
 * Custom scripts.
 */


 /*====================================
    Preloader
    ======================================*/
	
  	
( function( $ ) {

	// Create empty var msnry.
	var msnry;
	jQuery( document ).ready(function($){

		var $masonry_boxes = $( '.masonry-entry' );
		$masonry_boxes.hide();

		var $container = $( '#masonry-loop' );
		$container.imagesLoaded( function(){
			$masonry_boxes.fadeIn( 'slow' );
			$container.masonry({
				itemSelector : '.masonry-entry'
			});
		});

	});
	
	
	
	
	
	

	$( document ).ready(function($){

		// Implment popup for image in masonry
		$( '#masonry-loop' ).photobox('a.popup-link',{
			time:0,
			zoomable:false,
			single: true
		});
		// Implment popup for image in gallery shortcode
		$( 'div.gallery' ).photobox( "a[href$=\'jpg\'],a[href$=\'jpeg\'],a[href$=\'png\'],a[href$=\'bmp\'],a[href$=\'gif\'],a[href$=\'JPG\'],a[href$=\'JPEG\'],a[href$=\'PNG\'],a[href$=\'BMP\'],a[href$=\'GIF\']",{
			zoomable:false
		});
		// Implment popup for images in single page
		$( 'div.entry-content' ).photobox("a[href$=\'jpg\'],a[href$=\'jpeg\'],a[href$=\'png\'],a[href$=\'bmp\'],a[href$=\'gif\'],a[href$=\'JPG\'],a[href$=\'JPEG\'],a[href$=\'PNG\'],a[href$=\'BMP\'],a[href$=\'GIF\']",{
			zoomable:false
		});
		
		
		
		

		// Implement go to top.
		if ( $( '#btn-scrollup' ).length > 0 ) {

			$( window ).scroll(function(){
				if ($( this ).scrollTop() > 100) {
					$( '#btn-scrollup' ).fadeIn();
				} else {
					$( '#btn-scrollup' ).fadeOut();
				}
			});

			$( '#btn-scrollup' ).click(function(){
				$( "html, body" ).animate( { scrollTop: 0 }, 600 );
				return false;
			});
		}

	});
	
	//Fixed top.
	
	
	
function main() {

(function () {
   'use strict';

   /* ==============================================
  	Testimonial Slider
  	=============================================== */ 

  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });

    /*====================================
    Preloader
    ======================================*/
	
  	$(window).load(function() {

   	// will first fade out the loading animation 
    	$("#status").delay(0).fadeOut("slow")
    	// will fade out the whole DIV that covers the website. 
    	$("#preloader").delay(0).fadeOut("slow")     

  	}) 
    /*====================================
    Show Menu on Book
    ======================================*/
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 100;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
        } else {
            $('.navbar-default').removeClass('on');
        }
    });

    $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 80
    })

  	$(document).ready(function() {
  	  $("#team").owlCarousel({
  	 
  	      navigation : false, // Show next and prev buttons
  	      slideSpeed : 300,
  	      paginationSpeed : 400,
  	      autoHeight : true,
  	      itemsCustom : [
				        [0, 1],
				        [450, 2],
				        [600, 2],
				        [700, 2],
				        [1000, 4],
				        [1200, 4],
				        [1400, 4],
				        [1600, 4]
				      ],
  	  });

  	  $("#clients").owlCarousel({
  	 
  	      navigation : false, // Show next and prev buttons
  	      slideSpeed : 300,
  	      paginationSpeed : 400,
  	      autoHeight : true,
  	      itemsCustom : [
				        [0, 1],
				        [450, 2],
				        [600, 2],
				        [700, 2],
				        [1000, 4],
				        [1200, 5],
				        [1400, 5],
				        [1600, 5]
				      ],
  	  });

      $("#testimonial").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true
        });

  	});

 $("#homegallery").owlCarousel({
        items : 4,
		autoPlay : true,
		autoplayTimeout:6000,
        autoplayHoverPause:true,
		
      });
	  
	   $("#homegallery2").owlCarousel({
        items : 4,
		autoPlay : true,
		autoplayTimeout:6000,
        autoplayHoverPause:true,
		
      });
	  



  	/*====================================
    Portfolio Isotope Filter
    ======================================*/
    $(window).load(function() {
        var $container = $('.portfolio-items');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
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

    });

  	/*====================================
    WOW JS
    ======================================*/	

	new WOW().init();
	//smoothScroll
	smoothScroll.init();


	
}());


}
main();
		
		
			
	 
	jQuery(window).load(function() {
	"use strict";
        // will first fade out the loading animation
	jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(1000).fadeOut("slow");
})
	
		
		/*====================================
    WOW JS
    ======================================*/	

	 wow = new WOW(
    {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       50,          // default
      mobile:       true,       // default
      live:         true        // default
    }
  )
  wow.init();
	//smoothScroll
	

		

} )( jQuery );
