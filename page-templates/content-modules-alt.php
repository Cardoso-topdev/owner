<?php
/*
Template Name: Content Modules Alt
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main>


<?php if ( have_rows('content_modules') ) : ?>
<?php $gg = 0; ?>
<?php while ( have_rows('content_modules') ) : the_row(); ?>
<?php $gg++; ?>

<?php if ( get_row_layout() == 'hero' ) : ?>
<section id="section-<?php echo $gg; ?>" class="o-hero">
    <div class="container lg">
        <div class="box">
            <?php if ( $heading = get_sub_field('heading') ) : ?>
            <h3 class="box-heading"><?php echo $heading; ?></h3>
            <?php endif; ?>
            <?php $button = get_sub_field('button'); ?>
            <?php if ( $button['title'] && $button['url'] ) : ?>
            <div class="box-button">
                <a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ( get_row_layout() == 'testimonial_slider' ) : ?>

<section id="section-<?php echo $gg; ?>" class="o-slider">
    <section class="things-s alt">
        <div class="container lg">
            <div class="things-slider-wrapper">
                <div class="things-slider swiper-container">
                    <div class="swiper-wrapper">
                        <?php $i = 0; ?>
                        <?php while ( have_rows('items') ) : the_row(); ?>
                        <?php $i++; ?>
                        <div class="things-slider-elem things-slider__item swiper-slide">
                        
                            <div class="e-block">
                                <?php if ( $image = get_sub_field('image') ) : ?>
                                <?php $style = $image ? 'background-image: url(' . $image['sizes']['testimonial_image_2x'] . ')' : ''; ?>
                                <span class="thumb">
                                    <span class="thumb-image" style="<?php echo $style; ?>"></span>
                                </span>
                                <?php endif; ?>
                                
                                <?php if ( $video_url = get_sub_field('internal_video_url') ) : ?>

                                
                                <a data-fancybox href="<?php echo $video_url;?>" class="video-block__p-btn" data-width="640" data-height="360"  data-id="<?php the_sub_field('video_id'); ?>">
                                    <div class="wistia_embed"></div>
                                </a>
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
</section>

<?php endif; ?>

<?php if ( get_row_layout() == 'seen' ) : ?>
<section id="section-<?php echo $gg; ?>" class="o-seen">
    <div class="container lg">
        <div class="box">
            <?php if ( $label = get_sub_field('label') ) : ?>
            <h4 class="box-label"><?php echo $label; ?></h4>
            <?php endif; ?>
            <div class="box-items">
                <?php while ( have_rows('images') ) : the_row(); ?>
                <?php $regular_image = get_sub_field('regular_image'); ?>
                <?php $retina_image = get_sub_field('retina_image'); ?>

                <?php if ( $regular_image && $retina_image ) : ?>
                <div class="box-item">
                <img src="<?php echo $regular_image['url']; ?>" srcset="<?php echo $retina_image['url']; ?> 2x" alt="<?php echo $regular_image['alt']; ?>">
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>

        </div>
    </div>
</section>
<?php endif; ?>

<?php if ( get_row_layout() == 'grid_content' ) : ?>
<section id="section-<?php echo $gg; ?>" class="o-grid-content">
    <div class="container lg">
        <div class="box">
            <div class="box-items">
                <?php while ( have_rows('images') ) : the_row(); ?>
                <?php if ( $image = get_sub_field('image', get_the_ID()) ) : ?>
                <?php    
                        $img = $image['sizes'][ 'seen-in' ];
                        $img_2x = $image['sizes'][ 'seen-in-2x' ];
                ?>
                <div class="box-item">
                    <img src="<?php echo $img; ?>" alt="<?php echo $img['alt']; ?>" />
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php if ( $heading = get_sub_field('heading') ) : ?>
            <h3 class="box-heading"><?php echo $heading; ?></h3>
            <?php endif; ?>
            <?php if ( $content = get_sub_field('content') ) : ?>
            <div class="box-content">
                <?php echo $content; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ( get_row_layout() == 'content_image' ) : ?>
<?php $image_alignment = get_sub_field('image_alignment'); ?>

<section id="section-<?php echo $gg; ?>" class="o-content-image">
    <div class="container lg">
        <div class="box <?php echo $image_alignment; ?>">
            <?php $image = get_sub_field('image', get_the_ID()); ?>
            <?php if($image) : ?>
            <?php    
                    $img = $image['url'];
            ?>
            <?php endif; ?>
            <div class="box-image">
                <img src="<?php echo $img; ?>" alt="<?php echo $img['alt']; ?>" />
            </div>
            <div class="box-content">
                <?php if ( $content_background = get_sub_field('content_background') ) : ?>
                <div class="box-bg">
                    <img src="<?php echo $content_background['url']; ?>" alt="<?php echo $content_background['alt']; ?>" />
                </div>
                <?php endif; ?>
                
                <div class="box-heading-wrapper">
                    <?php if ( $icon = get_sub_field('icon') ) : ?>
                    <div class="box-icon">
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                    </div>
                    <?php endif; ?>
                    <?php if ( $heading = get_sub_field('heading') ) : ?>
                    <h3 class="box-heading"><?php echo $heading; ?></h3>
                    <?php endif; ?>
                </div>

                <?php if ( $content = get_sub_field('content') ) : ?>
                <div class="box-text">
                    <?php echo $content; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ( get_row_layout() == 'pricing' ) : ?>
<section id="section-<?php echo $gg; ?>" class="o-pricing">
    <div class="container lg">
        <div class="box">
            <?php if ( $heading = get_sub_field('heading') ) : ?>
            <h3 class="box-heading"><?php echo $heading; ?></h3>
            <?php endif; ?>
            <?php if ( $content = get_sub_field('content') ) : ?>
            <div class="box-content">
                <?php echo $content; ?>
            </div>
            <?php endif; ?>
            <div class="box-items">
                <?php while ( have_rows('items') ) : the_row(); ?>
                <div class="box-item">
                    <div class="box-item-head">
                        <?php if ( $icon = get_sub_field('icon') ) : ?>
                        <div class="box-item-icon">
                            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                        </div>
                        <?php endif; ?>
                        <?php if ( $title = get_sub_field('title') ) : ?>
                        <div class="box-item-title"><?php echo $title; ?></div>
                        <?php endif; ?>
                    </div>
                    <?php if ( $value = get_sub_field('value') ) : ?>
                    <div class="box-item-value"><?php echo $value; ?></div>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ( get_row_layout() == 'cta' ) : ?>
<?php $background_image = get_sub_field('background_image'); ?>
<?php $style = $background_image ? 'background-image:url(' . $background_image['url'] . ');' : ''; ?>

<section id="section-<?php echo $gg; ?>" class="o-cta" style="<?php echo $style; ?>">
    <div class="container lg">
        <div class="box">
            <?php if ( $heading = get_sub_field('heading') ) : ?>
            <h3 class="box-heading"><?php echo $heading; ?></h3>
            <?php endif; ?>
            <?php if ( $content = get_sub_field('content') ) : ?>
            <div class="box-content">
                <?php echo $content; ?>
            </div>
            <?php endif; ?>
            <?php $button = get_sub_field('button'); ?>
            <?php if ( $button['title'] && $button['url'] ) : ?>
            <div class="box-button">
                <a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ( get_row_layout() == 'free_demo' ) : ?>
<section id="section-<?php echo $gg; ?>" class="o-free-demo">
    <div class="container lg">
        <div class="box">
            <?php if ( $heading = get_sub_field('heading') ) : ?>
            <h3 class="box-heading"><?php echo $heading; ?></h3>
            <?php endif; ?>
            <div class="box-form">
                <form action="#" class="pp-a-form">
                    <div class="pp-a-form__i-wrap">
                       <input class="i-i locationTextField pre-sf-search-input pac-target-input" type="text" placeholder="Your Restaurant Name" id="search_auto_1" autocomplete="off">
                    </div>
                    <div class="pp-a-form__btn-wrap">
                      <button class="s-b" type="submit">Get A Free Demo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>

</main>

<?php get_footer(); ?>