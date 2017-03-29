<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>



			<?php /* The loop */ ?>
			<?php if ( have_posts() ) : ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                        
                        
						
  
  <div class="archive-thumbnail tb-pic-container" id="archivethumbnail"  style="background:url(<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>);"data-stellar-background-ratio="0.5">
						<!--<img alt="" class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/innerslider_bg.png" />	-->
                        <?php endif; ?>
                        <div class="innerpage-header">
                        <div class="container">	
                        <div class="row" >
                        <div class="col-md-6">
                        <h1 class="archive-title  wow fadeInDown"><?php printf( __( '%s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>
                        
                        </div>
                        
                        <div class="col-md-6 wow fadeInDown" align="right">
                        <?php the_breadcrumb(); ?> 
                        </div>
                        
                        </div>
                        </div>
                        
						</div><!-- .innerpage-header -->
						
                        </div>  <!-- .entry-thumbnail -->
                    </header><!-- .entry-header -->
                    </article><!-- #post -->

                    <section id="" class="inner_page">
                
                    <div class="container">	
                        
                    
                        <div class="entry-content ">
                        <div class="row">
                        
                        <?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
            <div class="innerpage_gallery">
				<li class="col-lg-4 col-md-4  col-sm-6  col-xs-12">
       <div class="innergellery wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
         <div class="innergellery-thumb">
                <figure>
               <?php the_post_thumbnail(medium); ?>
              </figure> 
               
        </div> 
            
         <div class="innergellery_title"><p><a href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
  echo $src[0]; ?>" class=" fancybox" data-fancybox-group="gallery" title="" ><span class="gallery_title"><?php the_title(); ?></span></a></p></div>             
                  


               
                </div>        
                </li>
                </div>
			<?php endwhile; ?>
                        
                        </div>
                        </div>
                        
                     </div>
                     <?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
                     </section>   
	
<?php get_footer(); ?>
