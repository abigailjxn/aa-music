<?php

// Get SVG
function get_svg($name) {

	include_once( $_SERVER['DOCUMENT_ROOT'].'/assets/svg/'.$name.'.txt');

}

// Remove .wp-post-image from images
// From http://stackoverflow.com/questions/10863391/wordpress-wp-post-image-class-remover
remove_action( 'begin_fetch_post_thumbnail_html', '_wp_post_thumbnail_class_filter_add' );


function flexible_content( $flex_field = 'flex', $directory = 'layouts', $prefix = 'acf', $usePost = false ) {

	// Manage all the page sections
	//  $sections = get_field('general_sections');
	//  print_r($sections);

	global $evenOdd, $flexItem, $flexClasses, $post;

	$postID = $post->ID;
	if( $usePost ) $postID = $usePost;

	if( have_rows($flex_field, $postID) ):

		$flexItem = 0;

	  while ( have_rows($flex_field, $postID) ) : the_row();

			$flexItem++;

			$flexClasses = array();
			$flexClasses[] = 'flex-' . $flexItem;

			if( $flexItem%2 == 0 ) :
				$flexClasses[] = "even";
			else :
				$flexClasses[] = "odd";
			endif;

			$layout = get_row_layout();
			get_template_part($directory."/".$prefix, $layout);

	  endwhile;

	endif;

}



