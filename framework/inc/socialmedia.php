<?php global $minti_data; ?>

<div class="social-icons clearfix">
	<ul>
		<?php if($minti_data['social_dribbble'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_dribbble']); ?>" target="_blank" title="<?php _e( 'Dribbble', 'unicon' ) ?>"><i class="fa fa-dribbble"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_facebook'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_facebook']); ?>" target="_blank" title="<?php _e( 'Facebook', 'unicon' ) ?>"><i class="fa fa-facebook"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_foursquare'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_foursquare']); ?>" target="_blank" title="<?php _e( 'Foursquare', 'unicon' ) ?>"><i class="fa fa-foursquare"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_flickr'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_flickr']); ?>" target="_blank" title="<?php _e( 'Flickr', 'unicon' ) ?>"><i class="fa fa-flickr"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_github'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_github']); ?>" target="_blank" title="<?php _e( 'Github', 'unicon' ) ?>"><i class="fa fa-github"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_googleplus'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_googleplus']); ?>" target="_blank" title="<?php _e( 'Google+', 'unicon' ) ?>"><i class="fa fa-google-plus"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_instagram'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_instagram']); ?>" target="_blank" title="<?php _e( 'Instagram', 'unicon' ) ?>"><i class="fa fa-instagram"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_linkedin'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_linkedin']); ?>" target="_blank" title="<?php _e( 'LinkedIn', 'unicon' ) ?>"><i class="fa fa-linkedin"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_pinterest'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_pinterest']); ?>" target="_blank" title="<?php _e( 'Pinterest', 'unicon' ) ?>"><i class="fa fa-pinterest"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_renren'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_renren']); ?>" target="_blank" title="<?php _e( 'Renren', 'unicon' ) ?>"><i class="fa fa-renren"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_rss'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_rss']); ?>" target="_blank" title="<?php _e( 'RSS', 'unicon' ) ?>"><i class="fa fa-rss"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_skype'] != "") { ?>
			<li><a href="<?php echo esc_attr($minti_data['social_skype']); ?>" target="_blank" title="<?php _e( 'Skype', 'unicon' ) ?>"><i class="fa fa-skype"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_soundcloud'] != "") { ?>
			<li><a href="<?php echo esc_attr($minti_data['social_soundcloud']); ?>" target="_blank" title="<?php _e( 'Soundcloud', 'unicon' ) ?>"><i class="fa fa-soundcloud"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_stackoverflow'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_stackoverflow']); ?>" target="_blank" title="<?php _e( 'Stack Overflow', 'unicon' ) ?>"><i class="fa fa-stack-overflow"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_twitter'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_twitter']); ?>" target="_blank" title="<?php _e( 'Twitter', 'unicon' ) ?>"><i class="fa fa-twitter"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_tumblr'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_tumblr']); ?>" target="_blank" title="<?php _e( 'Tumblr', 'unicon' ) ?>"><i class="fa fa-tumblr"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_vimeo'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_vimeo']); ?>" target="_blank" title="<?php _e( 'Vimeo', 'unicon' ) ?>"><i class="fa fa-vimeo-square"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_vk'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_vk']); ?>" target="_blank" title="<?php _e( 'VK', 'unicon' ) ?>"><i class="fa fa-vk"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_weibo'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_weibo']); ?>" target="_blank" title="<?php _e( 'Weibo', 'unicon' ) ?>"><i class="fa fa-weibo"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_xing'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_xing']); ?>" target="_blank" title="<?php _e( 'Xing', 'unicon' ) ?>"><i class="fa fa-xing"></i></a></li>
		<?php } ?>
		<?php if($minti_data['social_youtube'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['social_youtube']); ?>" target="_blank" title="<?php _e( 'YouTube', 'unicon' ) ?>"><i class="fa fa-youtube-play"></i></a></li>
		<?php } ?>
		<?php if(isset($minti_data['ownsocial1_name']) && $minti_data['ownsocial1_name'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['ownsocial1_url']); ?>" target="_blank" title="<?php echo esc_attr($minti_data['ownsocial1_name']); ?>"><i class="fa <?php echo esc_attr($minti_data['ownsocial1_icon']); ?>"></i></a></li>
		<?php } ?>
		<?php if(isset($minti_data['ownsocial2_name']) && $minti_data['ownsocial2_name'] != "") { ?>
			<li><a href="<?php echo esc_url($minti_data['ownsocial2_url']); ?>" target="_blank" title="<?php echo esc_attr($minti_data['ownsocial2_name']); ?>"><i class="fa <?php echo esc_attr($minti_data['ownsocial2_icon']); ?>"></i></a></li>
		<?php } ?>
	</ul>
</div>