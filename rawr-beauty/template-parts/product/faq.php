<?php
/**
 * Single Product FAQ Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-product-faq" style="margin-top: 40px;">
    <h3 style="font-size: 1.3rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 16px;">
        <?php esc_html_e( 'Frequently Asked Questions', 'rawr-beauty' ); ?>
    </h3>
    <details style="background: #FAF9F6; border: 1px solid #ECECF2; border-radius: 8px; padding: 14px 18px; margin-bottom: 10px;">
        <summary style="font-weight: 700; cursor: pointer; color: #1A1A2E;">Is this item suitable for sensitive skin?</summary>
        <p style="margin-top: 8px; color: #4A4A6A; font-size: 14px;">Yes, all our beauty care products are dermatologically formulated without parabens or harsh synthetic sulphates.</p>
    </details>
    <details style="background: #FAF9F6; border: 1px solid #ECECF2; border-radius: 8px; padding: 14px 18px;">
        <summary style="font-weight: 700; cursor: pointer; color: #1A1A2E;">Can I return this product if unopened?</summary>
        <p style="margin-top: 8px; color: #4A4A6A; font-size: 14px;">We offer a 30-day money-back guarantee on all unopened cosmetics and accessories.</p>
    </details>
</div>
