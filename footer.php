		
		<?php $landing_page_tag = get_field('landing_page_tag');?>
        <?php if(get_field('short_sign_up_flow')){?>
        <div id="analyze-modal" class="analyze-modal">
			<div class="success-message" style="display:none;">
            	<?php if(get_field('form_success_message')){?>
                <h2><?php echo get_field('form_success_message');?></h2>
                <?php }else{?>
				<h2>Thank you. We'll contact you within 24 hours.</h2>
                <?php }?>
                <script>
function q(a){return function(){ChiliPiper[a].q=(ChiliPiper[a].q||[]).concat([arguments])}}window.ChiliPiper=window.ChiliPiper||"submit scheduling showCalendar submit widget bookMeeting".split(" ").reduce(function(a,b){a[b]=q(b);return a},{});
ChiliPiper.scheduling("owner", "sales-router", {formId: "a-s-form"})
</script>
<script src="https://js.chilipiper.com/marketing.js" type="text/javascript" async></script>
			</div>
			<form action="#" class="a-s-form" id="a-s-form" data-step-active="1">
				<input type="hidden" name="action" value="short_form_data_ac">
                <input type="hidden" name="short_form" id="short_form_id" value="yes">
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
						<?php while ( has_sub_field('images') ) : ?>
						<?php $i++; ?>
						<?php if ( $image = get_sub_field('image') ) : ?>
						<img class="image-<?php echo $i; ?> <?php echo ( $i == 1 ) ? 'active' : ''; ?>" src="<?php echo $image['url']; ?>?<?php echo date('U'); ?>" alt="image description" />
						<?php endif; ?>
                        <?php if($i==1){ break;}?>
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
						<div class="clear"></div>
                         <p class="form_error_msg ajax-response" style="display:none;"></p>
                         <div class="a-s-form-btns-nav">							
							<?php $last_button_override = get_field('last_button_override'); ?>
							<button type="submit" class="arr-btn"><?php echo $last_button_override ? $last_button_override : 'Apply'; ?></button>
						</div>
						
					</div>					
				</div>
				<input class="place_id" type="hidden" id="place_id" name="place_id" value="">
			</form>
		</div>
        <?php }else{?>
		<div id="analyze-modal" class="analyze-modal">
			<div class="success-message" style="display:none;">
            	<?php if(get_field('form_success_message')){?>
                <h2><?php echo get_field('form_success_message');?></h2>
                <?php }else{?>
				<h2>Thank you. We'll contact you within 24 hours.</h2>
                <?php }?>
                <script>
function q(a){return function(){ChiliPiper[a].q=(ChiliPiper[a].q||[]).concat([arguments])}}window.ChiliPiper=window.ChiliPiper||"submit scheduling showCalendar submit widget bookMeeting".split(" ").reduce(function(a,b){a[b]=q(b);return a},{});
ChiliPiper.scheduling("owner", "sales-router", {formId: "a-s-form"})
</script>
<script src="https://js.chilipiper.com/marketing.js" type="text/javascript" async></script>
			</div>
			<form action="#" class="a-s-form" id="a-s-form" data-step-active="1">
				<input type="hidden" name="action" value="submit_data_to_active_campaing">
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
						<?php while ( has_sub_field('images') ) : ?>
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
							<h3 class="f-ttl"><?php echo (get_field('popup_heading')) ? get_field('popup_heading') : 'See how your restaurant compares'; ?></h3>
							<div class="form-field">
								<label class="i-label" for="sf-search">Restaurant Name</label>
								<input class="txt-input search" autocomplete="disabled" name="search_restaurant_name" id="sf-search" type="text" placeholder="Restaurant name">
							</div>
						</div>
						<div class="a-s-form-btns-nav">
							<a href="#!" class="b-arr-btn back-btn hidden"></a>
							<a href="#!" class="arr-btn forward-btn" data-btn-submit-step="1" data-toggle-step="2">Next</a>
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
							<a href="#!" class="b-arr-btn back-btn" data-toggle-step="1">Back</a>
							<a href="#!" class="arr-btn forward-btn" data-toggle-step="3">Next</a>
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
							<a href="#!" class="b-arr-btn back-btn" data-toggle-step="2">Back</a>
							<?php $last_button_override = get_field('last_button_override'); ?>
							<button type="submit" class="arr-btn"><?php echo $last_button_override ? $last_button_override : 'Apply'; ?></button>
						</div>
					</div>
				</div>
				<input class="place_id" type="hidden" id="place_id" name="place_id" value="">
			</form>
		</div>
        <?php }?>
		
		
		
	</div>
	<?php $footer_type = get_field('footer_type'); ?>
	<footer class="page-footer dark <?php //echo ( $footer_type == 'Dark' ) ? 'dark' : ''; ?>">
		<div class="frame">
			<div class="container">
				<div class="page-footer-f">
					<?php  
						$f_about_heading = get_field('f_about_heading', 'option');
						$f_about_placepull = get_field('f_about_placepull', 'option');
					?>
					<div class="col l">
						<?php /*
						<h3 class="h5 col-ttl"><?php echo $f_about_heading ? $f_about_heading : "Placepull"; ?></h3>
						*/ ?>
						
						<div class="footer-logo">
							<img src="<?php bloginfo('template_url'); ?>/images/owner-logo-white.svg" alt="<?php bloginfo('name'); ?>" />
						</div>
						
						<?php if ( $f_about_placepull ) : ?>
						<p><?php echo $f_about_placepull; ?></p>
						<?php endif; ?>
					</div>
					<?php  
						$f_guides_heading = get_field('f_guides_heading', 'option');
						$f_guides_links = get_field('f_guides_links', 'option');
					?>
					<div class="col">
						<h3 class="h5 col-ttl"><?php echo $f_guides_heading ? $f_guides_heading : 'Guides'; ?></h3>
						<?php if(have_rows('f_guides_links', 'option')) : ?>
							<ul class="n-b-list">
								<?php while(have_rows('f_guides_links', 'option')) : the_row(); ?>
									<?php  
										$link_item = get_sub_field('link_item');
									?>
									<li><a href="<?php echo $link_item['url']; ?>"><?php echo $link_item['title']; ?></a></li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<?php  
						$f_contact_heading = get_field('f_contact_heading', 'option');
						$f_contact_information = get_field('f_contact_information', 'option');
						$f_phone_number = $f_contact_information['phone_number'];
						$f_support_phone_number = $f_contact_information['support_phone_number'];
						$f_email_address = $f_contact_information['email_address'];
						$f_address = $f_contact_information['address'];
					?>
					<div class="col">
						<h3 class="h5 col-ttl"><?php echo $f_contact_heading ? $f_contact_heading : 'Contact'; ?></h3>
						<ul class="n-b-list">
							<li><a href="https://jobs.lever.co/owner" target="_blank">Careers</a></li>
							<?php if ($f_phone_number) : ?>
							<li>
								Sales: <a href="tel:<?php echo am_esc($f_phone_number, 'phone'); ?>"><?php echo $f_phone_number; ?></a>
							</li>
							<?php endif; ?>
							<?php if ($f_support_phone_number) : ?>
							<li>
								Support: <a href="tel:<?php echo am_esc($f_support_phone_number, 'phone'); ?>"><?php echo $f_support_phone_number; ?></a>
							</li>
							<?php endif; ?>
							<?php if ($f_email_address) : ?>
							<li>
								<a href="mailto:<?php echo am_esc($f_email_address, 'email'); ?>"><?php echo $f_email_address; ?></a>
							</li>
							<?php endif; ?>
							<?php if($f_address) : ?>
								<li>
									<address><?php echo $f_address; ?></address>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				
				<?php if ( have_rows('f_contact_information', 'option') ) : ?>
					<?php while ( have_rows('f_contact_information', 'option') ) : the_row(); ?>
						<?php if ( have_rows('important_links', 'option') ) : ?>
							<ul class="page-footer-list">
								<?php while ( have_rows('important_links', 'option') ) : the_row(); ?>
									<?php $link = get_sub_field('link'); ?>
									<li>
										<a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>