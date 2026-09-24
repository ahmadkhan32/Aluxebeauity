<?php
/**
 * WooCommerce Order Processing & Custom Metadata
 *
 * @package RAWR_Beauty\Ecommerce
 */

defined('ABSPATH') || exit;

/**
 * Display Quick Buy & UK City badge in WooCommerce Admin Orders list
 */
function rawr_add_order_column_header($columns) {
    $new_columns = array();
    foreach ($columns as $key => $column) {
        $new_columns[$key] = $column;
        if ('order_status' === $key) {
            $new_columns['rawr_type'] = __('Order Channel', 'rawr-beauty');
            $new_columns['rawr_city'] = __('UK City', 'rawr-beauty');
        }
    }
    return $new_columns;
}
add_filter('manage_edit-shop_order_columns', 'rawr_add_order_column_header', 20);

function rawr_populate_order_column_content($column, $post_id) {
    if ('rawr_type' === $column) {
        $is_qb = get_post_meta($post_id, '_rawr_quick_buy', true);
        if ($is_qb === 'yes') {
            echo '<span style="background:#EBF3FE; color:#1877F2; padding:3px 8px; border-radius:12px; font-weight:700; font-size:11px;">⚡ Quick Buy</span>';
        } else {
            echo '<span style="background:#F0F0F5; color:#4A4A6A; padding:3px 8px; border-radius:12px; font-weight:600; font-size:11px;">Standard Cart</span>';
        }
    }
    if ('rawr_city' === $column) {
        $city = get_post_meta($post_id, '_rawr_delivery_city', true) ?: get_post_meta($post_id, '_billing_city', true);
        echo esc_html($city ?: '—');
    }
}
add_action('manage_shop_order_posts_custom_column', 'rawr_populate_order_column_content', 20, 2);
