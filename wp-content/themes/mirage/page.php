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
                        
                        	<?php while ( have_posts() ) : the_post(); ?>
                        
                        <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                          
                    <?php endwhile; ?>
                        </div><!-- .entry-content -->
                    
                 
                     
                    </div>
               
                
                </section>
                
<?php get_footer(); ?>