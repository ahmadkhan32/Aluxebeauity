<?php
/**
 * Thankyou / Order Confirmation page
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="woocommerce-order rawr-thankyou-page" style="max-width: 760px; margin: 60px auto; padding: 40px; background: #fff; border-radius: 16px; border: 1px solid rgba(201,168,76,0.3); text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">

    <?php
    if ( $order ) :

        do_action( 'woocommerce_before_thankyou', $order->get_id() );
        ?>

        <?php if ( $order->has_status( 'failed' ) ) : ?>

            <div style="font-size: 40px; margin-bottom: 14px;">⚠️</div>
            <h1 style="font-size: 2rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 12px;"><?php esc_html_e( 'Order Payment Failed', 'rawr-beauty' ); ?></h1>
            <p style="color: #4A4A6A; margin-bottom: 24px;"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'rawr-beauty' ); ?></p>
            <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay" style="background: #C9A84C; color: #1A1A2E; padding: 12px 28px; border-radius: 50px; font-weight: 700; text-decoration: none;"><?php esc_html_e( 'Pay Now', 'rawr-beauty' ); ?></a>

        <?php else : ?>

            <div style="font-size: 48px; margin-bottom: 14px;">✨</div>
            <h1 style="font-size: 2.2rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 12px;"><?php esc_html_e( 'Thank You For Your Order!', 'rawr-beauty' ); ?></h1>
            <p style="font-size: 15px; color: #4A4A6A; margin-bottom: 30px;"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Your beauty order has been received and is being prepared for dispatch.', 'rawr-beauty' ), $order ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

            <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details" style="list-style: none; padding: 20px; margin: 0 0 30px; background: #FAF9F6; border-radius: 12px; display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 16px; text-align: left;">
                <li class="woocommerce-order-overview__order order">
                    <span style="display: block; font-size: 11px; text-transform: uppercase; color: #8888AA; font-weight: 700;"><?php esc_html_e( 'Order Number:', 'rawr-beauty' ); ?></span>
                    <strong style="color: #1A1A2E; font-size: 15px;"><?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
                </li>

                <li class="woocommerce-order-overview__date date">
                    <span style="display: block; font-size: 11px; text-transform: uppercase; color: #8888AA; font-weight: 700;"><?php esc_html_e( 'Date:', 'rawr-beauty' ); ?></span>
                    <strong style="color: #1A1A2E; font-size: 15px;"><?php echo wc_format_datetime( $order->get_date_created() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
                </li>

                <li class="woocommerce-order-overview__total total">
                    <span style="display: block; font-size: 11px; text-transform: uppercase; color: #8888AA; font-weight: 700;"><?php esc_html_e( 'Total:', 'rawr-beauty' ); ?></span>
                    <strong style="color: #C9A84C; font-size: 15px;"><?php echo $order->get_formatted_order_total(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
                </li>

                <?php if ( $order->get_payment_method_title() ) : ?>
                <li class="woocommerce-order-overview__payment-method method">
                    <span style="display: block; font-size: 11px; text-transform: uppercase; color: #8888AA; font-weight: 700;"><?php esc_html_e( 'Payment:', 'rawr-beauty' ); ?></span>
                    <strong style="color: #1A1A2E; font-size: 15px;"><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong>
                </li>
                <?php endif; ?>
            </ul>

        <?php endif; ?>

        <?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

    <?php else : ?>

        <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'rawr-beauty' ), null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

    <?php endif; ?>

    <div style="margin-top: 30px;">
        <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="btn btn-primary" style="display: inline-block; background: #1A1A2E; color: #fff; padding: 12px 28px; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 14px;">
            <?php esc_html_e( 'Return to Shop', 'rawr-beauty' ); ?>
        </a>
    </div>
</div>
