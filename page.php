<?php get_header(); ?>
<div class="container">
	

	<div id="content" class="col_content">
	
		<?php breadcrumb_trail('echo=1&separator=/'); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'templates/content', 'page' ); ?>
		<?php endwhile; endif; ?>

	</div><!-- /content -->

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>