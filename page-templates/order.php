<?php
/*
Template Name: Order
Template Post Type: page, post
*/
?>
<?php get_header( 'order' ); ?>

	<main class="main">

		<!-- heading and logos -->
		<section class="intro-order">
			<div class="container">
				<div class="intro-order_holder">
					<!-- heading -->
					<?php if( $page_heading = get_field( 'page_heading' )): ?> 
						<h1 class="h2">
							<?php echo $page_heading; ?>
						</h1>
					<?php endif; ?>
					<!-- logos -->
					<?php if( get_field( 'logos' ) ): ?>
						<div class="intro-order_block">
							<span>
								As Seen In
							</span>
							<ul>
					    		<?php while( has_sub_field( 'logos' ) ): ?>
						    		<?php $image = get_sub_field( 'logo' ) ?>
						    		<?php if( !empty( $image ) ): ?>
										<li>
											<a href="<?php echo get_sub_field( 'url' ) ?>">
								    			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
											</a>
										</li>
						    		<?php endif; ?>
					    		<?php endwhile; ?>
							</ul>
						</div>
			    	<?php endif ?>    	
				</div>
			</div>
			<div class="intro-order_gradient">
				<img class="_desktop" src="<?php echo get_template_directory_uri( ); ?>/images/img01-gradient.png" alt="image description">
				<img class="_mobile" src="<?php echo get_template_directory_uri( ); ?>/images/img02-gradient.png" alt="image description">
			</div>
		</section>

		<!-- rates and form -->
		<section class="rates">
			<div class="container">
				<div class="rates_holder">
					<div class="rates_item">
						<div class="order-form _step-1">
							<!-- <div class="order-form _step-2"> -->
							<div class="order-form_bar">
							</div>
							<h5 class="order-form_heading step-1-heading">
								Step 1 of 2
							</h5>
							<h5 class="order-form_heading step-2-heading">
								Step 2 of 2 <span>(67% complete)</span> 
							</h5>
							<h5 class="order-form_heading step-3-heading">
								Order Complete. Book Your Session now
							</h5>

							<?php echo do_shortcode( '[formidable id=4]' ) ?>

							<?php /*
							<form action="#!">
								<div class="form-row">
									<div class="form-group">
										<label for="first-name">
											First Name
										</label>
										<input type="text" name="first-name" id="first-name">
									</div>
									<div class="form-group">
										<label for="last-name">
											Last Name
										</label>
										<input type="text" name="last-name" id="last-name">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group">
										<label for="email-address">
											Email Address
										</label>
										<input type="email" name="email-address" id="email-address">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group">
										<label for="restaurant">
											Restaurant Name
										</label>
										<input type="text" name="restaurant" id="restaurant">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group">
										<button type="submit">
											Continue to Next
											<img src="<?php echo get_template_directory_uri( ); ?>/images/ico-arrow-right.svg" alt="image description">
										</button>
									</div>
								</div>
							</form>
							*/ ?>

							<!-- secure icons -->
							<?php if( get_field( 'secure_payment_icons_block' ) ): ?>
								<div class="secure-block">
									<?php while( has_sub_field( 'secure_payment_icons_block' ) ): ?>
										<?php if( get_sub_field( 'icon' ) || get_sub_field( 'text' ) ): ?>
											<div class="secure-block_item">
												<p>
													<?php $image = get_sub_field( 'icon' ) ?>
													<?php if( !empty( $image ) ): ?>
														<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
													<?php endif; ?>
													<?php if( $text = get_sub_field( 'text' )): ?> 
														<?php echo $text; ?>
													<?php endif; ?>
												</p>
											</div>
										<?php endif ?>
									<?php endwhile; ?>
								</div>
							<?php endif ?>
							<!-- terms link -->
							<?php if( $terms_block = get_field( 'terms_block' )): ?> 
								<div class="terms-block">
									<p>
										<?php echo $terms_block; ?>
									</p>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<!-- rates -->
					<div class="rates_item">
						<div class="order-rate">

							<div class="order-rate_title">
								<h3>
									What You're Gonna Get
								</h3>
							</div>

							<div class="order-rate_top">
								<p>
									Power
								</p>
								<p>
									Monthly Value
								</p>
							</div>

							<ul class="order-rate_list">
								<li>
									<p>
										Funnel with Lead Capture
									</p>
									<div class="price">
										$999
									</div>
								</li>
								<li>
									<p>
										Masterful Search Engine Optimization
									</p>
									<div class="price">
										$999
									</div>
								</li>
								<li>
									<p>
										Email marketing automation
									</p>
									<div class="price">
										$299
									</div>
								</li>
								<li>
									<p>
										Text marketing automation
									</p>
									<div class="price">
										$399
									</div>
								</li>
								<li>
									<p>
										Online ordering with upselling
									</p>
									<div class="price">
										$499
									</div>
								</li>
								<li>
									<p>
										Reviews and Reputation management
									</p>
									<div class="price">
										$799
									</div>
								</li>
								<li>
									<p>
										Loyalty
									</p>
									<div class="price">
										$499
									</div>
								</li>
								<li>
									<p>
										Flyers + Proven System To Convert
									</p>
									<div class="price">
										$1000
									</div>
								</li>
								<li>
									<p>
										24/7 American Phone and Email Support
									</p>
									<div class="price">
										$1000
									</div>
								</li>
							</ul>

							<div class="order-rate_bottom">
								<p>
									Value
								</p>
								<div class="total-price">
									$6,493/m
								</div>
							</div>
								<div class="order-rate_bottom _price">
								<p>
									Price
								</p>
								<div class="total-price">
									$499/m
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="rates_bg">
				<img src="<?php echo get_template_directory_uri( ); ?>/images/background-rates.png" alt="image description">
			</div>
		</section>

		<!-- guarantee -->
		<section class="guarantee">
			<div class="container">
				<div class="guarantee-block">
					<?php $image = get_field( 'guarantee_section_image' ) ?>
					<?php if( !empty( $image ) ): ?>
						<div class="guarantee-block_left">
							<div class="guarantee-block_ico">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
							</div>
						</div>
					<?php endif; ?>
							
					<div class="guarantee-block_right">
						<div class="guarantee-block_content">
							<div class="guarantee-block_top">
								<?php if( $guarantee_section_heading = get_field( 'guarantee_section_heading' )): ?> 
									<h3>
										<?php echo $guarantee_section_heading; ?>
									</h3>
								<?php endif; ?>
								    	
								<?php if( $guarantee_section_subheading = get_field( 'guarantee_section_subheading' )): ?> 
									<p>
										<?php echo $guarantee_section_subheading; ?>
									</p>
								<?php endif; ?>
								<?php if( $guarantee_section_center_heading = get_field( 'guarantee_section_center_heading' )): ?> 
									<p>
										<?php echo $guarantee_section_center_heading; ?>
									</p>
								<?php endif; ?>
							</div>
							<?php if( $guarantee_section_content = get_field( 'guarantee_section_content' )): ?> 
								<div class="guarantee-block_bottom">
									<p>
										<?php echo $guarantee_section_content; ?>
									</p>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="ico-lines">
						<img class="_desktop" src="<?php echo get_template_directory_uri( ); ?>/images/ico-lines.svg" alt="image description">
						<img class="_mobile" src="<?php echo get_template_directory_uri( ); ?>/images/ico-lines-mobile.svg" alt="image description">
					</div>
				</div>
			</div>
		</section>

		<!-- videos -->
		<section class="testimonial">
			<div class="container">
				<?php if( $videos_heading = get_field( 'videos_heading' )): ?> 
					<div class="headline">
						<h2 class="headline_title">
							<?php echo $videos_heading; ?>
						</h2>
					</div>
				<?php endif; ?>
				<div class="testimonial_holder">
					<?php if( get_field( 'videos' ) ): ?>
						<?php while( has_sub_field( 'videos' ) ): ?>
							<div class="testimonial_item">
								<div class="box box-customers">
									<div class="box-holder">
										<div class="img">       
											<?php $image = get_sub_field( 'image' ) ?>
											<?php if( !empty( $image ) ): ?>
												<span class="img-stretch" style="background-image: url(<?php echo $image['url']; ?>)">
												</span>
											<?php endif; ?>
											<?php if( $video_url = get_sub_field( 'video_url' )): ?> 
												<a class="btn-play" data-fancybox="" data-type=""
													href="<?php echo $video_url; ?>"
													data-id="3">play</a>
											<?php endif; ?>
										</div>
										<div class="description">
											<div class="img-sm">
												<?php $image = get_sub_field( 'icon' ) ?>
												<?php if( !empty( $image ) ): ?>
													<img alt="" title="FLYINGBURRITOLOGOCOLORwhtbackground"
														data-src="<?php echo $image['url']; ?>" class="lazyload"
														src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
												<?php endif; ?>
											</div>
											<?php if( $text = get_sub_field( 'text' )): ?> 
												<h4 class="h5 mb-3 mb-md-2">
													<?php echo $text; ?>
												</h4>
											<?php endif; ?>
											<div class="author">
												<?php if( $name = get_sub_field( 'name' )): ?> 
													<h5 class="text-gradient mb-0"><?php echo $name; ?>n</h5>
												<?php endif; ?>
												<?php if( $owner_of = get_sub_field( 'owner_of' )): ?> 
													<p>Owner of
														<u><?php echo $owner_of; ?></u>
													</p>
										    	<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif ?>
				</div>

				<div class="complete-btn">
					<a href="#!" class="btn">Complete Order</a>
				</div>

			</div>
		</section>
	</main>
<?php get_footer( 'order' ); ?>