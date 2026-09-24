<?php
/**
 * Enqueue scripts and styles
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_beauty_scripts() {
    $version = RAWR_THEME_VERSION;

    // Theme Stylesheets
    wp_enqueue_style('rawr-style', get_stylesheet_uri(), array(), $version);
    wp_enqueue_style('rawr-main', RAWR_THEME_URI . '/assets/css/main.css', array('rawr-style'), $version);
    wp_enqueue_style('rawr-components', RAWR_THEME_URI . '/assets/css/components.css', array('rawr-main'), $version);
    wp_enqueue_style('rawr-animations', RAWR_THEME_URI . '/assets/css/animations.css', array('rawr-main'), $version);
    wp_enqueue_style('rawr-responsive', RAWR_THEME_URI . '/assets/css/responsive.css', array('rawr-main'), $version);

    if (class_exists('WooCommerce')) {
        wp_enqueue_style('rawr-woocommerce', RAWR_THEME_URI . '/assets/css/woocommerce.css', array('rawr-main'), $version);
    }

    // Core Theme JS
    wp_enqueue_script('rawr-main-js', RAWR_THEME_URI . '/assets/js/main.js', array(), $version, true);
    wp_enqueue_script('rawr-navigation-js', RAWR_THEME_URI . '/assets/js/navigation.js', array(), $version, true);
    wp_enqueue_script('rawr-ajax-cart-js', RAWR_THEME_URI . '/assets/js/ajax-cart.js', array(), $version, true);
    wp_enqueue_script('rawr-quick-buy-js', RAWR_THEME_URI . '/assets/js/quick-buy.js', array('rawr-ajax-cart-js'), $version, true);
    wp_enqueue_script('rawr-booking-js', RAWR_THEME_URI . '/assets/js/booking.js', array(), $version, true);
    wp_enqueue_script('rawr-locations-js', RAWR_THEME_URI . '/assets/js/locations.js', array(), $version, true);
    wp_enqueue_script('rawr-forms-js', RAWR_THEME_URI . '/assets/js/forms.js', array(), $version, true);


    // Enqueue Compiled React Bundle
    if (file_exists(RAWR_THEME_DIR . '/assets/dist/react-app.js')) {
        wp_enqueue_script(
            'rawr-react-app',
            RAWR_THEME_URI . '/assets/dist/react-app.js',
            array('wp-element'),
            $version,
            true
        );
    }

    // Localize Script for REST API and AJAX
    wp_localize_script('rawr-main-js', 'rawrConfig', array(
        'ajaxUrl'       => admin_url('admin-ajax.php'),
        'restUrl'       => esc_url_raw(rest_url('rawr/v1/')),
        'nonce'         => wp_create_nonce('wp_rest'),
        'siteUrl'       => esc_url(home_url('/')),
        'themeUrl'      => RAWR_THEME_URI,
        'whatsAppPhone' => '447398926226',
        'currency'      => '£',
    ));
}
add_action('wp_enqueue_scripts', 'rawr_beauty_scripts');
