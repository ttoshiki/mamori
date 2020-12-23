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
		<div class="contact__wrapper">
			<div class="heading__wrapper">
        <h1 class="heading -en">CONTACT</h1>
        <span class="heading__subHeading">お問い合わせ</span>
      </div>
      <section class="contact__form">
        <p class="contact__formParagraph">
          以下のフォームに必要事項をご入力いただき、<br class="-sp"><a href="<?php echo home_url('/privacy/') ?>">個人情報保護方針</a>に同意の上、お問い合わせください。<br>
          お問い合わせは24時間受付しておりますが、<br class="-sp">回答は平日10:00～20:00とさせていただきます。<br>
          お問い合わせの内容により回答まで<br class="-sp">お時間をいただく場合がございます。
        </p>
        <span class="form-caution">すべて必須項目です</span>
        <?php the_content(); ?>
      </section>
      <?php get_template_part('template-parts/content-footer'); ?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
