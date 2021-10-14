<div <?php post_class('post') ?> id="post-<?php the_ID(); ?>">
		
	<div class="title">
		<?php if ( is_single() ) : ?>
		<h1><?php $title = get_field('custom_title'); if(!empty($title)) : echo $title; else : the_title(); endif; ?></h1>
		<?php else : ?>
		<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<?php endif; // is_single() ?>
	</div><!-- /title -->
			
	<div class="entry">
    	<?php if(get_post_type()=='post') : ?>
    	<div class="postmetadata">
    		<p><?php _e('Category:', 'am') ?> <?php the_category(', ') ?> | <?php comments_popup_link(__('Write Comment', 'am'), __('1 Comment', 'am'), __('% Comments', 'am')); ?><?php edit_post_link(__('Edit', 'am'), ' | ', ''); ?><br><?php _e('Posted by', 'am') ?> <?php the_author() ?> | <?php the_time(get_option('date_format')) ?><?php the_tags(' | '.__('Tags:', 'am').' ', ', ', ''); ?></p>
    	</div>
    	<?php endif; ?>
		<?php if ( !is_single() ) : // Only display Excerpts for not Single ?>
		<?php the_excerpt(); ?>
		<?php else : ?>
		<?php the_content(__('Read more', 'am')); ?>
		<div class="clear clearfix"></div>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'am' ) . '</span>', 'after' => '</div>' ) ); ?>
		<?php endif; ?>
	</div><!-- /entry -->
</div><!-- /post -->