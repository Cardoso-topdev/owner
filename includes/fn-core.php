<?php 
if(function_exists('get_field')){

	function am_get_field($field_name, $html_open = '', $html_close = '', $post_id = null, $esc = ''){
        
        global $post;
        
        $toReturn = '';
        
        if(!$post_id){
            $post_id = $post->ID;
        }
        
        if($value = get_field($field_name, $post_id)){
            if ($esc == '')
                $toReturn = $value;
            elseif ($esc == 'url')
                $toReturn = esc_url($value);
            elseif ($esc == 'attr')
                $toReturn = esc_attr($value);
            elseif ($esc == 'html')
                $toReturn = esc_html($value);
            
            return $html_open.$toReturn.$html_close;
        }
        
        return false;
        
    }
    
    function am_the_field($field_name, $html_open = '', $html_close = '', $post_id = null, $esc = ''){
        
        global $post;
        
        if(!$post_id){
            $post_id = $post->ID;
        }
        
        echo am_get_field($field_name, $html_open, $html_close, $post_id, $esc);
        
    }
	
}

/**
 * Custom comments for single or page templates
 */

function am_comments($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
		<div class="comment-author vcard">
		<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
		</div>
<?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.','am') ?></em>
		<br />
<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __('%1$s at %2$s','am'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)','am'),'  ','' );
			?>
		</div>

		<div class="entry-comment"><?php comment_text() ?></div>

		<div class="reply">
		<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
		</div>
		<?php endif; ?>
<?php
}

/**
 * Browser detection body_class() output
 */
function am_browser_body_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'gecko';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) $classes[] = 'ie';
	else $classes[] = 'unknown';

	if(wp_is_mobile()) $classes[] = 'mobile';
	if($is_iphone) $classes[] = 'iphone';
	return $classes;
}

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 * @return string The filtered title.
	 */
	function am_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name.
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary.
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( esc_html__( 'Page %s', 'wfc' ), max( $paged, $page ) );
		}

		return $title;
	}
	add_filter( 'wp_title', 'am_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function am_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}
	add_action( 'wp_head', 'am_render_title' );
endif;

/**
 * Filter for get_the_excerpt
 */
 
function am_excerpt_more( $more ) {
	return '...';
}

function am_has_title($title){
	global $post;
	if($title == ''){
		return get_the_time(get_option( 'date_format' ));
	}else{
		return $title;
	}
}

function am_texturize_shortcode_before($content) {
	$content = preg_replace('/\]\[/im', "]\n[", $content);
	return $content;
}

function am_remove_wpautop( $content ) { 
	$content = do_shortcode( shortcode_unautop( $content ) ); 
	$content = preg_replace('#^<\/p>|^<br \/>|<p>$#', '', $content);
	return $content;
}

// unregister all default WP Widgets
function am_unregister_default_wp_widgets() {
    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    //unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Text');
    //unregister_widget('WP_Widget_Categories');
    //unregister_widget('WP_Widget_Recent_Posts');
    //unregister_widget('WP_Widget_Recent_Comments');
    //unregister_widget('WP_Widget_RSS');
    //unregister_widget('WP_Widget_Tag_Cloud');
    //unregister_widget('WP_Nav_Menu_Widget');
}

/**
 * Add JS scripts
 */
function am_add_javascript( ) {
    
    global $am_option;

    if (is_singular() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply');
        
    wp_enqueue_script('jquery');
    if( !is_admin() ) {
        $am_files = array('');

        $am_links = array('https://maps.googleapis.com/maps/api/js?key=AIzaSyDEOspaP8pkvdN9EwT5Go-vYwOVuL-RlkE&libraries=places&callback=initMap'); 
        foreach($am_links as $am_link){
            wp_enqueue_script('am_'.sanitize_title($am_link), $am_link,array());
        }
        
        $template = basename( get_page_template() );
        if( 'content-modules-landing.php' == $template || 'content-modules-landing-new.php' == $template ){
             $am_files = array(
                'includes/js/jquery.main.js',
                'includes/js/jquery.fancybox.min.js',
                'includes/js/js-landing/animation.js',
                'includes/js/js-landing/jquery.main.js',
                'includes/js/js-landing/general.js'
            );
        }
        else{
            $am_files = array(
    			'includes/js/slick.min.js',
    			'includes/js/jquery.fancybox.min.js',
    			'includes/js/jquery.main.js',
    			'includes/js/general.js'
    		);
        }
        foreach($am_files as $am_file){
            wp_enqueue_script('am_'.sanitize_title($am_file), get_theme_file_uri($am_file), array( 'jquery' ),filemtime( get_theme_file_path($am_file)),true );
        }
    }
	 wp_localize_script( 'jquery', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

/**
 * Add CSS scripts
 */
function am_add_css( ) {
    
    global $am_option;
    
    // internal CSS
    $template = basename( get_page_template() );
    if( 'content-modules-landing.php' == $template ){
        $am_files = array(
            'jquery.fancybox.min.css',
            'css-landing/aos.css',
            'css-landing/fancybox.css',
            'css-landing/root.css',
            'css-landing/style.css',
            'css-landing/style-wp.css',
        ); 
    } 
    elseif( 'content-modules-landing-new.php' == $template ){
        $am_files = array(
            'jquery.fancybox.min.css',
            'css-landing/aos.css',
            'css-landing/fancybox.css',
            'css-landing/root-new.css',
            'css-landing/style.css',
            'css-landing/style-wp.css',
        ); 
    } 
    elseif( 'order.php' == $template ){
         $am_files = array(
            'jquery.fancybox.min.css',
            'css-landing/aos.css',
            'css-landing/fancybox.css',
            'css-landing/root-new.css',
            'css-landing/style.css',
            'css-landing/style-wp.css',
            'css-order/styles.css',
            'css-order/styles-wp.css',
        ); 
    }
    else{
        $am_files = array(
            'jquery.fancybox.min.css',
            'style.css'
        ); 
    }
    
    foreach($am_files as $am_file){
        wp_enqueue_style('am_'.sanitize_title($am_file), get_theme_file_uri($am_file) . '?t=' . date('U'),array(),filemtime( get_theme_file_path($am_file)));
    }
    
    // external CSS
    //$am_links = array('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Montserrat:300,300i,400,400i,700'); 
   // foreach($am_links as $am_link){
   //     wp_enqueue_style('am_'.sanitize_title($am_link), $am_link,array());
   // }
}

/**
 * Register widgetized areas
 */
function am_the_widgets_init() {
	
    if ( !function_exists('register_sidebars') )
        return;
    
    $before_widget = '<div id="%1$s" class="widget %2$s"><div class="widget_inner">';
    $after_widget = '</div></div>';
    $before_title = '<h3 class="widgettitle">';
    $after_title = '</h3>';

    register_sidebar(array('name' => __('Default','am'),'id' => 'sidebar-default','before_widget' => $before_widget,'after_widget' => $after_widget,'before_title' => $before_title,'after_title' => $after_title));
}


/**
 * Move Comment textarea to the end of the form
 */
function am_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}

/**
 * Get page id by slag
 */

function am_template_page_id($param) {
   $args = array(
       'meta_key' => '_wp_page_template',
       'meta_value' => 'page-templates/' . $param . '.php',
       'post_type' => 'page',
       'post_status' => 'publish'
   );
   $pages = get_pages($args);
   return $pages[0]->ID;
}

/**
 * Return template HTML
 */

function load_template_part($template_name, $part_name = null) {
   ob_start();
   get_template_part($template_name, $part_name);
   $var = ob_get_contents();
   ob_end_clean();
   return $var;
}

/**
 * Add SVG support
 */

function am_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	return $mimes;
}

/**
 * Add SVG support - CSS part
 */

function am_svg_thumb_display() {
	echo '<style>
	td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { 
	 width: 100% !important; 
	 height: auto !important; 
	}
	</style>';
}

/**
 * Add Demo Role for security
 */

function am_demo_role(){
    global $wp_roles;
    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();

    $role_admin = $wp_roles->get_role('administrator');
    //Adding a 'new_role' with all admin caps
    $wp_roles->add_role('demo', __('Demo','am'), $role_admin->capabilities);
    
    $role = get_role( 'demo' );
    $role->remove_cap( 'edit_themes' );
    $role->remove_cap( 'export' );
    $role->remove_cap( 'list_users' );
    $role->remove_cap( 'promote_users' );
    $role->remove_cap( 'switch_themes' );
    $role->remove_cap( 'remove_users' );
    $role->remove_cap( 'delete_themes' );
    $role->remove_cap( 'delete_plugins' );
    $role->remove_cap( 'edit_plugins' );
    $role->remove_cap( 'edit_users' );
    $role->remove_cap( 'create_users' );
    $role->remove_cap( 'delete_users' );
    $role->remove_cap( 'install_themes' );
    $role->remove_cap( 'install_plugins' );
    $role->remove_cap( 'activate_plugins' );
    $role->remove_cap( 'update_plugin' );
    $role->remove_cap( 'update_themes' );
    $role->remove_cap( 'update_core' );
}

/**
 * Change admin logo url
 */

function am_login_logo_url() {
    return home_url('/');
}

// Add Gogole Map API

function am_acf_google_map_key() {
	$key = get_field('google_map_api', 'option');
	if($key)
    	acf_update_setting('google_api_key', $key);
}
add_action('acf/init', 'am_acf_google_map_key');

/**
 * Retina 2x plugin supprt: get URL
 */

function am_get_retina($url){
    if(!function_exists('wr2x_get_retina_from_url'))
        return $url;

    $url_temp = wr2x_get_retina_from_url( $url );

    if(!empty($url_temp))
        return $url_temp;
    else
        return $url;
}

/**
 * Retina 2x plugin supprt: return IMG
 */

function am_get_retina_img($url_normal, $class='', $w = '', $h = '', $alt = ''){
    $url_retina = am_get_retina($url_normal);
    $srcset = '';
    if($url_retina){
        $srcset = ' srcset="'.$url_retina.' 2x"';
    }

    $width = '';
    if($w){
        $width = ' width="'.$w.'px"';
    }
    $height = '';
    if($h){
        $height = ' height="'.$h.'px"';
    }
    return '<img src="'.$url_normal.'"'.$srcset.$width.$height.' alt="'.$alt.'" class="'.$class.'">';
}

/**
 * Chnage admin logo image
 */

function am_login_logo(){  ?>
    <style type="text/css">
        body.login div#login h1 a {
			width: 320px;
			height: 100px;
			display: block;
			cursor: pointer;
			text-indent: -9999em;
			background: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/logo.png) no-repeat;
            background-size: 100% auto;
			margin: 0 auto 35px;
        }
    </style>
<?php }
?>