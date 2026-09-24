<?php
/**
 * Cart Checkout Button Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

$checkout_url = function_exists('wc_get_checkout_url') ? wc_get_checkout_url() : home_url( '/checkout/' );
?>

<div class="rawr-cart-checkout-actions" style="display: flex; flex-direction: column; gap: 10px;">
    <a href="<?php echo esc_url( $checkout_url ); ?>" class="btn btn-checkout-drawer" style="display: block; text-align: center; background: #C9A84C; color: #1A1A2E; padding: 14px 20px; border-radius: 50px; font-weight: 800; font-size: 14px; text-decoration: none; letter-spacing: 0.5px; transition: background 0.2s ease;">
        🔒 <?php esc_html_e( 'PROCEED TO CHECKOUT', 'rawr-beauty' ); ?>
    </a>
    
    <button type="button" class="btn-continue-shopping" onclick="window.rawrCloseCart && window.rawrCloseCart()" style="background: none; border: none; color: #8888AA; font-size: 13px; text-align: center; cursor: pointer; text-decoration: underline;">
        <?php esc_html_e( 'Continue Shopping', 'rawr-beauty' ); ?>
    </button>
</div>
