<?php
/**
 * Quantity Controller & Stock Guard
 *
 * @package RAWR_Beauty\Ecommerce
 */

defined('ABSPATH') || exit;

/**
 * Filter WooCommerce quantity input arguments
 */
function rawr_quantity_input_args($args, $product) {
    if ($product instanceof WC_Product) {
        $args['min_value'] = 1;
        $args['step']      = 1;
        $max_stock         = $product->get_stock_quantity();
        if ($max_stock && $product->managing_stock()) {
            $args['max_value'] = $max_stock;
        }
    }
    return $args;
}
add_filter('woocommerce_quantity_input_args', 'rawr_quantity_input_args', 10, 2);

/**
 * Validate quantity on add to cart
 */
function rawr_validate_quantity_on_add($passed, $product_id, $quantity) {
    if ($quantity < 1) {
        wc_add_notice(__('Please choose at least 1 item.', 'rawr-beauty'), 'error');
        return false;
    }
    return $passed;
}
add_filter('woocommerce_add_to_cart_validation', 'rawr_validate_quantity_on_add', 10, 3);
