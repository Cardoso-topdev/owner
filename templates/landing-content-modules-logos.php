<?php if( get_sub_field( 'show_logos' )): ?> 
	<!-- logos -->
	<?php if( have_rows('logo_section') ): ?>
		<?php while( have_rows('logo_section') ): ?>
			<?php the_row(); ?>
			<?php if( get_sub_field( 'logos' ) ): ?>
				<div class="driver-parther py-4">
					<?php if( $heading = get_sub_field( 'heading' )): ?> 
					<h5 class="mb-2"><?php echo $heading; ?></h5>
					<?php endif; ?>
					<ul>
						<?php while( has_sub_field( 'logos' ) ): ?>
						<?php $image = get_sub_field( 'logo' ) ?>
						<?php if( !empty( $image ) ): ?>
						<li>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
						</li>
						<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif ?>
		<?php endwhile; ?>
	<?php endif; ?>
<?php endif; ?>