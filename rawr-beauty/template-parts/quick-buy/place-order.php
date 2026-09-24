<?php
/**
 * Quick Buy Place Order Button Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-qb-action">
    <button type="button" 
            id="rawr-btn-submit-quick-buy" 
            class="btn btn-primary" 
            onclick="window.rawrSubmitQuickBuy && window.rawrSubmitQuickBuy()"
            style="width: 100%; background: #C9A84C; color: #1A1A2E; padding: 15px 20px; border-radius: 50px; font-weight: 800; font-size: 15px; border: none; cursor: pointer; letter-spacing: 0.5px; transition: background 0.2s ease;">
        ⚡ <?php esc_html_e( 'PLACE ORDER', 'rawr-beauty' ); ?>
    </button>
</div>
