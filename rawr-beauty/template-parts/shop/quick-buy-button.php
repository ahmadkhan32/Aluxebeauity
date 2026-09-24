<?php
/**
 * Quick Buy Button for Product Cards & Single Product
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

global $product;
if ( ! $product ) return;

$product_id    = $product->get_id();
$product_name  = esc_attr( $product->get_name() );
$product_price = (float) $product->get_price();
$image_id      = $product->get_image_id();
$image_url     = $image_id ? esc_url( wp_get_attachment_image_url( $image_id, 'medium' ) ) : '';
?>

<button type="button" 
        class="btn-quick-buy rawr-quick-buy-trigger" 
        data-product-id="<?php echo esc_attr( $product_id ); ?>"
        data-product-name="<?php echo $product_name; ?>"
        data-product-price="<?php echo esc_attr( $product_price ); ?>"
        data-product-image="<?php echo $image_url; ?>"
        onclick="window.rawrOpenQuickBuy && window.rawrOpenQuickBuy({
            id: <?php echo esc_attr( $product_id ); ?>,
            name: '<?php echo esc_js( $product->get_name() ); ?>',
            price: <?php echo esc_attr( $product_price ); ?>,
            image: '<?php echo esc_js( $image_url ); ?>'
        })"
        style="display: inline-flex; align-items: center; justify-content: center; width: 100%; background: #1A1A2E; color: #fff; padding: 11px 18px; border-radius: 50px; font-weight: 700; font-size: 13px; border: none; cursor: pointer; transition: all 0.2s ease;">
    ⚡ <?php esc_html_e( 'Quick Buy', 'rawr-beauty' ); ?>
</button>
