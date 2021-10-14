<?php
/*
Template Name: About
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main>
	<div id="page-about">
		
		<?php while ( have_rows('content_modules') ) : the_row(); ?>
		
		<?php if ( get_row_layout() == 'intro' ) : ?>
		<div class="pa-intro">
			<div class="container">
				<div class="box">
					<?php if ( $heading = get_sub_field('heading') ) : ?>
					<h3 class="box-heading heading-1"><?php echo $heading; ?></h3>
					<?php endif; ?>
					
					<div class="box-content text">
						<?php if ( $content = get_sub_field('content') ) : ?>
						<?php echo $content; ?>
						<?php endif; ?>
						
						<?php $link = get_sub_field('link'); ?>
						<?php if ( $link['title'] && $link['url'] ) : ?>
						<p><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if ( get_row_layout() == 'images' ) : ?>
		<div class="pa-images">
			<div class="container">
				<div class="box">
					<div class="box-images">
						<?php $i = 0; ?>
						<?php while ( have_rows('images') ) : the_row(); ?>
						<?php $i++; ?>
						<?php $normal = get_sub_field('normal'); ?>
						<?php $retina = get_sub_field('retina'); ?>
						<?php if ( $normal && $retina ) : ?>
						<div class="box-image box-image-<?php echo $i; ?>">
							<img src="<?php echo $normal['url']; ?>" srcset="<?php echo $retina['url']; ?> 2x" alt="" />
						</div>
						<?php endif; ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if ( get_row_layout() == 'simple_content' ) : ?>
		<div class="pa-simple-content">
			<div class="container">
				<div class="box">
					<?php if ( $heading = get_sub_field('heading') ) : ?>
					<h3 class="box-heading heading-2"><?php echo $heading; ?></h3>
					<?php endif; ?>
					<?php if ( $content = get_sub_field('content') ) : ?>
					<div class="box-content text">
						<?php echo $content; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if ( get_row_layout() == 'leadership' ) : ?>
		<div class="pa-leadership">
			<div class="container">
				<div class="box">
					<?php if ( $heading = get_sub_field('heading') ) : ?>
					<h3 class="box-heading heading-1"><?php echo $heading; ?></h3>
					<?php endif; ?>
					<div class="box-items">
						<?php $i = 0; ?>
						<?php while ( have_rows('items') ) : the_row(); ?>
						<?php $i++; ?>
						<div class="box-item box-item-<?php echo $i; ?>">
							<?php if ( $image = get_sub_field('image') ) : ?>
							<div class="box-item-image">
								<img src="<?php echo $image['sizes']['leadership_image']; ?>" srcset="<?php echo $image['sizes']['leadership_image_2x']; ?> 2x" alt="<?php echo $image['alt']; ?>" />
							</div>
							<?php endif; ?>
							<?php if ( $name = get_sub_field('name') ) : ?>
							<h3 class="box-item-name heading-2"><?php echo $name; ?></h3>
							<?php endif; ?>
							
							<div class="box-item-content text">
								<?php if ( $position = get_sub_field('position') ) : ?>
								<p><?php echo $position; ?></p>
								<?php endif; ?>
								<?php if ( $content = get_sub_field('content') ) : ?>
								<?php echo $content; ?>
								<?php endif; ?>
							</div>
							
							<ul class="box-item-icons">
								<?php if ( $linkedin_url = get_sub_field('linkedin_url') ) : ?>
								<li>
									<a href="<?php echo $linkedin_url; ?>" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/images/icon-linkedin.svg" alt="" />
									</a>
								</li>
								<?php endif; ?>
								<?php if ( $instagram_url = get_sub_field('instagram_url') ) : ?>
								<li>
									<a href="<?php echo $instagram_url; ?>" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/images/icon-instagram.svg" alt="" />
									</a>
								</li>
								<?php endif; ?>
								<?php if ( $twitter_url = get_sub_field('twitter_url') ) : ?>
								<li>
									<a href="<?php echo $twitter_url; ?>" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.svg" alt="" />
									</a>
								</li>
								<?php endif; ?>
							</ul>
							
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if ( get_row_layout() == 'investors' ) : ?>
		<div class="pa-investors">
			<div class="container">
				<div class="box">
					<?php if ( $heading = get_sub_field('heading') ) : ?>
					<h3 class="box-heading heading-1"><?php echo $heading; ?></h3>
					<?php endif; ?>
					<div class="box-items">
						<?php $i = 0; ?>
						<?php while ( have_rows('items') ) : the_row(); ?>
						<div class="box-item-wrapper">
							<div class="box-item box-item-<?php echo ( $i % 3 ) + 1; ?>">
								<?php if ( $name = get_sub_field('name') ) : ?>
								<h3 class="heading-2"><?php echo $name; ?></h3>
								<?php endif; ?>
								<?php if ( $position = get_sub_field('position') ) : ?>
								<div class="text">
									<p><?php echo $position; ?></p>
								</div>
								<?php endif; ?>
							</div>
						</div>
						<?php $i++; ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if ( get_row_layout() == 'news' ) : ?>
		<div class="pa-news">
			<div class="container">
				<div class="box">
					<?php if ( $heading = get_sub_field('heading') ) : ?>
					<h3 class="box-heading heading-1"><?php echo $heading; ?></h3>
					<?php endif; ?>
					<div class="box-items">
						<?php $items = get_sub_field('items'); ?>
						
						<?php $query = new WP_Query( array(
								'post_type' => 'post',
								'post__in' => $items,
								'posts_per_page' => -1
							) );
						?>
						
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="box-item-wrapper">
							<div class="box-item">
								<?php if ( has_post_thumbnail() ) : ?>
								<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'news_image', true ); ?>
								<?php $img = $src[0]; ?>
								<?php $src_2x = wp_get_attachment_image_src( get_post_thumbnail_id(), 'news_image_2x', true ); ?>
								<?php $img_2x = $src_2x[0]; ?>
								<div class="box-item-image">
									<a target="_blank" href="<?php the_permalink(); ?>">
										<img src="<?php echo $img; ?>" srcset="<?php echo $img_2x; ?> 2x" alt="" />
									</a>
								</div>
								<?php endif; ?>
								
								<h3 class="box-item-title heading-2">
									<a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<?php $content = get_the_content(); ?>
								<?php $content = wp_trim_words( $content, 20, '...' ); ?>
								<?php $content = apply_filters( 'the_content', $content ); ?>
								<div class="box-item-content">
									<?php echo $content; ?>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
						
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php endwhile; ?>
		
	</div>
</main>

<?php get_footer(); ?>



