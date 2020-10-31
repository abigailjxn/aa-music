<?php

include 'inc/functions-admin.php';
include 'inc/functions-general.php';
include 'inc/functions-header.php';
include 'inc/functions-footer.php';
include 'inc/functions-project.php';
include 'inc/functions-shortcodes.php';



// Allow featured image on posts and pages
add_theme_support( 'post-thumbnails', array( 'post', 'page') );

// MENUS!
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );

// More image sizes
add_image_size( 'hero', 1800, 9999, true );


// Disable the WP emojis. c'mon wordpress not cool
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Add exceprt support to pages
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');




add_filter( 'wp_get_nav_menu_items', 'prefix_nav_menu_classes', 10, 3 );

function prefix_nav_menu_classes($items, $menu, $args) {
    _wp_menu_item_classes_by_context($items);
    return $items;
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="button"';
}


