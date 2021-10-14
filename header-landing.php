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

<!-- landing header -->
<body <?php body_class(); ?>>
	<div class="wrapper">
		<header class="header">
			<div class="header-menu-wrapper">
				<div class="container">
					<div class="logo">
						<a href="<?php echo home_url( ); ?>"><img src="<?php echo get_template_directory_uri( ); ?>/images/landing/logo.svg" alt="logo"></a>
					</div>
					<div class="nav-drop">
						<nav class="nav">
							<ul class="header-menu">
								<?php
									$args = array(
										'theme_location'    => 'landingmenu',
										'container'         => false,
										'container_class'   => false,
										'items_wrap'        => '%3$s',
										'menu_class'        => '',
							            // 'walker'         => new Add_Class_To_Link_Walker()
									);
									wp_nav_menu($args);
								?>
							</ul>
						</nav>
						<div class="tools-nav">
							<?php if( $landing_sign_in_url = get_field( 'landing_sign_in_url', 'option' )): ?> 
								<nav class="nav">
									<ul class="header-menu">
										<li>
											<a target="_blank" href="<?php echo $landing_sign_in_url; ?>">
												Sign In
											</a>
										</li>
									</ul>
								</nav>
							<?php endif; ?>
							<?php $link = get_field( 'landing_cta_button', 'option' ); ?>
							<?php if( $link ): ?>
							    <?php
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
								<a class="btn btn-md btn-gradient get-a-free-demo" data-src="<?php echo esc_url( $link_url ); ?>" href="javascript:;" target="<?php echo esc_attr( $link_target ); ?>">
									<?php echo esc_html( $link_title ); ?>
								</a>
							<?php endif; ?> 
						</div>
					</div>
					<button class="nav-opener"><span></span></button>
				</div>
			</div>
		</header>
