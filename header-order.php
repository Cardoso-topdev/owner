<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<?php wp_head(); ?>
</head>

<?php $body_class = 'order-page'; ?>
	<body <?php body_class($body_class); ?>>
		<div class="wrapper">
			<header class="header _order">
				<div class="header-menu-wrapper">
					<div class="container">
						<div class="logo">
							<a href="https://owner.com">
								<img alt="logo" data-src="<?php echo get_template_directory_uri( ); ?>/images/landing/logo.svg" class="lazyload"
									src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
								<noscript>
									<img alt="logo" data-src="<?php echo get_template_directory_uri( ); ?>/images/landing/logo.svg" class="lazyload"
										src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
									<noscript>
										<img alt="logo" data-src="<?php echo get_template_directory_uri( ); ?>/images/landing/logo.svg" class="lazyload"
											src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
										<noscript>
											<img src="<?php echo get_template_directory_uri( ); ?>/images/landing/logo.svg" alt="logo">
										</noscript>
									</noscript>
								</noscript>
							</a>
						</div>
					</div>
				</div>
			</header>