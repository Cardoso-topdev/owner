 <?php if( have_rows('animation_images') ): ?>
	<?php while( have_rows('animation_images') ): ?>
        <?php the_row(); ?>
        <?php if( have_rows('images_for_animation_style_2') ): ?>
            <?php while( have_rows('images_for_animation_style_2') ): ?>
                <?php the_row(); ?>
                <div class="trigger-email">
                </div>
                <div class="img-animation email-animation">
                    <?php $image = get_sub_field( 'image_1' ) ?>
                    <?php if( !empty( $image ) ): ?>
                        <img class="email-body" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                    <?php endif; ?>
                    <?php $image = get_sub_field( 'image_2' ) ?>
                    <?php if( !empty( $image ) ): ?>
                        <?php $bg_url = $image['sizes']['ci-8']; ?>
                        <?php $bg_url_2x = $image['sizes']['ci-8-2x']; ?>
                        <img class="email-card01" src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                    <?php endif; ?>
                    <?php $image = get_sub_field( 'image_3' ) ?>
                    <?php if( !empty( $image ) ): ?>
                        <?php $bg_url = $image['sizes']['ci-9']; ?>
                        <?php $bg_url_2x = $image['sizes']['ci-9-2x']; ?>
                        <img class="email-card02" src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>