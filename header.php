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
		<?php if (is_front_page()){ echo '<h1'; } else { echo '<h2'; }; ?> class="header__logo">
			<a href="<?php echo home_url(); ?>">
				<?php echo file_get_contents(get_template_directory() . '/assets/images/logo.svg'); ?>
			</a>
		<?php if (is_front_page()){ echo '</h1>'; } else { echo '</h2>'; }; ?>
		<nav class="header__hammenu -tab">
			<span class="header__trigger" href="#" @click="toggleMenu" id="trigger">
				<span></span>
				<span></span>
				<span></span>
			</span>
			<div class="header__hammenuWrapper">
				<div class="header__hammenuInner">
					<ul class="header__hammenuList">
            <li class="header__hammenuItem"><a href="<?php echo home_url(); ?>" class="-en">INFORMATION</a></li>
            <li class="header__hammenuItem"><a href="<?php echo home_url(); ?>" class="-en">ABOUT</a></li>
            <li class="header__hammenuItem"><a href="<?php echo home_url(); ?>" class="-en">PROFILE</a></li>
            <li class="header__hammenuItem"><a href="<?php echo home_url(); ?>" class="-en">CONTACT</a></li>
          </ul>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/menu_heading-sp@2x.png" alt="" class="header__hammenuHeading">
          <ul class="header__hammenuList">
            <li class="header__hammenuItem"><a href="<?php echo home_url(); ?>" class="-en">COLUMN</a></li>
            <li class="header__hammenuItem"><a href="<?php echo home_url(); ?>" class="-en">DIARY</a></li>
            <li class="header__hammenuItem"><a href="<?php echo home_url(); ?>" class="-en">LIVE STREAM</a></li>
            <li class="header__hammenuItem"><a href="<?php echo home_url(); ?>" class="-en">Q&A</a></li>
          </ul>
          <div class="header__hammenuFollow">
            <span class="header__hammenuFollowHeading -en">FOLLOW ME</span>
            <ul class="header__hammenuFollowList">
              <li class="header__followItem">
              </li>
            </ul>
          </div>
				</div>
			</div>
		</nav>
		<nav class="header__nav -pc">
			<ul class="header__navList">
				<li class="header__navItem">
					<a href="<?php echo home_url(); ?>" class="header__navLink">
						<span class="header__navLink -en">ABOUT</span>
						<span class="header__navLink">Mamoriとは</span>
					</a>
				</li>
				<li class="header__navItem">
					<a href="<?php echo home_url(); ?>" class="header__navLink">
						<span class="header__navLink -en">FACILITY</span>
						<span class="header__navLink">施設・設備</span>
					</a>
				</li>
				<li class="header__navItem">
					<a href="<?php echo home_url(); ?>" class="header__navLink">
						<span class="header__navLink -en">PRICE</span>
						<span class="header__navLink">料金</span>
					</a>
				</li>
				<li class="header__navItem">
					<a href="<?php echo home_url(); ?>" class="header__navLink">
						<span class="header__navLink -en">Q&A</span>
						<span class="header__navLink">よくあるご質問</span>
					</a>
				</li>
				<li class="header__navItem">
					<a href="<?php echo home_url(); ?>" class="header__navLink">
						<span class="header__navLink -en">NEWS</span>
						<span class="header__navLink">お知らせ</span>
					</a>
				</li>
				<li class="header__navItem">
					<a href="<?php echo home_url(); ?>" class="header__navLink">
						<span class="header__navLink -en">ACCESS</span>
						<span class="header__navLink">アクセス</span>
					</a>
				</li>
			</ul>
			<div class="header__navConversion">
				<ul class="header__navConversionList">
					<li class="header__navConversionItem">
						<a href="<?php echo home_url(); ?>" class="header__navConversionLink -contact">
							<span class="header__navConversionText -en">CONTACT</span>
							<span class="header__navConversionText">お問い合わせ</span>
						</a>
					</li>
					<li class="header__navConversionItem">
						<a href="<?php echo home_url(); ?>" class="header__navConversionLink -mypage">
							<span class="header__navConversionText -en">MYPAGE</span>
							<span class="header__navConversionText">マイページ</span>
						</a>
					</li>
				</ul>
			</div>
    </nav>
	</header>