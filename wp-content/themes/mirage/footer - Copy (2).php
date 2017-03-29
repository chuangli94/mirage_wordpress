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
		<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-section">
       
        
        <!-- Contact Section -->
<div id="contact-section" >
<div class="container">
<!-----------row1----------->
<div class="row">
<?php get_sidebar( 'main' ); ?>
<div class="col-md-12 col-sm-6 animated fadeInDown fo-col">
<a href="<?php echo site_url(); ?>" class=""><img src="<?php echo site_url(); ?>/wp-content/uploads/2017/02/zories_logo.png" alt="" title="" /></a>

</div>

<div class="col-md-3 col-sm-6 animated fadeInDown fo-col">
<h3>Quick Links</h3>
<div class="quick_links">
        <ul>
          <li><a href="#">Registration</a></li>
          <li><a href="#">Customer Login</a></li>
          <li><a href="#">Store/shopping cart</a></li>
          <li><a href="#">Online Payment</a></li>
          
        </ul>
      </div>
</div>

<div class="col-md-12 col-sm-6 animated fadeInDown fo-col">
<h3>Contact Info</h3>
<div class="contact_info">
        <p>
        Lorem Ipsum Dolor Sed<br />1134 Stret Sed Dolor <br />Phone: (123) 454-9500 <br />Email: info@zories.com
        </p>
      </div>
</div>

<div class="col-md-3 col-sm-6 animated fadeInDown">
<h3>Follow Us</h3>
      <div class="social">
        <ul>
          <li><a href="https://facebook.com/shopzories/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/zoriesshoes/" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="https://www.instagram.com/shopzories/" target="_blank"><i class="fa fa-instagram"></i></a></li>
          
        </ul>
      </div>
</div>
</div>
<!-----------row1 end----------->  
  
    
    
    
 <div class="clearfix"></div>
  </div>
</div>

        
        
        
        
        
        
        
        
        
        
        
        </div>
        <div class="container">
        <div class="fo-border"></div>
       
        
			
              <div class="row">
              <div class="col-md-6 col-sm-6">
			<div class="site-info">
           
			<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo site_url(); ?>"><?php printf( __( '© 2017. Zories. All Rights Reserved.' )); ?></a>	
			</div><!-- .site-info -->
            </div>
            <div class="col-md-6 col-sm-6">
            <div class="sec-info">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/02/sec.jpg" alt="" title="" />
            </div>
            </div>
            
            
            </div>
          </div>  
            
		</footer><!-- #colophon -->
	</div><!-- #page -->
<a href="#" class="scrollup" id="btn-scrollup"><i class="fa fa-level-up"></i></a>



	<?php wp_footer(); ?>
    
 <script type="text/javascript" src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="css/lightbox/jquery.fancybox.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/imageloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/photobox/jquery.photobox.js"></script>

<!-- Javascripts
    ================================================== --> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.stellar.js"></script>
   
<script>
    $(function(){
        $.stellar({
            horizontalScrolling: false,
            verticalOffset: -130
        });
    });
</script>    
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jQuery.scrollSpeed.js"></script> 
<script>
$(function() {  

    jQuery.scrollSpeed(100, 1500);

});
</script>  
</body>
   
</html>