<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mamori
 */

get_header();
?>

  <main class="site-main">
		<div class="notFound__wrapper">
			<h1 class="notFound__heading -en">404 Not Found</h1>
			<p class="notFound__paragraph">お探しのページは<br class="-sp">見つかりませんでした。</p>
			<span class="notFound__span -en">The page you’re looking for  can’t be found.</span>
			<div class="notFound__logo"><?php echo file_get_contents(get_template_directory() . '/assets/images/logo.svg'); ?></div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
