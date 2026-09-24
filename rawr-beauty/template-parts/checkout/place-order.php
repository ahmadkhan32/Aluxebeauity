<?php
/**
 * Checkout Place Order Button Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-place-order-wrapper" style="margin-top: 24px;">
    <button type="submit" id="place_order" class="btn btn-place-order" style="width: 100%; background: #C9A84C; color: #1A1A2E; padding: 16px 24px; border-radius: 50px; font-weight: 800; font-size: 16px; border: none; cursor: pointer; letter-spacing: 0.5px;">
        🔒 <?php esc_html_e( 'PLACE YOUR ORDER', 'rawr-beauty' ); ?>
    </button>
    <p style="font-size: 11px; text-align: center; color: #8888AA; margin-top: 12px;">
        256-bit SSL Encrypted • 30-Day UK Money-Back Guarantee
    </p>
</div>
