<?php
/**
 * Main Checkout Form Integrating All Fields and Order Summary
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<form name="checkout" method="post" class="checkout woocommerce-checkout rawr-checkout-form" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
    <div style="display: grid; grid-template-columns: 1.4fr 1fr; gap: 40px; align-items: start;">
        <div>
            <?php get_template_part( 'template-parts/checkout/customer-fields' ); ?>
            <?php get_template_part( 'template-parts/checkout/address-fields' ); ?>
            <?php get_template_part( 'template-parts/checkout/payment' ); ?>
        </div>

        <div style="position: sticky; top: 100px;">
            <?php get_template_part( 'template-parts/checkout/order-summary' ); ?>
            <?php get_template_part( 'template-parts/checkout/place-order' ); ?>
        </div>
    </div>
</form>
