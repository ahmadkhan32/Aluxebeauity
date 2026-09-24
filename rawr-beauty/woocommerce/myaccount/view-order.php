<?php
/**
 * View Order details
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

$notes = $order->get_customer_order_notes();
?>
<p>
<?php
printf(
    /* translators: 1: order number 2: order date 3: order status */
    esc_html__( 'Order #%1$s was placed on %2$s and is currently %3$s.', 'rawr-beauty' ),
    '<mark class="order-number" style="background:#FDF8EE; padding:2px 6px; font-weight:700;">' . $order->get_order_number() . '</mark>', // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    '<mark class="order-date" style="background:#FDF8EE; padding:2px 6px;">' . wc_format_datetime( $order->get_date_created() ) . '</mark>', // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    '<mark class="order-status" style="background:#C9A84C; color:#1A1A2E; padding:2px 8px; border-radius:12px; font-weight:700;">' . wc_get_order_status_name( $order->get_status() ) . '</mark>' // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
);
?>
</p>

<?php if ( $notes ) : ?>
    <h2><?php esc_html_e( 'Order updates', 'rawr-beauty' ); ?></h2>
    <ol class="woocommerce-OrderUpdates commentlist notes">
        <?php foreach ( $notes as $note ) : ?>
        <li class="woocommerce-OrderUpdate comment note">
            <div class="woocommerce-OrderUpdate-description description">
                <?php echo wpautop( wptexturize( $note->content ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            </div>
            <div class="clear"></div>
        </li>
        <?php endforeach; ?>
    </ol>
<?php endif; ?>

<?php do_action( 'woocommerce_view_order', $order_id ); ?>
