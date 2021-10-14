 <?php if( have_rows('animation_images') ): ?>
	<?php while( have_rows('animation_images') ): ?>
		<?php the_row(); ?>
		<?php if( have_rows('images_for_animation_style_1') ): ?>
			<?php while( have_rows('images_for_animation_style_1') ): ?>
				<?php the_row(); ?>
				<div class="trigger-upcell">
				</div>
				<div class="img-animation upsell-animation">
					<?php /*
					<img class="upsell-body" src="<?php echo get_template_directory_uri( ); ?>/images/landing/animation/upcell/upcell-body.svg" alt="">
					<img class="upcell-title" src="<?php echo get_template_directory_uri( ); ?>/images/landing/animation/upcell/upcell-title.svg" alt="">
					<img class="upcell-img-one" src="<?php echo get_template_directory_uri( ); ?>/images/landing/animation/upcell/upcell-img01.png" alt="" srcset="<?php echo get_template_directory_uri( ); ?>/images/landing/animation/upcell/upcell-img01@2x.png 2x">
					<img class="upcell-img-two" src="<?php echo get_template_directory_uri( ); ?>/images/landing/animation/upcell/upcell-img02.png" alt="" srcset="<?php echo get_template_directory_uri( ); ?>/images/landing/animation/upcell/upcell-img02@2x.png 2x">
					<img class="upcell-btn" src="<?php echo get_template_directory_uri( ); ?>/images/landing/animation/upcell/upcell-btn.svg" alt="">
					*/ ?>

					<?php $image = get_sub_field( 'image_1' ) ?>
					<?php if( !empty( $image ) ): ?>
						<img class="upsell-body" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
					<?php endif; ?>
					<?php $image = get_sub_field( 'image_2' ) ?>
					<?php if( !empty( $image ) ): ?>
						<img class="upcell-title" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
					<?php endif; ?>

					<?php $image = get_sub_field( 'image_3' ) ?>
					<?php if( !empty( $image ) ): ?>
						<?php $bg_url = $image['sizes']['ci-6']; ?>
						<?php $bg_url_2x = $image['sizes']['ci-6-2x']; ?>
						<img class="upcell-img-one" src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
					<?php endif; ?>

					<?php $image = get_sub_field( 'image_4' ) ?>
					<?php if( !empty( $image ) ): ?>
						<?php $bg_url = $image['sizes']['ci-7']; ?>
						<?php $bg_url_2x = $image['sizes']['ci-7-2x']; ?>
						<img class="upcell-img-two" src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
					<?php endif; ?>
					
					<?php $image = get_sub_field( 'image_5' ) ?>
					<?php if( !empty( $image ) ): ?>
						<img class="upcell-btn" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
					<?php endif; ?>

				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>