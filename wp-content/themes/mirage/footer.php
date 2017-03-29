<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

</div><!-- #main -->
<style>
.site-footer{margin-top:0px!important;}
</style>
 
<footer id="colophon" class="site-footer" role="contentinfo" style="margin-top:0px!important;">

  <div class="footer-section">
       
              
            <div id="copyright-section" >
                    <div class="container">
                                             
                          <div class="row">
                                <div class="col-md-12 col-sm-12">
                                <div class="site-info">
                                
                               <p> <?php do_action( 'twentythirteen_credits' ); ?>
                                <a href="<?php echo site_url(); ?>"><?php printf( __( '© 2017  Mirage VR. All Rights Reserved.' )); ?></a>	</p>
                                </div><!-- .site-info -->
                                </div>
                                
                            
                        
                         </div>
                                
                    </div>  
             </div>  <!-- #copyright-section -->       
          
  </div><!-- #footer-section -->
</footer><!-- #colophon -->
        
        
        
</div><!-- #page -->
<div class="clearfix"></div>
<a href="#" class="scrollup" id="btn-scrollup"><i class="fa fa-level-up"></i></a>



	<?php wp_footer(); ?>
    



<!-- Javascripts
    ================================================== --> 
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jQuery.scrollSpeed.js"></script> 

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.stellar.min.js"></script>



<script>$(document).ready(function(){

//Check to see if the window is top if not then display button

	$(window).scroll(function(){

		if ($(this).scrollTop() > 100) {

			$('.scrollToTop').fadeIn();

		}

	});

	

	//Click event to scroll to top

	$('.scrollToTop').click(function(){

		$('html, body').animate({scrollTop : 0},800);

		return false;

	});

	

});


$(function() {

    $('a[href*="#"]:not([href="#"])').click(function() {

      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

        var target = $(this.hash);

        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

        if (target.length) {

          $('html, body').animate({

            scrollTop: target.offset().top -100

          }, 1000);

          return false;

        }

      }

    });

  });


</script>



<script>
	
	;( function ( document, window, index )
	{
		'use strict';

		var elSelector	= '.header',
			element		= document.querySelector( elSelector );

		if( !element ) return true;

		var elHeight		= 0,
			elTop			= 0,
			dHeight			= 0,
			wHeight			= 0,
			wScrollCurrent	= 0,
			wScrollBefore	= 0,
			wScrollDiff		= 0;

		window.addEventListener( 'scroll', function()
		{
			elHeight		= element.offsetHeight;
			dHeight			= document.body.offsetHeight;
			wHeight			= window.innerHeight;
			wScrollCurrent	= window.pageYOffset;
			wScrollDiff		= wScrollBefore - wScrollCurrent;
			elTop			= parseInt( window.getComputedStyle( element ).getPropertyValue( 'top' ) ) + wScrollDiff;

			if( wScrollCurrent <= 0 ) // scrolled to the very top; element sticks to the top
				element.style.top = '0px';

			else if( wScrollDiff > 0 ) // scrolled up; element slides in
				element.style.top = ( elTop > 0 ? 0 : elTop ) + 'px';

			else if( wScrollDiff < 0 ) // scrolled down
			{
				if( wScrollCurrent + wHeight >= dHeight - elHeight )  // scrolled to the very bottom; element slides in
					element.style.top = ( ( elTop = wScrollCurrent + wHeight - dHeight ) < 0 ? elTop : 0 ) + 'px';

				else // scrolled down; element slides out
					element.style.top = ( Math.abs( elTop ) > elHeight ? -elHeight : elTop ) + 'px';
			}

			wScrollBefore = wScrollCurrent;
		});

	}( document, window, 0 ));

	
	
</script>
<!-- Javascripts



    ================================================== --> 
<script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
</body>
   
</html>