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

get_header(); ?>
<div class="" align="center">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active slide1 ">
        <img src="http://www.nakshaa.net/wp-content/uploads/2016/05/banner_3.jpg" alt=""  class="img-responsive">
     </div>

      <div class="item slide2 ">
        <img src="http://www.nakshaa.net/wp-content/uploads/2016/05/banner_1.jpg" alt=""  class="img-responsive">
      </div>
      
      <div class="item slide3 ">
        <img src="http://www.nakshaa.net/wp-content/uploads/2016/05/banner_2.jpg" alt=""  class="img-responsive">
      </div>
       
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicons glyphicons-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicons glyphicons-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    
  </div>

</div>

        <section class="pro-cat tb-pic-container "  data-stellar-background-ratio="0.5">
        <div class="container">
       
        
        
       
        
        
        </div>
        </section>
        <section class="saree_section">
        <div class="" align="center">
        <div class="saree_ad tb-pic-container " style="background:url(http://www.nakshaa.net/wp-content/uploads/2016/05/section21_bg.jpg) top center;" data-stellar-background-ratio="0.5" >
        <img alt="" class="img-responsive" src="http://www.nakshaa.net/wp-content/uploads/2016/04/ad_banner.jpg" />
        
        </div>
        </div>
      
        
       
        </section>
        
        
	<section class="featured_header tb-pic-container " style="background:url(http://www.nakshaa.net/wp-content/uploads/2016/05/section4.jpg) top center;" data-stellar-background-ratio="0.5">
 <div class="container">
    <h1>Featured Products</h1>
    </div>	
</section>		
<section class="featured_section">
 <div class="container">
       <ul id="owl-carousel2" class="owl-carousel owl-theme owl-loaded featured_product" >

        <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'featured', 'stock' => 1, 'posts_per_page' => 5, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                    <li class="item">    
<div class="proimg"> 
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                           
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" class="img-responsive" />'; ?>
                           </a>
                           </div>
                           <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <h4><?php the_title(); ?></h4></a>

                        	   <p class="price"><?php echo $product->get_price_html(); ?></p><br>
                               <div align="center">
<a class="mybtn" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                           View Detail</a>
                        </div>

                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                    </li><!-- /span3 -->
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>

    </ul><!-- /row-fluid -->
    <div class="clearfix "></div>
    </div>
</section><!-- /recent -->
<div class="clearfix "></div>



<?php get_footer(); ?>
