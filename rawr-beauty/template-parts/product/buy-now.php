<?php
/**
 * Single Product Buy Now / Quick Buy Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

global $product;
if ( ! $product ) return;

$product_id    = $product->get_id();
$product_price = (float) $product->get_price();
$image_id      = $product->get_image_id();
$image_url     = $image_id ? esc_url( wp_get_attachment_image_url( $image_id, 'medium' ) ) : '';
?>

<button type="button" 
        class="btn-buy-now-large" 
        onclick="var q=document.getElementById('rawr-single-qty')?parseInt(document.getElementById('rawr-single-qty').value):1; window.rawrOpenQuickBuy && window.rawrOpenQuickBuy({
            id: <?php echo esc_attr( $product_id ); ?>,
            name: '<?php echo esc_js( $product->get_name() ); ?>',
            price: <?php echo esc_attr( $product_price ); ?>,
            image: '<?php echo esc_js( $image_url ); ?>',
            quantity: q
        });"
        style="width: 100%; background: #1A1A2E; color: #fff; padding: 16px 24px; border-radius: 50px; font-weight: 700; font-size: 15px; border: none; cursor: pointer; transition: transform 0.2s ease;">
    ⚡ <?php esc_html_e( 'Instant Quick Buy', 'rawr-beauty' ); ?>
</button>
