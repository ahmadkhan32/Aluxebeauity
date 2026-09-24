<?php
/**
 * Shop Header Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<header class="rawr-shop-header" style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 90px 0 50px; text-align: center;">
    <div class="container">
        <span style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: #A8862E; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 14px;">
            <?php esc_html_e( 'Salon-Quality Beauty Care', 'rawr-beauty' ); ?>
        </span>
        <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 14px;">
            Shop <span style="color: var(--color-gold, #C9A84C);"><?php esc_html_e( 'RAWR Beauty', 'rawr-beauty' ); ?></span>
        </h1>
        <p style="font-size: 16px; opacity: 0.85; max-width: 600px; margin: 0 auto;">
            <?php esc_html_e( 'Nails, brow tints, lash enhancers, and daily beauty essentials. Free UK delivery over £40.', 'rawr-beauty' ); ?>
        </p>
    </div>
</header>
