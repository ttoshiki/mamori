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
		<div class="facility__wrapper">
      <div class="heading__wrapper">
        <h1 class="heading -en">FACILITY</h1>
        <span class="heading__subHeading">施設・設備</span>
      </div>
      <section class="facility__floormap">
        <div class="subHeadingHasIcons">
          <div class="subHeadingHasIconsIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-left.svg'); ?></div>
          <h2>フロアマップ</h2>
          <div class="subHeadingHasIconsIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-right.svg'); ?></div>
        </div>
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/facility/floor_map.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/floor_map.png" alt="" class="facility__floormapImage">
        </picture>
        <p class="facility__floormapParagraph">【席数25席】 様々な働き方のニーズにあわせて<br class="-sp">定員4名／定員2名の「ミーティングルーム」を併設、<br>Wi-Fi・フリードリンク等を備えた<br class="-sp">「コワーキングスペース」（ラウンジ）を<br class="-sp">ご用意しております。</p>
      </section>
      <div class="facility__vrView">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/facility/vrview.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/vrview.png" alt="" class="facility__vrViewImage">
        </picture>
        <span class="facility__vrViewPreparation">準備中</span>
      </div>
      <section class="facility__photo">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/facility/photo_bg.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/photo_bg.png" alt="" class="facility__photoBg">
        </picture>
        <div class="subHeadingHasIcons -light">
          <div class="subHeadingHasIconsIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-left.svg'); ?></div>
          <h2>PHOTO</h2>
          <div class="subHeadingHasIconsIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-right.svg'); ?></div>
        </div>
        <div class="facility__photoBlocks">

          <div class="facility__photoBlock">
            <div class="facility__photoDescription">
              <span class="facility__photoNumber -en">1</span>
              <h3 class="facility__photoName">入口近くの個室</h3>
              <p class="facility__photoParagraph">
                前面ガラス張りの４名個室は、<br>
                南向きの窓から光が降り注ぎます。<br>
                昼は葉を広げ、夜になると葉を閉じる<br>
                エバーフレッシュがシンボルツリーの<br>
                明るく軽やかな空間。<br>
                大切なお客さまを迎える応接室としても<br>
                ご利用ください。<br>
                （月額会員は利用料無料 ／ 目隠しも可能）<br>
              </p>
            </div>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/facility/photo_01-sp.webp" media="(max-width: 960px)" type="image/webp">
					    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/facility/photo_01-sp.jpg" media="(max-width: 960px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/facility/photo_01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/photo_01.jpg" alt="" class="facility__photoImage">
            </picture>
          </div>
          <div class="facility__photoBlock">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/facility/photo_02-sp.webp" media="(max-width: 960px)" type="image/webp">
					    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/facility/photo_02-sp.jpg" media="(max-width: 960px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/facility/photo_02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/photo_02.png" alt="" class="facility__photoImage">
            </picture>
            <div class="facility__photoDescription">
              <span class="facility__photoNumber -en">2</span>
              <h3 class="facility__photoName">メインフロア</h3>
              <p class="facility__photoParagraph">
                深い森をイメージしたメインフロアは、静寂に包まれた癒しと集中の空間。<br class="-tab">一般的なカフェと比較して、ひとりひとりのスペースを２倍近く取っているため周りの人の目を気にせず集中することができます。<br class="-tab">丸太のパーテーションで区切られた半個室やオープンスペースなど、お好みに合わせたお席をお選びください。
              </p>
            </div>
          </div>
          <div class="facility__photoBlock">
            <div class="facility__photoDescription">
              <span class="facility__photoNumber -en">3</span>
              <h3 class="facility__photoName">2人用個室</h3>
              <p class="facility__photoParagraph">
                ちょっとした打ち合わせやWeb会議に<br>
                ぴったりの2名個室は、シンプルながら<br>
                圧迫感のない上部ガラス張り。<br>
                （月額会員は利用料無料 / 目隠しも可能)
              </p>
            </div>
            <div class="facility__preparation">
              <span>準備中</span>
            </div>
          </div>
          <div class="facility__photoBlock">
            <div class="facility__photoDescription">
              <span class="facility__photoNumber -en">0</span>
              <h3 class="facility__photoName">オープン席</h3>
              <p class="facility__photoParagraph">
                ニュアンスのある曲線が特徴的なテーブルはMamoriのためだけに作られた1点もの。<br>
                大きな樹木の下でご自由にお過ごしください。<br>
                すべての会員さまがご利用いただけます。
              </p>
            </div>
            <div class="facility__preparation">
              <span>準備中</span>
            </div>
          </div>
          <div class="facility__photoBlock">
            <div class="facility__photoDescription">
              <span class="facility__photoNumber -en">A</span>
              <h3 class="facility__photoName">固定席<span class="facility__photoNameSpan">（Aタイプ/5席）</span></h3>
              <p class="facility__photoParagraph">
                ニュアンスのある丸太と樹木で<br>
                緩やかに区切られたお席です。<br>
                深緑の中で集中したい方にオススメ。
              </p>
            </div>
            <div class="facility__preparation">
              <span>準備中</span>
            </div>
          </div>
          <div class="facility__photoBlock">
            <div class="facility__preparation">
              <span>準備中</span>
            </div>
            <div class="facility__photoDescription">
              <span class="facility__photoNumber -en">B</span>
              <h3 class="facility__photoName">固定席<span class="facility__photoNameSpan">（Bタイプ/4席）</span></h3>
              <p class="facility__photoParagraph">
                Mamoriで最もお籠り感のあるお席です。<br>
                1人用ブースながら圧迫感のない空間。<br>
                ハーマンミラー社のチェアをご用意しました。
              </p>
            </div>
          </div>
        </div>
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/facility/2d-sp.webp" media="(max-width: 960px)" type="image/webp">
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/facility/2d-sp.jpg" media="(max-width: 960px)">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/facility/2d.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/2d.png" alt="" class="facility__photo2d">
        </picture>
      </section>
      <section class="facility__about">
        <div class="subHeadingHasIcons">
          <div class="subHeadingHasIconsIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-left.svg'); ?></div>
          <h2>設備について</h2>
          <div class="subHeadingHasIconsIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-right.svg'); ?></div>
        </div>
        <h3 class="facility__aboutHeading -environment">環境</h3>
        <ul class="facility__aboutList -environment">
          <li class="facility__aboutItem">
            <div class="facility__aboutIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_wifi.svg'); ?></div>
            <span class="facility__aboutItemName">WI-FI</span>
          </li>
          <li class="facility__aboutItem">
            <div class="facility__aboutIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_power.svg'); ?></div>
            <span class="facility__aboutItemName">電源</span>
          </li>
          <li class="facility__aboutItem">
            <div class="facility__aboutIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_post.svg'); ?></div>
            <span class="facility__aboutItemName">ポスト</span>
          </li>
          <li class="facility__aboutItem">
            <div class="facility__aboutIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_self_drink.svg'); ?></div>
            <span class="facility__aboutItemName">セルフドリンク<br>スタンド</span>
          </li>
          <li class="facility__aboutItem">
            <div class="facility__aboutIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_smartlock.svg'); ?></div>
            <span class="facility__aboutItemName">スマート<br>ロック</span>
          </li>
        </ul>
        <h3 class="facility__aboutHeading -service">サービス</h3>
        <ul class="facility__aboutList -service">
          <li class="facility__aboutItem">
            <div class="facility__aboutIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_24_365.svg'); ?></div>
            <span class="facility__aboutItemName">24時間365日<br>利用OK</span>
          </li>
          <li class="facility__aboutItem">
            <div class="facility__aboutIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_registration.svg'); ?></div>
            <span class="facility__aboutItemName">登記・住所<br>利用OK</span>
            <span class="facility__aboutItemSmall">（プランにより異なる）</span>
          </li>
          <li class="facility__aboutItem">
            <div class="facility__aboutIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_camera.svg'); ?></div>
            <span class="facility__aboutItemName">商用撮影<br>OK</span>
          </li>
          <li class="facility__aboutItem">
            <div class="facility__aboutIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_guest.svg'); ?></div>
            <span class="facility__aboutItemName">ゲスト招待<br>OK</span>
            <span class="facility__aboutItemSmall">（ミーティングルームのみ）</span>
          </li>
          <li class="facility__aboutItem">
            <div class="facility__aboutIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_surveillance_camera.svg'); ?></div>
            <span class="facility__aboutItemName">監視カメラ<br>見守り</span>
          </li>
        </ul>
      </section>
      <div class="facility__link">
        <a href="<?php echo home_url('/contact/') ?>" class="link-button">お問い合わせフォーム</a>
      </div>
    </div>
	</main><!-- #main -->

<?php
get_footer();
