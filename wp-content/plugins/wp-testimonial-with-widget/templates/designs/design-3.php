	
<div id="quote-<?php echo $post->ID;?>" class="testimonial-box <?php echo $css_class.' '.$class;?>">
	<div class="testimonial-inner">
	
		

		<div class="testimonial-content">
		<div class="testimonials-text">
   			<p>
				
					<?php echo $post->post_content;?>
				
			</p>
		</div>
		</div>
	</div>
    <div class="full-testi">
    	<div class="testimonial_avatar">
			<?php if ( isset( $post->image ) && ( '' != $post->image ) && true == $args['display_avatar'] ){?>
						<div class="avtar-image"><?php echo $post->image;?></div>
						<?php }?>
		</div>
    <div class="name-test">
    <h4><?php echo $post->post_title?></h4>
    		<div class="testimonial-author">
		<?php if(true == $args['display_client'] && '' !=  $post->testimonial_client || true == $args['display_job'] && '' !=  $post->testimonial_job){?>
			<div class="testimonial-client">
			<?php $author = (true == $args['display_client'] && '' !=  $post->testimonial_client) ? '<strong>'.$post->testimonial_client.'</strong>' : "";
				echo $author;
			?>
			</div>
			<?php }?>
			<div class="testimonial-cdec">
			<?php 
				$testimonial_job = (true == $args['display_job'] && '' !=  $post->testimonial_job) ? $post->testimonial_job : "";
				$testimonial_job .= (true == $args['display_company'] && '' !=  $post->testimonial_company && true == $args['display_job'] && '' !=  $post->testimonial_job) ? " / ": "";
				
				if( $args['display_company'] == true && $post->testimonial_company != '' ){
					$testimonial_job .= (!empty($post->testimonial_url)) ? '<a href="'.$post->testimonial_url.'" target="_blank">'.$post->testimonial_company.'</a>' : $post->testimonial_company;
				}

				echo $testimonial_job;
			?>
			</div>
		</div>
		
    </div>
    </div>
    
    
</div>