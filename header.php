<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="it" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="it" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="it" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php bloginfo('language'); ?>" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title></title>

	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<?php
		$metas = array(
			'description' => '',
			'author'      => '',
			'og:title'    => '',
			'og:image'    => '',
			'og:url'      => '',
			'og:type'     => '',
			'fb:app_id'   => ''
		);
		sn_meta_tags( $metas );
		sn_google_analytics( '' );

	    wp_head();
    ?>
</head>

<body <?php body_class($class); ?>>
	<div id="wrapper">
		<header>
			<nav role="navigation">
			<?php
				$menu = array(
					'theme_location'  => 'header_menu',
					'menu'            => 'Main Navigation',
					'container'       => false,
					'items_wrap'      => '<ul>%3$s</ul>'
				);
				wp_nav_menu( $menu );
			?>
			</nav>
		</header>
		<main>
