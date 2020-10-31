<?php

// Remove extra header junk
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rest_output_link_wp_head', 10 );
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action('wp_head', 'wp_oembed_add_host_js');

// All emoji related actions
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');

add_filter('emoji_svg_url', '__return_false');
add_action('init','disable_comment_js');
function disable_comment_js(){
	wp_deregister_script( 'comment-reply' );
}

remove_action('wp_head', 'wp_print_scripts'); 
remove_action('wp_head', 'wp_print_head_scripts', 9);


add_action('wp_head', 'my_custom_header');
function my_custom_header() {

	global $post;

	get_template_part('layouts/meta-data');

	if( running_locally() ) :

		$sources = array(
			get_stylesheet_directory_uri() .'/assets/css/styles.min.css', // Compressed CSS file generated from Gulp SASS
			get_stylesheet_directory_uri() .'/assets/css/edits.css',
		);

	 else :

		$dir = get_stylesheet_directory()."/assets/css";
    	$files = glob($dir . '/styles.*.css');
		$split = explode("/", $files[0]);
		$filename = end($split);
		$sources = array(
			get_stylesheet_directory_uri() .'/assets/css/' . $filename, // Compressed CSS file generated from Gulp SASS
			get_stylesheet_directory_uri() .'/assets/css/edits.css', // Used for overriding SASS without recompiling
		);

	endif;

	// Include analytics last
	get_template_part('layouts/analytics');

	foreach($sources as $src) :
		echo '<link rel="stylesheet" href="'. $src .'" />'."\n";
	endforeach;


}

// Remove -php from page template body class
add_filter('body_class', 'my_body_class');
function my_body_class($classes) {

	foreach( $classes as $c ) {
		if( strpos($c, '-php') ) {
			$myClasses[] = str_replace('-php', '', $c);
		} else {
			$myClasses[] = $c;
		}
	}

	// This is removed by jQuery on document load
	// Used to prevent animations until page is loaded
	$myClasses[] = 'preload';

	return $myClasses;
}


// MINIFY the HTML
add_action('get_header', 'wp_html_compression_start');

class WP_HTML_Compression{
	// Settings
	protected $compress_css = true;
	protected $compress_js = true;
	protected $info_comment = false;
	protected $remove_comments = true;

	// Variables
	protected $html;
	public function __construct($html)
	{
		if (!empty($html))
		{
			$this->parseHTML($html);
		}
	}
	public function __toString()
	{
		return $this->html;
	}
	protected function bottomComment($raw, $compressed)
	{
		$raw = strlen($raw);
		$compressed = strlen($compressed);

		$savings = ($raw-$compressed) / $raw * 100;

		$savings = round($savings, 2);

		return '<!--HTML compressed, size saved '.$savings.'%. From '.$raw.' bytes, now '.$compressed.' bytes-->';
	}
	protected function minifyHTML($html)
	{
		$pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
		preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
		$overriding = false;
		$raw_tag = false;
		// Variable reused for output
		$html = '';
		foreach ($matches as $token)
		{
			$tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;

			$content = $token[0];

			if (is_null($tag))
			{
				if ( !empty($token['script']) )
				{
					$strip = $this->compress_js;
				}
				else if ( !empty($token['style']) )
				{
					$strip = $this->compress_css;
				}
				else if ($content == '<!--wp-html-compression no compression-->')
				{
					$overriding = !$overriding;

					// Don't print the comment
					continue;
				}
				else if ($this->remove_comments)
				{
					if (!$overriding && $raw_tag != 'textarea')
					{
						// Remove any HTML comments, except MSIE conditional comments
						$content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
					}
				}
			}
			else
			{
				if ($tag == 'pre' || $tag == 'textarea')
				{
					$raw_tag = $tag;
				}
				else if ($tag == '/pre' || $tag == '/textarea')
				{
					$raw_tag = false;
				}
				else
				{
					if ($raw_tag || $overriding)
					{
						$strip = false;
					}
					else
					{
						$strip = true;

						// Remove any empty attributes, except:
						// action, alt, content, src
						$content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content);

						// Remove any space before the end of self-closing XHTML tags
						// JavaScript excluded
						$content = str_replace(' />', '/>', $content);
					}
				}
			}

			if ($strip)
			{
				$content = $this->removeWhiteSpace($content);
			}

			$html .= $content;
		}

		return $html;
	}

	public function parseHTML($html)
	{
		$this->html = $this->minifyHTML($html);

		if ($this->info_comment)
		{
			$this->html .= "\n" . $this->bottomComment($html, $this->html);
		}
	}

	protected function removeWhiteSpace($str)
	{
		$str = str_replace("\t", ' ', $str);
		$str = str_replace("\n",  '', $str);
		$str = str_replace("\r",  '', $str);

		while (stristr($str, '  '))
		{
			$str = str_replace('  ', ' ', $str);
		}

		return $str;
	}
}

function wp_html_compression_finish($html) {
	if( is_user_logged_in() && !isset($_GET['preview']) || running_locally() ) {
		return $html;
	}  else {
		return new WP_HTML_Compression($html);
	}
}

function wp_html_compression_start() {
	ob_start('wp_html_compression_finish');
}
