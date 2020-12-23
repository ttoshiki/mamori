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

	<main id="primary" class="site-main">
		<div class="booking__wrapper">
      <h1 class="booking__title"><?php the_title(); ?></h1>
      <?php
        $user_name = wp_get_current_user()->display_name;
        $user_email = wp_get_current_user()->user_email;
      ?>
      <?php echo do_shortcode('[booking_package id=3]'); ?>
      <?php
      // echo um_get_display_name($user_id);
            ?>
		</div>
	</main><!-- #main -->

  <script type="text/javascript">
    jQuery(function () {
      const userName = <?php echo json_encode($user_name); ?>;
      const userEmail = <?php echo json_encode($user_email); ?>;
      jQuery('div').on('click', function() {
        jQuery('#reservationHeader').text('予約内容をご確認ください')
        console.log('hoge')
          jQuery('#booking_package_input_name').val(userName)
          jQuery('#booking_package_input_email').val(userEmail)
      })
    });
  </script>
<?php
get_footer();
