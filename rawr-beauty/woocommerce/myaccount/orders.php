<?php
/**
 * Orders history in my-account
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_account_orders', $has_orders ); ?>

<?php if ( $has_orders ) : ?>

    <table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr style="border-bottom: 2px solid #ECECF2;">
                <?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
                    <th class="woocommerce-orders-table__header woocommerce-orders-table__header-<?php echo esc_attr( $column_id ); ?>" style="text-align: left; padding: 12px 10px;"><span class="nobr"><?php echo esc_html( $column_name ); ?></span></th>
                <?php endforeach; ?>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ( $customer_orders->orders as $customer_order ) {
                $order      = wc_get_order( $customer_order );
                $item_count = $order->get_item_count() - $order->get_item_count_refunded();
                ?>
                <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr( $order->get_status() ); ?> order" style="border-bottom: 1px solid #ECECF2;">
                    <?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>" style="padding: 14px 10px;">
                            <?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>
                                <?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>

                            <?php elseif ( 'order-number' === $column_id ) : ?>
                                <a href="<?php echo esc_url( $order->get_view_order_url() ); ?>" style="font-weight: 700; color: #1A1A2E;">
                                    <?php echo esc_html( _x( '#', 'hash before order number', 'rawr-beauty' ) . $order->get_order_number() ); ?>
                                </a>

                            <?php elseif ( 'order-date' === $column_id ) : ?>
                                <time datetime="<?php echo esc_attr( $order->get_date_created()->date( 'c' ) ); ?>"><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></time>

                            <?php elseif ( 'order-status' === $column_id ) : ?>
                                <span style="background: #FDF8EE; color: #A8862E; padding: 4px 10px; border-radius: 12px; font-size: 12px; font-weight: 700;">
                                    <?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>
                                </span>

                            <?php elseif ( 'order-total' === $column_id ) : ?>
                                <?php
                                /* translators: 1: formatted order total 2: total order items */
                                echo wp_kses_post( sprintf( _n( '%1$s for %2$s item', '%1$s for %2$s items', $item_count, 'rawr-beauty' ), $order->get_formatted_order_total(), $item_count ) );
                                ?>

                            <?php elseif ( 'order-actions' === $column_id ) : ?>
                                <?php
                                $actions = wc_get_account_orders_actions( $order );

                                if ( ! empty( $actions ) ) {
                                    foreach ( $actions as $key => $action ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                                        echo '<a href="' . esc_url( $action['url'] ) . '" class="woocommerce-button button ' . sanitize_html_class( $key ) . '" style="background:#1A1A2E; color:#fff; padding:6px 14px; border-radius:50px; text-decoration:none; font-size:12px; font-weight:700;">' . esc_html( $action['name'] ) . '</a>';
                                    }
                                }
                                ?>
                            <?php endif; ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <?php do_action( 'woocommerce_before_account_orders_pagination' ); ?>

<?php else : ?>
    <div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info" style="padding: 24px; background: #FAF9F6; border-radius: 12px; text-align: center;">
        <p><?php esc_html_e( 'No orders placed yet.', 'rawr-beauty' ); ?></p>
        <a class="woocommerce-Button button" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" style="background: #C9A84C; color: #1A1A2E; padding: 10px 24px; border-radius: 50px; text-decoration: none; font-weight: 700; display: inline-block; margin-top: 10px;">
            <?php esc_html_e( 'Browse Shop', 'rawr-beauty' ); ?>
        </a>
    </div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_account_orders', $has_orders ); ?>
