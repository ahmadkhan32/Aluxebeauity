<?php
/**
 * WooCommerce UK Shipping Calculations & Rules
 *
 * @package RAWR_Beauty\Ecommerce
 */

defined('ABSPATH') || exit;

/**
 * Configure default UK shipping rates if none set
 */
function rawr_custom_shipping_rates($rates, $package) {
    if (empty($rates)) {
        $subtotal = WC()->cart ? WC()->cart->get_subtotal() : 0;
        
        // Free shipping over £40
        $cost = ($subtotal >= 40) ? 0 : 3.99;
        $label = ($subtotal >= 40) ? __('Complimentary UK Tracked 48 (Free)', 'rawr-beauty') : __('Royal Mail Tracked 48', 'rawr-beauty');

        $rate = new WC_Shipping_Rate(
            'rawr_standard_uk',
            $label,
            $cost,
            array(),
            'flat_rate'
        );

        $rates['rawr_standard_uk'] = $rate;
    }
    return $rates;
}
add_filter('woocommerce_package_rates', 'rawr_custom_shipping_rates', 10, 2);
