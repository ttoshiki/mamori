<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mamori
 */

get_header();
?>

	<main class="site-main">
		<div class="home__wrapper">
			<h1 class="home__logo"><?php echo file_get_contents(get_template_directory() . '/assets/images/logo.svg'); ?></h1>
			<section class="home__intro">
				<span class="home__introText">【烏丸御池】 徒歩<strong class="home__introStrong">6</strong>分</span>
				<h2 class="home__introHeading">
					<span class="sr-only">12/25 OPEN</span>
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/home/open_day.svg"
						alt="12/25 OPEN">
				</h2>
				<p class="home__introParagraph">
					室内に静かな森をたたえた<br>
					「シェアオフィス」がオープンします。
				</p>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/indoor_image.jpg" alt="Mamoriイメージ" class="home__introImage">
			</section>
			<section class="home__concept">
				<h2 class="home__conceptHeading">CONCEPT</h2>
				<p class="home__conceptParagraph">
					目まぐるしく変化する現代<br>
					一人ビジネスに必要なのは“攻め”よりも“守り”<br>
					“激しさ”よりも“静けさ”と考えます。<br>
					静寂の中に身を置き、深い緑と水のせせらぎを感じながら<br>
					心の奥深くに潜り、豊かさに溢れた未来を描く…<br>
					私たちはそんな空間を提供します。<br>
					ようこそ、守りの森<br>
					『Mamori』へ。<br>
					大切なものを護りながら<br>
					一人ビジネスを飛躍させたい全ての人へ。
				</p>
			</section>
			<section class="home__about">
				<div class="home__aboutBlock">
					<h2 class="home__aboutHeading">
						<span class="home__aboutHeadingSpan">利用時間</span>
					</h2>
					<span class="home__aboutSpan">24時間、年中無休</span>
					<small class="home__aboutSmall">（年末年始、メンテナンス時は休業）</small>
				</div>
				<div class="home__aboutBlock -facility">
					<h2 class="home__aboutHeading">
						<span class="home__aboutHeadingSpan">施設内容一覧</span>
						</h2>
					<span class="home__aboutSpan">席数：25席</span>
					<small class="home__aboutSmall">
						会議室（定員4名）×1<br>
						会議室（定員2名）×1
					</small>
					<span class="home__aboutSpan -facility">Wi-fi／フリードリンク／ポスト</span>
					<small class="home__aboutSmall">駐車場・駐輪場なし</small>
				</div>
				<div class="home__mapWrapper">
					<div class="home__map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.920104077679!2d135.75311211494997!3d35.00870507416795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010883c724d4ff%3A0x3ea9abaf1230e433!2z44CSNjA0LTgyNDEg5Lqs6YO95bqc5Lqs6YO95biC5Lit5Lqs5Yy66Yec5bqn55S677yU4oiS77yR!5e0!3m2!1sja!2sjp!4v1605794054309!5m2!1sja!2sjp" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
				<div class="home__aboutBlock">
					<h2 class="home__aboutHeading">
						<span class="home__aboutHeadingSpan">アクセス</span>
					</h2>
					<small class="home__aboutSmall -emphasis">
						604-8241　京都府京都市中京区<br class="-sp">三条通西洞院東入 フィルパーク西洞院4階<br>
						（京都府京都市中京区釡座町4-1<br class="-sp">　フィルパーク西洞院4階）
					</small>
					<div class="home__aboutSubSection">
						<small class="home__aboutSmall -emphasis">
							▶京都市営地下鉄　東西線・烏丸線<br>
							▶烏丸御池駅　徒歩6分<br>
							▶（京都駅から南北線で3駅）
						</small>
					</div>
				</div>
				<div class="home__aboutBlock">
				<h2 class="home__aboutHeading">
					<span class="home__aboutHeadingSpan">会社概要</span>
				</h2>
				<small class="home__aboutSmall -emphasis">
					社名：株式会社ナマケモノ<br>
					住所：東京都中央区湊2-14-1 <br class="-sp">リベルタ銀座イースト2階<br>
					設立：平成29年9月1日<br>
					代表者名：江藤智
				</small>
			</section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
