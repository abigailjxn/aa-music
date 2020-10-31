<?php

// ACF Options Pages
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

// My custom admin body classes
add_filter('admin_body_class', 'my_custom_admin_body_classes');
function my_custom_admin_body_classes($classes) {

	global $post;

	$status = get_post_status($post->ID);
	$classes .= " status-".$status;

	return $classes;

}

// Register JS
add_action('admin_print_scripts', 'my_scripts_method');
function my_scripts_method() {
	wp_register_script( 'some-more-scripts', get_bloginfo('template_directory').'/admin/scripts.js', '', '', TRUE);
	wp_enqueue_script( 'some-more-scripts' );
}

// Remove menue options in admin
// No need to show these when not being used
add_action('admin_menu', 'remove_menus');
function remove_menus () {
	global $menu;
	$restricted = array( __('Comments') );
	end ($menu);
	while ( prev($menu) ) {
		$value = explode(' ',$menu[key($menu)][0]);
		if( in_array($value[0] != NULL?$value[0]:"" , $restricted) ){
			unset($menu[key($menu)]);
		}
	}
}

// Add CSS file and favicon to admin
add_action('admin_head', 'my_admin_head');
function my_admin_head() {
	echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/admin/style.css">';
	echo '<link rel="shortcut icon" href="'.get_bloginfo('template_directory').'/assets/favicons/favicon.ico" type="image/x-icon" />';
}
// Custom login css
add_action('login_head', 'custom_login');
function custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/admin/style.css">';
}

// Remove 'Wordpress' from admin page title
add_filter('admin_title', 'my_admin_title', 10, 2);
function my_admin_title($admin_title, $title) {
    return get_bloginfo('name').' | '.$title;
}

// Remove Comments from admin bar
// No need if commments are disabled on site
function mytheme_admin_bar_render() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );


// Change login title and URL for logo
add_filter("login_headerurl","collage_custom_login_link");
add_filter("login_headertitle","collage_custom_login_title");
function collage_custom_login_link($url) {
	return get_bloginfo('url');
}
function collage_custom_login_title($message) {
	return get_bloginfo('name');
}

// Remove Wordpress logo from admin bar
// Prefer to do this for the customer, less options to confuse them
function annointed_admin_bar_remove() {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

// Adds the post ID to 'row actions'
add_filter('post_row_actions', 'add_my_post_ID', 10, 2);
add_filter('page_row_actions', 'add_my_post_ID', 10, 2);
function add_my_post_ID($actions, $post){

    $actions['my_post_ID'] = '<span>'.$post->ID.'</span>';
    return $actions;
}

// Show post thumbnail in admin columns
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
function posts_columns($defaults){
    $defaults['column-post_thumbs'] = __('Thumb');
    return $defaults;
}
function posts_custom_columns($column_name, $id){
    if($column_name === 'column-post_thumbs') {

	    if( get_the_post_thumbnail($id) ) {
	        echo '<div class="column_post_thumb_holder">'.get_the_post_thumbnail( $id, 'thumbnail' ).'</div>';
	    } else {
	    	echo '<div class="no-thumb"><span>—</span></div>';
	    }

	}
}