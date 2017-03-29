<?php
/**
 * The main template file
 * Template name: Homepage
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
http://kvsoftwaretechnologies.com/
get_header(); ?>
<style>
.wds_slideshow_image_0{background-attachment:fixed; background-position:center 20% !important; }

</style>
<div class="" align="center">
<?php putRevSlider( "my-slider" ) ?>
</div>

<section id="product-section" >
<div class="container">
   
    <div class="row">
      <div class="col-md-6 col-sm-6 sectionpad animated fadeInUp" data-wow-delay="200ms">
       <div class="section-title nwblu animated fadeInDown">
    <?php the_field('product');?>
      </div>
        </div>
      <div class="col-md-6 col-sm-6  animated fadeInUp" data-wow-delay="200ms">
      <img src=" <?php the_field('productimage');?>" alt=""  class="img-responsive"/>
      </div>
     
     
      
    </div>
  </div>
</section>

<section id="video-section" >
<div class="container">
   
    <div class="row">
    <div class="section-title nwblu animated fadeInDown text-center">
      <h1><?php the_field('watchour');?></h1>
    </div>
      <div class="col-md-12 col-md-12  animated fadeInUp" data-wow-delay="200ms">
     
     <div class="full_backp"> 

<div class="more_size">

<div class="cascade-slider_container" id="cascade-slider">
      <div class="cascade-slider_slides">
             <?php $my_query = new WP_Query('post_type=videos&posts_per_page=50&order=des'); while ($my_query->have_posts()) : $my_query->the_post(); ?>        
        <div class="cascade-slider_item">
          <div class="all_slider">
          <div class="thubnel_p">

 


<video width="550" height="auto" autoplay id="videoPlayer" controls>
 <!-- MP4 Video -->
 <source src="<?php the_field('video_link');?>" type="video/mp4">
</video>


          </div>
          
          
          </div>
         
        </div>
      <?php endwhile; wp_reset_query(); ?>
          

    
        
      </div>


      <span class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev"> < </span>
      <span class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next"> > </span>
    </div>
    
</div>    

</div>
     
     
     
      </div>
      
     
     
     
      
    </div>
  </div>
</section>

<section id="what_we_do-section" class="text-center">
<div class="container">
    <div class="section-title nwblu animated fadeInDown">
      <h1><?php the_field('whatwedo');?></h1>
     
    </div>
<div class="row">
<ul class="what_we_do">

 <?php $args = array( 'posts_per_page' => 3, 'order'=> 'DSC', 'category' => 3);
 $myposts = get_posts( $args );
 foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

<li class="col-md-4 col-sm-4" >

<div class="wedo_block" >
<div class="wedo_thumb">
<?php the_post_thumbnail(full); ?>
</div> 

<div class="wedo_detail">

<h2 class="wedo_title"><?php the_title(); ?></h2>
<div class="clearfix "></div>
<div class="wedo_content">
<?php the_content(''); ?>
</div>
<div class="clearfix "></div>

</div> 

</div> 

</li>

  <?php endforeach; wp_reset_postdata();?>



</ul> 




</div>    
  </div>
</section>



<section id="testimonials-section" class="text-center tb-pic-container tb-pic1" style="background:url(<?php echo site_url(); ?>/wp-content/uploads/2017/03/blcakne1.jpg) top center;" data-stellar-background-ratio="0.5">

<div class="container">
    <div class="section-title testi nwit animated fadeInDown">
      <h1><?php the_field('testimonial');?></h1>
     
    </div>
    <div class="row">
    <div class="col-md-12">
    <?php echo do_shortcode( '[sp_testimonials design="design-3" per_row="2"]' ); ?>
    </div>
    </div>
  </div>
</section>


<section id="faq-section" >
<div class="container">
    <div class="section-title nwblu animated fadeInDown text-center">
      <h1><?php the_field('faq');?></h1>
     
    </div>
    <div class="row">
    <div class="col-md-12">
    <?php echo do_shortcode( ' [hrf_faqs] ' ); ?>
    </div>
    </div>
  </div>
</section>

<section id="request-section" class="text-center tb-pic-container tb-pic1" style="background:url(<?php echo site_url(); ?>/wp-content/uploads/2017/03/WONDERLAND1.jpg) top center;" data-stellar-background-ratio="0.5">
<div class="container">
    <div class="section-title nwit animated fadeInDown">
      <h1><?php the_field('inquiry');?></h1>
    
    </div>
    <div class="row">
    <div class="col-md-12">
     <p class="spu-open-77">Click Here</p>
    </div>
    </div>
  </div>
</section>










<section id="newsletter-section" class="text-center tb-pic-container tb-pic1" style="background:url(<?php echo site_url(); ?>/wp-content/uploads/2017/03/THE-WATERING.jpg) top center;" data-stellar-background-ratio="0.5">
  <div class="newsletter-inner">
   <div class="container">
    <div class="row">

      <div class="col-md-12 text-center">
      
      
        <div class="section-title nwit animated fadeInUp" >
        <?php the_field('subscribe');?>
      
         </div> 
          
          
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

<div id="mc_embed_signup">
<form action="//miragevr.us13.list-manage.com/subscribe/post?u=84e78c88f0d3616ae6f747b2f&amp;id=45da8ef8d9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">

<div class="form-group">
<div class="mc-field-group form-group-inner">


	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Your Email">
    <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button">
    <div style="clear:both;"></div>

</div>
</div>

<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>
   <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_84e78c88f0d3616ae6f747b2f_45da8ef8d9" tabindex="-1" value=""></div>
	 
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->





        
      </div>
      </div>
      
 
      
      <div class="row contact">
      
      
      <div class="col-md-6">
      <div class="supported">
      <?php the_field('supportedby');?>
    
           
      </div>
      </div>
      
      <div class="col-md-6">
       <?php the_field('contact');?>
       <div class="sec-info">                            
          <ul>
      
       <li><a href="<?php the_field('facebook');?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      
      <li><a href="<?php the_field('twtter');?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  
   <li><a href="mailto:<?php the_field('mail-id');?>"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
 
   </ul> 
   </div>
   
      </div>
           
      
    </div>
  </div>
 </div> 
</section>

<div class="clearfix "></div>


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cascade-slider.js"></script>

  <script>
    $('#cascade-slider').cascadeSlider({
      
    });
	

  </script>
  
<script>
    var videoPlayer = document.getElementById('videoPlayer');

    // Auto play, half volume.
 
    videoPlayer.volume = 0.5;

    // Play / pause.
    videoPlayer.addEventListener('click', function () {
        if (videoPlayer.paused == false) {
            videoPlayer.pause();
            videoPlayer.firstChild.nodeValue = 'Play';
        } else {
            videoPlayer.play();
            videoPlayer.firstChild.nodeValue = 'Pause';
        }
    });
	

	
$('.cascade-slider_item.prev video').trigger('pause');	
$('.cascade-slider_item.next video').trigger('pause');	
$('.cascade-slider_item.now video').trigger('play');	
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->

<?php get_footer(); ?>


