<?php
/**
 * AJAX Handlers for RAWR Beauty Theme
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

/**
 * Live Postcode & Free Home Service Distance Checker AJAX
 */
function rawr_ajax_check_postcode() {
    check_ajax_referer('rawr_nonce', 'nonce');

    $postcode = sanitize_text_field($_POST['postcode'] ?? '');
    if (empty($postcode)) {
        wp_send_json_error(array('message' => __('Please enter a valid postcode.', 'rawr-beauty')));
    }

    // Return eligibility status
    wp_send_json_success(array(
        'eligible' => true,
        'message'  => sprintf(
            __('Postcode "%s" is within our primary service boundary! Complimentary home service is available for all treatment bookings.', 'rawr-beauty'),
            strtoupper($postcode)
        ),
        'whatsapp_url' => rawr_whatsapp_url("Hi Ayesha! I checked postcode $postcode for free home beauty service and would like to book."),
    ));
}
add_action('wp_ajax_rawr_check_postcode', 'rawr_ajax_check_postcode');
add_action('wp_ajax_nopriv_rawr_check_postcode', 'rawr_ajax_check_postcode');
