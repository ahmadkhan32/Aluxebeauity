<?php
/**
 * Quick Buy Complete Modal Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div id="rawr-quick-buy-overlay" class="rawr-modal-overlay" style="display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.6); z-index: 99998; backdrop-filter: blur(4px); opacity: 0; transition: opacity 0.3s ease;"></div>

<div id="rawr-quick-buy-modal" class="rawr-modal-container" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%) scale(0.95); width: 90%; max-width: 460px; max-height: 90vh; overflow-y: auto; background: #ffffff; color: #1A1A2E; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.25); z-index: 99999; padding: 28px; transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.3s ease; opacity: 0;">
    
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h3 style="font-size: 1.3rem; margin: 0; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E;">
            ⚡ <?php esc_html_e( 'Quick Buy', 'rawr-beauty' ); ?>
        </h3>
        <button type="button" class="modal-close" onclick="window.rawrCloseQuickBuy && window.rawrCloseQuickBuy()" style="background: none; border: none; font-size: 24px; cursor: pointer; color: #8888AA; padding: 4px;">&times;</button>
    </div>

    <?php get_template_part( 'template-parts/quick-buy/product' ); ?>
    <?php get_template_part( 'template-parts/quick-buy/quantity' ); ?>
    <?php get_template_part( 'template-parts/quick-buy/customer-fields' ); ?>
    <?php get_template_part( 'template-parts/quick-buy/summary' ); ?>
    <?php get_template_part( 'template-parts/quick-buy/place-order' ); ?>
</div>
