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
		<div class="about__wrapper">
      <section class="about__description">
        <div class="about__descriptionInner">
          <div class="heading__wrapper">
            <h2 class="heading -en">ABOUT</h2>
            <span class="heading__subHeading">Mamoriとは</span>
          </div>
          <p class="about__descriptionParagraph">便利な時代になりました。</p>
          <p class="about__descriptionParagraph">
            インターネットが広がり、距離や時間を超えて<br>
            世界中の人と繋がれるようになった現在…<br>
            世界の広がりと引き換えに、<br class="-sp">“自分自身の心”との繋がりが<br>
            希薄になっているようにも思います。
          </p>
          <p class="about__descriptionParagraph">
            たくさんの情報に触れ、時流を捉え、<br>
            スピーディに攻めることも大事です。
          </p>
          <p class="about__descriptionParagraph">
            ですが同じくらい、他者との境界線を引き、<br>
            自分の心を守ることも大事にしたいところ。
          </p>
          <p class="about__descriptionParagraph">
            外側に溢れる情報の波に飲まれて、<br>
            自分自身との繋がりが薄くなったように感じたら…<br>
            ぜひMamoriに来てください。
          </p>
          <p class="about__descriptionParagraph">
            植物が深く大地に根を張るように、<br>
            訪れた人が深く内的世界と<br class="-sp">繋がれる環境をご提供します。
          </p>
          <p class="about__descriptionParagraph">
            ここは“守りの森”であり“護りの杜”です。
          </p>
          <p class="about__descriptionParagraph">
            <strong>
              Mamoriが外の世界と内なる世界を繋ぐ<br>
              キー（鍵）になりますように。
            </strong>
          </p>
        </div>
        <span class="about__descriptionFrame -top"></span>
        <span class="about__descriptionFrame -left -pc"></span>
        <span class="about__descriptionFrame -right -pc"></span>
        <span class="about__descriptionFrame -bottom"></span>
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/key.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/key.png" alt="鍵" class="about__keyImage">
        </picture>
      </section>
    </div>
	</main><!-- #main -->

<?php
get_footer();
