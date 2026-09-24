<?php
/**
 * WooCommerce Authoritative Pricing & Quantity Discount Logic
 *
 * @package RAWR_Beauty\Ecommerce
 */

defined('ABSPATH') || exit;

/**
 * Quantity tier discounts:
 * 1 item: regular price
 * 2 items: 5% off
 * 3+ items: 10% off
 */
function rawr_apply_quantity_pricing_discounts($cart) {
    if (is_admin() && !defined('DOING_AJAX')) return;
    if (did_action('woocommerce_before_calculate_totals') >= 2) return;

    foreach ($cart->get_cart() as $cart_item_key => $cart_item) {
        $product  = $cart_item['data'];
        $quantity = $cart_item['quantity'];
        $price    = (float) $product->get_regular_price();

        if ($price <= 0) continue;

        $discount = 0;
        if ($quantity >= 3) {
            $discount = 0.10; // 10% off
        } elseif ($quantity === 2) {
            $discount = 0.05; // 5% off
        }

        if ($discount > 0) {
            $discounted_price = $price * (1 - $discount);
            $cart_item['data']->set_price($discounted_price);
        }
    }
}
add_action('woocommerce_before_calculate_totals', 'rawr_apply_quantity_pricing_discounts', 10, 1);
