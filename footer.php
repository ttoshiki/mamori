<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mamori
 */

?>

	<footer class="footer">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dark.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dark.png, <?php echo get_template_directory_uri(); ?>/assets/img/logo_dark@2x.png 2x" alt="" class="footer__logo">
		<nav class="footer__nav">
			<?php
        wp_nav_menu(array(
					'theme_location' => 'primary',
					'container_class' => 'menu-primary-container',
        ));
        wp_nav_menu(array(
					'theme_location' => 'footer',
					'container_class' => 'menu-footer-container',
        ));
      ?>
		</nav>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
