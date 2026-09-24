<?php
/**
 * WooCommerce Mini-Cart Fragments & Drawer Synchronization
 *
 * @package RAWR_Beauty\Ecommerce
 */

defined('ABSPATH') || exit;

/**
 * Update cart count and total in header via AJAX fragments
 */
function rawr_cart_fragments($fragments) {
    if (!function_exists('WC')) return $fragments;

    $count = WC()->cart->get_cart_contents_count();
    $total = WC()->cart->get_cart_total();

    // Header badge fragment
    $fragments['span.rawr-cart-count'] = '<span class="rawr-cart-count" style="display:inline-flex; align-items:center; justify-content:center; background:#C9A84C; color:#1A1A2E; font-size:11px; font-weight:800; border-radius:50%; min-width:18px; height:18px; padding:0 4px; margin-left:6px;">' . esc_html($count) . '</span>';

    // Header total fragment
    $fragments['span.rawr-cart-total'] = '<span class="rawr-cart-total" style="font-size:13px; font-weight:600; margin-left:4px;">' . wp_kses_post($total) . '</span>';

    return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'rawr_cart_fragments');
