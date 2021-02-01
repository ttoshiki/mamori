<?php
/**
 * Mamori functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mamori
 */


if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (! function_exists('mamori_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function mamori_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Mamori, use a find and replace
         * to change 'mamori' to the name of your theme in all the template files.
         */
        load_theme_textdomain('mamori', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'primary' => esc_html__('Main Menu', 'mamori'),
                'footer' => esc_html__('Footer Menu', 'mamori'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'mamori_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'mamori_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mamori_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('mamori_content_width', 640);
}
add_action('after_setup_theme', 'mamori_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mamori_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'mamori'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'mamori'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'mamori_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function mamori_scripts()
{
    wp_enqueue_style('mamori-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('mamori-style', 'rtl', 'replace');

    wp_register_style('normalize', get_template_directory_uri() . '/assets/css/lib/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize');

    wp_register_style('roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('roboto');

    wp_enqueue_script('jquery');

    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);

    if (is_page('opendays') || is_page('reserve')) {
        wp_enqueue_script('flatpicker-script', 'https://cdn.jsdelivr.net/npm/flatpickr', array(), '', true);
        wp_enqueue_style('flatpicker-style', 'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css', array(), '');
        wp_style_add_data('flatpicker-style', 'rtl', 'replace');
    }

    if (is_front_page()) {
        wp_enqueue_script('home-script', get_template_directory_uri() . '/assets/js/home.js', array(), '', true);
    } elseif (is_page('faq')) {
        wp_enqueue_script('faq-script', get_template_directory_uri() . '/assets/js/faq.js', array(), '', true);
    } elseif (is_page('opendays')) {
        wp_enqueue_script('opendays-script', get_template_directory_uri() . '/assets/js/opendays.js', array(), '', true);
    } elseif (is_page('reserve')) {
        wp_enqueue_style('fullcalendar-style', get_template_directory_uri() . '/assets/css/lib/fullcalendar/main.css', array(), '');
        wp_style_add_data('fullcalendar-style', 'rtl', 'replace');
        wp_enqueue_script('fullcalendar-script', get_template_directory_uri() . '/assets/js/lib/fullcalendar/main.min.js', array(), '', true);
        wp_enqueue_script('google-api', 'https://apis.google.com/js/api.js', '', true);
        wp_enqueue_script('google-platform', 'https://apis.google.com/js/platform.js?onload=init', '', true);
        wp_enqueue_script('reserve-script', get_template_directory_uri() . '/assets/js/reserve.js', array(), '', false);
        wp_enqueue_script('date-fns-script', 'https://cdnjs.cloudflare.com/ajax/libs/date-fns/1.28.5/date_fns.min.js', array(), '', false);
    }

    if (is_front_page() || is_page('price')) {
        wp_enqueue_script('modal-script', get_template_directory_uri() . '/assets/js/modal.js', array(), '', true);
    }
}
add_action('wp_enqueue_scripts', 'mamori_scripts');

/* 投稿アーカイブを有効にしてスラッグを指定する */
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; // スラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function official_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'prev_text' => __('<'),
        'next_text' => __('>'),
        'mid_size' => 1,
        'total' => $wp_query->max_num_pages
    ));
}

/**
 * Google Fonts
 */

function twpp_enqueue_styles()
{
    wp_enqueue_style(
        'google-webfont-style',
        '//fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500&display=swap" rel="stylesheet'
    );
}

add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

/**
 * コンタクトフォームのメールアドレス確認バリデーション
 */

add_filter('wpcf7_validate_email', 'wpcf7_validate_email_filter_extend', 11, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_validate_email_filter_extend', 11, 2);
function wpcf7_validate_email_filter_extend($result, $tag)
{
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim(strtr((string) $_POST[$name], "n", " "));
    if ('email' == $type || 'email*' == $type) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)) { //確認用メルアド入力フォーム名を ○○○_confirm としています。
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                if (method_exists($result, 'invalidate')) {
                    $result->invalidate($tag, "確認用のメールアドレスが一致していません");
                } else {
                    $result['valid'] = false;
                    $result['reason'][$name] = '確認用のメールアドレスが一致していません';
                }
            }
        }
    }
    return $result;
}
