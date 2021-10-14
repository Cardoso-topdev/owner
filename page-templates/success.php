<?php
/*
Template Name: Success
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main>
	<div id="page-success">
		
		<?php while ( have_rows('content_modules') ) : the_row(); ?>
		
		<?php if ( get_row_layout() == 'intro' ) : ?>
		<div class="ss-intro">
			<div class="box">
				<?php if ( $heading = get_sub_field('heading') ) : ?>
				<h3 class="box-heading"><?php echo $heading; ?></h3>
				<?php endif; ?>
				<div class="box-content">
					<div class="box-icon">
						<img src="<?php bloginfo('template_url'); ?>/images/icon-green-check.svg" alt="" />
					</div>
					<?php if ( $title = get_sub_field('title') ) : ?>
					<h3 class="box-title"><?php echo $title; ?></h3>
					<?php endif; ?>
					<?php if ( $content = get_sub_field('content') ) : ?>
					<div class="box-text">
						<?php echo $content; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		
		
		<div class="ss-intro-mobile">
			<div class="box">
				<div class="box-icon">
					<img src="<?php bloginfo('template_url'); ?>/images/icon-white-check.svg" alt="" />
				</div>
				<?php if ( $heading_mobile = get_sub_field('heading_mobile') ) : ?>
				<h3 class="box-heading"><?php echo $heading_mobile; ?></h3>
				<?php endif; ?>
				<?php if ( $content = get_sub_field('content') ) : ?>
				<div class="box-content">
					<?php echo $content; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
		
		<?php endwhile; ?>
		
	</div>
</main>

<?php get_footer(); ?>



