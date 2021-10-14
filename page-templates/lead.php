<?php
/*
Template Name: Lead
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main>
	<div id="page-lead">
		<div class="container">
			<div class="box">
				<div class="box-content">
					<div class="box-back">
						<a href="#">Go Back</a>
					</div>
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="box-text">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
					<?php endwhile; ?>
					
					<?php while ( have_rows('cta') ) : the_row(); ?>
					<div class="box-cta box-cta-desktop">
						<div class="box-cta-text">
							<?php if ( $heading = get_sub_field('heading') ) : ?>
							<h3><?php echo $heading; ?></h3>
							<?php endif; ?>
							<?php if ( $content = get_sub_field('content') ) : ?>
							<?php echo $content; ?>
							<?php endif; ?>
						</div>
						<?php $button = get_sub_field('button'); ?>
						<?php if ( $button['title'] && $button['url'] ) : ?>
						<div class="box-cta-button">
							<a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
						</div>
						<?php endif; ?>
					</div>
					<?php endwhile; ?>
				</div>
				
				<?php while ( have_rows('sidebar') ) : the_row(); ?>
				<div class="box-sbar">
					<div class="box-sbar-icon">
						<img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt="" />
					</div>
					<?php if ( $heading = get_sub_field('heading') ) : ?>
					<h3 class="box-sbar-heading"><?php echo $heading; ?></h3>
					<?php endif; ?>
					<?php if ( $form_shortcode = get_sub_field('form_shortcode') ) : ?>
					<div class="box-sbar-form">
						<?php echo do_shortcode($form_shortcode); ?>
					</div>
					<?php endif; ?>
				</div>
				<?php endwhile; ?>
				
				<?php while ( have_rows('cta') ) : the_row(); ?>
				<div class="box-cta box-cta-mobile">
					<div class="box-cta-text">
						<?php if ( $heading = get_sub_field('heading') ) : ?>
						<h3><?php echo $heading; ?></h3>
						<?php endif; ?>
						<?php if ( $content = get_sub_field('content') ) : ?>
						<?php echo $content; ?>
						<?php endif; ?>
					</div>
					<?php $button = get_sub_field('button'); ?>
					<?php if ( $button['title'] && $button['url'] ) : ?>
					<div class="box-cta-button">
						<a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
					</div>
					<?php endif; ?>
				</div>
				<?php endwhile; ?>
				
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>



