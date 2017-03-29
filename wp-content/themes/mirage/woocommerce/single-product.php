<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	
    <article>
              <div class="container">
					<header class="entry-header">
						<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                        
                        
						<div class="entry-thumbnail tb-pic-container category_banner_image" style="background:url(
						<?php
						if(is_shop()){  						
						 echo $wbm_shop_page_stored_results_serialize_benner_src; 
						 
						 
						 
						}
						 ?>) top center;"  ><?php endif; ?>
                        <div class="innerpage-header">
                        	
                        <div class="row" >
                        <div class="col-md-6">
                        <h1 class="entry-title  wow fadeInDown"><?php the_title(); ?></h1>
                        <?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
                        </div>
                        
                        <div class="col-md-6 wow fadeInDown" align="right">
                        <?php // the_breadcrumb(); ?> 
                        
                        </div>
                        
                        </div>
                        
                        
						</div><!-- .innerpage-header -->
						
                        </div>  <!-- .entry-thumbnail -->
                    </header><!-- .entry-header -->
                    </div>
                    </article><!-- #post -->
    

		        
       
    <section id="" class="inner_page">
                
                    <div class="container">	

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>
</div></section>
<?php get_footer( 'shop' ); ?>
