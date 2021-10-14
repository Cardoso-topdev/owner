		<!-- landing footer -->
		<footer class="footer footer-landing">
			<div class="container">
				<div class="footer-holder">
					<div class="grid footer-info text-lg mb-5">
						<?php if( $landing_footer_text = get_field( 'landing_footer_text', 'option' )): ?> 
							<div class="col-8 col-lg-12">
								<?php echo $landing_footer_text; ?>
							</div>
						<?php endif; ?>
						<?php $link = get_field( 'landing_cta_button', 'option' ); ?>
						<?php if( $link ): ?>
						    <?php
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
							<div class="col-4 col-lg-12 text-right">
								<p>
									<?php /*
									<a class="btn btn-gradient" data-fancybox="" data-src="<?php echo esc_url( $link_url ); ?>" href="javascript:;" target="<?php echo esc_attr( $link_target ); ?>">
										<?php echo esc_html( $link_title ); ?>
									</a>
									*/ ?>
									<div class="o-cta">
										<div class="box-button">
											<a class="btn btn-gradient" href="#">
												Get a Free Demo
											</a>
										</div>
									</div>
								</p>
							</div>
						<?php endif; ?> 
					</div>
					<?php if( have_rows('f_contact_information', 'option' ) ): ?>
						<?php while( have_rows('f_contact_information', 'option' ) ): ?>
							<?php the_row(); ?>
							<div class="grid grid-contact mb-19 mb-md-2">
								<?php if( $phone_number = get_sub_field( 'phone_number' )): ?> 
									<div class="col-3 col-lg-6 col-md-12 pb-md-2">
										<h5>
											Sales
										</h5>
										<p>
											<a href="tel:<?php echo str_replace( array( '(', ')', '-', ' ' ), '', $phone_number ); ?>">
												<?php echo $phone_number; ?>
											</a>
										</p>
									</div>
								<?php endif; ?>
								<?php if( $support_phone_number = get_sub_field( 'support_phone_number' )): ?> 
									<div class="col-3 col-lg-6 col-md-12 pb-md-2">
										<h5>
											Support
										</h5>
										<p>
											<a href="tel:<?php echo str_replace( array( '(', ')', '-', ' ' ), '', $support_phone_number ); ?>">
												<?php echo $support_phone_number; ?>
											</a>
										</p>
									</div>
								<?php endif; ?>
								<?php if( $email_address = get_sub_field( 'email_address' )): ?> 
									<div class="col-3 col-lg-6 col-md-12 pb-md-2">
										<h5>
											Email
										</h5>
										<p>
											<a href="mailto:<?php echo $email_address; ?>">
												<?php echo $email_address; ?>
											</a>
										</p>
									</div>
								<?php endif; ?>
								<?php if( $address = get_sub_field( 'address' )): ?> 
									<div class="col-3 col-lg-6 col-md-12 pb-md-2">
										<h5>
											Address
										</h5>
										<address>
											<?php echo $address; ?>
										</address>
									</div>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<div class="footer-bottom">
						<div class="f-row">
							<div class="logo logo-d">
								<a href="<?php echo home_url( ); ?>">
									<img src="<?php echo get_template_directory_uri( ); ?>/images/landing/logo.svg" alt="logo">
								</a>
							</div>
							<ul class="f-nav">
								<?php
									$args = array(
										'theme_location'    => 'landingfooterleftmenu',
										'container'         => false,
										'container_class'   => false,
										'items_wrap'        => '%3$s',
										'menu_class'        => '',
							            // 'walker'         => new Add_Class_To_Link_Walker()
									);
									wp_nav_menu($args);
								?>
							</ul>
						</div>
						<div class="f-row">
							<ul class="f-nav f-nav-bottom">
								<?php
									$args = array(
										'theme_location'    => 'landingfooterrightmenu',
										'container'         => false,
										'container_class'   => false,
										'items_wrap'        => '%3$s',
										'menu_class'        => '',
							            // 'walker'         => new Add_Class_To_Link_Walker()
									);
									wp_nav_menu($args);
								?>
							</ul>
						</div>
						<div class="logo logo-m">
							<a href="<?php echo home_url( ); ?>">
								<img src="<?php echo get_template_directory_uri( ); ?>/images/landing/logo.svg" alt="logo">
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- ------------------------------------------------------------------------------------------------------------------------- -->
		<?php $landing_page_tag = get_field('landing_page_tag');?>
        <?php if( get_field( 'short_sign_up_flow' ) ): ?>
	        <div id="analyze-modal" class="analyze-modal">
				<div class="success-message" style="display:none;">
	            	<?php if( get_field( 'form_success_message' ) ): ?>
		                <h2>
		                	<?php echo get_field('form_success_message');?>
	                	</h2>
	                <?php else:?>
						<h2>
							Thank you. We'll contact you within 24 hours.
						</h2>
	                <?php endif; ?>
	                <?php if (is_front_page()) : ?>
	                <script>
						function q(a){return function(){ChiliPiper[a].q=(ChiliPiper[a].q||[]).concat([arguments])}}window.ChiliPiper=window.ChiliPiper||"submit scheduling showCalendar submit widget bookMeeting".split(" ").reduce(function(a,b){a[b]=q(b);return a},{});
						ChiliPiper.scheduling("owner", "sales-router", {formId: "a-s-form"})
					</script>
					<?php else : ?>
					<script>
						function q(a){return function(){ChiliPiper[a].q=(ChiliPiper[a].q||[]).concat([arguments])}}window.ChiliPiper=window.ChiliPiper||"submit scheduling showCalendar submit widget bookMeeting".split(" ").reduce(function(a,b){a[b]=q(b);return a},{});
						ChiliPiper.scheduling("owner", "website-consultation-router", {formId: "a-s-form"})
					</script>
					<?php endif; ?>
					<script src="https://js.chilipiper.com/marketing.js" type="text/javascript" async>
					</script>
				</div>
				<form action="#" class="a-s-form" id="a-s-form" data-step-active="1">
					<input type="hidden" name="action" value="short_form_data_ac">
	                <input type="hidden" name="short_form" id="short_form_id" value="yes">
	                <input type="hidden" name="Landing_Page" value="Website Funnel">
					<?php
						$redirect_success = '';
						if ( get_field('redirect_on_success') && get_field('success_redirect_url') ){
							$redirect_success = get_field('success_redirect_url');
						}
					?>
	                <input type="hidden" name="redirect_success" value="<?php echo $redirect_success;?>">
					<input type="hidden" name="is_landing_page" value="<?php echo $landing_page_tag ? $landing_page_tag : ''; ?>">
					<div class="a-s-form__heading-w">
						<div class="img">
							<?php $i = 0; ?>
							<?php while ( has_sub_field( 'images' ) ) : ?>
								<?php $i++; ?>
								<?php if ( $image = get_sub_field('image') ) : ?>
									<img class="image-<?php echo $i; ?> <?php echo ( $i == 1 ) ? 'active' : ''; ?>" src="<?php echo $image['url']; ?>?<?php echo date('U'); ?>" alt="image description" />
								<?php endif; ?>
		                        <?php if( $i==1 ){ break; }?>
							<?php endwhile; ?>
						</div>
					</div>
					<div class="a-s-form__i-steps">
						<div class="step step-elem-1">
							<div class="fields-wrap">
		                        <div class="form-field">
									<label class="i-label" for="sf-user-name">First Name</label>
									<input class="txt-input" name="user_name" id="sf-user-name" type="text" placeholder="Your first name" required>
								</div>
	                            <div class="form-field">
									<label class="i-label" for="sf-user-name">Last Name</label>
									<input class="txt-input" name="user_lname" id="user_lname" type="text" placeholder="Your last name" required>
								</div>
	                            <div class="form-field">
									<label class="i-label" for="sf-user-email">Your Email</label>
									<input class="txt-input" name="your_email" id="sf-user-email" type="email" placeholder="Your email" required>
								</div>
	                            <div class="form-field">
									<label class="i-label" for="sf-user-phone">Phone Number</label>
									<input class="txt-input" name="user_phone" id="sf-user-phone" type="text" placeholder="Your cellphone" required>
								</div>
	                            
								<div class="form-field">
									<label class="i-label" for="sf-place-name">Restaurant Name</label>
									<input class="txt-input" autocomplete="disabled" name="restaurant_name" id="sf-retrurant-name" type="text" placeholder="Restaurant Name" required>
								</div>
								<!--<div class="form-field">
									<label class="i-label" for="sf-place-phone">Restaurant Phone Number</label>
									<input class="txt-input" autocomplete="disabled" name="restaurant_phone" id="sf-place-phone" type="text" placeholder="Restaurant Phone Number">
								</div>-->
	                            <div class="form-field">
									<label class="i-label" for="sf-place-address">Zipcode</label>
									<input class="txt-input" name="postal_code" id="postal_code" type="text" placeholder="Restaurant Zipcode">
								</div>                            
							</div>
							<div class="clear">
							</div>
	                        <p class="form_error_msg ajax-response" style="display:none;"></p>
	                        <div class="a-s-form-btns-nav">							
								<?php $last_button_override = get_field('last_button_override'); ?>
								<button type="submit" class="arr-btn"><?php echo $last_button_override ? $last_button_override : 'Get A Free Demo'; ?></button>
							</div>
						</div>					
					</div>
					<input class="place_id" type="hidden" id="place_id" name="place_id" value="">
				</form>
			</div>
        <?php else: ?>
			<div id="analyze-modal" class="analyze-modal">
				<div class="success-message" style="display:none;">
	            	<?php if( get_field( 'form_success_message' ) ): ?>
		                <h2>
		                	<?php echo get_field('form_success_message');?>
	                	</h2>
	                <?php else: ?>
						<h2>
							Thank you. We'll contact you within 24 hours.
						</h2>
	                <?php endif?>
	                <?php if (is_front_page()) : ?>
	                <script>
						function q(a){return function(){ChiliPiper[a].q=(ChiliPiper[a].q||[]).concat([arguments])}}window.ChiliPiper=window.ChiliPiper||"submit scheduling showCalendar submit widget bookMeeting".split(" ").reduce(function(a,b){a[b]=q(b);return a},{});
						ChiliPiper.scheduling("owner", "sales-router", {formId: "a-s-form"})
					</script>
					<?php else : ?>
					<script>
						function q(a){return function(){ChiliPiper[a].q=(ChiliPiper[a].q||[]).concat([arguments])}}window.ChiliPiper=window.ChiliPiper||"submit scheduling showCalendar submit widget bookMeeting".split(" ").reduce(function(a,b){a[b]=q(b);return a},{});
						ChiliPiper.scheduling("owner", "website-consultation-router", {formId: "a-s-form"})
					</script>
					<?php endif; ?>
					<script src="https://js.chilipiper.com/marketing.js" type="text/javascript" async>
					</script>
				</div>
				<form action="#" class="a-s-form form " id="a-s-form" data-step-active="1">
					<input type="hidden" name="action" value="submit_data_to_active_campaing">
					<input type="hidden" name="Landing_Page" value="Website Funnel">
	               <!-- <input type="hidden" name="resturant_city" id="sf_resturant_city">
	                <input type="hidden" name="resturant_state" id="sf_resturant_state">-->
					<?php
						$redirect_success = '';
						if ( get_field('redirect_on_success') && get_field('success_redirect_url') ) {
							$redirect_success = get_field('success_redirect_url');
						}
					?>
	                <input type="hidden" name="redirect_success" value="<?php echo $redirect_success;?>">
					<input type="hidden" name="is_landing_page" value="<?php echo $landing_page_tag ? $landing_page_tag : ''; ?>">
					<div class="a-s-form__heading-w">
						<div class="img">
							<?php $i = 0; ?>
							<?php while ( has_sub_field( 'images' ) ) : ?>
								<?php $i++; ?>
								<?php if ( $image = get_sub_field('image') ) : ?>
									<img class="image-<?php echo $i; ?> <?php echo ( $i == 1 ) ? 'active' : ''; ?>" src="<?php echo $image['url']; ?>?<?php echo date('U'); ?>" alt="image description" />
								<?php endif; ?>
							<?php endwhile; ?>
						</div>
					</div>
					<ul class="a-s-form__pagination">
						<li> <a href="#!" class="p-btn active" data-toggle-step="1">Step 1</a> </li>
						<li> <a href="#!" class="p-btn" data-toggle-step="2">Step 2</a> </li>
						<li> <a href="#!" class="p-btn" data-toggle-step="3">Step 3</a> </li>
					</ul>
					<div class="a-s-form__progress-bar">
						<span class="p-line">
							<span class="c-dot">
								<span class="p-status">
									<span class="percentage"></span>
									<span class="word"></span>
								</span>
							</span>
						</span>
					</div>
					<div class="a-s-form__i-steps">
						<div class="step step-elem-1">
							<div class="fields-wrap">
								<h3 class="f-ttl"><?php echo (get_field('popup_heading')) ? get_field('popup_heading') : 'See if your restaurant qualifies'; ?></h3>
								<div class="form-field">
									<label class="i-label" for="sf-search">Restaurant Name</label>
									<input class="txt-input search" autocomplete="disabled" name="search_restaurant_name" id="sf-search" type="text" placeholder="Restaurant name">
								</div>
							</div>
							<div class="a-s-form-btns-nav">
								<a href="#!" class="b-arr-btn back-btn hidden"></a>
								<a href="#!" class="arr-btn forward-btn btn btn-gradient btn-normal btn-submit" data-btn-submit-step="1" data-toggle-step="2">Next</a>
							</div>
						</div>
						<div class="step step-elem-2">
							<div class="fields-wrap">
								<div class="form-field">
									<label class="i-label" for="sf-place-name">Restaurant Name</label>
									<input class="txt-input" autocomplete="disabled" name="restaurant_name" id="sf-place-name" type="text" placeholder="Restaurant Name">
								</div>
								<div class="form-field">
									<label class="i-label" for="sf-place-phone">Restaurant Phone Number</label>
									<input class="txt-input" autocomplete="disabled" name="restaurant_phone" id="sf-place-phone" type="text" placeholder="Restaurant Phone Number">
								</div>
								<div class="form-field">
									<label class="i-label" for="sf-place-address">Restaurant Address</label>
									<input class="txt-input" autocomplete="disabled" name="restaurant_address" id="sf-place-address" type="text" placeholder="Restaurant Address">
								</div>
	                            <div class="form-field">
									<label class="i-label" for="sf-place-address">City</label>
									<input class="txt-input" name="resturant_city" id="sf_resturant_city" type="text" placeholder="Restaurant City">
								</div>
	                            <div class="form-field">
									<label class="i-label" for="sf-place-address">State</label>
									<input class="txt-input" name="resturant_state" id="sf_resturant_state" type="text" placeholder="Restaurant State">
								</div>
	                            <div class="form-field">
									<label class="i-label" for="sf-place-address">Zipcode</label>
									<input class="txt-input" name="postal_code" id="postal_code" type="text" placeholder="Restaurant Zipcode">
								</div>
	                            <div class="form-field">
									<label class="i-label" for="sf-place-address">Country</label>
									<input class="txt-input" name="country" id="country" type="text" placeholder="Restaurant Country">
								</div>
							</div>
							<div class="clear"></div>
							<div class="a-s-form-btns-nav">
								<a href="#!" class="arr-btn forward-btn btn btn-gradient btn-normal btn-submit" data-toggle-step="3">Next</a>
								<a href="#!" class="b-arr-btn back-btn back-link" data-toggle-step="1">← Back</a>
							</div>
						</div>
						<div class="step step-elem-3">
							<div class="fields-wrap">
								<div class="form-field">
									<label class="i-label" for="sf-user-name">First Name</label>
									<input class="txt-input" name="user_name" id="sf-user-name" type="text" placeholder="Your first name" required>
								</div>
	                            <div class="form-field">
									<label class="i-label" for="sf-user-name">Last Name</label>
									<input class="txt-input" name="user_lname" id="user_lname" type="text" placeholder="Your last name" required>
								</div>
								<div class="form-field">
									<label class="i-label" for="sf-user-phone">Your Cellphone</label>
									<input class="txt-input" name="user_phone" id="sf-user-phone" type="text" placeholder="Your cellphone" required>
								</div>
								<div class="form-field">
									<label class="i-label" for="sf-user-email">Your Email</label>
									<input class="txt-input" name="your_email" id="sf-user-email" type="email" placeholder="Your email" required>
								</div>
							</div>
							<div class="clear"></div>
	                        <p class="form_error_msg ajax-response" style="display:none;"></p>
							<div class="a-s-form-btns-nav">
								<?php $last_button_override = get_field('last_button_override'); ?>
								<button type="submit" class="arr-btn"><?php echo $last_button_override ? $last_button_override : 'Get A Free Demo'; ?></button>
								<a href="#!" class="b-arr-btn back-btn back-link" data-toggle-step="2">← Back</a>
							</div>
						</div>
					</div>
					<input class="place_id" type="hidden" id="place_id" name="place_id" value="">
				</form>
			</div>
        <?php endif; ?>
		<!-- ------------------------------------------------------------------------------------------------------------------------- -->
<?php /*
		<!-- Step 1 -->
		<div id="popup-demo" class="popup-block">
			<div class="popup-holder">
				<div class="popup-images">
					<picture>
						<img src="<?php echo get_template_directory_uri( ); ?>/images/landing/popup/img-step01.jpg" alt="" srcset="<?php echo get_template_directory_uri( ); ?>/images/landing/popup/img-step01@2x.jpg 2x">
					</picture>
				</div>
				<div class="step-form">
					<ul class="step-list">
						<li><a class="disabled" data-fancybox="" data-src="#popup-demo" href="javascript:;">Step 1</a></li>
						<li><a data-fancybox="" data-src="#popup-demo-2" href="javascript:;">Step 2</a></li>
						<li><a class="disabled" data-fancybox="" data-src="#popup-demo-3" href="javascript:;">Step 3</a></li>
					</ul>
					<div class="progress-bar">
						<div class="progress-holder">
							<div class="progress-strip" style="width: 10%;">
								<div class="progress-circle">
									<div class="progress-info">
										<span class="num">33%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="popup-content">
					<p>See if your restaurant qualifies</p>
					<form class="form" action="#">
						<div class="form-controls">
							<label for="r-name">Restaurant Name</label>
							<input class="f-control" id="r-name" type="text" placeholder="First Name">
						</div>
						<div class="form-controls form-submit">
							<input type="submit" data-src="#popup-demo-2" data-fancybox="" class="btn btn-gradient btn-normal btn-submit" value="Next">
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Step 2 -->
		<div id="popup-demo-2" class="popup-block">
			<div class="popup-holder">
				<div class="popup-images">
					<picture>
						<img src="<?php echo get_template_directory_uri( ); ?>/images/landing/popup/img-step02.jpg" alt="" srcset="<?php echo get_template_directory_uri( ); ?>/images/landing/popup/img-step02@2x.jpg 2x">
					</picture>
				</div>
				<div class="step-form">
					<ul class="step-list">
						<li class="active"><a data-fancybox="" data-src="#popup-demo" href="javascript:;">Step 1</a></li>
						<li class="active"><a class="disabled" data-fancybox="" data-src="#popup-demo-2" href="javascript:;">Step 2</a>
						</li>
						<li><a data-fancybox="" data-src="#popup-demo-3" href="javascript:;">Step 3</a></li>
					</ul>
					<div class="progress-bar">
						<div class="progress-holder">
							<div class="progress-strip" style="width: 48%;">
								<div class="progress-circle">
									<div class="progress-info">
										<span class="num">66%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="popup-content">
					<form class="form" action="#">
						<div class="form-controls">
							<label for="r-name-first">Restaurant Name</label>
							<input class="f-control" id="r-name-first" type="text" placeholder="First Name" value="Marko's Meat &amp; Deli">
						</div>
						<div class="form-controls">
							<label for="r-phone">Restaurant Phone Number</label>
							<input class="f-control" id="r-phone" type="tel" placeholder="Phone Number" value="+1 727-548-0607">
						</div>
						<div class="form-controls">
							<label for="r-address">Restaurant Address</label>
							<input class="f-control" id="r-address" type="text" placeholder="Address" value="+4794 76th Ave N">
						</div>
						<div class="form-controls">
							<label for="r-city">City</label>
							<input class="f-control" id="r-city" type="text" placeholder="City" value="Pinellas Park">
						</div>
						<div class="form-controls">
							<label for="r-state">State</label>
							<input class="f-control" id="r-state" type="text" placeholder="State" value="FL">
						</div>
						<div class="form-controls">
							<label for="r-zipcode">Zipcode</label>
							<input class="f-control" id="r-zipcode" type="text" placeholder="Zipcode" value="33781">
						</div>
						<div class="form-controls">
							<label for="r-country">Country</label>
							<input class="f-control" id="r-country" type="text" placeholder="Country" value="US">
						</div>
						<div class="form-controls form-submit">
							<input type="submit" data-src="#popup-demo-3" data-fancybox="" class="btn btn-gradient btn-normal btn-submit" value="Next">
						</div>
						<div class="back-link">
							<a data-fancybox="" data-src="#popup-demo" href="javascript:;">← Back</a>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Step 3 -->
		<div id="popup-demo-3" class="popup-block">
			<div class="popup-holder">
				<div class="popup-images">
					<picture>
						<img src="<?php echo get_template_directory_uri( ); ?>/images/landing/popup/img-step03.jpg" alt="" srcset="<?php echo get_template_directory_uri( ); ?>/images/landing/popup/img-step03@2x.jpg 2x">
					</picture>
				</div>
				<div class="step-form">
					<ul class="step-list">
						<li class="active"><a data-fancybox="" data-src="#popup-demo" href="javascript:;">Step 1</a></li>
						<li class="active"><a data-fancybox="" data-src="#popup-demo-2" href="javascript:;">Step 2</a></li>
						<li class="active"><a class="disabled" data-fancybox="" data-src="#popup-demo-3" href="javascript:;">Step 3</a>
						</li>
					</ul>
					<div class="progress-bar">
						<div class="progress-holder">
							<div class="progress-strip" style="width: 88%;">
								<div class="progress-circle">
									<div class="progress-info">
										<span class="num">99%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="popup-content">
					<form class="form" action="#">
						<div class="form-controls">
							<label for="fname">First Name</label>
							<input class="f-control" id="fname" type="text" placeholder="First Name">
						</div>
						<div class="form-controls">
							<label for="lname">Last Name</label>
							<input class="f-control" id="lname" type="tel" placeholder="Last Name">
						</div>
						<div class="form-controls">
							<label for="cellphone">Your Cellphone</label>
							<input class="f-control" id="cellphone" type="text" placeholder="Your Cellphone">
						</div>
						<div class="form-controls">
							<label for="email">Your Email</label>
							<input class="f-control" id="email" type="email" placeholder="Your Email">
						</div>
						<div class="form-controls form-submit">
							<input class="btn btn-gradient btn-normal btn-submit" type="submit" value="Get A Demo">
						</div>
						<div class="back-link">
							<a data-fancybox="" data-src="#popup-demo-2" href="javascript:;">← Back</a>
						</div>
					</form>
				</div>
			</div>
		</div>
        */ ?>
	</div>
	<?php wp_footer(); ?>
</body>
</html>