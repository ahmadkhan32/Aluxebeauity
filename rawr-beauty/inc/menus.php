<?php
/**
 * Navigation menus and custom walker
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

/**
 * Filter menu item classes for modern CSS selectors
 */
function rawr_menu_classes($classes, $item, $args) {
    if (isset($args->theme_location) && 'primary' === $args->theme_location) {
        $classes[] = 'rawr-nav-item';
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'rawr-nav-item-active';
        }
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'rawr_menu_classes', 10, 3);

/**
 * Add link classes
 */
function rawr_menu_link_attrs($atts, $item, $args) {
    if (isset($args->theme_location) && 'primary' === $args->theme_location) {
        $atts['class'] = isset($atts['class']) ? $atts['class'] . ' rawr-nav-link' : 'rawr-nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'rawr_menu_link_attrs', 10, 3);
