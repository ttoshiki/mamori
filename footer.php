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

</div><!-- #page -->

<footer class="footer<?php
  if(is_front_page()) { echo ' home'; }
  elseif(is_page('about')) { echo ' -confined'; }
 ?>">
  <div class="footer__toTop"><a href="#header"><?php echo file_get_contents(get_template_directory() . '/assets/images/to_top.svg'); ?></a></div>
    <div class="footer__upper">
      <div class="footer__logo"><a href="<?php echo home_url(); ?>"><?php echo file_get_contents(get_template_directory() . '/assets/images/logo-light.svg'); ?></a></div>
      <nav class="footer__upperLinkNav">
        <ul class="footer__upperLinkList">
          <li class="footer__upperLinkItem">
            <a href="<?php echo home_url('/about/'); ?>">Mamoriとは</a>
          </li>
          <li class="footer__upperLinkItem">
            <a href="<?php echo home_url('/facility/'); ?>">サービス・設備</a>
          </li>
          <li class="footer__upperLinkItem">
            <a href="<?php echo home_url('/price/'); ?>">料金・ご利用の流れ</a>
          </li>
          <li class="footer__upperLinkItem">
            <a href="<?php echo home_url('/faq/'); ?>">よくあるご質問</a>
          </li>
        </ul>
        <ul class="footer__upperLinkList">
          <li class="footer__upperLinkItem">
            <a href="<?php echo home_url('/news/'); ?>">お知らせ</a>
          </li>
          <li class="footer__upperLinkItem">
            <a href="<?php echo home_url('/#access'); ?>">アクセス</a>
          </li>
          <li class="footer__upperLinkItem">
            <a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
          </li>
          <li class="footer__upperLinkItem">
            <a href="<?php echo home_url('/opendays/'); ?>">見学予約</a>
          </li>
        </ul>
      </nav>
    </div>
  <div class="footer__lower">
    <nav>
      <ul class="footer__lowerLinkList">
        <li class="footer__lowerLinkItem">
          <a href="<?php echo home_url('/company/'); ?>">運営会社</a>
        </li>
        <li class="footer__lowerLinkItem">
          <a href="<?php echo home_url(); ?>">利用規約</a>
        </li>
        <li class="footer__lowerLinkItem">
          <a href="<?php echo home_url('/privacy/'); ?>">個人情報保護方針</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="footer__copyrightWrapper">
    <small class="footer__copyright">Copyright©2020 株式会社ナマケモノAll Rights Reserved.</small>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
