<?php
/**
 * Quick Buy 1-Click Modal & Instant WooCommerce Order Generator
 *
 * @package RAWR_Beauty\Ecommerce
 */

defined('ABSPATH') || exit;

/**
 * Register Quick Buy REST route
 */
function rawr_register_quick_buy_routes() {
    register_rest_route('rawr/v1', '/quick-buy', array(
        'methods'             => 'POST',
        'callback'            => 'rawr_api_handle_quick_buy',
        'permission_callback' => '__return_true',
    ));
}
add_action('rest_api_init', 'rawr_register_quick_buy_routes');

/**
 * Handle 1-click Quick Buy Order
 */
function rawr_api_handle_quick_buy($request) {
    if (!function_exists('wc_create_order')) {
        return new WP_REST_Response(array('success' => false, 'message' => 'WooCommerce required'), 400);
    }

    $params = $request->get_json_params();

    $product_id = isset($params['product_id']) ? absint($params['product_id']) : 0;
    $quantity   = isset($params['quantity']) ? max(1, absint($params['quantity'])) : 1;
    $name       = isset($params['name']) ? sanitize_text_field($params['name']) : '';
    $phone      = isset($params['phone']) ? sanitize_text_field($params['phone']) : '';
    $address    = isset($params['address']) ? sanitize_text_field($params['address']) : '';
    $country    = isset($params['country']) ? sanitize_text_field($params['country']) : 'United Kingdom';
    $city       = isset($params['city']) ? sanitize_text_field($params['city']) : '';
    $postcode   = isset($params['postcode']) ? sanitize_text_field($params['postcode']) : '';
    $email      = isset($params['email']) && is_email($params['email']) ? sanitize_email($params['email']) : 'quickbuy@rawrbeauty.co.uk';

    // Validation
    if (!$product_id) {
        return new WP_REST_Response(array('success' => false, 'message' => 'Product is required.'), 400);
    }
    if (empty($name) || empty($phone) || empty($address) || empty($city)) {
        return new WP_REST_Response(array('success' => false, 'message' => 'Please provide Name, Phone, Address, and City.'), 400);
    }

    $product = wc_get_product($product_id);
    if (!$product) {
        return new WP_REST_Response(array('success' => false, 'message' => 'Product not found.'), 404);
    }

    try {
        // Authoritative server-side WooCommerce Order
        $order = wc_create_order();
        $order->add_product($product, $quantity);

        $address_fields = array(
            'first_name' => $name,
            'phone'      => $phone,
            'email'      => $email,
            'address_1'  => $address,
            'city'       => $city,
            'postcode'   => $postcode,
            'country'    => ($country === 'United Kingdom' || $country === 'GB') ? 'GB' : sanitize_text_field($country),
        );

        $order->set_address($address_fields, 'billing');
        $order->set_address($address_fields, 'shipping');
        $order->set_payment_method('cod');
        $order->set_payment_method_title('Quick Buy Instant Order');

        // Add metadata
        $order->update_meta_data('_rawr_quick_buy', 'yes');
        $order->update_meta_data('_rawr_delivery_city', $city);
        $order->update_meta_data('_rawr_customer_phone', $phone);

        // Authoritative WooCommerce totals
        $order->calculate_totals();
        $order->update_status('processing', sprintf(__('Quick Buy order placed by %s for %dx %s in %s.', 'rawr-beauty'), $name, $quantity, $product->get_name(), $city));

        return new WP_REST_Response(array(
            'success'        => true,
            'order_id'       => $order->get_id(),
            'order_number'   => $order->get_order_number(),
            'product_name'   => $product->get_name(),
            'quantity'       => $quantity,
            'total'          => $order->get_total(),
            'total_html'     => wc_price($order->get_total()),
            'redirect'       => $order->get_checkout_order_received_url(),
            'message'        => __('Your order has been placed successfully!', 'rawr-beauty'),
        ), 200);

    } catch (Exception $e) {
        return new WP_REST_Response(array('success' => false, 'message' => $e->getMessage()), 500);
    }
}
