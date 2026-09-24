<?php
/**
 * Single Product Price & Quantity Tier Notice
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

global $product;
if ( ! $product ) return;
?>

<div class="rawr-product-price-section" style="margin-bottom: 24px;">
    <div style="font-size: 2rem; font-weight: 700; color: #1A1A2E; margin-bottom: 8px;">
        <?php echo wp_kses_post( $product->get_price_html() ); ?>
    </div>
    
    <div style="display: inline-block; background: #FDF8EE; border: 1px solid rgba(201,168,76,0.3); border-radius: 8px; padding: 6px 12px; font-size: 12px; color: #A8862E;">
        ✨ <strong>Multi-buy savings:</strong> Buy 2 get 5% off, buy 3+ get 10% off!
    </div>
</div>
