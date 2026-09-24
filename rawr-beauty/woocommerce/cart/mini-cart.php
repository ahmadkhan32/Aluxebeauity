<?php
/**
 * Mini-cart
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_mini_cart' ); ?>

<?php if ( ! WC()->cart->is_empty() ) : ?>

    <ul class="woocommerce-mini-cart cart_list product_list_widget <?php echo esc_attr( $args['list_class'] ); ?>" style="list-style: none; padding: 0; margin: 0;">
        <?php
        do_action( 'woocommerce_before_mini_cart_contents' );

        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                $product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
                $thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
                $product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                ?>
                <li class="woocommerce-mini-cart-item <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>" style="display: flex; gap: 12px; padding: 12px 0; border-bottom: 1px solid #ECECF2;">
                    <div style="width: 50px; height: 50px; border-radius: 6px; overflow: hidden; flex-shrink: 0;">
                        <?php echo $thumbnail; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </div>
                    <div style="flex-grow: 1;">
                        <a href="<?php echo esc_url( $product_permalink ); ?>" style="color: #1A1A2E; font-weight: 700; text-decoration: none; font-size: 13px;">
                            <?php echo wp_kses_post( $product_name ); ?>
                        </a>
                        <div style="font-size: 12px; color: #8888AA; margin-top: 4px;">
                            <?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </div>
                    </div>
                    <?php
                    echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        'woocommerce_cart_item_remove_link',
                        sprintf(
                            '<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s" style="color: #888; text-decoration: none; font-size: 16px;">&times;</a>',
                            esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                            /* translators: %s is the product name */
                            esc_attr( sprintf( __( 'Remove %s from cart', 'rawr-beauty' ), wp_strip_all_tags( $product_name ) ) ),
                            esc_attr( $product_id ),
                            esc_attr( $cart_item_key ),
                            esc_attr( $_product->get_sku() )
                        ),
                        $cart_item_key
                    );
                    ?>
                </li>
                <?php
            }
        }

        do_action( 'woocommerce_mini_cart_contents' );
        ?>
    </ul>

    <p class="woocommerce-mini-cart__total total" style="display: flex; justify-content: space-between; font-weight: 700; padding: 14px 0; border-bottom: 1px solid #ECECF2;">
        <?php
        /**
         * Hook: woocommerce_widget_shopping_cart_total.
         *
         * @hooked woocommerce_widget_shopping_cart_subtotal - 10
         */
        do_action( 'woocommerce_widget_shopping_cart_total' );
        ?>
    </p>

    <?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

    <p class="woocommerce-mini-cart__buttons buttons" style="display: flex; gap: 10px; margin-top: 14px;">
        <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="button wc-forward" style="flex: 1; text-align: center; border: 1px solid #1A1A2E; color: #1A1A2E; padding: 10px; border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 13px;">View Cart</a>
        <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="button checkout wc-forward" style="flex: 1; text-align: center; background: #C9A84C; color: #1A1A2E; padding: 10px; border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 13px;">Checkout</a>
    </p>

    <?php do_action( 'woocommerce_widget_shopping_cart_after_buttons' ); ?>

<?php else : ?>

    <p class="woocommerce-mini-cart__empty-message" style="text-align: center; padding: 30px 0; color: #8888AA;"><?php esc_html_e( 'No products in the bag.', 'rawr-beauty' ); ?></p>

<?php endif; ?>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>
