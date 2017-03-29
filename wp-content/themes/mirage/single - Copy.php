<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	




	
	
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header entry-header-blog">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                        
                        
						<div class="entry-thumbnail tb-pic-container" id="entrythumbnail"  style="top center;" >
						
                        <?php endif; ?>
                        <div class="innerpage-header">
                        <div class="container">	
                        <div class="row" >
                        <div class="col-md-12 " align="center">
                       <h1 class="entry-title entry-title-post  wow fadeInDown"><?php the_title(); ?></h1>
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
                        <div class="col-md-8">
                        <h1 class="entry-title entry-title-post  wow fadeInDown"><?php the_title(); ?></h1>
                        
                        <?php the_content(); ?>
                        
                        </div>
                       </div>
                        </div><!-- .entry-content -->
                    
                    
                    <?php endwhile; ?>
                    
                    
                </div>
                
                </section>
<?php get_footer(); ?>