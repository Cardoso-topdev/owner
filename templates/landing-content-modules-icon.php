<?php $image = get_sub_field( 'icon' ) ?>
<?php if( !empty( $image ) ): ?>
	<div class="ico">
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
	</div>
<?php endif; ?>