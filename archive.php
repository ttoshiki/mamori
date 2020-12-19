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
		<div class="archive__wrapper">
			<div class="heading__wrapper">
        <h1 class="heading -en">NEWS</h1>
        <span class="heading__subHeading">お知らせ</span>
			</div>
			<?php
				$category_slug = get_query_var('category_name');
			 ?>
			<div class="archive__categoryLinks">
				<div class="archive__categoryLinkWrapper">
					<a href="<?php echo home_url('/news/'); ?>" class="<?php if (!$category_slug){ echo '-current'; } ?>">すべて</a>
				</div>
				<div class="archive__categoryLinkWrapper">
					<a href="<?php echo home_url('/category/campaign/'); ?>" class="<?php if ($category_slug === 'campaign'){ echo '-current'; } ?>">キャンペーン</a>
				</div>
				<div class="archive__categoryLinkWrapper">
					<a href="<?php echo home_url('/category/event/'); ?>" class="<?php if ($category_slug === 'event'){ echo '-current'; } ?>">イベント</a>
				</div>
				<div class="archive__categoryLinkWrapper">
					<a href="<?php echo home_url('/category/important/'); ?>" class="<?php if ($category_slug === 'important'){ echo '-current'; } ?>">重要なお知らせ</a>
				</div>
			</div>
			<section class="archive__articleSection">
				<article class="archive__article">
					<ul class="archive__list">
						<?php
							if (have_posts()):
						?>
						<?php while (have_posts()): the_post(); ?>
							<?php $categories = get_the_category(); ?>
							<li id="post-<?php the_ID(); ?>" class="archive__item">
								<time datetime="<?php echo get_the_date('Y.m.d'); ?>" class="archive__date"><?php echo get_the_date('Y.m.d'); ?></time>
								<span class="archive__categoryName<?php if( $categories[0]->slug === 'important') { echo ' -secondary'; } elseif( $categories[0]->slug === 'event') { echo 'tertiary'; } ?>"><?php echo $categories[0]->name; ?></span>
								<a href="<?php the_permalink(); ?>" class="archive__link"><span class="archive__title"><?php echo get_the_title(); ?></span></a>
							</li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php else: ?>
							<p>準備中です</p>
						<?php endif; ?>
					</ul>
				</article>
				<div class="archive__pagination">
					<div class="archive__paginateLinks">
						<div class="archive__paginateLink -prev"><?php previous_posts_link('前のページへ') ?></div>
						<div class="archive__paginateLink -next"><?php next_posts_link('次のページへ') ?></div>
					</div>
					<?php get_template_part('template-parts/pagination') ?>
				</div>
			</section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
