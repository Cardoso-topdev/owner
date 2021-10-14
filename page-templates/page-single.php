<?php
/*
Template Name: Page Single
*/
?>
<?php get_header(); ?>

<main>
	<section class="entry-s">
		<div class="container xs">
			<?php while ( have_posts() ) : the_post(); ?>
			<div id="main">
				<div class="content">
					<div class="content-holder">
						<div class="entry entry-alt">
							<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
						</div>
						<?php while ( have_rows('single_form', 'option') ) : the_row(); ?>
						<div class="single-form">
							<div class="single-form-content">
								<?php if ( $heading = get_sub_field('heading') ) : ?>
								<h3 class="single-form-heading"><?php echo $heading; ?></h3>
								<?php endif; ?>
								<?php if ( $content = get_sub_field('content') ) : ?>
								<div class="single-form-text">
									<?php echo $content; ?>
								</div>
								<?php endif; ?>
								<?php if ( $form_shortcode = get_sub_field('form_shortcode') ) : ?>
								<div class="single-form-form">
									<?php echo do_shortcode($form_shortcode); ?>
								</div>
								<?php endif; ?>
							</div>
							<?php if ( $image = get_sub_field('image') ) : ?>
							<div class="single-form-image">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>
							<?php endif; ?>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</section>
</main>

<?php if ( is_user_logged_in() ) : ?>
<div class="mobile-subscribe">
	<p>Get all the best stories for free. <a class="goto" href="#mobile-popup">Subscribe Now</a></p>
</div>

<div id="mobile-popup" class="mobile-popup">
	<div class="popup-icon">
		<img src="<?php bloginfo('template_url'); ?>/images/icon-envelope.svg" alt="" />
	</div>
	<button class="popup-close">Close</button>
	<h3 class="mobile-popup-heading">Subscribe to our newsletter</h3>
	<div class="mobile-popup-content">
		<p>Sign up to get industry intel, advice, tools and honest takes from real people tackling their restaurants greatest challenges.</p>
	</div>
	<div class="mobile-popup-form">
		<?php echo do_shortcode('[formidable id=1]'); ?>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>