<?php if( have_rows('animation_images') ): ?>
    <?php while( have_rows('animation_images') ): ?>
        <?php the_row(); ?>
        <?php if( have_rows('images_for_animation_style_3') ): ?>
            <?php while( have_rows('images_for_animation_style_3') ): ?>
                <?php the_row(); ?>
                <div class="trigger-setup">
                </div>
                <div class="img-animation setup-animation">
                    <?php $image = get_sub_field( 'image_1' ) ?>
                    <?php if( !empty( $image ) ): ?>
                        <img class="setup-body" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                    <?php endif; ?>
                    <?php $image = get_sub_field( 'image_2' ) ?>
					<?php if( !empty( $image ) ): ?>
						<?php $bg_url = $image['sizes']['ci-5']; ?>
						<?php $bg_url_2x = $image['sizes']['ci-5-2x']; ?>
						<img class="setup-card" src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
					<?php endif; ?>
                    <?php $image = get_sub_field( 'image_3' ) ?>
                    <?php if( !empty( $image ) ): ?>
                        <?php $bg_url = $image['sizes']['ci-10']; ?>
                        <?php $bg_url_2x = $image['sizes']['ci-10-2x']; ?>
                        <img class="setup-card01" src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                    <?php endif; ?>
                    <?php $image = get_sub_field( 'image_4' ) ?>
                    <?php if( !empty( $image ) ): ?>
                        <?php $bg_url = $image['sizes']['ci-10']; ?>
                        <?php $bg_url_2x = $image['sizes']['ci-10-2x']; ?>
                        <img class="setup-card02"  src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                    <?php endif; ?>
                    <?php $image = get_sub_field( 'image_5' ) ?>
                    <?php if( !empty( $image ) ): ?>
                        <?php $bg_url = $image['sizes']['ci-11']; ?>
                        <?php $bg_url_2x = $image['sizes']['ci-11-2x']; ?>
                        <img class="setup-card03" src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                    <?php endif; ?>
                    <?php $image = get_sub_field( 'image_6' ) ?>
                    <?php if( !empty( $image ) ): ?>
                        <?php $bg_url = $image['sizes']['ci-11']; ?>
                        <?php $bg_url_2x = $image['sizes']['ci-11-2x']; ?>
                        <img class="setup-card04" src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>