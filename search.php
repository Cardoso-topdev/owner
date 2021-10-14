<?php get_header(); ?>

<main>
	<section class="blog-list-s">
		<div class="container xs">
			<div class="s-h-wrap">
				<h2 class="s-ttl">Search: <?php the_search_query(); ?></h2>
			</div>
			<form action="<?php bloginfo('url'); ?>/" class="pp-search-form">
				<div class="i-f-wrap">
					<div class="i-w">
						<input type="text" name="s" class="i" placeholder="Search blogs" value="<?php the_search_query(); ?>">
					</div>
					<div class="b-w">
						<button type="submit" class="b">Search</button>
					</div>
				</div>
			</form>
			<ul class="blog-p-list">
				<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>" class="blog-p-list__item">
						<?php if ( has_post_thumbnail() ) : ?>
						<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog_image', true ); ?>
						<?php $img = $src[0]; ?>
						<?php $src_2x = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog_image_2x', true ); ?>
						<?php $img_2x = $src_2x[0]; ?>
						<span class="thumb">
							<img src="<?php echo $img; ?>" srcset="<?php echo $img_2x; ?> 2x" alt="<?php the_title(); ?>" width="349" height="234">
						</span>
						<?php endif; ?>
						<span class="info">
							<h3 class="i-ttl"><?php the_title(); ?></h3>
							<?php $content = get_the_content(); ?>
							<?php $content = wp_trim_words( $content, 20, '...' ); ?>
							<?php $content = apply_filters( 'the_content', $content ); ?>
							<span class="i-desc">
								<?php echo $content; ?>
							</span>
							<span class="i-p-link">Read Article</span>
						</span>
					</a>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</section>
</main>

<?php get_footer(); ?>