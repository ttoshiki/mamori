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
						<li class="header__hammenuItem">
							<a href="<?php echo home_url('/about/'); ?>" class="header__hammenuLink">
								<span class="header__hammenuText -en">ABOUT</span>
								<span class="header__hammenuText">Mamoriとは</span>
							</a>
						</li>
						<li class="header__hammenuItem">
							<a href="<?php echo home_url(); ?>" class="header__hammenuLink">
								<span class="header__hammenuText -en">FACILITY</span>
								<span class="header__hammenuText">施設・設備</span>
							</a>
						</li>
						<li class="header__hammenuItem">
							<a href="<?php echo home_url(); ?>" class="header__hammenuLink">
								<span class="header__hammenuText -en">PRICE</span>
								<span class="header__hammenuText">料金</span>
							</a>
						</li>
						<li class="header__hammenuItem">
							<a href="<?php echo home_url(); ?>" class="header__hammenuLink">
								<span class="header__hammenuText -en">Q&A</span>
								<span class="header__hammenuText">よくあるご質問</span>
							</a>
						</li>
						<li class="header__hammenuItem">
							<a href="<?php echo home_url(); ?>" class="header__hammenuLink">
								<span class="header__hammenuText -en">NEWS</span>
								<span class="header__hammenuText">お知らせ</span>
							</a>
						</li>
						<li class="header__hammenuItem">
							<a href="<?php echo home_url(); ?>" class="header__hammenuLink">
								<span class="header__hammenuText -en">ACCESS</span>
								<span class="header__hammenuText">アクセス</span>
							</a>
						</li>
					</ul>
					<div class="header__hammenuConversion">
						<a href="<?php echo home_url(); ?>" class="side-conversion-link -primary">
							<span class="side-conversion-text">入会する</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.52 14.18"><defs><style>.icon_angle{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:2px;}</style></defs><polyline class="icon_angle" points="0.56 0.83 5.15 3.96 9.74 7.09 5.15 10.22 0.56 13.35"/></svg>
						</a>
						<a href="<?php echo home_url(); ?>" class="side-conversion-link -secondary">
							<span class="side-conversion-text">見学に<br>ついて</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.52 14.18"><defs><style>.icon_angle{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:2px;}</style></defs><polyline class="icon_angle" points="0.56 0.83 5.15 3.96 9.74 7.09 5.15 10.22 0.56 13.35"/></svg>
						</a>
						<a href="<?php echo home_url(); ?>" class="side-conversion-link -secondary">
							<span class="side-conversion-text">資料<br><span class="side-conversion-text -comp">ダウンロード</span></span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.52 14.18"><defs><style>.icon_angle{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:2px;}</style></defs><polyline class="icon_angle" points="0.56 0.83 5.15 3.96 9.74 7.09 5.15 10.22 0.56 13.35"/></svg>
						</a>
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