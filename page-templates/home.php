<?php
/*
Template Name: Home
Template Post Type: page
*/

get_header(); ?>

<main>
	<section class="intro-s">
		<div class="container">
			<div class="intro-f">
				<div class="intro-f__l">
					<h1>Your Secret Weapon for<br> Restaurant Marketing</h1>
						<p>Instantly see how you compare to other restaurants in<br class="tablet-hidden"> your local area, by estimated revenue potential.</p>
							<form action="#" class="pp-a-form">
								<div class="pp-a-form__i-wrap">
						<input class="i-i locationTextField" type="text" placeholder="Your Restaurant Name">
								</div>
								<div class="pp-a-form__btn-wrap">
									<button class="s-b" type="submit">Analyze Restaurant</button>
								</div>
							</form>
							<div class="logo-set-b desk-hidden">
								<h3 class="b-ttl">As Seen In</h3>
								<ul class="logo-set">
									<li>
										<a href="#!">
											<img src="<?php echo get_template_directory_uri(); ?>/images/forbes-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/forbes-logo@2x.png 2x">
										</a>
									</li>
									<li>
										<a href="#!">
											<img src="<?php echo get_template_directory_uri(); ?>/images/entrepreneur-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/entrepreneur-logo@2x.png 2x">
										</a>
									</li>
									<li>
										<a href="#!">
											<img src="<?php echo get_template_directory_uri(); ?>/images/inc-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/inc-logo@2x.png 2x">
										</a>
									</li>
									<li>
										<a href="#!">
											<img src="<?php echo get_template_directory_uri(); ?>/images/qsr-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/qsr-logo@2x.png 2x">
										</a>
									</li>
									<li>
										<a href="#!">
											<img src="<?php echo get_template_directory_uri(); ?>/images/fsr-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/fsr-logo@2x.png 2x">
										</a>
									</li>
								</ul>
							</div>
				</div>
				<div class="intro-f__r" id="intro-img">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/images/img01-mobile.svg, <?php echo get_template_directory_uri(); ?>/images/img01-mobile.svg 2x" media="(max-width: 1023px)">
						<source srcset="<?php echo get_template_directory_uri(); ?>/images/img01.svg, <?php echo get_template_directory_uri(); ?>/images/img01.svg 2x">
						<img src="<?php echo get_template_directory_uri(); ?>/images/img01.svg">
					</picture>
				</div>
			</div>
			<div class="logo-set-b mob-hidden">
				<h3 class="b-ttl">As Seen In</h3>
				<ul class="logo-set">
					<li>
						<a href="#!">
							<img src="<?php echo get_template_directory_uri(); ?>/images/forbes-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/forbes-logo@2x.png 2x">
						</a>
					</li>
					<li>
						<a href="#!">
							<img src="<?php echo get_template_directory_uri(); ?>/images/entrepreneur-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/entrepreneur-logo@2x.png 2x">
						</a>
					</li>
					<li>
						<a href="#!">
							<img src="<?php echo get_template_directory_uri(); ?>/images/inc-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/inc-logo@2x.png 2x">
						</a>
					</li>
					<li>
						<a href="#!">
							<img src="<?php echo get_template_directory_uri(); ?>/images/qsr-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/qsr-logo@2x.png 2x">
						</a>
					</li>
					<li>
						<a href="#!">
							<img src="<?php echo get_template_directory_uri(); ?>/images/fsr-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/fsr-logo@2x.png 2x">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="hiw-s" id="hiw-s">
		<div class="container">
			<div class="s-h-wrap">
				<h2 class="s-ttl">How It Works</h2>
				<p>Powered by artificial intelligence, data analysis, and top marketers.</p>
			</div>
			<div class="steps">
				<div class="steps__row sm step-1">
					<div class="steps__row-col visual">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/images/img02-mobile.png, <?php echo get_template_directory_uri(); ?>/images/img02-mobile@2x.png 2x" media="(max-width: 1023px)">
							<source srcset="<?php echo get_template_directory_uri(); ?>/images/img02.png, <?php echo get_template_directory_uri(); ?>/images/img02@2x.png 2x">
							<img class="img-1" src="images/img02.png" alt srcset="images/img02@2x.png 2x">
						</picture>
					</div>
					<div class="steps__row-col txt">
						<div class="steps-col-count">
							<i class="ico icon-restaurant"></i>
							<span>Step 1</span>
						</div>
						<h3 class="h2">We target the thousands of people searching for restaurants near you</h3>
						<ul class="c-d-list">
							<li>The ones who already want what you offer. </li>
							<li>Without discounts, 100% full margin.</li>
						</ul>
					</div>
				</div>
				<div class="steps__row opposite step-2">
					<div class="steps__row-col visual">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/images/img03-mobile.png, <?php echo get_template_directory_uri(); ?>/images/img03-mobile@2x.png 2x" media="(max-width: 1023px)">
							<source srcset="<?php echo get_template_directory_uri(); ?>/images/img03.png, <?php echo get_template_directory_uri(); ?>/images/img03@2x.png 2x">
							<img class="img-2" src="images/img03.png" alt srcset="images/img03@2x.png 2x">
						</picture>
					</div>
					<div class="steps__row-col txt">
						<div class="steps-col-count">
							<i class="ico icon-radar"></i>
							<span>Step 2</span>
						</div>
						<h3 class="h2">We analyze their behavior and use it to improve how you convert them</h3>
						<ul class="c-d-list">
							<li>Giving them exactly what they need to choose your restaurant.</li>
							<li>Better customer experience for them, more revenue for you.</li>
						</ul>
					</div>
				</div>
				<div class="steps__row step-3">
					<div class="steps__row-col visual">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/images/img04-mobile.png, <?php echo get_template_directory_uri(); ?>/images/img04-mobile@2x.png 2x" media="(max-width: 1023px)">
							<source srcset="<?php echo get_template_directory_uri(); ?>/images/img04.png, <?php echo get_template_directory_uri(); ?>/images/img04@2x.png 2x">
							<img class="img-3" src="images/img04.png" alt srcset="images/img04@2x.png 2x">
						</picture>
					</div>
					<div class="steps__row-col txt">
						<div class="steps-col-count">
							<i class="ico icon-customers"></i>
							<span>Step 3</span>
						</div>
						<h3 class="h2">You convert them into your new customers at record breaking rates</h3>
						<ul class="c-d-list">
							<li>1000s of extra website visitors (ready to buy) + perfect site experience</li>
							<li>The ultimate formula for increasing restaurant sales.</li>
						</ul>
					</div>
				</div>
				<div class="steps__row opposite step-4">
					<div class="steps__row-col visual">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/images/img05-mobile.png, <?php echo get_template_directory_uri(); ?>/images/img05-mobile@2x.png 2x" media="(max-width: 1023px)">
							<source srcset="<?php echo get_template_directory_uri(); ?>/images/img05.png, <?php echo get_template_directory_uri(); ?>/images/img05@2x.png 2x">
							<img class="img-4" src="images/img05.png" alt srcset="images/img05@2x.png 2x">
						</picture>
					</div>
					<div class="steps__row-col txt">
						<h3 class="h2">There’s more</h3>
						<ul class="c-d-list">
							<li>Just 17 minute setup process, from start to finish.</li>
							<li>100% trackable impact on sales</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="video-block">
				<div class="video-block__f-row">
					<div class="col">
						<img src="<?php echo get_template_directory_uri(); ?>/images/img06.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/img06@2x.png 2x">
					</div>
					<div class="col txt">
						<h2 class="s-ttl">How It Works</h2>
						<ul class="r-d-list">
							<li>50% SEO</li>
							<li>50% CRO</li>
							<li>100% Measurable</li>
						</ul>
					</div>
				</div>
				<a href="https://placepull.wistia.com/embed/iframe/xzewt71sq2?autoPlay=true" data-type="iframe" data-fancybox data-width="937" data-height="527" class="video-block__p-btn"></a>
			</div>
		</div>
	</section>
	<section class="results-s" id="results-s">
		<div class="container sm">
			<div class="s-h-wrap">
				<h2 class="s-ttl">Proven Results</h2>
				<p>The estimated average growth of restaurants we’re working with.</p>
			</div>
			<ul class="rates-list">
				<li class="rates-list__item">
					<div class="rates-box">
						<i class="ico icon-graph"></i>
						<div class="t-wrap">
							<span class="amount">+51%</span>
							<span>Revenue Growth</span>
						</div>
					</div>
				</li>
				<li class="rates-list__item">
					<div class="rates-box">
						<i class="ico green icon-visitors"></i>
						<div class="t-wrap">
							<span class="amount">+5,473</span>
							<span>New Customers</span>
						</div>
					</div>
				</li>
				<li class="rates-list__item">
					<div class="rates-box">
						<i class="ico pink icon-dollar-sign"></i>
						<div class="t-wrap">
							<span class="amount">+$487,127</span>
							<span>Additional Revenue</span>
						</div>
					</div>
				</li>
				<li class="rates-list__item">
					<div class="rates-box">
						<i class="ico orange icon-timer"></i>
						<div class="t-wrap">
							<span class="amount">+1,277</span>
							<span>Hours Saved</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="stories-s" id="stories-s">
		<div class="container lg">
			<div class="s-h-wrap">
				<h2 class="s-ttl">Success Stories</h2>
				<p>The estimated growth of restaurants we’re working with.</p>
			</div>
			<div class="stories-slider-wrapper">
				<div class="stories-slider swiper-container">
					<div class="swiper-wrapper">
						<div class="stories-slider__item swiper-slide">
							<div class="img-col">
								<img src="<?php echo get_template_directory_uri(); ?>/images/img07.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/img07@2x.jpg 2x">
							</div>
							<div class="info-col">
								<div class="story-meta">
									<div class="logo">
										<img src="<?php echo get_template_directory_uri(); ?>/images/wild-willys-logo.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/wild-willys-logo@2x.jpg 2x">
									</div>
									<h3 class="h4 st-ttl">“Gamechanging”</h3>
									<div class="auth-i">
										<span class="ava">
											<img src="<?php echo get_template_directory_uri(); ?>/images/avatar11.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/avatar11@2x.jpg 2x">
										</span>
										<span>Peter Stahl (Owner)</span>
									</div>
								</div>
								<div class="story-info">
									<ul class="d-list">
										<li>Broke sales record in 5 months</li>
										<li>+497% in-store visits</li>
										<li>+282% online orders</li>
										<li>+645% catering sales</li>
									</ul>
									<div class="btn-handler">
										<a href="#!">Learn More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="stories-slider__item swiper-slide">
							<div class="img-col">
								<img src="<?php echo get_template_directory_uri(); ?>/images/img07.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/img07@2x.jpg 2x">
							</div>
							<div class="info-col">
								<div class="story-meta">
									<div class="logo">
										<img src="<?php echo get_template_directory_uri(); ?>/images/xoc-logo.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/xoc-logo@2x.jpg 2x">
									</div>
									<h3 class="h4 st-ttl">“Unbelievable talent and focus on results”</h3>
									<div class="auth-i">
										<span class="ava">
											<img src="<?php echo get_template_directory_uri(); ?>/images/avatar12.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/avatar12@2x.jpg 2x">
										</span>
										<span>Ber Oberfeld (Owner)</span>
									</div>
								</div>
								<div class="story-info">
									<ul class="d-list">
										<li>Broke sales record:</li>
										<li>Largest monthly revenue increase ever</li>
										<li>+$33,378 in 1 month</li>
										<li>+255% increase in direction requests</li>
									</ul>
									<div class="btn-handler">
										<a href="#!">Learn More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="stories-slider__item swiper-slide">
							<div class="img-col">
								<img src="<?php echo get_template_directory_uri(); ?>/images/img07.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/img07@2x.jpg 2x">
							</div>
							<div class="info-col">
								<div class="story-meta">
									<div class="logo">
										<img src="<?php echo get_template_directory_uri(); ?>/images/uppercrust-logo-2.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/uppercrust-logo-2@2x.jpg 2x">
									</div>
									<h3 class="h4 st-ttl">“Placepull broke our sales record for the best week in our entire history”</h3>
									<div class="auth-i">
										<!-- <span class="ava">
											<img src="<?php echo get_template_directory_uri(); ?>/images/avatar13.jpg" alt="image description" />
										</span> -->
										<span>Shawn Shenefeld (Owner)</span>
									</div>
								</div>
								<div class="story-info">
									<ul class="d-list">
										<li>Broke sales record in 5 months</li>
										<li>+497% in-store visits</li>
										<li>+282% online orders</li>
										<li>+645% catering sales</li>
									</ul>
									<div class="btn-handler">
										<a href="#!">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</section>
	<section class="founder-s" id="founder-s">
		<div class="container sm">
			<div class="s-h-wrap">
				<h2 class="s-ttl">Meet The Founder</h2>
				<p>“The 19 Year Old Revolutionizing Restaurant Marketing” - MRM Magazine</p>
			</div>
			<div class="founder-b">
				<div class="founder-b__img-col">
					<div class="f-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/portrait01.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/portrait01@2x.png 2x">
					</div>
					<div class="f-meta">
						<span class="name">Adam Guild</span>
						<span>Founder</span>
					</div>
				</div>
				<div class="founder-b__info-col">
					<ul class="d-list">
						<li>Adam has built tech companies since he was 9. Those projects have reached over <b>10,000,000</b> users and made him a marketing expert.</li>
						<li>Now, he’s the world’s leading expert on restaurant marketing.</li>
						<li>He writes on the topic for 14 different publications including Forbes, QSR Magazine, Franchising Magazine, and FSR Magazine.</li>
						<li>Over <b>36,000</b> restaurant executives study his insights on marketing each month.</li>
						<li>“I committed my life to solving this problem because of my mom. I saw firsthand the impact that marketing could have on saving her business and and improving her life”</li>
					</ul>
					<div class="logo-set-b">
						<h3 class="b-ttl centered">As Seen In</h3>
						<ul class="logo-set">
							<li>
								<a href="#!">
									<img src="<?php echo get_template_directory_uri(); ?>/images/forbes-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/forbes-logo@2x.png 2x">
								</a>
							</li>
							<li>
								<a href="#!">
									<img src="<?php echo get_template_directory_uri(); ?>/images/entrepreneur-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/entrepreneur-logo@2x.png 2x">
								</a>
							</li>
							<li>
								<a href="#!">
									<img src="<?php echo get_template_directory_uri(); ?>/images/inc-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/inc-logo@2x.png 2x">
								</a>
							</li>
							<li>
								<a href="#!">
									<img src="<?php echo get_template_directory_uri(); ?>/images/qsr-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/qsr-logo@2x.png 2x">
								</a>
							</li>
							<li>
								<a href="#!">
									<img src="<?php echo get_template_directory_uri(); ?>/images/fsr-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/fsr-logo@2x.png 2x">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="reviews-s">
		<div class="container lg">
			<div class="s-h-wrap">
				<h2 class="s-ttl">Some Things People Have Said</h2>
			</div>
			<div class="reviews-slider-wrapper">
				<div class="reviews-slider swiper-container">
					<div class="swiper-wrapper">
						<div class="reviews-slider__item swiper-slide">
							<div class="reviews-slider__item-box">
								<blockquote class="review">
									<span class="review__ava">
										<img src="<?php echo get_template_directory_uri(); ?>/images/avatar01.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/avatar01@2x.jpg 2x">
									</span>
									<cite class="review__cite">
										<span class="name">Perry Smith</span>
										<span class="desc">Founder, Matchbox Pizzeria</span>
									</cite>
									<q class="review__quote">I am so happy to recommend Adam</q>
								</blockquote>
							</div>
						</div>
						<div class="reviews-slider__item swiper-slide">
							<div class="reviews-slider__item-box">
								<blockquote class="review">
									<span class="review__ava">
										<img src="<?php echo get_template_directory_uri(); ?>/images/avatar02.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/avatar02@2x.jpg 2x">
									</span>
									<cite class="review__cite">
										<span class="name">Glenn Cybulski</span>
										<span class="desc">President, Stoner’s Pizza Joint</span>
									</cite>
									<q class="review__quote">Marketing genius is an understatement</q>
								</blockquote>
							</div>
						</div>
						<div class="reviews-slider__item swiper-slide">
							<div class="reviews-slider__item-box">
								<blockquote class="review">
									<span class="review__ava">
										<img src="<?php echo get_template_directory_uri(); ?>/images/avatar03.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/avatar03@2x.jpg 2x">
									</span>
									<cite class="review__cite">
										<span class="name">Morten Kaag</span>
										<span class="desc">Partner, Tortilla Republic</span>
									</cite>
									<q class="review__quote">Our secret weapon</q>
								</blockquote>
							</div>
						</div>
						<div class="reviews-slider__item swiper-slide">
							<div class="reviews-slider__item-box">
								<blockquote class="review">
									<span class="review__ava">
										<img src="<?php echo get_template_directory_uri(); ?>/images/avatar04.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/avatar04@2x.jpg 2x">
									</span>
									<cite class="review__cite">
										<span class="name">Alexis Cooperstein</span>
										<span class="desc">CMO, Amici’s East Coast Pizzeria</span>
									</cite>
									<q class="review__quote">It is a pleasure to work with Placepull.</q>
								</blockquote>
							</div>
						</div>
						<div class="reviews-slider__item swiper-slide">
							<div class="reviews-slider__item-box">
								<blockquote class="review">
									<span class="review__ava">
										<img src="<?php echo get_template_directory_uri(); ?>/images/avatar05.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/avatar05@2x.jpg 2x">
									</span>
									<cite class="review__cite">
										<span class="name">Hannah An</span>
										<span class="desc">Owner, Saola by Hannah An</span>
									</cite>
									<q class="review__quote">The best company for a successful restaurant.</q>
								</blockquote>
							</div>
						</div>
						<div class="reviews-slider__item swiper-slide">
							<div class="reviews-slider__item-box">
								<blockquote class="review">
									<span class="review__ava">
										<img src="<?php echo get_template_directory_uri(); ?>/images/avatar06.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/avatar06@2x.jpg 2x">
									</span>
									<cite class="review__cite">
										<span class="name">John Halter</span>
										<span class="desc">Partner, EG Hospitality</span>
									</cite>
									<q class="review__quote">Amazing experience. Impressive team.</q>
								</blockquote>
							</div>
						</div>
						<div class="reviews-slider__item swiper-slide">
							<div class="reviews-slider__item-box">
								<blockquote class="review">
									<span class="review__ava">
										<img src="<?php echo get_template_directory_uri(); ?>/images/avatar07.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/avatar07@2x.jpg 2x">
									</span>
									<cite class="review__cite">
										<span class="name">Andrija Colak</span>
										<span class="desc">Founder, Surf N’ Fries</span>
									</cite>
									<q class="review__quote">Very fast and smart.</q>
								</blockquote>
							</div>
						</div>
						<div class="reviews-slider__item swiper-slide">
							<div class="reviews-slider__item-box">
								<blockquote class="review">
									<span class="review__ava">
										<img src="<?php echo get_template_directory_uri(); ?>/images/avatar08.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/avatar08@2x.jpg 2x">
									</span>
									<cite class="review__cite">
										<span class="name">Bob Appis</span>
										<span class="desc">Owner, Egg & I</span>
									</cite>
									<q class="review__quote">The best marketing we’ve ever seen</q>
								</blockquote>
							</div>
						</div>
						<div class="reviews-slider__item swiper-slide">
							<div class="reviews-slider__item-box">
								<blockquote class="review">
									<span class="review__ava">
										<img src="<?php echo get_template_directory_uri(); ?>/images/avatar09.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/avatar09@2x.jpg 2x">
									</span>
									<cite class="review__cite">
										<span class="name">Jason Berkowitz</span>
										<span class="desc">Partner, Tocaya Organica</span>
									</cite>
									<q class="review__quote">Like tapping into The Matrix</q>
								</blockquote>
							</div>
						</div>
						<div class="reviews-slider__item swiper-slide">
							<div class="reviews-slider__item-box">
								<blockquote class="review">
									<span class="review__ava">
										<img src="<?php echo get_template_directory_uri(); ?>/images/avatar10.jpg" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/avatar10@2x.jpg 2x">
									</span>
									<cite class="review__cite">
										<span class="name">Mauricio Oberfeld</span>
										<span class="desc">Owner, Frida Mexican Cuisine</span>
									</cite>
									<q class="review__quote">Impressive team. Impressive results</q>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</section>
	<section class="customers-s" id="customers-s">
		<div class="container sm">
			<div class="s-h-wrap">
				<h2 class="s-ttl">Some Of The Brands We’ve Worked With</h2>
			</div>
			<ul class="logo-set-2">
				<li>
					<a href="#!">
						<img class="changs-logo" src="<?php echo get_template_directory_uri(); ?>/images/pf-changs-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/pf-changs-logo@2x.png 2x">
					</a>
				</li>
				<li>
					<a href="#!">
						<img class="tocaya-logo" src="<?php echo get_template_directory_uri(); ?>/images/tocaya-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/tocaya-logo@2x.png 2x">
					</a>
				</li>
				<li>
					<a href="#!">
						<img class="frida-logo" src="<?php echo get_template_directory_uri(); ?>/images/frida-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/frida-logo@2x.png 2x">
					</a>
				</li>
				<li>
					<a href="#!">
						<img class="uppercrust-logo" src="<?php echo get_template_directory_uri(); ?>/images/upper-crust-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/upper-crust-logo@2x.png 2x">
					</a>
				</li>
				<li>
					<a href="#!">
						<img class="stoners-logo" src="<?php echo get_template_directory_uri(); ?>/images/stoners-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/stoners-logo@2x.png 2x">
					</a>
				</li>
				<li>
					<a href="#!">
						<img class="piesanos-logo" src="<?php echo get_template_directory_uri(); ?>/images/piesanos-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/piesanos-logo@2x.png 2x">
					</a>
				</li>
				<li>
					<a href="#!">
						<img class="amicis-logo" src="<?php echo get_template_directory_uri(); ?>/images/amicis-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/amicis-logo@2x.png 2x">
					</a>
				</li>
				<li>
					<a href="#!">
						<img class="planta-logo" src="<?php echo get_template_directory_uri(); ?>/images/planta-logo.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/planta-logo@2x.png 2x">
					</a>
				</li>
			</ul>
			<div class="growth-b">
				<div class="info-col">
					<h2 class="b-ttl">Get Your Growth<br> Plan Now</h2>
						<p class="mob-hidden">Unlock free market research on your restaurant's</p>
						<ul class="d-list">
							<li>Revenue increase potential</li>
							<li>New customer potential</li>
							<li>Opportunity in your area</li>
						</ul>
						<form action="#" class="pp-a-form">
							<div class="pp-a-form__i-wrap">
								<input class="i-i pre-sf-search-input" type="text" placeholder="Your Restaurant Name">
							</div>
							<div class="pp-a-form__btn-wrap">
								<button class="s-b" type="submit">Analyze Restaurant</button>
							</div>
						</form>
				</div>
				<div class="img-col">
					<img class="img" src="<?php echo get_template_directory_uri(); ?>/images/img08.png" alt="image description" srcset="<?php echo get_template_directory_uri(); ?>/images/img08@2x.png 2x">
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>