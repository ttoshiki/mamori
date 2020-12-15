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
		<div class="company__wrapper">
      <div class="heading__wrapper -company">
        <h1 class="heading">運営会社</h1>
      </div>
      <section class="company__overview">
        <h2 class="company__subHeading">会社概要</h2>
        <table>
          <tr>
            <th>社名</th>
            <td>株式会社ナマケモノ</td>
          </tr>
          <tr>
            <th>本社</th>
            <td>〒104-0043 東京都中央区湊2-14-1<br class="-sp">　リベルタ銀座イースト2F</td>
          </tr>
          <tr>
            <th>設立</th>
            <td>2017年(平成29年)9月1日</td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>1,000,000円</td>
          </tr>
          <tr>
            <th>役員</th>
            <td class="-wide">
              代表取締役　江藤智<br>
              取締役　江藤有紀
            </td>
          </tr>
          <tr>
            <th>役員</th>
            <td class="-wide">
              女性向け心理カウンセリング事業、撮影事業、<br>
              レンタルスペース運営事業、<br class="-sp">およびそれらの周辺事業
            </td>
          </tr>
          <tr>
            <th>取引銀行</th>
            <td class="-wide">
              ゆうちょ銀行<br>
              きらぼし銀行<br>
              三菱UFJ銀行
            </td>
          </tr>
        </table>
      </section>
      <section class="company__officer">
        <h2 class="company__subHeading">役員紹介</h2>
        <div class="company__officerWrapper">
          <h3 class="company__officerHeading">代表取締役　江藤 智</h3>
          <ul class="company__snsList">
            <li class="company__snsItem">
              <a href="" target="_blank" noopener>
                <div><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_twitter.svg'); ?></div>
              </a>
            </li>
            <li class="company__snsItem">
              <a href="" target="_blank" noopener>
                <div><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_facebook.svg'); ?></div>
              </a>
            </li>
            <li class="company__snsItem">
              <a href="" target="_blank" noopener>
                <div><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_instagram.svg'); ?></div>
              </a>
            </li>
          </ul>
          <div class="company__officerBlock">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/officer_01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/officer_01.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/company/officer_01@2x.jpg 2x" alt="代表取締役　江藤 智" class="company__officerImage">
            <div class="company__officerCareer">
              <dl>
                <dt>2011年3月</dt>
                <dd>九州工業大学卒業</dd>
              </dl>
              <dl>
                <dt>2011年4月</dt>
                <dd>マジシャン・プロジャグラーとして活動開始</dd>
              </dl>
              <dl>
                <dt>2014年8月</dt>
                <dd>世界ジャグリング大会で優勝</dd>
              </dl>
              <dl>
                <dt>2015年4月</dt>
                <dd>シルク・ド・ソレイユ登録パフォーマー合格</dd>
              </dl>
              <dl>
                <dt>2017年9月</dt>
                <dd>株式会社ナマケモノ設立</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="company__officerWrapper">

          <h3 class="company__officerHeading">取締役　江藤 有紀</h3>
          <ul class="company__snsList">
            <li class="company__snsItem">
              <a href="" target="_blank" noopener>
                <div><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_twitter.svg'); ?></div>
              </a>
            </li>
            <li class="company__snsItem">
              <a href="" target="_blank" noopener>
                <div><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_facebook.svg'); ?></div>
              </a>
            </li>
          </ul>
          <div class="company__officerBlock">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/officer_02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/officer_02.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/company/officer_02@2x.jpg 2x" alt="代表取締役　江藤 智" class="company__officerImage">
            <div class="company__officerCareer">
              <dl>
                <dt>2018年3月</dt>
                <dd>明治大学卒業</dd>
              </dl>
              <dl>
                <dt>2018年4月</dt>
                <dd>株式会社メトロプロパティーズ入社</dd>
              </dl>
              <dl>
                <dt>2014年12月</dt>
                <dd>同社退社</dd>
              </dl>
              <dl>
                <dt>2015年6月</dt>
                <dd>カウンセリング事業開始</dd>
              </dl>
              <dl>
                <dt>2017年9月</dt>
                <dd>株式会社ナマケモノ設立</dd>
              </dl>
              <span class="comapny__officerLicense">取得資格：東京商工会議所　販売士１級登録講師、食品衛生者、防火管理者</span>
            </div>
          </div>
        </div>
      </section>
      <section class="company__history">
        <h2 class="company__subHeading">会社沿革</h2>
        <div class="company__historyDetails">
          <dl>
            <dt>2017年9月</dt>
            <dd>個人事業主として事業を行なっていた2人が、<br class="-sp">結婚を機に会社を設立</dd>
          </dl>
          <dl>
            <dt>2019年3月</dt>
            <dd>本社兼レンタルスペース「花庭サロン」を<br class="-sp">東京中央区にオープン</dd>
          </dl>
          <dl>
            <dt>2020年12月</dt>
            <dd>シェアオフィス・コワーキングスペース<br class="-sp">「Mamori」を京都にオープン</dd>
          </dl>
        </div>
      </div>
    </section>
	</main><!-- #main -->

<?php
get_footer();
