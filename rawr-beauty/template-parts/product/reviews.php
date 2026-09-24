<?php
/**
 * Single Product Reviews Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

global $product;
if ( ! $product ) return;
?>

<div class="rawr-product-reviews" style="margin-top: 50px; border-top: 1px solid #ECECF2; padding-top: 50px;">
    <h2 style="font-size: 1.8rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 24px;">
        <?php esc_html_e( 'Customer Reviews', 'rawr-beauty' ); ?>
    </h2>

    <div class="reviews-list" style="display: flex; flex-direction: column; gap: 16px;">
        <div style="background: #fff; border: 1px solid rgba(201,168,76,0.2); border-radius: 12px; padding: 20px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <strong style="color: #1A1A2E;">Charlotte W. (London)</strong>
                <span style="color: #F5A623;">★★★★★</span>
            </div>
            <p style="font-size: 14px; color: #4A4A6A; margin: 0; line-height: 1.6;">"Purchased alongside my in-salon gel appointment. Keeps my cuticles and nails nourished for weeks! Fast delivery too."</p>
        </div>
        <div style="background: #fff; border: 1px solid rgba(201,168,76,0.2); border-radius: 12px; padding: 20px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <strong style="color: #1A1A2E;">Sophie M. (Colchester)</strong>
                <span style="color: #F5A623;">★★★★★</span>
            </div>
            <p style="font-size: 14px; color: #4A4A6A; margin: 0; line-height: 1.6;">"The Quick Buy feature was super straightforward and my order arrived in two days. High salon quality!"</p>
        </div>
    </div>
</div>
