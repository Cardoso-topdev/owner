<?php
/*
Template Name: Content Modules Landing
Template Post Type: page
*/
?>
<?php get_header( 'landing' ); ?>


    <main class="main">
        <?php if ( have_rows('content_modules') ) : ?>
            <?php $gg = 0; ?>
            <?php while ( have_rows('content_modules') ) : the_row(); ?>
                <?php $gg++; ?>
                <?php if ( get_row_layout() == 'header' ) : ?>
                    <!-- header -->
                    <section class="section-intro py-9 mb-16 py-md-3 mb-md-0 mb-lg-0">
                        <div class="container">
                            <div class="grid grid-intro">
                                <div class="col-5 col-md-12 pb-md-4" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="head">
                                        <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                            <h1>
                                                <?php echo $heading; ?>
                                            </h1>
                                        <?php endif; ?>
                                        <?php if( $subheading = get_sub_field( 'subheading' )): ?> 
                                            <p>
                                                <?php echo $subheading; ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                    <?php get_template_part_args( 'templates/landing-content-modules-cta-button', array( '' => true ) ); ?>
                                    <?php if( have_rows('info_stripe') ): ?>
                                        <?php while( have_rows('info_stripe') ): ?>
                                            <?php the_row(); ?>
                                            <div class="strip-info">
                                                <?php $image = get_sub_field( 'icon' ) ?>
                                                <?php if( !empty( $image ) ): ?>
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                                <?php endif; ?>
                                                <p>
                                                    <?php if( $number = get_sub_field( 'number' )): ?> 
                                                         <strong>
                                                            <mark><?php echo $number; ?></mark>
                                                        </strong> 
                                                    <?php endif; ?>
                                                    <?php if( $text = get_sub_field( 'text' )): ?> 
                                                        <?php echo $text; ?>
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <?php if( have_rows('animation_images') ): ?>
                                    <?php while( have_rows('animation_images') ): ?>
                                        <?php the_row(); ?>
                                        <div class="col-7 col-md-12">
                                            <div class="img-intro">
                                                <div class="card-slider">
                                                    <?php $image = get_sub_field( 'image_1' ) ?>
                                                    <?php if( !empty( $image ) ): ?>
                                                        <?php $bg_url = $image['sizes']['ci-12']; ?>
                                                        <?php $bg_url_2x = $image['sizes']['ci-12-2x']; ?>
                                                        <div class="slider-item">
                                                            <div class="s-item">
                                                                <img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php $image = get_sub_field( 'image_2' ) ?>
                                                    <?php if( !empty( $image ) ): ?>
                                                        <?php $bg_url = $image['sizes']['ci-12']; ?>
                                                        <?php $bg_url_2x = $image['sizes']['ci-12-2x']; ?>
                                                        <div class="slider-item">
                                                            <div class="s-item">
                                                                <img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php $image = get_sub_field( 'image_3' ) ?>
                                                    <?php if( !empty( $image ) ): ?>
                                                        <?php $bg_url = $image['sizes']['ci-12']; ?>
                                                        <?php $bg_url_2x = $image['sizes']['ci-12-2x']; ?>
                                                        <div class="slider-item">
                                                            <div class="s-item">
                                                                <img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php $image = get_sub_field( 'image_4' ) ?>
                                                <?php if( !empty( $image ) ): ?>
                                                    <div class="decor decor-t">
                                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                                    </div>
                                                <?php endif; ?>
                                                <?php $image = get_sub_field( 'image_5' ) ?>
                                                <?php if( !empty( $image ) ): ?>
                                                    <div class="decor decor-b">
                                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                                    </div>
                                                <?php endif; ?>
                                                <?php /*
                                                <picture class="d-block" data-aos="fade-up" data-aos-duration="2000">
                                                    <img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
                                                </picture>
                                                */ ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>
                <?php elseif ( get_row_layout() == 'video_slider' ) : ?>
                    <!-- video_slider -->
                    <section id="s-<?php echo $gg; ?>" class="py-15 pt-md-4 pb-md-5 pt-lg-10">
                        <div class="block-customers">
                            <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                <div class="container">
                                    <h3 class="sub-title text-center mb-7">
                                        <?php echo $heading; ?>
                                    </h3>
                                </div>
                            <?php endif; ?>
                            <!-- Slick -->
                            <div class="slick-container gallery-customers">
                                <div class="slick-wrapper">
                                    <?php if( get_sub_field( 'slider' ) ): ?>
                                        <?php while( has_sub_field( 'slider' ) ): ?>
                                            <div class="slide">
                                                <div class="box box-customers">
                                                    <div class="box-holder">
                                                        <div class="img">
                                                            <?php $image = get_sub_field( 'image' ) ?>
                                                            <?php if( !empty( $image ) ): ?>
                                                                <?php $bg_url = $image['sizes']['video-slider']; ?>
                                                                <?php $bg_url_2x = $image['sizes']['video-slider-2x']; ?>
                                                                <span class="img-stretch" style="background-image: url(<?php echo $bg_url_2x; ?>)"></span>
                                                            <?php endif; ?>
                                                            <?php if( $video_url = get_sub_field( 'video_url' )): ?> 
                                                                <a class="btn-play" data-fancybox="" data-type="" href="<?php echo $video_url; ?>" data-id="<?php the_sub_field('trigger_id'); ?>">
                                                                    play
                                                                </a>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="description">
                                                            <?php $image = get_sub_field( 'icon' ) ?>
                                                            <?php if( !empty( $image ) ): ?>
                                                                <div class="img-sm mb-5 mb-md-2">
                                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                                                <h4 class="h5 mb-3 mb-md-2">
                                                                    <?php echo $heading; ?>
                                                                </h4>
                                                            <?php endif; ?>
                                                            <?php if( $name = get_sub_field( 'name' )): ?> 
                                                                <div class="author">
                                                                    <h5 class="text-gradient mb-0">
                                                                        <?php echo $name; ?>
                                                                    </h5>
                                                                    <?php if( $owner_of = get_sub_field( 'owner_of' )): ?> 
                                                                        <p>
                                                                            Owner of <u><?php echo $owner_of; ?></u>
                                                                        </p>
                                                                    <?php endif; ?>
                                                                </div>
                                                           <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif ?>
                                </div>
                                <div class="slick-controls">
                                    <div class="slick-button-prev">prev</div>
                                    <div class="slick-pagination"></div>
                                    <div class="slick-button-next">next</div>
                                </div>
                            </div>
                            <?php if( get_sub_field( 'logos' ) ): ?>
                                <!-- logos -->
                                <div class="container container-md">
                                    <ul class="customers-list">
                                        <?php while( has_sub_field( 'logos' ) ): ?>
                                            <?php $image = get_sub_field( 'logo' ) ?>
                                            <?php if( !empty( $image ) ): ?>
                                                <li>
                                                    <picture>
                                                        <?php $image_small = get_sub_field( 'logos_mall' ) ?>
                                                        <?php if( !empty( $image_small ) ): ?>
                                                            <source srcset="<?php echo $image_small['url']; ?>" media="(max-width: 767px)">
                                                        <?php else: ?>
                                                            <source srcset="<?php echo $image['url']; ?>" media="(max-width: 767px)">
                                                        <?php endif; ?>
                                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                                    </picture>
                                                </li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            <?php endif ?>
                        </div>
                    </section>
                <?php elseif ( get_row_layout() == 'advice' ) : ?>
                    <!-- advice -->
                    <section id="s-<?php echo $gg; ?>" class="pt-0 pb-4" data-aos="fade-up" data-aos-duration="2000">
                        <div class="container container-md">
                            <div class="grid slogan _y-center">
                                <div class="col-6 col-md-12">
                                    <h3>
                                        <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                            <span class="mark-blue">
                                                <?php echo $heading; ?>
                                            </span>
                                        <?php endif; ?>
                                        <?php if( $heading_black_part = get_sub_field( 'heading_black_part' )): ?> 
                                            <br> 
                                           <?php echo $heading_black_part; ?>
                                       <?php endif; ?>
                                    </h3>
                                </div>
                                <?php if( $content = get_sub_field( 'content' )): ?> 
                                    <div class="col-6 col-md-12">
                                        <div class="txt-border pb-1 pb-md-0">
                                            <p>
                                                <?php echo $content; ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>
                <?php elseif ( get_row_layout() == 'content' ) : ?>
                    <!-- content -->
                    <section id="s-<?php echo $gg; ?>" class="pt-10 mb-n13 mb-md-n10 pt-md-4 bg-gr-b" data-aos="fade-up" data-aos-duration="2000">
                        <div class="block-info">
                            <div class="container">
                                <div class="head head-center">
                                    <?php get_template_part_args( 'templates/landing-content-modules-icon', array( '' => true ) ); ?>
                                    <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                        <h2 class="h1">
                                           <?php echo $heading; ?>
                                        </h2>
                                    <?php endif; ?>
                                    <?php if( $content = get_sub_field( 'content' )): ?> 
                                        <p>
                                            <?php echo $content; ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php get_template_part_args( 'templates/landing-content-modules-cta-button', array( '' => true ) ); ?>
                                </div>
                            </div>
                            <div class="img-checkout">
                                <div class="container">
                                    <lottie-player class="lottie-player" src="<?php echo get_template_directory_uri( ); ?>/includes/js/js-landing/checkout/Checkout.json" background="transparent" speed="1" loop="" autoplay="">
                                    </lottie-player>
                                    <div class="all-bg">
                                        <img class="all-eclipse" src="<?php echo get_template_directory_uri( ); ?>/images/landing/bg-eclipse.svg" alt="">
                                        <img class="all-strip" src="<?php echo get_template_directory_uri( ); ?>/images/landing/bg-strip.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php elseif ( get_row_layout() == 'image_content' ) : ?>
                    <?php $type = get_sub_field( 'style' ); ?>
                    <!-- image_content <?php echo $type; ?>-->
                    <?php if( 's1' == $type ): ?> 
                        <?php 
                            $s_class = '';
                            $img_class = 'mt-5 mt-lg-0';     
                            $text_class = '';     
                            $fade = 'fade-right';     
                            if( 'left' == get_sub_field( 'image_align' ) ){
                                $s_class = 'img-left s-opacity';
                                $img_class = 'mt-n16 mt-lg-n1';     
                                $text_class = '';           
                                $fade = 'fade-left';     
                            };
                        ?>
                        <section id="s-<?php echo $gg; ?>" class="py-10 py-md-0 pt-md-5">
                            <div class="container">
                                <div class="col-img-txt <?php echo $s_class; ?>">
                                    <div class="col col-txt" data-aos="<?php echo $fade ?>" data-aos-duration="2000">
                                        <div class="head">
                                            <?php get_template_part_args( 'templates/landing-content-modules-icon', array( 'auction' => true ) ); ?>
                                            <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                                <h2 class="h1">
                                                    <?php echo $heading; ?>
                                                </h2>
                                            <?php endif; ?>
                                            <?php if( $content = get_sub_field( 'content' )): ?> 
                                                <p>
                                                  <?php echo $content; ?>
                                                </p>
                                            <?php endif; ?>
                                            <?php get_template_part_args( 'templates/landing-content-modules-cta-button', array( '' => true ) ); ?>
                                            <?php get_template_part_args( 'templates/landing-content-modules-logos', array( '' => true ) ); ?>
                                        </div>
                                        <?php get_template_part_args( 'templates/landing-content-modules-testimonial-desktop', array( 'auction' => true ) ); ?>
                                    </div>
                                    <?php if( 'right' == get_sub_field( 'image_align' ) ): ?>
                                        <?php $image = get_sub_field( 'image' ) ?>
                                        <?php if( !empty( $image ) ): ?>
                                            <?php $bg_url = $image['sizes']['ci']; ?>
                                            <?php $bg_ur_2x = $image['sizes']['ci-2x']; ?>
                                            <div class="col col-img <?php echo $img_class; ?>">
                                                <div class="img <?php echo $img_class; ?>">
                                                    <picture data-aos="fade-left" data-aos-duration="2000">
                                                        <source srcset="<?php echo $bg_url; ?>" media="(max-width: 414px)">
                                                        <img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_ur_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
                                                    </picture>
                                                </div>
                                                <?php get_template_part_args( 'templates/landing-content-modules-testimonial-mobile', array( '' => true ) ); ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if ( 'left' == get_sub_field( 'image_align' ) ): ?>
                                        <div class="col col-img">
                                            <div class="img mt-n16 mt-lg-n1">
                                                <picture data-aos="fade-right" data-aos-duration="2000">
                                                    <source srcset="<?php echo get_template_directory_uri( ); ?>/images/landing/img-screen05-m.png" media="(max-width: 414px)">
                                                    <img src="<?php echo get_template_directory_uri( ); ?>/images/landing/img-screen05.png" alt="" srcset="<?php echo get_template_directory_uri( ); ?>/images/landing/img-screen05@2x.png 2x">
                                                </picture>
                                            </div>
                                            <?php get_template_part_args( 'templates/landing-content-modules-testimonial-mobile', array( '' => true ) ); ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                            </div>
                        </section>
                    <?php elseif( 's2' == $type ): ?>
                        <?php $animation_style = get_sub_field( 'animation_style' ); ?>
                        <?php if( 's1' == $animation_style ): ?> 
                            <section id="s-<?php echo $gg; ?>" class="py-10 py-md-0 pt-md-5">
                                <div class="container">
                                    <div class="col-img-txt img-left">
                                        <div class="col col-txt" data-aos="fade-left" data-aos-duration="2000">
                                            <div class="head">
                                                <?php get_template_part_args( 'templates/landing-content-modules-icon', array( '' => true ) ); ?>
                                                <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                                    <h2 class="h1">
                                                        <?php echo $heading; ?>
                                                    </h2>
                                                <?php endif; ?>
                                                <?php if( $content = get_sub_field( 'content' )): ?> 
                                                    <p>
                                                       <?php echo $content; ?>
                                                    </p>
                                                <?php endif; ?>
                                                <?php get_template_part_args( 'templates/landing-content-modules-cta-button', array( '' => true ) ); ?>
                                            </div>
                                            <?php get_template_part_args( 'templates/landing-content-modules-testimonial-desktop', array( '' => true ) ); ?>
                                        </div>
                                        <div class="col col-img">
                                            <div class="img">
                                                <?php get_template_part_args( 'templates/landing-content-modules-animation-1', array( '' => true ) ); ?>
                                            </div>
                                            <?php get_template_part_args( 'templates/landing-content-modules-testimonial-mobile', array( '' => true ) ); ?>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php elseif( 's2' == $animation_style ): ?>
                            <section id="s-<?php echo $gg; ?>"  class="py-10 py-md-0 pt-md-5">
                                <div class="container">
                                    <div class="col-img-txt">
                                        <div class="col col-txt" data-aos="fade-right" data-aos-duration="2000">
                                            <div class="head">
                                                <?php get_template_part_args( 'templates/landing-content-modules-icon', array( '' => true ) ); ?>
                                                <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                                    <h2 class="h1">
                                                        <?php echo $heading; ?>
                                                    </h2>
                                                <?php endif; ?>
                                                <?php if( $content = get_sub_field( 'content' )): ?> 
                                                    <p>
                                                       <?php echo $content; ?>
                                                    </p>
                                                <?php endif; ?>
                                                <?php get_template_part_args( 'templates/landing-content-modules-cta-button', array( '' => true ) ); ?>
                                            </div>
                                            <?php get_template_part_args( 'templates/landing-content-modules-testimonial-desktop', array( '' => true ) ); ?>
                                        </div>
                                        <div class="col col-img">
                                            <div class="img">
                                                <?php get_template_part_args( 'templates/landing-content-modules-animation-2', array( '' => true ) ); ?>
                                            </div>
                                            <?php get_template_part_args( 'templates/landing-content-modules-testimonial-mobile', array( '' => true ) ); ?>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php elseif( 's3' == $animation_style ): ?>
                            <section id="s-<?php echo $gg; ?>" class="py-10 py-md-1 pt-md-5">
                                <div class="container">
                                    <div class="col-img-txt no-shadow">
                                        <div class="col col-txt" data-aos="fade-right" data-aos-duration="2000">
                                            <div class="head">
                                                <?php get_template_part_args( 'templates/landing-content-modules-icon', array( '' => true ) ); ?>
                                                <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                                    <h2 class="h1">
                                                        <?php echo $heading; ?>
                                                    </h2>
                                                <?php endif; ?>
                                                <?php if( $content = get_sub_field( 'content' )): ?> 
                                                    <p>
                                                       <?php echo $content; ?>
                                                    </p>
                                                <?php endif; ?>
                                                <?php get_template_part_args( 'templates/landing-content-modules-cta-button', array( '' => true ) ); ?>
                                            </div>
                                            <?php get_template_part_args( 'templates/landing-content-modules-testimonial-desktop', array( '' => true ) ); ?>
                                        </div>
                                        <div class="col col-img">
                                            <div class="img">
                                                <?php get_template_part_args( 'templates/landing-content-modules-animation-3', array( '' => true ) ); ?>
                                            </div>
                                            <?php get_template_part_args( 'templates/landing-content-modules-testimonial-mobile', array( '' => true ) ); ?>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php endif ?>
                    <?php elseif( 's3' == $type ): ?>
                        <section id="s-<?php echo $gg; ?>" class="p-relative py-10 py-md-5" data-aos="fade-up" data-aos-duration="2000">
                            <div class="container">
                                <div class="grid-block">
                                    <?php if( have_rows('left_column') ): ?>
                                        <?php while( have_rows('left_column') ): ?>
                                            <?php the_row(); ?>
                                            <div class="col pb-md-18">
                                                <div class="block-advice b-left">
                                                    <?php $image = get_sub_field( 'image_desktop' ) ?>
                                                    <?php if( !empty( $image ) ): ?>
                                                        <?php $bg_url = $image['sizes']['ci-2']; ?>
                                                        <?php $bg_url_2x = $image['sizes']['ci-2-2x']; ?>
                                                        <div class="img">
                                                            <picture>
                                                                <?php $image_mobile = get_sub_field( 'image_mobile' ) ?>
                                                                <?php if( !empty( $image_mobile ) ): ?>
                                                                    <source srcset="<?php echo $image_mobile['sizes']['ci-2-m-2x']; ?>" media="(max-width: 1023px)">
                                                                <?php endif; ?>
                                                                <img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
                                                            </picture>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="description">
                                                        <div class="head head-sm">
                                                            <?php $image = get_sub_field( 'icon' ) ?>
                                                            <?php if( !empty( $image ) ): ?>
                                                                <div class="ico">
                                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                                                <h3>
                                                                   <?php echo $heading; ?>
                                                                </h3>
                                                            <?php endif; ?>
                                                            <?php if( $content = get_sub_field( 'content' )): ?> 
                                                                <p>
                                                                    <?php echo $content; ?>
                                                                </p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php if( have_rows('right_column') ): ?>
                                        <?php while( have_rows('right_column') ): ?>
                                            <?php the_row(); ?>
                                            <div class="col">
                                                <div class="block-advice b-right">
                                                    <div class="description">
                                                        <div class="head head-sm">
                                                            <?php $image = get_sub_field( 'icon' ) ?>
                                                            <?php if( !empty( $image ) ): ?>
                                                                <div class="ico">
                                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                                                <h3>
                                                                   <?php echo $heading; ?>
                                                                </h3>
                                                            <?php endif; ?>
                                                            <?php if( $content = get_sub_field( 'content' )): ?> 
                                                                <p>
                                                                    <?php echo $content; ?>
                                                                </p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <?php $image = get_sub_field( 'image_desktop' ) ?>
                                                    <?php if( !empty( $image ) ): ?>
                                                        <?php $bg_url = $image['sizes']['ci-2']; ?>
                                                        <?php $bg_url_2x = $image['sizes']['ci-2-2x']; ?>
                                                        <div class="img">
                                                            <picture>
                                                                <?php $image_mobile = get_sub_field( 'image_mobile' ) ?>
                                                                <?php if( !empty( $image_mobile ) ): ?>
                                                                    <source srcset="<?php echo $image_mobile['sizes']['ci-2-m-2x']; ?>" media="(max-width: 1023px)">
                                                                <?php endif; ?>
                                                                <img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
                                                            </picture>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <?php $link = get_sub_field('cta_button'); ?>
                                <?php if( $link ): ?>
                                    <div class="btn-block-strip" data-aos="fade-up" data-aos-duration="2000">
                                        <div class="hold">
                                            <div class="frame">
                                                <?php
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                <a class="btn btn-gradient get-a-free-demo" data-src="<?php echo esc_url( $link_url ); ?>" href="javascript:;" target="<?php echo esc_attr( $link_target ); ?>">
                                                    <?php echo esc_html( $link_title ); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?> 
                            </div>
                        </section>
                    <?php endif ?>
                <?php elseif ( get_row_layout() == 'divider' ) : ?>
                    <!-- divider -->
                    <?php $type = get_sub_field( 'style' ); ?>
                    <?php if( 's1' == $type ): ?> 
                        <div class="block-divider text-center mt-n10 mt-md-n1" data-aos="fade-down" data-aos-duration="2000">
                            <img src="<?php echo get_template_directory_uri( ); ?>/images/landing/arrow-bottom02.svg" alt="">
                        </div>
                    <?php elseif( 's2' == $type ): ?>
                        <div class="block-divider m-hidden  text-center mb-7" data-aos="fade-down" data-aos-duration="2000">
                            <img src="<?php echo get_template_directory_uri( ); ?>/images/landing/arrow-bottom.svg" alt="">
                        </div>
                    <?php else: ?>
                    <?php endif ?>
                <?php elseif ( get_row_layout() == 'pricing' ) : ?>
                    <!-- pricing -->
                    <section id="s-<?php echo $gg; ?>" class="pt-4 pb-12 pb-md-6" data-aos="fade-up" data-aos-duration="2000">
                        <div class="container">
                            <div class="block-pricing">
                                <div class="head head-center head-sm">
                                    <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                        <h1>
                                            <?php echo $heading; ?>
                                        </h1>
                                    <?php endif; ?>
                                    <?php if( have_rows('badge') ): ?>
                                        <?php while( have_rows('badge') ): ?>
                                            <?php the_row(); ?>
                                            <div class="item-info">
                                                <div class="holder">
                                                    <?php $image = get_sub_field( 'icon' ) ?>
                                                    <?php if( !empty( $image ) ): ?>
                                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                                    <?php endif; ?>
                                                    <?php if( $text = get_sub_field( 'text' )): ?> 
                                                        <p>
                                                            <?php echo $text; ?>
                                                        </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php if( $subheading = get_sub_field( 'subheading' )): ?> 
                                        <p>
                                            <?php echo $subheading; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <?php if( get_sub_field( 'content_boxes' ) ): ?>
                                    <ul class="pricing-list">
                                        <?php while( has_sub_field( 'content_boxes' ) ): ?>
                                            <li>
                                                <div class="box-pricing <?php echo get_sub_field( 'box_color' ) ; ?>">
                                                    <div class="holder">
                                                        <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                                            <h3>
                                                                <?php echo $heading; ?>
                                                            </h3>
                                                        <?php endif; ?>
                                                        <?php if( $number = get_sub_field( 'number' )): ?> 
                                                            <div class="counter <?php if( 'gray' == get_sub_field( 'box_color' ) ){ echo 'text-gradient'; }; ?>">
                                                                <?php echo $number; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if( $note = get_sub_field( 'note' )): ?> 
                                                            <p>
                                                                <?php echo $note; ?>
                                                            </p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif ?>
                                <?php $link = get_sub_field('cta_button'); ?>
                                <?php if( $link ): ?>
                                    <?php
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <div class="btn-block pt-4 pt-md-2 text-center">
                                        <a class="btn btn-gradient get-a-free-demo" data-src="<?php echo esc_url( $link_url ); ?>" href="javascript:;" target="<?php echo esc_attr( $link_target ); ?>">
                                            <?php echo esc_html( $link_title ); ?>
                                        </a>
                                    </div>
                                <?php endif; ?> 
                            </div>
                        </div>
                    </section>
                <?php elseif ( get_row_layout() == 'contact' ) : ?>
                    <!-- contact -->
                    <section  id="s-<?php echo $gg; ?>" class="py-7 py-lg-6" data-aos="fade-up" data-aos-duration="2000">
                        <div class="container">
                            <div class="block-contact">
                                <div class="head text-center mb-9">
                                    <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                        <h1>
                                            <?php echo $heading; ?>
                                        </h1>
                                    <?php endif; ?>
                                    <?php if( $subheading = get_sub_field( 'subheading' )): ?> 
                                        <div class="txt m-auto w-700">
                                            <p>
                                                <?php echo $subheading; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="box box-contact bg-gr-blue">
                                    <div class="description">
                                        <div class="txt">
                                            <?php if( $form_text = get_sub_field( 'form_text' )): ?> 
                                                <h3>
                                                    <?php echo $form_text; ?>
                                                </h3>
                                            <?php endif; ?>
                                                    
                                            <div class="box-form">
                                                <form action="#" class="pp-a-form">
                                                    <div class="f-col">
                                                    <div class="pp-a-form__i-wrap f-row">
                                                        <input class="i-i locationTextField pre-sf-search-input pac-target-input" type="text" placeholder="Enter your restaurant name..." id="search_auto_1" autocomplete="off">
                                                    </div>
                                                    <div class="pp-a-form__btn-wrap f-row">
                                                        <button class="s-b btn btn-white" type="submit">
                                                            Get A Free Demo
                                                        </button>
                                                    </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <?php /*
                                            <form class="form-contact" action="#">
                                                <div class="f-col">
                                                    <div class="f-row">
                                                        <input class="f-text" type="text" placeholder="Enter your restaurant name...">
                                                    </div>
                                                    <div class="f-row">
                                                        <input class="btn btn-white" type="submit" value="Get A Free Demo">
                                                    </div>
                                                </div>
                                            </form>
                                            */ ?>

                                        </div>
                                    </div>
                                    <?php $image = get_sub_field( 'image_desktop' ) ?>
                                    <?php if( !empty( $image ) ): ?>
                                        <?php $bg_url = $image['sizes']['contact-image']; ?>
                                        <?php $bg_url_2x = $image['sizes']['contact-image-2x']; ?>
                                        <div class="img">
                                            <picture>
                                                <?php $image_mobile = get_sub_field( 'image_mobile' ) ?>
                                                <?php if( !empty( $image_mobile ) ): ?>
                                                    <?php $bg_url_mobile = $image_mobile['sizes']['contact-image-m']; ?>
                                                    <source srcset="<?php echo $bg_url_mobile; ?>" media="(max-width: 414px)">
                                                <?php else: ?>
                                                    <source srcset="<?php echo $bg_url; ?>" media="(max-width: 414px)">
                                                <?php endif; ?>
                                                <img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
                                            </picture>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php elseif ( get_row_layout() == 'mission' ) : ?>
                    <!-- mission -->
                    <style>
                        <?php  
                            $bg_image = get_template_directory_uri( ).'/images/landing/bg-mission.svg';
                            $image = get_sub_field( 'image' );
                            if( !empty( $image ) ){
                                $bg_image = $image['url'];
                            }
                        ?>
                        .bg-mission {
                            background-image:url(<?php echo $bg_image; ?>);
                        }
                    </style>
                    <section id="s-<?php echo $gg; ?>" class="bg-mission" data-aos="fade-up" data-aos-duration="2000">
                        <div class="container">
                            <div class="block-mission">
                                <div class="head text-center mb-9">
                                    <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                        <h2 class="h1">
                                            <mark class="d-block">
                                                <?php echo $heading; ?>
                                            </mark>
                                        </h2>
                                    <?php endif; ?>
                                    <?php if( $content = get_sub_field( 'content' )): ?> 
                                        <div class="txt m-auto w-700">
                                            <p>
                                                <?php echo $content; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    <?php $image = get_sub_field( 'icon_desktop' ) ?>
                                    <?php if( !empty( $image ) ): ?>
                                        <?php $bg_url = $image['url']; ?>
                                        <div class="ico-mission">
                                            <picture>
                                                <?php $icon_mobile = get_sub_field( 'icon_mobile' ) ?>
                                                <?php if( !empty( $icon_mobile ) ): ?>
                                                    <source srcset="<?php echo $icon_mobile['url']; ?>" media="(max-width: 768px)">
                                                <?php else: ?>
                                                    <source srcset="<?php echo $bg_url; ?>" media="(max-width: 768px)">
                                                <?php endif; ?>
                                                <img src="<?php echo $bg_url; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
                                            </picture>
                                        </div>
                                    <?php endif; ?>                       
                                </div>
                            </div>
                        </div>
                    </section>
                <?php elseif ( get_row_layout() == 'story' ) : ?>
                    <!-- story -->
                    <section id="s-<?php echo $gg; ?>" class="pt-16 pb-12 pt-md-9 pb-md-6 bg-gr-t">
                        <div class="container">
                            <div class="block-story">
                                <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                    <div class="head head-center mb-15 mb-md-6">
                                        <h1>
                                            <?php echo $heading; ?>
                                        </h1>
                                    </div>
                                <?php endif; ?>
                                <div class="col-story">
                                    <div class="col col-txt">
                                        <div class="story-block">
                                            <div class="hold">
                                                <ul class="story-list">
                                                    <?php $image = get_sub_field( 'small_image_1' ) ?>
                                                    <?php if( !empty( $image ) ): ?>
                                                        <?php $bg_url = $image['sizes']['story-small']; ?>
                                                        <?php $bg_url_2x = $image['sizes']['story-small-2x']; ?>
                                                        <li>
                                                            <div class="img-personal">
                                                                <img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
                                                            </div>
                                                        </li>
                                                    <?php endif; ?>
                                                    <?php $image = get_sub_field( 'small_image_2' ) ?>
                                                    <?php if( !empty( $image ) ): ?>
                                                        <?php $bg_url = $image['sizes']['story-small']; ?>
                                                        <?php $bg_url_2x = $image['sizes']['story-small-2x']; ?>
                                                        <li>
                                                            <div class="img-personal">
                                                                <img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
                                                            </div>
                                                        </li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="frame">
                                            <?php if( $content = get_sub_field( 'content' )): ?> 
                                                <?php echo $content; ?>
                                            <?php endif; ?>
                                            <?php if( have_rows( 'badge' ) ): ?>
                                                <?php while( have_rows( 'badge' ) ): ?>
                                                    <?php the_row(); ?>
                                                    <div class="item-info">
                                                        <a target="_blank" href="<?php echo get_sub_field( 'url' ) ?>" class="holder">
                                                            <?php $image = get_sub_field( 'icon' ) ?>
                                                            <?php if( !empty( $image ) ): ?>
                                                                <img src="<?php echo get_template_directory_uri( ); ?>/images/landing/ico/ico-lightning.svg" alt="">
                                                            <?php endif; ?>
                                                            <?php if( $text = get_sub_field( 'text' )): ?> 
                                                                <p>
                                                                    <?php echo $text; ?>
                                                                </p>
                                                            <?php endif; ?>
                                                        </a>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <?php $image = get_sub_field( 'image' ) ?>
                                    <?php if( !empty( $image ) ): ?>
                                        <?php $bg_url = $image['sizes']['story']; ?>
                                        <?php $bg_url_2x = $image['sizes']['story-2x']; ?>
                                        <div class="col col-img">
                                            <div class="img">
                                                <img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </section>
                <?php elseif ( get_row_layout() == 'investor' ) : ?>
                    <!-- investor -->
                    <section id="s-<?php echo $gg; ?>" class="pt-4 pb-12">
                        <div class="container">
                            <div class="block-investor">
                                <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                    <h4 class="sub-title text-center mb-7">
                                        <?php echo $heading; ?>
                                    </h4>
                                <?php endif; ?>
                                <?php if( get_sub_field( 'investor' ) ): ?>
                                    <ul class="investor-list">
                                        <?php while( has_sub_field( 'investor' ) ): ?>
                                            <li>
                                                <div class="investor-item">
                                                    <?php $image = get_sub_field( 'image' ) ?>
                                                    <?php if( !empty( $image ) ): ?>
                                                        <?php $bg_url = $image['sizes']['story-slider-person-img']; ?>
                                                        <?php $bg_url_2x = $image['sizes']['story-slider-person-img-2x']; ?>
                                                        <div class="img">
                                                            <img src="<?php echo $bg_url; ?>" srcset="<?php echo $bg_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if( $name = get_sub_field( 'name' )): ?> 
                                                        <div class="description">
                                                            <h5>
                                                                <?php echo $name; ?>
                                                            </h5>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif ?>
                            </div>
                        </div>
                    </section>
                <?php elseif ( get_row_layout() == 'guides' ) : ?>
                    <!-- guides -->
                    <section id="s-<?php echo $gg; ?>" class="pt-12 pt-md-7 _bg-l-blue">
                        <div class="guides-block">
                            <?php if( $heading = get_sub_field( 'heading' )): ?> 
                                <h3 class="text-center mb-6 mb-md-3">
                                    <?php echo $heading; ?>
                                </h3>
                            <?php endif; ?>
                            <!-- Slick -->
                            <div class="slick-container gallery-slick">
                                <div class="slick-wrapper">
                                    <?php $posts_not_in = array() ?>
                                    <?php  $posts = get_sub_field('blog_posts'); ?> 
                                    <?php if( $posts ): ?>
                                        <?php foreach( $posts as $post):  ?>
                                            <?php setup_postdata( $post ); ?>
                                            <?php $posts_not_in[] = $post->ID ?>
                                            <div class="slide">
                                                <div class="box box-guide">
                                                    <div class="box-holder">
                                                        <div class="img">
                                                            <a href="<?php echo get_permalink() ?>">
                                                                <?php 
                                                                    $thumb_id = get_post_thumbnail_id( $post->ID );

                                                                    $thumb = wp_get_attachment_image_src( $thumb_id, 'guides' );
                                                                    $url = $thumb[0]; 
                                                                    
                                                                    $thumb_2x = wp_get_attachment_image_src( $thumb_id, 'guides-2x' );
                                                                    $url_2x = $thumb_2x[0]; 
                                                                    
                                                                    $image = wp_get_attachment( $thumb_id );
                                                                ?>
                                                                <img src="<?php echo $url; ?>" srcset="<?php echo $url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title'] ?>">
                                                            </a>
                                                        </div>
                                                        <div class="description">
                                                            <p>
                                                                <a href="<?php echo get_permalink() ?>">
                                                                    <?php the_title() ?>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <?php wp_reset_postdata();  ?>
                                        <?php wp_reset_query() ?>
                                    <?php endif; ?> 
                                </div>
                                <div class="slick-controls">
                                    <div class="slick-button-prev">prev</div>
                                    <div class="slick-pagination"></div>
                                    <div class="slick-button-next">next</div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </main>

<?php get_footer( 'landing' ); ?>