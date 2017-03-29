<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	
	
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                        
                        
						<div class="entry-thumbnail tb-pic-container" id="entrythumbnail"  style="background:url(<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
  echo $src[0]; ?>) top center;" data-stellar-background-ratio="0.5" >
						<img alt="" src="<?php bloginfo('template_directory'); ?>/images/innerslider_bg.png" />	
						</div>
						<?php endif; ?>
                          
                    </header><!-- .entry-header -->
                    </article><!-- #post -->
                <section id="" class="inner_page">
                
                    <div class="container">	
                        <div >
                        <h1 class="entry-title page-header wow fadeInDown"><?php the_title(); ?></h1>
                        </div>
                    
                        <div class="entry-content ">
                        <div class="row">
                        <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                       </div>
                        </div><!-- .entry-content -->
                    
                    
                    <?php endwhile; ?>
                    
                    
                </div>
                
                </section>
<?php get_footer(); ?>