<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mamori
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta property="og:url" content="<?php echo get_home_url(); ?>" />
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:type" content="website">
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/ogp.jpg" />
  <meta property="og:site_name" content="Mamori" />
	<meta property="og:locale" content="ja_JP" />
	<meta name="format-detection" content="telephone=no">
	<meta name="twitter:card" content="summary" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon_32.ico">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/64x64.png">
  <title>Mamori</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="header" class="header">
	</header>