<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<style>
.hentry {
    padding: 0px 15px;
}

</style>
                     
                             
            
<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-6'); ?>>
	




<div class="recent_event" >



<div class="recevent-thumb">

<a href="<?php the_permalink(); ?>"><figure><?php the_post_thumbnail(full); ?></figure></a>

</div> 

<div class="recevent-detail">

<h2 class="recevent_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<p class="postedon"><?php echo date('d M'); ?></p>



<div class="clearfix "></div>
<div class="recevent_content">

<?php the_content('Continue reading...'); ?>
</div>
<a href="<?php the_permalink(); ?>"  title="" class="readmore "> <span > Read More.. </span> </a>

<div class="clearfix "></div>



</div> 

 </div> 



	
</article><!-- #post -->





