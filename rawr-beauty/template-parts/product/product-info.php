<?php
/**
 * Single Product Additional Info & Description Tabs
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

global $product;
if ( ! $product ) return;
?>

<div class="rawr-product-additional-info" style="margin-top: 60px; border-top: 1px solid #ECECF2; padding-top: 50px;">
    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 50px;">
        <div>
            <h2 style="font-size: 1.8rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 20px;">
                <?php esc_html_e( 'Product Details & Application', 'rawr-beauty' ); ?>
            </h2>
            <div class="product-description-content" style="line-height: 1.8; color: #4A4A6A; font-size: 15px;">
                <?php the_content(); ?>
            </div>
        </div>
        <aside>
            <div style="background: #FDF8EE; border: 1px solid rgba(201,168,76,0.3); border-radius: 16px; padding: 26px;">
                <h3 style="font-size: 1.2rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 14px;">
                    <?php esc_html_e( 'Salon Guarantee', 'rawr-beauty' ); ?>
                </h3>
                <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; line-height: 2; color: #4A4A6A;">
                    <li>✓ 100% Cruelty-Free Formulations</li>
                    <li>✓ Formulated by UK Beauty Technicians</li>
                    <li>✓ Royal Mail Tracked 24/48 Dispatch</li>
                    <li>✓ 30-Day Hassle-Free Return Policy</li>
                </ul>
            </div>
        </aside>
    </div>
</div>
