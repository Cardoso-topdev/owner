<?php
/*
Template Name: Full Width
Template Post Type: page, post
*/

get_header(); ?>

	<div id="content" class="col_fullwidth">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div <?php post_class('post') ?> id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content(); ?>
					<div class="clear clearfix"></div>
				</div><!-- /entry -->
				
			</div><!-- /post -->
		<?php endwhile; endif; ?>

	</div><!-- /content -->

<?php get_footer(); ?>