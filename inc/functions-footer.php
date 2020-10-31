<?php
add_action('wp_footer', 'wp_print_scripts', 5);
add_action('wp_footer', 'wp_print_head_scripts', 5);

// Gravity Forms Init
// add_filter('gform_init_scripts_footer', 'init_scripts');
// function init_scripts() {
//     return true;
// }

add_action('wp_footer', 'print_scripts');
function print_scripts() {


	if( running_locally() ) :

		$sources = array(
			get_stylesheet_directory_uri() .'/assets/js/lib/jquery.3.5.1.min.js',
			get_stylesheet_directory_uri() .'/assets/js/scripts.js',
		);

	else :

		$dir = get_stylesheet_directory()."/assets/js";
    	$files = glob($dir . '/scripts.*.js');
		$split = explode("/", $files[0]);
		$filename = end($split);
		$sources = array(
			get_stylesheet_directory_uri() .'/assets/js/' . $filename,
			'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
		);

	endif;

	foreach($sources as $src) :
		echo '<script src="'.$src.'"></script>'."\n";
	endforeach;
	
}
