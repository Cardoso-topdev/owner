<?php if( get_sub_field( 'show_testimonials' )): ?> 
	<!-- testimonial mobile-->
	<?php if( have_rows('testimonial') ): ?>
		<?php while( have_rows('testimonial') ): ?>
			<?php the_row(); ?>
			<div class="box-testimonials m-lg-visible mt-16">
				<?php if( $quote = get_sub_field( 'quote' )): ?> 
					<blockquote>
						<p>
							<?php echo $quote; ?>
						</p>
					</blockquote>
				<?php endif; ?>
				<div class="author-holder">
					<?php $image = get_sub_field( 'image' ) ?>
					<?php if( !empty( $image ) ): ?>
						<?php $bg_url = $image['sizes']['story-slider-person-img']; ?>
						<?php $bg_url_2x = $image['sizes']['story-slider-person-img-2x']; ?>
						<div class="image">
							<img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
							<?php if( $video_url = get_sub_field( 'video_url' )): ?> 
								<a class="btn-play _sm" data-fancybox="" data-type="" href="<?php echo $video_url; ?>">play</a>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<div class="description">
						<?php if( $name = get_sub_field( 'name' )): ?> 
							<h5 class="text-gradient mb-0"><?php echo $name; ?></h5>
						<?php endif; ?>
						<?php if( $owner_of = get_sub_field( 'owner_of' )): ?> 
							<p>Owner of <u><?php echo $owner_of; ?></u></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
<?php endif; ?>