<?php
/**
 * WooCommerce Global AJAX Cart & REST Endpoints
 *
 * @package RAWR_Beauty\Ecommerce
 */

defined('ABSPATH') || exit;

/**
 * Register REST API Cart routes
 */
function rawr_register_cart_routes() {
    register_rest_route('rawr/v1', '/cart', array(
        'methods'             => 'GET',
        'callback'            => 'rawr_api_get_cart',
        'permission_callback' => '__return_true',
    ));

    register_rest_route('rawr/v1', '/cart/add', array(
        'methods'             => 'POST',
        'callback'            => 'rawr_api_add_to_cart',
        'permission_callback' => '__return_true',
    ));

    register_rest_route('rawr/v1', '/cart/update', array(
        'methods'             => 'POST',
        'callback'            => 'rawr_api_update_cart_quantity',
        'permission_callback' => '__return_true',
    ));

    register_rest_route('rawr/v1', '/cart/remove', array(
        'methods'             => 'POST',
        'callback'            => 'rawr_api_remove_from_cart',
        'permission_callback' => '__return_true',
    ));

    register_rest_route('rawr/v1', '/cart/clear', array(
        'methods'             => 'POST',
        'callback'            => 'rawr_api_clear_cart',
        'permission_callback' => '__return_true',
    ));
}
add_action('rest_api_init', 'rawr_register_cart_routes');

/**
 * Ensure WooCommerce Cart is loaded in REST context
 */
function rawr_init_wc_cart() {
    if (defined('WC_ABSPATH')) {
        include_once WC_ABSPATH . 'includes/wc-cart-functions.php';
        include_once WC_ABSPATH . 'includes/wc-notice-functions.php';
    }
    if (null === WC()->session) {
        $session_class = apply_filters('woocommerce_session_handler', 'WC_Session_Handler');
        WC()->session  = new $session_class();
        WC()->session->init();
    }
    if (null === WC()->customer) {
        WC()->customer = new WC_Customer(get_current_user_id(), true);
    }
    if (null === WC()->cart) {
        WC()->cart = new WC_Cart();
    }
}

/**
 * Get current cart contents formatted for React/Drawer
 */
function rawr_api_get_cart() {
    if (!function_exists('WC')) {
        return new WP_REST_Response(array('success' => false, 'message' => 'WooCommerce not active'), 400);
    }
    rawr_init_wc_cart();

    $cart = WC()->cart;
    $cart->calculate_totals();

    $items = array();
    foreach ($cart->get_cart() as $cart_item_key => $cart_item) {
        $product = $cart_item['data'];
        $product_id = $cart_item['product_id'];

        $image_id = $product->get_image_id();
        $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'medium') : wc_placeholder_img_src();

        $items[] = array(
            'key'            => $cart_item_key,
            'id'             => $product_id,
            'name'           => $product->get_name(),
            'price'          => (float) $product->get_price(),
            'price_html'     => wc_price($product->get_price()),
            'quantity'       => (int) $cart_item['quantity'],
            'line_subtotal'  => (float) $cart_item['line_subtotal'],
            'line_total'     => (float) $cart_item['line_total'],
            'line_total_html'=> wc_price($cart_item['line_total']),
            'image'          => $image_url,
            'permalink'      => $product->get_permalink(),
        );
    }

    return new WP_REST_Response(array(
        'success'        => true,
        'item_count'     => $cart->get_cart_contents_count(),
        'items'          => $items,
        'subtotal'       => (float) $cart->get_subtotal(),
        'subtotal_html'  => wc_price($cart->get_subtotal()),
        'shipping_total' => (float) $cart->get_shipping_total(),
        'total'          => (float) $cart->get_total('edit'),
        'total_html'     => wc_price($cart->get_total('edit')),
        'currency'       => get_woocommerce_currency_symbol(),
    ), 200);
}

/**
 * Add item to cart
 */
function rawr_api_add_to_cart($request) {
    if (!function_exists('WC')) {
        return new WP_REST_Response(array('success' => false, 'message' => 'WooCommerce required'), 400);
    }
    rawr_init_wc_cart();

    $params     = $request->get_json_params();
    $product_id = isset($params['product_id']) ? absint($params['product_id']) : 0;
    $quantity   = isset($params['quantity']) ? max(1, absint($params['quantity'])) : 1;

    if (!$product_id) {
        return new WP_REST_Response(array('success' => false, 'message' => 'Invalid product ID'), 400);
    }

    $cart_item_key = WC()->cart->add_to_cart($product_id, $quantity);

    if ($cart_item_key) {
        return rawr_api_get_cart();
    } else {
        return new WP_REST_Response(array('success' => false, 'message' => 'Could not add to cart'), 400);
    }
}

/**
 * Update quantity in cart (+ / -)
 */
function rawr_api_update_cart_quantity($request) {
    if (!function_exists('WC')) {
        return new WP_REST_Response(array('success' => false, 'message' => 'WooCommerce required'), 400);
    }
    rawr_init_wc_cart();

    $params        = $request->get_json_params();
    $cart_item_key = isset($params['cart_item_key']) ? sanitize_text_field($params['cart_item_key']) : '';
    $quantity      = isset($params['quantity']) ? absint($params['quantity']) : 0;

    if (!$cart_item_key) {
        return new WP_REST_Response(array('success' => false, 'message' => 'Cart item key required'), 400);
    }

    if ($quantity === 0) {
        WC()->cart->remove_cart_item($cart_item_key);
    } else {
        WC()->cart->set_quantity($cart_item_key, $quantity, true);
    }

    return rawr_api_get_cart();
}

/**
 * Remove item from cart
 */
function rawr_api_remove_from_cart($request) {
    if (!function_exists('WC')) {
        return new WP_REST_Response(array('success' => false, 'message' => 'WooCommerce required'), 400);
    }
    rawr_init_wc_cart();

    $params        = $request->get_json_params();
    $cart_item_key = isset($params['cart_item_key']) ? sanitize_text_field($params['cart_item_key']) : '';

    if ($cart_item_key) {
        WC()->cart->remove_cart_item($cart_item_key);
    }

    return rawr_api_get_cart();
}

/**
 * Clear cart
 */
function rawr_api_clear_cart() {
    if (!function_exists('WC')) {
        return new WP_REST_Response(array('success' => false, 'message' => 'WooCommerce required'), 400);
    }
    rawr_init_wc_cart();
    WC()->cart->empty_cart();
    return rawr_api_get_cart();
}
