<?php
global $am_option;

$am_option['shortname'] = "am";
$am_option['textdomain'] = "am";

// Functions
require get_parent_theme_file_path( '/includes/fn-core.php' );
require get_parent_theme_file_path( '/includes/fn-custom.php' );

// Extensions
require get_parent_theme_file_path( '/includes/extensions/breadcrumb-trail.php' );

/* Theme Init */
require get_parent_theme_file_path( '/includes/theme-widgets.php' );
require get_parent_theme_file_path( '/includes/theme-init.php' );

function make_yellowbox($atts, $content = null) {
   return '<p style="background: none repeat scroll 0 0 #ff9; clear: both; margin-bottom: 18px; overflow: hidden; border: 1px solid #e5e597; padding: 13px;">' . do_shortcode($content) . '</p>';
}
add_shortcode('yellowbox', 'make_yellowbox');
?>