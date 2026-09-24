<?php
/**
 * Additional features and template functions to allow styling and templating
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

/**
 * Display the global Cart Drawer HTML container
 */
function rawr_cart_drawer() {
    get_template_part('template-parts/cart/cart-drawer');
}
add_action('wp_footer', 'rawr_cart_drawer', 20);

/**
 * Display the global Quick Buy modal container
 */
function rawr_quick_buy_modal() {
    get_template_part('template-parts/quick-buy/modal');
}
add_action('wp_footer', 'rawr_quick_buy_modal', 25);

/**
 * Output breadcrumbs
 */
function rawr_breadcrumbs() {
    if (is_front_page()) return;

    echo '<nav class="rawr-breadcrumbs" aria-label="Breadcrumbs" style="padding: 14px 0; font-size: 13px; color: #8888AA;">';
    echo '<a href="' . esc_url(home_url('/')) . '" style="color: inherit; text-decoration: none;">Home</a> / ';
    
    if (is_singular('branch')) {
        echo '<a href="' . esc_url(home_url('/branches/')) . '" style="color: inherit; text-decoration: none;">Branches</a> / ';
        echo '<span style="color: #1A1A2E; font-weight: 600;">' . esc_html(get_the_title()) . '</span>';
    } elseif (is_singular('service')) {
        echo '<a href="' . esc_url(home_url('/services/')) . '" style="color: inherit; text-decoration: none;">Services</a> / ';
        echo '<span style="color: #1A1A2E; font-weight: 600;">' . esc_html(get_the_title()) . '</span>';
    } elseif (is_singular('product') || (function_exists('is_product') && is_product())) {
        echo '<a href="' . esc_url(home_url('/shop/')) . '" style="color: inherit; text-decoration: none;">Shop</a> / ';
        echo '<span style="color: #1A1A2E; font-weight: 600;">' . esc_html(get_the_title()) . '</span>';
    } elseif (is_singular()) {
        echo '<span style="color: #1A1A2E; font-weight: 600;">' . esc_html(get_the_title()) . '</span>';
    } elseif (is_archive()) {
        the_archive_title('<span style="color: #1A1A2E; font-weight: 600;">', '</span>');
    }
    echo '</nav>';
}

/**
 * Custom template tags for product badges
 */
function rawr_product_badge($product = null) {
    if (!$product && function_exists('wc_get_product')) {
        $product = wc_get_product(get_the_ID());
    }
    if (!$product) return;

    if ($product->is_on_sale()) {
        echo '<span class="rawr-badge-sale" style="position: absolute; top: 12px; left: 12px; background: #E53935; color: #fff; font-size: 11px; font-weight: 700; padding: 4px 10px; border-radius: 4px; text-transform: uppercase; z-index: 2;">Sale</span>';
    } elseif (!$product->is_in_stock()) {
        echo '<span class="rawr-badge-soldout" style="position: absolute; top: 12px; left: 12px; background: #666; color: #fff; font-size: 11px; font-weight: 700; padding: 4px 10px; border-radius: 4px; text-transform: uppercase; z-index: 2;">Sold Out</span>';
    } elseif ($product->is_featured()) {
        echo '<span class="rawr-badge-featured" style="position: absolute; top: 12px; left: 12px; background: #C9A84C; color: #1A1A2E; font-size: 11px; font-weight: 700; padding: 4px 10px; border-radius: 4px; text-transform: uppercase; z-index: 2;">Bestseller</span>';
    }
}
