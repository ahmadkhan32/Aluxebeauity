<?php
/**
 * RAWR Beauty Theme Functions and Definitions
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

define('RAWR_THEME_VERSION', '1.0.0');
define('RAWR_THEME_DIR', get_template_directory());
define('RAWR_THEME_URI', get_template_directory_uri());

// Core Includes
require_once RAWR_THEME_DIR . '/inc/theme-setup.php';
require_once RAWR_THEME_DIR . '/inc/enqueue.php';
require_once RAWR_THEME_DIR . '/inc/menus.php';
require_once RAWR_THEME_DIR . '/inc/widgets.php';
require_once RAWR_THEME_DIR . '/inc/customizer.php';
require_once RAWR_THEME_DIR . '/inc/security.php';
require_once RAWR_THEME_DIR . '/inc/seo.php';
require_once RAWR_THEME_DIR . '/inc/helpers.php';
require_once RAWR_THEME_DIR . '/inc/template-functions.php';
require_once RAWR_THEME_DIR . '/inc/api.php';
require_once RAWR_THEME_DIR . '/inc/ajax.php';

// WooCommerce eCommerce Modules
require_once RAWR_THEME_DIR . '/inc/ecommerce/cart.php';
require_once RAWR_THEME_DIR . '/inc/ecommerce/cart-fragments.php';
require_once RAWR_THEME_DIR . '/inc/ecommerce/checkout.php';
require_once RAWR_THEME_DIR . '/inc/ecommerce/quick-buy.php';
require_once RAWR_THEME_DIR . '/inc/ecommerce/quantity.php';
require_once RAWR_THEME_DIR . '/inc/ecommerce/pricing.php';
require_once RAWR_THEME_DIR . '/inc/ecommerce/orders.php';
require_once RAWR_THEME_DIR . '/inc/ecommerce/shipping.php';
require_once RAWR_THEME_DIR . '/inc/ecommerce/validation.php';

// Custom Post Types
require_once RAWR_THEME_DIR . '/post-types/branch.php';
require_once RAWR_THEME_DIR . '/post-types/service.php';
require_once RAWR_THEME_DIR . '/post-types/course.php';
require_once RAWR_THEME_DIR . '/post-types/career.php';
require_once RAWR_THEME_DIR . '/post-types/press.php';
require_once RAWR_THEME_DIR . '/post-types/testimonial.php';

// Taxonomies
require_once RAWR_THEME_DIR . '/taxonomies/service-category.php';
require_once RAWR_THEME_DIR . '/taxonomies/branch-region.php';
require_once RAWR_THEME_DIR . '/taxonomies/course-category.php';
require_once RAWR_THEME_DIR . '/taxonomies/press-category.php';


/**
 * Setup Theme features
 */
function rawr_beauty_setup() {
    // Load text domain for translations
    load_theme_textdomain('rawr-beauty', RAWR_THEME_DIR . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage document title
    add_theme_support('title-tag');

    // Enable featured images
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800, 500, true);
    add_image_size('rawr-hero', 1920, 1080, true);
    add_image_size('rawr-card', 600, 400, true);
    add_image_size('rawr-square', 500, 500, true);

    // Custom Logo
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // HTML5 markup support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // WooCommerce support
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    // Register Navigation Menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'rawr-beauty'),
        'footer'    => __('Footer Menu', 'rawr-beauty'),
        'topbar'    => __('Topbar Announcement Menu', 'rawr-beauty'),
        'locations' => __('Locations Submenu', 'rawr-beauty'),
    ));
}
add_action('after_setup_theme', 'rawr_beauty_setup');
