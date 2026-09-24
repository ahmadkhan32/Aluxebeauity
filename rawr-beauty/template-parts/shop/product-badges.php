<?php
/**
 * Product Badges Component (Sale, Bestseller, Sold Out)
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

global $product;
if ( ! $product ) return;
?>

<div class="rawr-product-badges" style="position: absolute; top: 12px; left: 12px; z-index: 2; display: flex; flex-direction: column; gap: 4px;">
    <?php if ( $product->is_on_sale() ) : ?>
        <span style="background: #E53935; color: #fff; font-size: 11px; font-weight: 800; letter-spacing: 1px; padding: 4px 8px; border-radius: 4px; text-transform: uppercase;">
            <?php esc_html_e( 'SALE', 'rawr-beauty' ); ?>
        </span>
    <?php endif; ?>
    <?php if ( $product->is_featured() ) : ?>
        <span style="background: #C9A84C; color: #1A1A2E; font-size: 11px; font-weight: 800; letter-spacing: 1px; padding: 4px 8px; border-radius: 4px; text-transform: uppercase;">
            <?php esc_html_e( 'BESTSELLER', 'rawr-beauty' ); ?>
        </span>
    <?php endif; ?>
    <?php if ( ! $product->is_in_stock() ) : ?>
        <span style="background: #555; color: #fff; font-size: 11px; font-weight: 800; letter-spacing: 1px; padding: 4px 8px; border-radius: 4px; text-transform: uppercase;">
            <?php esc_html_e( 'SOLD OUT', 'rawr-beauty' ); ?>
        </span>
    <?php endif; ?>
</div>
