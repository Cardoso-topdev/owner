<?php
/*
Template Name: Content Modules
Template Post Type: page
*/

get_header(); ?>

<main>

	<?php if(have_rows('content_modules')) : ?>
		<?php $count = 0; ?>
		<?php while(have_rows('content_modules')) : the_row(); ?>

			<?php if(get_row_layout() == 'hero_section') : ?>

				<?php  
					$heading = get_sub_field('heading');
					$subheading = get_sub_field('subheading');
					$logo_block_heading = get_sub_field('logo_block_heading');
					$image = get_sub_field('image');

					$image_url = $image['sizes']['hero-img'];
					$image_url_2x = $image['sizes']['hero-img-2x'];
					$image_mobile_url = $image['sizes']['hero-mobile-img'];
					$image_mobile_url_2x = $image['sizes']['hero-mobile-img-2x'];
				?>
				<?php $type = get_sub_field('type'); ?>
				<section id="section-<?php echo $count ?>" class="intro-s <?php echo ( $type == 'Pizzeria' ) ? 'intro-pizza"' : ''; ?>">
					<div class="container">
						<div class="intro-f">
							<div class="intro-f__l">
								<h1><?php echo $heading ? $heading : "Your Secret Weapon for<br> Restaurant Marketing"; ?></h1>
								<?php if ( $info = get_sub_field('info') ) : ?>
								<div class="intro-info">
									<p><?php echo $info; ?></p>
								</div>
								<?php endif; ?>
								<?php if ( $subheading ) : ?>
								<p><?php echo $subheading; ?></p>
								<?php endif; ?>
								<form action="#" class="pp-a-form">
									<div class="pp-a-form__i-wrap">
										<input class="i-i locationTextField pre-sf-search-input" type="text" placeholder="Your Restaurant Name" id="auto_search_478">
									</div>
									<div class="pp-a-form__btn-wrap">
										<button class="s-b" type="submit">Get A Free Demo</button>
									</div>
								</form>
								<?php if(have_rows('logo_images')) : ?>
									<div class="logo-set-b desk-hidden">
										<?php if($logo_block_heading) : ?>
											<h3 class="b-ttl"><?php echo $logo_block_heading; ?></h3>
										<?php endif; ?>
										<ul class="logo-set">
											<?php while(have_rows('logo_images')) : the_row(); ?>
												<?php  
													$regular_image = get_sub_field('regular_image');
													$retina_image = get_sub_field('retina_image');
												?>
												<li>
													<a href="javascript:void()">
														<img src="<?php echo $regular_image['url']; ?>" alt="<?php echo $regular_image['alt']; ?>" srcset="<?php echo $retina_image['url']; ?> 2x">
													</a>
												</li>
											<?php endwhile; ?>
										</ul>
									</div>
								<?php endif; ?>
							</div>
							
							<div class="intro-f__r" id="intro-img">
								<?php if ( $type == 'Pizzeria' ) : ?>
								<picture>
									<?php if ( $image_desktop = get_sub_field('image_desktop') ) : ?>
									<img src="<?php echo $image_desktop['url']; ?>" alt="<?php echo $image_desktop['alt']; ?>" class="desktop-img">
									<?php endif; ?>
									<?php if ( $image_mobile = get_sub_field('image_mobile') ) : ?>
									<img src="<?php echo $image_mobile['url']; ?>" alt="<?php echo $image_mobile['alt']; ?>" class="mobile-img">
									<?php endif; ?>
								</picture>
								<?php else : ?>
								<?php if ( $image_url ) : ?>
								<picture>
									<source srcset="<?php echo $image_mobile_url; ?>, <?php echo $image_mobile_url_2x; ?> 2x" media="(max-width: 1023px)">
									<source srcset="<?php echo $image_url; ?>, <?php echo $image_url_2x; ?> 2x">
									<img src="<?php echo $image_url; ?>">
								</picture>
								<?php endif; ?>
								<?php endif; ?>
							</div>
						</div>
						<?php if(have_rows('logo_images')) : ?>
							<div class="logo-set-b mob-hidden">
								<?php if($logo_block_heading) : ?>
									<h3 class="b-ttl"><?php echo $logo_block_heading; ?></h3>
								<?php endif; ?>
								<ul class="logo-set">
									<?php while(have_rows('logo_images')) : the_row(); ?>
										<?php  
											$regular_image = get_sub_field('regular_image');
											$retina_image = get_sub_field('retina_image');
										?>
										<li>
											<a href="javascript:void()">
												<img src="<?php echo $regular_image['url']; ?>" alt="<?php echo $regular_image['alt']; ?>" srcset="<?php echo $retina_image['url']; ?> 2x">
											</a>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
				</section>

			<?php elseif(get_row_layout() == 'content_block_list_image') : ?>

				<?php  
					$section_heading = get_sub_field('section_heading');
					$section_subheading = get_sub_field('section_subheading');
					$type = get_sub_field('type');
				?>

				<?php if ( have_rows('content_block') ) : ?>

					<section class="hiw-s <?php echo ( $type == 'Pizzeria' ) ? 'benefits-s pizza-benefits' : ''; ?>" id="section-<?php echo $count ?>">
						<div class="container">
							<div class="s-h-wrap">
								<h2 class="s-ttl"><?php echo $section_heading ? $section_heading : "How It Works"; ?></h2>
								<?php if($section_subheading) : ?>
									<p><?php echo $section_subheading; ?></p>
								<?php endif; ?>
							</div>
							<div class="steps <?php echo ( $type == 'Pizzeria' ) ? 'steps-pizza' : ''; ?>">
								<?php $i = ( $type == 'Pizzeria' ) ? 1 : 0; $step = 1; while(have_rows('content_block')) : the_row(); ?>
									<?php  
										$step_icon = get_sub_field('step_icon');
										$heading = get_sub_field('heading');
										$image = get_sub_field('image');

										$image_url = $image['sizes']['content-block-img'];
										$image_url_2x = $image['sizes']['content-block-img-2x'];
										$mobile_image_url = $image['sizes']['content-block-mobile-img'];
										$mobile_image_url_2x = $image['sizes']['content-block-mobile-img-2x'];
									?>
									<div class="steps__row <?php if ( $i == 0 ) {echo 'sm';} ?> <?php if ( $i % 2 == 1 ) {echo 'opposite';} ?> step-<?php echo ( $type == 'Pizzeria' ) ? '' : $step; ?>">
										
										<div class="steps__row-col visual">
											
											<?php if ( $image_heading = get_sub_field('image_heading') ) : ?>
											<h4 class="title desktop-text"><?php echo $image_heading; ?></h4>
											<?php endif; ?>
											<?php if ( $image_subheading = get_sub_field('image_subheading') ) : ?>
											<p class="desktop-text"><?php echo $image_subheading; ?></p>
											<?php endif; ?>
											
											<?php if ( $type == 'Pizzeria' ) : ?>
											<?php $image_desktop = get_sub_field('image_desktop'); ?>
											<?php $image_mobile = get_sub_field('image_mobile'); ?>
											<?php if ( $image_desktop && $image_mobile ) : ?>
											<picture>
												<?php if ( $image_desktop ) : ?>
												<img class="img-<?php echo $step; ?> desktop-img" src="<?php echo $image_desktop['url']; ?>" alt="<?php echo $image_desktop['alt']; ?>">
												<?php endif; ?>
												
												<?php if ( $image_mobile ) : ?>
												<img class="img-<?php echo $step; ?> mobile-img" src="<?php echo $image_mobile['url']; ?>" alt="<?php echo $image_mobile['alt']; ?>">
												<?php endif; ?>
											</picture>
											<?php endif; ?>
											
											<?php else : ?>
											<?php if ( $image_url ) : ?>
											<picture>
												<source srcset="<?php echo $mobile_image_url; ?>, <?php echo $mobile_image_url_2x; ?> 2x" media="(max-width: 1023px)">
												<source srcset="<?php echo $image_url; ?>, <?php echo $image_url_2x; ?> 2x">
												<img class="img-<?php echo $step; ?>" src="<?php echo $image_url; ?>" alt="<?php echo $image['alt']; ?>" srcset="<?php echo $image_url_2x; ?> 2x">
											</picture>
											<?php endif; ?>
											<?php endif; ?>
										</div>
										
										<div class="steps__row-col txt txt-<?php echo $step; ?>">
											
											<div class="steps-col-count">
												<?php $icon_type = get_sub_field('icon_type'); ?>
												
												<?php if ( $icon_type == 'Image' ) : ?>
												
												<?php if ( $icon_image = get_sub_field('icon_image') ) : ?>
												<div class="ico">
													<img src="<?php echo $icon_image['url']; ?>" alt="<?php echo $icon_image['alt']; ?>" />
												</div>
												<?php endif; ?>
												
												<?php else : ?>
												
												<?php if ( $icon_class = get_sub_field('icon_class') ) : ?>
												<i class="ico <?php echo $icon_class; ?>"></i>
												<?php endif; ?>
												
												<?php endif; ?>
												
												<?php if ( $type != 'Pizzeria' ) : ?>
												<span>Step <?php echo $step; ?></span>
												<?php endif; ?>
												
											</div>
										
											<h3 class="h2"><?php echo $heading; ?></h3>
											
											<?php if ( have_rows('list_items') ) : ?>
												<ul class="c-d-list">
													<?php while ( have_rows('list_items') ) : the_row(); ?>
													<li><?php echo get_sub_field('list'); ?></li>
													<?php endwhile; ?>
												</ul>
											<?php endif; ?>
										</div>
									</div>
									<?php
										/*
										if( $step == 4 ){
											$step = 1;
										}
										*/
									?>
								<?php $i++; $step++; endwhile; ?>
							</div>
						</div>
					</section>

				<?php endif; ?>
			
			<?php elseif ( get_row_layout() == 'content_block_list_image_home' ) : ?>

				<?php  
					$section_heading = get_sub_field('section_heading');
					$section_subheading = get_sub_field('section_subheading');
				?>

				<?php if ( have_rows('content_block') ) : ?>

					<section class="hiw-s benefits-s pizza-benefits home-benefits" id="section-<?php echo $count ?>">
						<div class="container">
							<div class="s-h-wrap">
								<?php if ( $section_heading ) : ?>
								<h2 class="s-ttl"><?php echo $section_heading; ?></h2>
								<?php endif; ?>
								<?php if ( $section_subheading ) : ?>
								<p><?php echo $section_subheading; ?></p>
								<?php endif; ?>
								
							</div>
							<div class="steps steps-pizza">
								<?php $i = 0; ?>
								<?php while ( have_rows('content_block') ) : the_row(); ?>
								<?php $i++; ?>
									
									<div class="steps__row <?php echo ( $i % 2 == 1 ) ? 'opposite' : ''; ?>">
										
										<div class="steps__row-col visual">
											
											<?php if ( $image_heading = get_sub_field('image_heading') ) : ?>
											<h4 class="title desktop-text"><?php echo $image_heading; ?></h4>
											<?php endif; ?>
											<?php if ( $image_subheading = get_sub_field('image_subheading') ) : ?>
											<p class="desktop-text"><?php echo $image_subheading; ?></p>
											<?php endif; ?>
											
											<?php $image_desktop = get_sub_field('image_desktop'); ?>
											<?php $image_mobile = get_sub_field('image_mobile'); ?>
											<?php if ( $image_desktop && $image_mobile ) : ?>
											<picture>
												<?php if ( $image_desktop ) : ?>
												<img class="desktop-img" src="<?php echo $image_desktop['url']; ?>?t=<?php echo date('U'); ?>" alt="<?php echo $image_desktop['alt']; ?>">
												<?php endif; ?>
												
												<?php if ( $image_mobile ) : ?>
												<img class="mobile-img" src="<?php echo $image_mobile['url']; ?>?t=<?php echo date('U'); ?>" alt="<?php echo $image_mobile['alt']; ?>">
												<?php endif; ?>
											</picture>
											<?php endif; ?>
										</div>
										
										<div class="steps__row-col txt">
											
											<div class="steps-col-count">
												<?php if ( $icon_image = get_sub_field('icon_image') ) : ?>
												<div class="ico">
													<img src="<?php echo $icon_image['url']; ?>" alt="<?php echo $icon_image['alt']; ?>" />
												</div>
												<?php endif; ?>
											</div>
											
											<?php if ( $heading = get_sub_field('heading') ) : ?>
											<h3 class="h2"><?php echo $heading; ?></h3>
											<?php endif; ?>
											
											<?php if ( have_rows('list_items') ) : ?>
												<ul class="c-d-list">
													<?php while ( have_rows('list_items') ) : the_row(); ?>
													<li><?php echo get_sub_field('list'); ?></li>
													<?php endwhile; ?>
												</ul>
											<?php endif; ?>
										</div>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					</section>

				<?php endif; ?>

			<?php elseif(get_row_layout() == 'video_section') : ?>

				<?php  
					$video_poster = get_sub_field('video_poster');
					$video_url = get_sub_field('video_url');
					$content_block = get_sub_field('content_block');

					$video_poster_url = $video_poster['sizes']['video-poster-img'];
					$video_poster_url_2x = $video_poster['sizes']['video-poster-img-2x'];
				?>

				<section class="hiw-s video-section" id="section-<?php echo $count ?>">
					<div class="container">
						<div class="video-block">
							<div class="video-block__f-row">
								<div class="col">
									<img src="<?php echo $video_poster_url; ?>" alt="<?php echo $video_poster['alt']; ?>" srcset="<?php echo $video_poster_url_2x; ?> 2x">
								</div>
								<div class="col txt">
									<h2 class="s-ttl"><?php echo $content_block['heading']; ?></h2>
									<?php if(have_rows('content_block')) : ?>
										<?php while(have_rows('content_block')) : the_row(); ?>
											<?php if(have_rows('list_items')) : ?>
												<ul class="r-d-list">
													<?php while(have_rows('list_items')) : the_row(); ?>
														<li><?php echo get_sub_field('list'); ?></li>
													<?php endwhile; ?>
												</ul>
											<?php endif; ?>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
							<?php if ( $video_url ) : ?>
							<a href="<?php echo $video_url; ?>" data-type="iframe" data-fancybox data-width="937" data-height="527" class="video-block__p-btn"></a>
							<?php endif; ?>
						</div>
					</div>
				</section>

			<?php elseif(get_row_layout() == 'stats_of_restaurant') : ?>

				<?php  
					$section_heading = get_sub_field('section_heading');
					$subheading = get_sub_field('subheading');
				?>

				<?php if(have_rows('items')) : ?>

					<section class="results-s" id="section-<?php echo $count ?>">
						<div class="container sm">
							<div class="s-h-wrap">
								<?php if ( $section_heading ) : ?>
								<h2 class="s-ttl"><?php echo $section_heading; ?></h2>
								<?php endif; ?>
								<?php if ( $subheading ) : ?>
								<p><?php echo $subheading; ?></p>
								<?php endif; ?>
							</div>
							<ul class="rates-list">
								<?php while(have_rows('items')) : the_row(); ?>
									<?php  
										$icon = get_sub_field('icon');
										$icon_color = get_sub_field('icon_color');
										$title = get_sub_field('title');
										$number_text = get_sub_field('number_text');
									?>
									<li class="rates-list__item">
										<div class="rates-box">
											<i class="ico <?php echo $icon_color." "; ?><?php echo $icon ? $icon : 'icon-graph'; ?>"></i>
											<div class="t-wrap">
												<span class="amount"><?php echo $number_text; ?></span>
												<span><?php echo $title; ?></span>
											</div>
										</div>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
					</section>

				<?php endif; ?>

			<?php elseif(get_row_layout() == 'success_story_slider') : ?>

				<?php  
					$section_heading = get_sub_field('section_heading');
					$section_subheading = get_sub_field('section_subheading');
				?>

				<?php if(have_rows('slide_items')) : ?>

					<section class="stories-s" id="section-<?php echo $count ?>">
						<div class="container lg">
							<div class="s-h-wrap">
								<h2 class="s-ttl"><?php echo $section_heading ? $section_heading : "Success Stories"; ?></h2>
								<?php if($section_subheading) : ?>
									<p><?php echo $section_subheading; ?></p>
								<?php endif; ?>
							</div>
							<div class="stories-slider-wrapper">
								<div class="stories-slider swiper-container">
									<div class="swiper-wrapper">
										<?php while(have_rows('slide_items')) : the_row(); ?>
											<?php  
												$logo_regular_version = get_sub_field('logo_regular_version');
												$logo_retina_version = get_sub_field('logo_retina_version');
												$quote = get_sub_field('quote');
												$person_name = get_sub_field('person_name');
												$person_image = get_sub_field('person_image');
												$person_status = get_sub_field('person_status');
												$button = get_sub_field('button');
												$slide_image = get_sub_field('slide_image');

												$logo_regular_version_url = $logo_regular_version['url'];
												$logo_retina_version_url = $logo_retina_version['url'];

												$person_image_url = $person_image['sizes']['story-slider-person-img'];
												$person_image_url_2x = $person_image['sizes']['story-slider-person-img-2x'];

												$slide_image_url = $slide_image['sizes']['story-slider-featured-img'];
												$slide_image_url_2x = $slide_image['sizes']['story-slider-featured-img-2x'];
											?>
											<div class="stories-slider__item swiper-slide">
												<div class="img-col">
													<?php if($slide_image_url) : ?>
														<img src="<?php echo $slide_image_url; ?>" alt="<?php echo $slide_image['alt']; ?>" srcset="<?php echo $slide_image_url_2x; ?> 2x">
													<?php else: ?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/img07.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/img07@2x.jpg 2x">
													<?php endif; ?>
												</div>
												<div class="info-col">
													<div class="story-meta">
														<?php if($logo_regular_version_url) : ?>
															<div class="logo">
																<img src="<?php echo $logo_regular_version_url; ?>" alt="<?php echo $logo_regular_version['alt']; ?>" srcset="<?php echo $logo_retina_version_url; ?> 2x">
															</div>
														<?php endif; ?>
														<h3 class="h4 st-ttl">“<?php echo $quote; ?>”</h3>
														<div class="auth-i">
															<?php if($person_image_url) : ?>
																<span class="ava">
																	<img src="<?php echo $person_image_url; ?>" alt="<?php echo $person_image['alt']; ?>" srcset="<?php echo $person_image_url_2x; ?> 2x">
																</span>
															<?php endif; ?>
															<span><?php echo $person_name; ?> <?php if($person_status) : ?>(<?php echo $person_status; ?>) <?php endif; ?></span>
														</div>
													</div>
													<?php if(have_rows('featured_lists')) : ?>
														<div class="story-info">
															<ul class="d-list">
																<?php while(have_rows('featured_lists')) : the_row(); ?>
																	<li><?php echo get_sub_field('list'); ?></li>
																<?php endwhile; ?>
															</ul>
															<?php if(!empty($button)) : ?>
																<div class="btn-handler">
																	<a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
																</div>
															<?php endif; ?>
														</div>
													<?php endif; ?>
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
							</div>
						</div>
					</section>

				<?php endif; ?>

			<?php elseif(get_row_layout() == 'meet_the_founder') : ?>

				<?php  
					$section_heading = get_sub_field('section_heading');
					$section_subheading = get_sub_field('section_subheading');
					$image = get_sub_field('image');
					$name = get_sub_field('name');
					$status = get_sub_field('status');
					$heading_as_seen_in = get_sub_field('heading_as_seen_in');
					$logo_lists_as_seen_in = get_sub_field('logo_lists_as_seen_in');

					$image_url = $image['sizes']['meet-the-foundter-img'];
					$image_url_2x = $image['sizes']['meet-the-foundter-img-2x'];
				?>

				<section class="founder-s" id="section-<?php echo $count ?>">
					<div class="container sm">
						<div class="s-h-wrap">
							<h2 class="s-ttl"><?php echo $section_heading ? $section_heading : "Meet The Founder"; ?></h2>
							<?php if($section_subheading) : ?>
								<p><?php echo $section_subheading; ?></p>
							<?php endif; ?>
						</div>
						<div class="founder-b">
							<div class="founder-b__img-col">
								<?php if($image_url) : ?>
									<div class="f-img">
										<img src="<?php echo $image_url; ?>" alt="<?php echo $image['alt']; ?>" srcset="<?php echo $image_url_2x; ?> 2x">
									</div>
								<?php endif; ?>
								<?php if($name) : ?>
									<div class="f-meta">
										<span class="name"><?php echo $name; ?></span>
										<?php if($status) : ?>
											<span><?php echo $status; ?></span>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="founder-b__info-col">
								<?php if(have_rows('list_items')) : ?>
									<ul class="d-list">
										<?php while(have_rows('list_items')) : the_row(); ?>
											<li><?php echo get_sub_field('list'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
								<?php if(have_rows('logo_lists_as_seen_in')) : ?>
									<div class="logo-set-b">
										<h3 class="b-ttl centered"><?php echo $heading_as_seen_in ? $heading_as_seen_in : "As Seen In"; ?></h3>
										<ul class="logo-set">
											<?php while(have_rows('logo_lists_as_seen_in')) : the_row(); ?>
												<?php  
													$regular_image = get_sub_field('regular_image');
													$retina_image = get_sub_field('retina_image');

													$regular_image_url = $regular_image['url'];
													$retina_image_url = $retina_image['url'];
												?>
												<li>
													<a href="javascript:void()">
														<img src="<?php echo $regular_image_url; ?>" alt="<?php echo $regular_image['alt']; ?>" srcset="<?php echo $retina_image_url; ?> 2x">
													</a>
												</li>
											<?php endwhile; ?>
										</ul>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</section>

			<?php elseif(get_row_layout() == 'testimonial') : ?>

				<?php  
					$section_heading = get_sub_field('section_heading');
				?>

				<?php if(have_rows('testimonials')) : ?>

					<section class="reviews-s" id="section-<?php echo $count ?>">
						<div class="container lg">
							<div class="s-h-wrap">
								<h2 class="s-ttl"><?php echo $section_heading ? $section_heading : "Some Things People Have Said"; ?></h2>
							</div>
							<div class="reviews-slider-wrapper">
								<div class="reviews-slider swiper-container">
									<div class="swiper-wrapper">
										<?php while(have_rows('testimonials')) : the_row(); ?>
											<?php  
												$image = get_sub_field('image');
												$name = get_sub_field('name');
												$status = get_sub_field('status');
												$quote = get_sub_field('quote');

												$image_url = $image['sizes']['testimonial-slider-person-img'];
												$image_url_2x = $image['sizes']['testimonial-slider-person-img-2x'];
											?>
											<div class="reviews-slider__item swiper-slide">
												<div class="reviews-slider__item-box">
													<blockquote class="review">
														<?php if($image_url) : ?>
															<span class="review__ava">
																<img src="<?php echo $image_url; ?>" alt="<?php echo $image['alt']; ?>" srcset="<?php echo $image_url_2x; ?> 2x">
															</span>
														<?php endif; ?>
														<cite class="review__cite">
															<span class="name"><?php echo $name; ?></span>
															<?php if($status) : ?>
																<span class="desc"><?php echo $status; ?></span>
															<?php endif; ?>
														</cite>
														<q class="review__quote"><?php echo $quote; ?></q>
													</blockquote>
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>
								<div class="swiper-pagination"></div>
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
							</div>
						</div>
					</section>

				<?php endif; ?>

			<?php elseif(get_row_layout() == 'logo_section') : ?>

				<?php  
					$section_heading = get_sub_field('section_heading');
				?>

				<?php if(have_rows('logos')) : ?>

					<section class="customers-s" id="section-<?php echo $count ?>">
						<div class="container sm">
							<?php if($section_heading) : ?>
								<div class="s-h-wrap">
									<h2 class="s-ttl"><?php echo $section_heading; ?></h2>
								</div>
							<?php endif; ?>
							<ul class="logo-set-2">
								<?php while(have_rows('logos')) : the_row(); ?>
									<?php  
										$regular_image = get_sub_field('regular_image');
										$retina_image = get_sub_field('retina_image');

										$regular_image_url = $regular_image['url'];
										$retina_image_url = $retina_image['url'];
									?>
									<li>
										<a href="javascript:void()">
											<img class="changs-logo" src="<?php echo $regular_image_url; ?>" alt="<?php echo $regular_image['alt']; ?>" srcset="<?php echo $retina_image_url; ?> 2x">
										</a>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
					</section>

				<?php endif; ?>

			<?php elseif(get_row_layout() == 'lead_form_section') : ?>

				<?php  
					$heading = get_sub_field('heading');
					$subheading = get_sub_field('subheading');
					$image = get_sub_field('image');

					$image_url = $image['sizes']['lead-form-img'];
					$image_url_2x = $image['sizes']['lead-form-img-2x'];
				?>

				<section class="customers-s lead-form-section" id="section-<?php echo $count ?>">
					<div class="container sm">
						<div class="growth-b">
							<div class="info-col">
								<h2 class="b-ttl"><?php echo $heading ? $heading : "Get Your Growth<br> Plan Now"; ?></h2>
								<?php if($subheading) : ?>
									<p class="mob-hidden"><?php echo $subheading; ?></p>
								<?php endif; ?>
								<?php if(have_rows('list_text')) : ?>
									<ul class="d-list">
										<?php while(have_rows('list_text')) : the_row(); ?>
											<li><?php echo get_sub_field('list'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
								<form action="#" class="pp-a-form">
									<div class="pp-a-form__i-wrap">
										<input class="i-i pre-sf-search-input" type="text" id="auto_search_479" placeholder="Your Restaurant Name">
									</div>
									<div class="pp-a-form__btn-wrap">
										<button class="s-b" type="submit">Analyze Restaurant</button>
									</div>
								</form>
							</div>
							<?php if($image_url) : ?>
								<div class="img-col">
									<img class="img" src="<?php echo $image_url; ?>" alt="<?php echo $image['alt']; ?>" srcset="<?php echo $image_url_2x; ?> 2x">
								</div>
							<?php endif; ?>
						</div>
					</div>
				</section>
			
			<?php elseif(get_row_layout() == 'pricing') : ?>
				
				<section class="hiw-s pricing-s" id="section-<?php echo $count ?>">
					<div class="container">
						<?php if ( $heading = get_sub_field('heading') ) : ?>
						<h2 class="s-ttl"><?php echo $heading; ?></h2>
						<?php endif; ?>
						<div class="pricing-block">
							<div class="pricing-block__f-row">
								<div class="col txt">
									<ul class="r-d-list">
										<?php while ( has_sub_field('items') ) : ?>
										<?php if ( $text = get_sub_field('text') ) : ?>
										<li><?php echo $text; ?></li>
										<?php endif; ?>
										<?php endwhile; ?>
									</ul>
								</div>
							</div>
							<div class="pricing-footer">
								<form action="#" class="pp-a-form">
									<div class="pp-a-form__i-wrap">
										<input class="i-i locationTextField pre-sf-search-input" type="text" placeholder="Your Restaurant Name" id="auto_search_480" autocomplete="off">
									</div>
									<div class="pp-a-form__btn-wrap">
										<button class="s-b" type="submit">Get A Free Demo</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
			
			<?php elseif(get_row_layout() == 'more_info') : ?>
			
				<section class="hiw-s whats-s" id="section-<?php echo $count ?>">
					<div class="container sm">
						<?php if ( $heading = get_sub_field('heading') ) : ?>
						<div class="s-h-wrap">
							<h2 class="s-ttl"><?php echo $heading; ?></h2>
						</div>
						<?php endif; ?>
						
						<ul class="rates-list">
							<?php while ( has_sub_field('items') ) : ?>
							<li class="rates-list__item">
								<div class="rates-box">
									<?php if ( $icon_class = get_sub_field('icon_class') ) : ?>
									<i class="ico default <?php echo $icon_class; ?>"></i>
									<?php endif; ?>
									<?php if ( $content = get_sub_field('content') ) : ?>
									<div class="t-wrap">
										<?php echo $content; ?>
									</div>
									<?php endif; ?>
								</div>
							</li>
							<?php endwhile; ?>
						</ul>
					</div>
				</section>
			
			<?php elseif(get_row_layout() == 'testimonial_slider') : ?>
			
				<section class="things-s" id="section-<?php echo $count ?>">
					<div class="s-h-wrap">
						<?php if ( $heading = get_sub_field('heading') ) : ?>
						<h2 class="s-ttl"><?php echo $heading; ?></h2>
						<?php endif; ?>
					</div>
					<div class="container lg">
						<div class="things-slider-wrapper">
							<div class="things-slider swiper-container">
								<div class="swiper-wrapper">
									<?php $i = 0; ?>
									<?php while ( has_sub_field('items') ) : ?>
									<?php $i++; ?>
									<div class="things-slider-elem things-slider__item swiper-slide">
									
										<div class="e-block">
											<?php if ( $image = get_sub_field('image') ) : ?>
											<?php $style = $image ? 'background-image: url(' . $image['sizes']['testimonial_image_2x'] . ')' : ''; ?>
											<span class="thumb">
												<span class="thumb-image" style="<?php echo $style; ?>"></span>
												<?php /*
												<img src="<?php echo $image['sizes']['testimonial_image']; ?>" srcset="<?php echo $image['sizes']['testimonial_image_2x']; ?> 2x" alt="<?php echo $image['alt']; ?>" />
												*/ ?>
											</span>
											<?php endif; ?>
											
											<?php if ( $video_url = get_sub_field('video_url') ) : ?>

											<script src="https://fast.wistia.com/embed/medias/<?php echo $video_url; ?>.jsonp" async></script>
											<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
											<a href="javascript:;" class="video-block__p-btn">
												<div class="wistia_embed wistia_async_<?php echo $video_url; ?> popover=true popoverAnimateThumbnail=true popoverContent=link"></div>
											</a>

											<div style="display:none;">
												<div id="wistia-modal-<?php echo $i; ?>" class="wistia-modal <?php echo $video_orientation; ?>">
													<div class="wistia-modal-box">
														<iframe src="<?php echo $video_url; ?>"></iframe>
													</div>
												</div>
											</div>

											<?php endif; ?>
											
											<span class="info">
												<?php if ( $heading = get_sub_field('heading') ) : ?>
												<h3 class="i-ttl"><?php echo $heading; ?></h3>
												<?php endif; ?>
												<?php if ( $subheading = get_sub_field('subheading') ) : ?>
												<span class="i-desc"><?php echo $subheading; ?></span>
												<?php endif; ?>
												<?php if ( $logo = get_sub_field('logo') ) : ?>
												<span class="i-logo">
													<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
												</span>
												<?php endif; ?>
											</span>
										</div>
										
									</div>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
				</section>
			
			<?php elseif(get_row_layout() == 'instantly_apply') : ?>
			
				<section class="instantly-s" id="section-<?php echo $count ?>">
					<div class="container sm">
						<div class="s-h-wrap">
							<?php if ( $heading = get_sub_field('heading') ) : ?>
							<h2 class="s-ttl"><?php echo $heading; ?></h2>
							<?php endif; ?>
							<?php if ( $content = get_sub_field('content') ) : ?>
							<?php echo $content; ?>
							<?php endif; ?>
						</div>
						<form action="#" class="pp-a-form">
							<div class="pp-a-form__i-wrap">
								<input class="i-i locationTextField pre-sf-search-input" type="text" id="auto_search_481" placeholder="Your Restaurant Name">
							</div>
							<div class="pp-a-form__btn-wrap">
								<button class="s-b" type="submit">Get A Free Demo</button>
							</div>
						</form>
					</div>
				</section>
			
			<?php elseif(get_row_layout() == 'guarantee_mission') : ?>
				<?php $guarantee = get_sub_field('guarantee'); ?>
				<?php $mission = get_sub_field('mission'); ?>
				<section class="guarantee-s" id="section-<?php echo $count ?>">
					<?php if ( $background_image = $guarantee['background_image'] ) : ?>
					<div class="s-back">
						<img src="<?php echo $background_image['url']; ?>" alt="<?php echo $background_image['alt']; ?>" />
					</div>
					<?php endif; ?>
					
					<div class="container sm">
						<div class="s-h-wrap">
							<?php if ( $heading = $guarantee['heading'] ) : ?>
							<h2 class="s-ttl"><?php echo $heading; ?></h2>
							<?php endif; ?>
							<?php if ( $content = $guarantee['content'] ) : ?>
							<?php echo $content; ?>
							<?php endif; ?>
						</div>
					</div>
				</section>
				<section class="mission-s" id="section-<?php echo $count ?>">
					<?php if ( $background_image = $mission['background_image'] ) : ?>
					<div class="s-back">
						<img src="<?php echo $background_image['url']; ?>" alt="<?php echo $background_image['alt']; ?>" />
					</div>
					<?php endif; ?>
					
					<div class="container sm">
						<div class="s-h-wrap">
							<?php if ( $heading = $mission['heading'] ) : ?>
							<h2 class="s-ttl"><?php echo $heading; ?></h2>
							<?php endif; ?>
							<?php if ( $content = $mission['content'] ) : ?>
							<?php echo $content; ?>
							<?php endif; ?>
						</div>
					</div>
				</section>
			
			<?php elseif(get_row_layout() == 'our_team') : ?>
			
				<section class="our-team-s" id="section-<?php echo $count ?>">
					<div class="container sm">
						<?php if ( $heading = get_sub_field('heading') ) : ?>
						<h2 class="s-ttl"><?php echo $heading; ?></h2>
						<?php endif; ?>
						<div class="block">
							<div class="b-txt">
								<ul class="c-d-list">
									<?php while ( has_sub_field('items') ) : ?>
									<?php if ( $text = get_sub_field('text') ) : ?>
									<li><?php echo $text; ?></li>
									<?php endif; ?>
									<?php endwhile; ?>
								</ul>
								<?php if ( $email = get_sub_field('email') ) : ?>
								<a href="mailto:<?php echo $email; ?>" class="mail"><?php echo $email; ?></a>
								<?php endif; ?>
							</div>
							<?php if ( $image = get_sub_field('image') ) : ?>
							<div class="b-visual">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>
							<?php endif; ?>
						</div>
					</div>
				</section>
			
			<?php endif; ?>
			<?php $count ++; ?>
		<?php endwhile; ?>
	<?php endif; ?>

</main>

<?php get_footer(); ?>