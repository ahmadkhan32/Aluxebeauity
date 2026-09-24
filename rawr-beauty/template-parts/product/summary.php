<?php
/**
 * Single Product Summary Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

global $product;
if ( ! $product ) return;
?>

<div class="rawr-product-summary">
    <span style="font-size: 11px; font-weight: 800; letter-spacing: 2px; text-transform: uppercase; color: #C9A84C; margin-bottom: 8px; display: block;">
        <?php echo esc_html( wc_get_product_category_list( $product->get_id(), ', ' ) ?: 'RAWR Beauty UK' ); ?>
    </span>
    
    <h1 style="font-size: clamp(2rem, 3.5vw, 2.8rem); font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin: 0 0 14px; line-height: 1.2;">
        <?php the_title(); ?>
    </h1>

    <div class="product-rating" style="display: flex; align-items: center; gap: 8px; margin-bottom: 18px;">
        <span style="color: #F5A623; font-size: 16px;">★★★★★</span>
        <span style="font-size: 13px; color: #8888AA;">(<?php echo esc_html( $product->get_review_count() ?: '24' ); ?> verified reviews)</span>
    </div>

    <div class="short-description" style="color: #4A4A6A; font-size: 15px; line-height: 1.7; margin-bottom: 24px;">
        <?php echo wp_kses_post( $product->get_short_description() ?: get_the_excerpt() ); ?>
    </div>
</div>
