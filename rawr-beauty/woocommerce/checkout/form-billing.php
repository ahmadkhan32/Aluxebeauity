<?php
/**
 * Checkout billing information form
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="woocommerce-billing-fields">
    <?php if ( wc_ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>
        <h3 style="font-size: 1.4rem; font-family: var(--font-heading, Georgia, serif); margin-bottom: 18px;"><?php esc_html_e( 'Billing &amp; Shipping', 'rawr-beauty' ); ?></h3>
    <?php else : ?>
        <h3 style="font-size: 1.4rem; font-family: var(--font-heading, Georgia, serif); margin-bottom: 18px;"><?php esc_html_e( 'Customer &amp; Billing Details', 'rawr-beauty' ); ?></h3>
    <?php endif; ?>

    <?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

    <div class="woocommerce-billing-fields__field-wrapper">
        <?php
        $fields = $checkout->get_checkout_fields( 'billing' );
        foreach ( $fields as $key => $field ) {
            woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
        }
        ?>
    </div>

    <?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>
</div>
