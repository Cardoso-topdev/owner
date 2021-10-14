<?php

global $wp_query;

/*$big = 999999999;

$args = array(
	'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format'       => '?paged=%#%',
	'total'        => $wp_query->max_num_pages,
	'current'      => max( 1, get_query_var('paged') ),
	'show_all'     => false,
	'end_size'     => 1,
	'mid_size'     => 2,
	'prev_next'    => true,
	'prev_text'    => __('« Previous','am'),
	'next_text'    => __('Next »','am'),
	'type'         => 'plain',
	'add_args'     => false,
	'add_fragment' => ''
);*/
//posts_nav_link();
$next_page = get_next_posts_link(__('Previous', 'am')); 
$prev_pages = get_previous_posts_link(__('Next', 'am'));
if(!empty($next_page) || !empty($prev_pages)) :
?>
<div class="pagination">
	<?php //echo paginate_links( $args ); ?>
    <?php if(!empty($next_page)) : ?><div class="al"><?php echo $next_page; ?></div><?php endif; ?>
    <?php if(!empty($prev_pages)) : ?><div class="ar"><?php echo $prev_pages; ?></div><?php endif; ?>
</div><!-- /pagination -->
<?php endif; ?>