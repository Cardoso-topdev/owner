<?php $link = get_sub_field('cta_button'); ?>
<?php if( $link ): ?>
	<?php
		$link_url = $link['url'];
		$link_title = $link['title'];
		$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<p>
		<?php /*
		<a class="btn btn-gradient" data-fancybox="" data-src="<?php echo esc_url( $link_url ); ?>" href="javascript:;" target="<?php echo esc_attr( $link_target ); ?>">
		*/ ?>
		<a class="btn btn-gradien get-a-free-demo" href="#" target="<?php echo esc_attr( $link_target ); ?>">
			<?php echo esc_html( $link_title ); ?>
		</a>
	</p>
<?php endif; ?> 