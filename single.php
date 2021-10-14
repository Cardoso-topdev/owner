<?php get_header(); ?>

<main>
	<section class="entry-s has-sidebar">
		<div class="container xs">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php $curr_id = get_the_ID(); ?>
			<div class="p-intro-s">
				<ul class="breadcrumbs">
					<li>
						<a href="<?php bloginfo('url'); ?>/">Home</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/blog/">Blog listing</a>
					</li>
					<li>
						<span><?php the_title(); ?></span>
					</li>
				</ul>
				<?php if ( $banner_image = get_field('banner_image') ) : ?>
				<div class="p-intro-img">
					<picture>
						<source srcset="<?php echo $banner_image['sizes']['blog_single_image']; ?>, <?php echo $banner_image['sizes']['blog_single_image_2x']; ?> 2x">
						<img src="<?php echo $banner_image['sizes']['blog_single_image']; ?>" alt="<?php the_title(); ?>" />
					</picture>
				</div>
				<?php endif; ?>
				<h1 class="p-ttl"><?php the_title(); ?></h1>
			</div>
			
			<div id="main">
				<div class="content">
					<div class="content-holder">
						<div class="entry">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="tablet-xl-visible">
					<div class="blog-posts-slider-wrapper">
						<div class="blog-posts-slider">
							<div class="swiper-wrapper">
								
								<?php $post_items = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => array($curr_id) ) ); ?>
								<?php while ( $post_items->have_posts() ) : $post_items->the_post(); ?>
								<div class="swiper-slide">
									<a href="<?php the_permalink(); ?>" class="blog-p-list__item">
										<?php if ( has_post_thumbnail() ) : ?>
										<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog_image', true ); ?>
										<?php $img = $src[0]; ?>
										<?php $src_2x = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog_image_2x', true ); ?>
										<?php $img_2x = $src_2x[0]; ?>
										<span class="thumb">
											<img src="<?php echo $img; ?>" srcset="<?php echo $img_2x; ?> 2x" alt="<?php the_title(); ?>" width="349" height="234" />
										</span>
										<?php endif; ?>
										
										<span class="info">
											<h3 class="i-ttl"><?php the_title(); ?></h3>
											<span class="i-desc">
												<?php $content = get_the_content(); ?>
												<?php $content = wp_trim_words( $content, 30, '...' ); ?>
												<?php $content = apply_filters( 'the_content', $content ); ?>
												<?php echo $content; ?>
											</span>
											
											<span class="i-p-link">Read Article</span>
										</span>
									</a>
								</div>
								<?php endwhile; ?>
								<?php wp_reset_query(); ?>
								
							</div>
						</div>
					</div>
				</div>
				<aside class="sidebar">
					<?php dynamic_sidebar('default'); ?>
				</aside>
			</div>
			<?php endwhile; ?>
			
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
	</section>
	
	<section class="blog-list-s tablet-xl-hidden">
		<div class="container xs">
			<div class="s-h-wrap small">
				<h2 class="s-ttl">Related Articles</h2>
			</div>
			<ul class="blog-p-list">
				<?php $related = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => array($curr_id) ) ); ?>
				<?php while ( $related->have_posts() ) : $related->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>" class="blog-p-list__item">
						<?php if ( has_post_thumbnail() ) : ?>
						<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog_image', true ); ?>
						<?php $img = $src[0]; ?>
						<?php $src_2x = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog_image_2x', true ); ?>
						<?php $img_2x = $src_2x[0]; ?>
						<span class="thumb">
							<img src="<?php echo $img; ?>" srcset="<?php echo $img_2x; ?> 2x" alt="<?php the_title(); ?>" width="349" height="234" />
						</span>
						<?php endif; ?>
						<span class="info">
							<h3 class="i-ttl"><?php the_title(); ?></h3>
							<span class="i-desc">
								<?php $content = get_the_content(); ?>
								<?php $content = wp_trim_words( $content, 30, '...' ); ?>
								<?php $content = apply_filters( 'the_content', $content ); ?>
								<?php echo $content; ?>
							</span>
							<span class="i-p-link">Read Article</span>
						</span>
					</a>
				</li>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>
	</section>
</main>

<div class="mobile-subscribe">
	<p>Get the best strategies for free. <a class="goto" href="#mobile-popup">Subscribe</a></p>
</div>

<?php while ( have_rows('single_form', 'option') ) : the_row(); ?>
<div id="mobile-popup" class="mobile-popup">
	<div class="popup-icon">
		<img src="<?php bloginfo('template_url'); ?>/images/icon-envelope.svg" alt="" />
	</div>
	<button class="popup-close">Close</button>
	<?php if ( $heading = get_sub_field('heading') ) : ?>
	<h3 class="mobile-popup-heading"><?php echo $heading; ?></h3>
	<?php endif; ?>
	
	<?php if ( $content = get_sub_field('content') ) : ?>
	<div class="mobile-popup-content">
		<?php echo $content; ?>
	</div>
	<?php endif; ?>
	
	<?php if ( $form_shortcode = get_sub_field('form_shortcode') ) : ?>
	<div class="mobile-popup-form">
		<?php echo do_shortcode($form_shortcode); ?>
	</div>
	<?php endif; ?>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>