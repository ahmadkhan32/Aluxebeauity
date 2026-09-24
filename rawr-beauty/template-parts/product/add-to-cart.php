<?php
/**
 * Single Product Add to Cart Action Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

global $product;
if ( ! $product ) return;

$product_id = $product->get_id();
?>

<button type="button" 
        class="btn-add-cart-large" 
        onclick="var q=document.getElementById('rawr-single-qty')?parseInt(document.getElementById('rawr-single-qty').value):1; window.rawrAddToCart && window.rawrAddToCart(<?php echo esc_attr( $product_id ); ?>, q);"
        style="width: 100%; background: #C9A84C; color: #1A1A2E; padding: 16px 24px; border-radius: 50px; font-weight: 700; font-size: 15px; border: none; cursor: pointer; transition: transform 0.2s ease;">
    <?php esc_html_e( 'Add to Shopping Cart', 'rawr-beauty' ); ?>
</button>
