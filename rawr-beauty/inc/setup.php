<?php
/**
 * Theme Setup and Content Width Configuration
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_content_width() {
    $GLOBALS['content_width'] = apply_filters('rawr_content_width', 1280);
}
add_action('after_setup_theme', 'rawr_content_width', 0);

/**
 * Register default sidebars and widget areas
 */
function rawr_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Main Sidebar', 'rawr-beauty'),
        'id'            => 'sidebar-main',
        'description'   => esc_html__('Add widgets here to appear in standard pages.', 'rawr-beauty'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'rawr_widgets_init');
