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

<?php $show_mobile_form = get_field('show_mobile_form'); ?>
<?php $body_class = $show_mobile_form ? 'show-mobile-form' : ''; ?>
<body <?php body_class($body_class); ?>>
	<div class="page-wrapper">
		<?php if ( is_single() ) : ?>
		<header class="page-header page-header-single">
			<div class="container">
				<div class="page-header-f">
					<div class="left-header">
						<a href="<?php echo site_url(); ?>" class="h-logo">
							<?php if ( $header_logo = get_field('header_logo', 'option') ) : ?>
							<img class="logo-desktop" src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>" />
							<?php endif; ?>
							<?php if ( $header_logo_mobile = get_field('header_logo_mobile', 'option') ) : ?>
							<img class="logo-mobile" src="<?php echo $header_logo_mobile['url']; ?>" alt="<?php echo $header_logo_mobile['alt']; ?>" />
							<?php endif; ?>
						</a>
					</div>
					<div class="mid-header">
						<div class="mid-header-reading">
							<label>Now Reading</label>
							<p><?php the_title(); ?></p>
						</div>
						<ul class="mid-header-icons">
							<li>
								<a target="_blank" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via="><img src="<?php bloginfo('template_url'); ?>/images/icon-h1.svg" alt="" /></a>
							</li>
							<li>
								<a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/icon-h2.svg" alt="" /></a>
							</li>
							<li>
								<a target="_blank" href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/icon-h3.svg" alt="" /></a>
							</li>
						</ul>
						<div class="mid-header-next">
							<?php $prev_post = get_adjacent_post(); ?>
							<a href="<?php echo get_permalink( $prev_post->ID ); ?>">Read Next</a>
						</div>
					</div>
					
					<div class="right-header">
						<?php wp_nav_menu( array( 'menu' => 'Inner Menu', 'container' => '', 'menu_class' => 'h-nav' ) ); ?>
					</div>
				</div>
			</div>
		</header>
		<?php else : ?>
		<header class="page-header">
			<div class="container">
				<div class="page-header-f">
					<a href="<?php echo site_url(); ?>" class="h-logo">
						<?php  
							$header_logo = get_field('header_logo', 'option');
							$header_logo_url = $header_logo['url'];
						?>
						<img src="<?php echo $header_logo_url; ?>" alt="<?php echo $header_logo['alt']; ?>">
					</a>

					<?php if ( is_page('blog') ) : ?>
					
					<?php wp_nav_menu( array( 'menu' => 'Inner Menu', 'container' => '', 'menu_class' => 'h-nav' ) ); ?>
					
					<?php else : ?>

					<?php wp_nav_menu( array( 'menu' => 'Profitboss', 'container' => '', 'menu_class' => 'h-nav' ) ); ?>

					<?php $popup_button_text = get_field('popup_button_text', 'option'); ?>
					<?php $cta_button_override = get_field('cta_button_override'); ?>

					<div class="h-btn-w">
						<?php if ( $cta_button_override ) : ?>
						<a href="#!" id="analyze-form-btn" class="btn btn-sm"><?php echo $cta_button_override; ?></a>
						<?php else : ?>
						<a href="#!" id="analyze-form-btn" class="btn btn-sm"><?php echo $popup_button_text ? $popup_button_text : "Get Started"; ?></a>
						<?php endif; ?>
					</div>

					<?php endif; ?>

				</div>
			</div>
			<div class="mobile-form-bar" id="mobile-form-bar">
				<?php $mobile_sticky_heading = get_field('mobile_sticky_heading'); ?>
				<div class="ttl-wrap">
					<h3 class="ttl"><?php echo $mobile_sticky_heading ? $mobile_sticky_heading : "See how your restaurant compares"; ?></h3>
				</div>
				<form action="#" class="pp-a-form-mob">
					<div class="pp-a-form-mob__i-wrap">
						<input class="i-i" type="text" placeholder="Your Restaurant Name">
					</div>
					<div class="pp-a-form-mob__btn-wrap">
						<?php $mobile_sticky_button = get_field('mobile_sticky_button'); ?>
						<button class="s-b" type="submit"><?php echo $mobile_sticky_button ? $mobile_sticky_button : 'Analyze'; ?></button>
						
					</div>
				</form>
			</div>
		</header>
		<?php endif; ?>