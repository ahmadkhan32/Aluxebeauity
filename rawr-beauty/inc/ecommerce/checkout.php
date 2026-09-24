<?php
/**
 * WooCommerce Custom Checkout Logic & Rest Endpoints
 *
 * @package RAWR_Beauty\Ecommerce
 */

defined('ABSPATH') || exit;

/**
 * Register checkout REST routes
 */
function rawr_register_checkout_routes() {
    register_rest_route('rawr/v1', '/checkout/process', array(
        'methods'             => 'POST',
        'callback'            => 'rawr_api_process_checkout',
        'permission_callback' => '__return_true',
    ));
}
add_action('rest_api_init', 'rawr_register_checkout_routes');

/**
 * Customize WooCommerce billing fields (UK centric)
 */
function rawr_customize_checkout_fields($fields) {
    // UK default
    $fields['billing']['billing_country']['default'] = 'GB';

    // Priority ordering
    if (isset($fields['billing']['billing_first_name'])) {
        $fields['billing']['billing_first_name']['label'] = __('Full Name', 'rawr-beauty');
        $fields['billing']['billing_first_name']['placeholder'] = __('e.g. Sarah Jenkins', 'rawr-beauty');
    }
    if (isset($fields['billing']['billing_phone'])) {
        $fields['billing']['billing_phone']['placeholder'] = __('e.g. 07398 926226', 'rawr-beauty');
    }
    if (isset($fields['billing']['billing_city'])) {
        $fields['billing']['billing_city']['placeholder'] = __('Select or enter UK City', 'rawr-beauty');
    }

    return $fields;
}
add_filter('woocommerce_checkout_fields', 'rawr_customize_checkout_fields');

/**
 * Process Standard Checkout via REST
 */
function rawr_api_process_checkout($request) {
    if (!function_exists('WC')) {
        return new WP_REST_Response(array('success' => false, 'message' => 'WooCommerce required'), 400);
    }
    rawr_init_wc_cart();

    $cart = WC()->cart;
    if ($cart->is_empty()) {
        return new WP_REST_Response(array('success' => false, 'message' => 'Your cart is empty'), 400);
    }

    $params = $request->get_json_params();
    $name    = isset($params['name']) ? sanitize_text_field($params['name']) : '';
    $email   = isset($params['email']) ? sanitize_email($params['email']) : 'guest@rawrbeauty.co.uk';
    $phone   = isset($params['phone']) ? sanitize_text_field($params['phone']) : '';
    $address = isset($params['address']) ? sanitize_text_field($params['address']) : '';
    $city    = isset($params['city']) ? sanitize_text_field($params['city']) : '';
    $postcode= isset($params['postcode']) ? sanitize_text_field($params['postcode']) : '';
    $country = isset($params['country']) ? sanitize_text_field($params['country']) : 'GB';

    if (empty($name) || empty($address) || empty($phone) || empty($city)) {
        return new WP_REST_Response(array('success' => false, 'message' => 'Please fill in all required customer details.'), 400);
    }

    try {
        $order = wc_create_order();

        foreach ($cart->get_cart() as $cart_item) {
            $order->add_product($cart_item['data'], $cart_item['quantity']);
        }

        $address_data = array(
            'first_name' => $name,
            'email'      => $email,
            'phone'      => $phone,
            'address_1'  => $address,
            'city'       => $city,
            'postcode'   => $postcode,
            'country'    => $country,
        );

        $order->set_address($address_data, 'billing');
        $order->set_address($address_data, 'shipping');
        $order->set_payment_method('cod'); // Default instant / Pay on Delivery or Card
        $order->calculate_totals();
        $order->update_status('processing', __('Order submitted via RAWR website.', 'rawr-beauty'));

        $cart->empty_cart();

        return new WP_REST_Response(array(
            'success'   => true,
            'order_id'  => $order->get_id(),
            'total'     => $order->get_total(),
            'total_html'=> wc_price($order->get_total()),
            'redirect'  => $order->get_checkout_order_received_url(),
            'message'   => __('Order successfully placed!', 'rawr-beauty'),
        ), 200);
    } catch (Exception $e) {
        return new WP_REST_Response(array('success' => false, 'message' => $e->getMessage()), 500);
    }
}
