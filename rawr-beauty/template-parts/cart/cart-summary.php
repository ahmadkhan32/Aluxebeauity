<?php
/**
 * Cart Summary Totals Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-cart-totals-summary" style="margin-bottom: 16px;">
    <div style="display: flex; justify-content: space-between; font-size: 14px; color: #4A4A6A; margin-bottom: 6px;">
        <span><?php esc_html_e( 'Subtotal', 'rawr-beauty' ); ?></span>
        <strong id="rawr-drawer-subtotal" style="color: #1A1A2E;">£0.00</strong>
    </div>
    <div style="display: flex; justify-content: space-between; font-size: 13px; color: #8888AA; margin-bottom: 8px;">
        <span><?php esc_html_e( 'UK Shipping', 'rawr-beauty' ); ?></span>
        <span id="rawr-drawer-shipping">Calculated at checkout</span>
    </div>
    <div style="border-top: 1px solid #ECECF2; padding-top: 8px; display: flex; justify-content: space-between; font-size: 16px; font-weight: 800; color: #1A1A2E;">
        <span><?php esc_html_e( 'Total', 'rawr-beauty' ); ?></span>
        <span id="rawr-drawer-total" style="color: #C9A84C;">£0.00</span>
    </div>
</div>
