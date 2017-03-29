<?php
/**
 * The main template file
 * Template name: Blog Template
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
 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="container">
                    <header class="entry-header">
                    <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                                   
                    <div class="entry-thumbnail tb-pic-container" id="entrythumbnail"  style="background:url(<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
                    echo $src[0]; ?>) top center;" ><?php endif; ?>
                        <div class="innerpage-header">
                        
                            <div class="row" >
                            
                                <div class="col-md-6 animated fadeInDown">
                                <h1 class="entry-title  animated fadeInDown"><?php the_title(); ?></h1>
                                <?php the_breadcrumb(); ?>
                                </div>
                                
                                <div class="col-md-6 wow fadeInDown" align="right">
                                <?php /*?><?php the_breadcrumb(); ?> <?php */?>
                                </div>
                            
                            </div>
                        
                        
                        </div><!-- .innerpage-header -->
                    
                   <!-- </div>-->  <!-- .entry-thumbnail -->
                    
                    </header><!-- .entry-header -->
                </div>
            </article><!-- #post -->
	
<section class="inner_page">
                     <div class="container">	
                        <div class="entry-content">
                        
                        	<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
                        </div><!-- .entry-content -->
                    
                 
                     <?php get_sidebar(); ?>
                    </div>
               
                
                </section>
<?php get_footer(); ?>
