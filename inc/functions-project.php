<?php

// Check if I'm running locally
// This will help with gulp, sass, debugging, etc.
function running_locally() {
    $whitelist = array('127.0.0.1', "::1");
    $localServer = '24.236.147.102'; //Maestro office
    if( in_array($_SERVER['REMOTE_ADDR'], $whitelist) || $_SERVER['SERVER_ADDR'] == $localServer ) :
        return true;
    else :
        return false;
    endif;
}


function no_widow( $str = '' ) {

    // Strip spaces.
    $str = trim( $str );
    // Find the last space.
    $space = strrpos( $str, ' ' );

    // If there's a space then replace the last on with a non breaking space.
    if ( false !== $space ) {
        $str = substr( $str, 0, $space ) . '&nbsp;' . substr( $str, $space + 1 );
    }

    // Return the string.
    return $str;

}


//popular posts for blog page
function mm_popular_posts($post_id) {
    $count_key = 'popular_posts';
    $count = get_post_meta($post_id, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
    } else {
        $count++;
        update_post_meta($post_id, $count_key, $count);
    }
}
function track_posts($post_id) {
    if (!is_single()) return;
    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }
    mm_popular_posts($post_id);
}
add_action('wp_head', 'track_posts');



// Change the excerpt length
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function custom_excerpt_length( $length ) {
	return 30;
}

// Change the excerpt ellipsis
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more) {
	//return ' &hellip; <a class="readmore" href="' . get_permalink($post->ID).'">Continue reading</a>';
	return '...';
}