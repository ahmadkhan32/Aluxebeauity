<?php
/**
 * Quick Buy Order Total Summary Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-qb-summary" style="background: #FAF9F6; border-radius: 8px; padding: 14px 18px; margin-bottom: 20px; border: 1px solid #ECECF2;">
    <div style="display: flex; justify-content: space-between; font-size: 13px; color: #4A4A6A; margin-bottom: 6px;">
        <span><?php esc_html_e( 'Unit Price', 'rawr-beauty' ); ?></span>
        <strong id="rawr-qb-summary-unit">£0.00</strong>
    </div>
    <div style="display: flex; justify-content: space-between; font-size: 13px; color: #4A4A6A; margin-bottom: 8px;">
        <span><?php esc_html_e( 'Quantity', 'rawr-beauty' ); ?></span>
        <strong id="rawr-qb-summary-qty">&times; 1</strong>
    </div>
    <div style="border-top: 1px solid #ECECF2; padding-top: 8px; display: flex; justify-content: space-between; font-size: 16px; font-weight: 800; color: #1A1A2E;">
        <span><?php esc_html_e( 'Total', 'rawr-beauty' ); ?></span>
        <span id="rawr-qb-summary-total" style="color: #C9A84C;">£0.00</span>
    </div>
</div>
