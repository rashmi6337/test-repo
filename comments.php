<div id="comments">

	<?php
		// Do not delete these lines
		defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );
	
		if ( post_password_required() ) { ?>
			<?php _e('This post is password protected. Enter the password to view comments.', 'unicon'); ?></div>
		<?php
			return;
		}
	?>
	
	<?php if ( have_comments() ) : ?>
		
		<div class="comments-list">
			<h3><?php comments_number(__('Comments', 'unicon'), __('1 Comment', 'unicon'), __('% Comments', 'unicon') );?></h3>
		
			<div class="navigation">
				<div class="next-posts"><?php previous_comments_link() ?></div>
				<div class="prev-posts"><?php next_comments_link() ?></div>
			</div>
		
			<ol class="commentlist clearfix">
				 <?php wp_list_comments(array( 'callback' => 'minti_comment' )); ?>
			</ol>
		
			<div class="navigation">
				<div class="next-posts"><?php previous_comments_link() ?></div>
				<div class="prev-posts"><?php next_comments_link() ?></div>
			</div>
		</div>
		
	 <?php else : // this is displayed if there are no comments so far ?>
	
		<?php if ( comments_open() ) : ?>
			<!-- If comments are open, but there are no comments. -->
	
		 <?php else : // comments are closed ?>
			<p class="hidden"><?php _e('Comments are closed.', 'unicon'); ?></p>
	
		<?php endif; ?>
		
	<?php endif; ?>
		
		
	<?php if ( comments_open() ) : ?>

		<div class="comments-reply">

		<?php
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );

			//Custom Fields
			$fields =  array(
				'author'=> '<div id="respond-inputs" class="clearfix"><p><input name="author" type="text" value="' . __('Name (required)', 'unicon') . '" size="30"' . $aria_req . ' /></p>',
				
				'email' => '<p><input name="email" type="text" value="' . __('E-Mail (required)', 'unicon') . '" size="30"' . $aria_req . ' /></p>',
				
				'url' 	=> '<p class="last"><input name="url" type="text" value="' . __('Website', 'unicon') . '" size="30" /></p></div>',
			);

			//Comment Form Args
	        $comments_args = array(
				'fields' => $fields,
				'title_reply'=> __('Leave a reply', 'unicon'),
				'comment_field' => '<div id="respond-textarea"><p><textarea id="comment" name="comment" aria-required="true" cols="58" rows="10" tabindex="4"></textarea></p></div>',
				'label_submit' => __('Submit Comment','unicon')
			);
			
			// Show Comment Form
			comment_form($comments_args); 
		?>

		</div>	

	<?php endif; // if you delete this the sky will fall on your head ?>

</div>