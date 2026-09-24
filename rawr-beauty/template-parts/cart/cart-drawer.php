<?php
/**
 * Global Cart Drawer Slide-out Component
 * Works seamlessly from Home, Shop, Products, Branches, Services without refresh
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div id="rawr-cart-drawer-overlay" class="rawr-drawer-overlay" style="display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.55); z-index: 99998; opacity: 0; transition: opacity 0.3s ease;"></div>

<div id="rawr-cart-drawer" class="rawr-cart-drawer" style="position: fixed; top: 0; right: -450px; width: 100%; max-width: 420px; height: 100%; background: #ffffff; color: #1A1A2E; z-index: 99999; box-shadow: -5px 0 25px rgba(0,0,0,0.15); display: flex; flex-direction: column; transition: right 0.35s cubic-bezier(0.16, 1, 0.3, 1);">
    
    <!-- Drawer Header -->
    <div style="padding: 20px 24px; border-bottom: 1px solid #ECECF2; display: flex; align-items: center; justify-content: space-between;">
        <div style="display: flex; align-items: center; gap: 8px;">
            <h3 style="font-size: 1.25rem; margin: 0; font-family: var(--font-heading, Georgia, serif);">
                <?php esc_html_e( 'Your Shopping Bag', 'rawr-beauty' ); ?>
            </h3>
            <span class="rawr-cart-count" style="display: inline-flex; align-items: center; justify-content: center; background: #C9A84C; color: #1A1A2E; font-size: 11px; font-weight: 800; border-radius: 50%; min-width: 20px; height: 20px; padding: 0 4px;">0</span>
        </div>
        <button type="button" class="drawer-close" onclick="window.rawrCloseCart && window.rawrCloseCart()" style="background: none; border: none; font-size: 24px; cursor: pointer; color: #8888AA; padding: 4px;">&times;</button>
    </div>

    <!-- Free Delivery Progress Bar -->
    <div style="background: #FDF8EE; padding: 12px 24px; border-bottom: 1px solid rgba(201,168,76,0.2); font-size: 12px; color: #A8862E; text-align: center;">
        <span id="rawr-shipping-threshold-text">Add £40.00 for FREE UK Tracked Delivery</span>
        <div style="height: 4px; background: rgba(201,168,76,0.2); border-radius: 2px; margin-top: 6px; overflow: hidden;">
            <div id="rawr-shipping-bar" style="width: 0%; height: 100%; background: #C9A84C; transition: width 0.3s ease;"></div>
        </div>
    </div>

    <!-- Cart Drawer Items Mount Point -->
    <div id="rawr-drawer-items-list" style="flex: 1; overflow-y: auto; padding: 20px 24px;">
        <?php get_template_part( 'template-parts/cart/cart-empty' ); ?>
    </div>

    <!-- Drawer Summary & Checkout Footer -->
    <div id="rawr-drawer-footer" style="padding: 20px 24px; border-top: 1px solid #ECECF2; background: #FAF9F6;">
        <?php get_template_part( 'template-parts/cart/cart-summary' ); ?>
        <?php get_template_part( 'template-parts/cart/checkout-button' ); ?>
    </div>
</div>
