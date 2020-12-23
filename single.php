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
		<div class="single__wrapper">
      <div class="heading__wrapper">
        <h1 class="heading -en">NEWS</h1>
        <span class="heading__subHeading">お知らせ</span>
			</div>
			<section class="single__main">
				<?php if (have_posts()): ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('single__article'); ?>>
							<?php while (have_posts()) : the_post(); ?>
								<?php $categories = get_the_category(); ?>
								<time datetime="<?php echo get_the_date('Y.m.d'); ?>" class="archive__date"><?php echo get_the_date('Y.m.d'); ?></time>
								<span class="archive__categoryName<?php if( $categories[0]->slug === 'important') { echo ' -secondary'; } elseif( $categories[0]->slug === 'event') { echo ' -tertiary'; } ?>"><?php echo $categories[0]->name; ?></span>
								<h1 class="single__title"><?php echo get_the_title(); ?></h1>
								<div class="single__meta">
									<div class="single__content"><?php the_content(); ?></div>
								</div>
								<?php endwhile; ?>
								<?php else: ?>
						</article>
				<?php endif; ?>
			</section>
			<div class="single__newsLinkWrapper">
				<a href="<?php echo home_url('/news/'); ?>" class="single__newsLink">お知らせ一覧</a>
			</div>
			<div class="single__paginateLinks">
				<?php if (get_previous_post()):?>
					<div class="single__paginateLinkWrapper -prev">
						<span class="single__paginateLinkSign">&lt;</span><?php previous_post('%', '前の記事', 'no'); ?>
					</div>
				<?php endif; ?>
				<?php if (get_next_post()):?>
					<div class="single__paginateLinkWrapper -next">
						<?php next_post('%', '次の記事', 'no');; ?><span class="single__paginateLinkSign">&gt;</span>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
