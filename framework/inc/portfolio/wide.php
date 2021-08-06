<div class="portfolio-wide sixteen columns clearfix">
	
	<?php if( get_post_meta( get_the_ID(), 'minti_embed', true ) == "" ){ ?>
				
		<div class="flexslider">
            <ul class="slides">
                <?php $images = rwmb_meta( 'minti_screenshot', 'type=image_advanced&size=standard' );
	                if(is_array($images)){
						foreach ( $images as $image ) {
							echo "<li><img src='".esc_url($image['url'])."' width='".esc_attr($image['width'])."' height='".esc_attr($image['height'])."' alt='".esc_attr($image['alt'])."' /></li>";
						} 
					}
				?>
            </ul>
        </div>
			    
	<?php } else { ?>

		<div id="portfolio-embed">
		    <?php   
		    if (get_post_meta( get_the_ID(), 'minti_source', true ) == 'videourl') {  
		    	echo wp_oembed_get(esc_url(get_post_meta( get_the_ID(), 'minti_embed', true )));
		    }  
		    else {  
		        echo wp_kses(get_post_meta( get_the_ID(), 'minti_embed', true ), minti_expand_allowed_tags()); 
		    }  
		    ?>
	    </div>

	<?php } ?>
		
	<div class="portfolio-detail-title sixteen alpha omega columns">
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="portfolio-detail-description <?php if( get_post_meta( get_the_ID(), 'minti_portfolio-details', true ) == 1 ) { echo 'eleven alpha'; } else { echo 'sixteen alpha omega'; } ?> columns">
		<div class="portfolio-detail-description-text"><?php the_content(); ?></div>
	</div>
	
	<?php if( get_post_meta( get_the_ID(), 'minti_portfolio-details', true ) == 1 ) { ?>
	<div class="portfolio-detail-attributes five omega columns">
		<ul>
			<?php if( get_post_meta( get_the_ID(), 'minti_portfolio-client', true ) != "") { ?>
			<li class="clearfix"><strong><?php _e('Client', 'unicon'); ?></strong> <span><?php echo esc_html(get_post_meta( get_the_ID(), 'minti_portfolio-client', true )); ?></span></li>
			<?php } ?>	
			<li class="clearfix"><strong><?php _e('Date', 'unicon'); ?></strong> <span><?php the_date() ?></span></li>
			<li class="clearfix"><strong><?php _e('Tags', 'unicon'); ?></strong> <span><?php $taxonomy = strip_tags( get_the_term_list($post->ID, 'portfolio_filter', '', ', ', '') ); echo esc_html($taxonomy); ?></span></li>
			<?php if( get_post_meta( get_the_ID(), 'minti_portfolio-link', true ) != "") { ?>
			<li class="clearfix"><strong><?php _e('URL', 'unicon'); ?></strong> <span><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'minti_portfolio-link', true )); ?>" target="_blank"><?php _e('View Project', 'unicon'); ?></a></span></li>
			<?php } ?>	
		</ul>
	</div>
	<?php } ?>

</div> <!-- End of portfolio-wide -->