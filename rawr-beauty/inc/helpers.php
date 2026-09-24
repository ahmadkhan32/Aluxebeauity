<?php
/**
 * Helper Functions for RAWR Beauty Theme
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

/**
 * Generate a direct WhatsApp booking / inquiry URL
 */
function rawr_whatsapp_url($message = '') {
    $phone = get_theme_mod('rawr_whatsapp_phone', '447398926226');
    $phone_clean = preg_replace('/[^0-9]/', '', $phone);
    if (empty($message)) {
        $message = "Hi! I'd like to book an appointment with RAWR Beauty.";
    }
    return 'https://wa.me/' . $phone_clean . '?text=' . rawurlencode($message);
}

/**
 * Format currency price
 */
function rawr_price($amount) {
    if (is_numeric($amount)) {
        return '£' . number_format($amount, 0);
    }
    return esc_html($amount);
}

/**
 * Render Location Status Badge
 */
function rawr_location_status_badge($status) {
    $status_clean = strtolower(trim($status));
    switch ($status_clean) {
        case 'active':
        case 'open':
            return '<span class="rawr-badge-status rawr-status-open">● ' . esc_html__('Open Today', 'rawr-beauty') . '</span>';
        case 'coming soon':
            return '<span class="rawr-badge-status rawr-status-coming">● ' . esc_html__('Coming Soon', 'rawr-beauty') . '</span>';
        case 'temporarily closed':
            return '<span class="rawr-badge-status rawr-status-temp-closed">● ' . esc_html__('Temporarily Closed', 'rawr-beauty') . '</span>';
        case 'permanently closed':
        case 'closed':
            return '<span class="rawr-badge-status rawr-status-closed">● ' . esc_html__('Closed', 'rawr-beauty') . '</span>';
        default:
            return '<span class="rawr-badge-status rawr-status-open">● ' . esc_html(ucfirst($status)) . '</span>';
    }
}
