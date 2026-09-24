<?php
/**
 * Header Cart Button Component with Counter Badge
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

$count = function_exists('WC') && WC()->cart ? WC()->cart->get_cart_contents_count() : 0;
?>

<button type="button" class="rawr-cart-trigger btn-cart" aria-label="<?php esc_attr_e( 'Open Shopping Cart', 'rawr-beauty' ); ?>" onclick="window.rawrOpenCart && window.rawrOpenCart()" style="position: relative; background: none; border: none; cursor: pointer; padding: 8px 12px; display: inline-flex; align-items: center; color: inherit;">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <path d="M16 10a4 4 0 0 1-8 0"></path>
    </svg>
    <span class="rawr-cart-count" style="display: inline-flex; align-items: center; justify-content: center; background: #C9A84C; color: #1A1A2E; font-size: 11px; font-weight: 800; border-radius: 50%; min-width: 18px; height: 18px; padding: 0 4px; margin-left: 6px;">
        <?php echo esc_html( $count ); ?>
    </span>
</button>
