<?php

$navMain = wp_get_nav_menu_items("Header");
$logo = get_field('logo');

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Add Google Tag code here (differnt from Google Analytics) -->

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="user-scalable=yes, width=device-width, height=device-height" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="theme-color" content="#ffffff">

	<!-- Add Font Awesome or Webfont links here  -->

	<?php wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />

</head>


<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->

	<!-- End Google Tag Manager (noscript) -->

	<div class="wrapper">
		<header class="top" id="header">
			<div class="container">
				<div class="row">
					<div class="flex-2 logo">
						<a href="<?php bloginfo('url'); ?>">
							<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
						</a>
					</div>
					<div class="flex-10 button-wrapper text-right">
						<button class="hamburger" id="hamburger" aria-label="Menu Button" tabindex="0">
							<div>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</button>
					</div>

					<nav class="flex-7 text-right">
						<ul>
							<?php foreach ($navMain as $m) { ?>
								<li class="<?php echo implode(' ', $m->classes); ?>">
									<a href="<?php echo $m->url; ?>" target="<?php echo $m->target; ?>" ><?php echo $m->title; ?></a>
								</li>
							<?php } ?>
						</ul>
					</nav>
				</div>
			</div>

			<div class="nav-wrapper">
				<div class="nav-background"></div>
				<div class="nav-menu">
					<div class="container">
						<div class="button-wrapper">
							<button class="hamburger" id="hamburger" aria-label="Menu Button" tabindex="0">
								<div>
									<span></span>
									<span></span>
								</div>
							</button>
						</div>
						<nav>
							<ul>
								<?php foreach ($navMain as $m) { ?>
									<li class="<?php echo implode(' ', $m->classes); ?>">
										<a href="<?php echo $m->url; ?>" target="<?php echo $m->target; ?>" ><?php echo $m->title; ?></a>
									</li>
								<?php } ?>
							</ul>
						</nav>
					</div>
				</div>

			</div>

		</header>

		<main class="main">