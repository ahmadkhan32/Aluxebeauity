<?php
/**
 * Checkout Order Summary Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

$cart = function_exists('WC') && WC()->cart ? WC()->cart : null;
$subtotal = $cart ? $cart->get_cart_subtotal() : '£0.00';
$total    = $cart ? $cart->get_total() : '£0.00';
?>

<div class="rawr-checkout-order-summary" style="background: #FAF9F6; border-radius: 12px; padding: 24px; border: 1px solid rgba(201,168,76,0.25);">
    <h3 style="font-size: 1.25rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 18px;">
        <?php esc_html_e( 'Order Summary', 'rawr-beauty' ); ?>
    </h3>

    <div class="checkout-items-list" style="margin-bottom: 20px; max-height: 250px; overflow-y: auto;">
        <?php if ( $cart && ! $cart->is_empty() ) : ?>
            <?php foreach ( $cart->get_cart() as $cart_item_key => $cart_item ) : 
                $product = $cart_item['data'];
            ?>
                <div style="display: flex; justify-content: space-between; font-size: 13px; padding: 8px 0; border-bottom: 1px solid #ECECF2;">
                    <span><?php echo esc_html( $product->get_name() ); ?> &times; <?php echo esc_html( $cart_item['quantity'] ); ?></span>
                    <strong><?php echo wp_kses_post( $cart->get_product_subtotal( $product, $cart_item['quantity'] ) ); ?></strong>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p style="font-size: 13px; color: #8888AA;"><?php esc_html_e( 'Cart is currently empty.', 'rawr-beauty' ); ?></p>
        <?php endif; ?>
    </div>

    <div style="border-top: 1px solid #ECECF2; padding-top: 12px; display: flex; flex-direction: column; gap: 8px; font-size: 14px;">
        <div style="display: flex; justify-content: space-between;">
            <span><?php esc_html_e( 'Subtotal', 'rawr-beauty' ); ?></span>
            <strong><?php echo wp_kses_post( $subtotal ); ?></strong>
        </div>
        <div style="display: flex; justify-content: space-between; font-size: 13px; color: #8888AA;">
            <span><?php esc_html_e( 'UK Delivery', 'rawr-beauty' ); ?></span>
            <span>Royal Mail Tracked 48</span>
        </div>
        <div style="display: flex; justify-content: space-between; font-size: 17px; font-weight: 800; color: #1A1A2E; border-top: 2px solid #1A1A2E; padding-top: 10px; margin-top: 6px;">
            <span><?php esc_html_e( 'Order Total', 'rawr-beauty' ); ?></span>
            <span style="color: #C9A84C;"><?php echo wp_kses_post( $total ); ?></span>
        </div>
    </div>
</div>
