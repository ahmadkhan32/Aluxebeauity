<?php
/**
 * Checkout Shipping Address Fields Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-address-fields" style="background: #fff; border-radius: 12px; padding: 24px; border: 1px solid #ECECF2; margin-bottom: 24px;">
    <h3 style="font-size: 1.25rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 18px;">
        2. <?php esc_html_e( 'Delivery Address', 'rawr-beauty' ); ?>
    </h3>

    <?php get_template_part( 'template-parts/checkout/country-select' ); ?>

    <div style="margin-bottom: 16px;">
        <label for="rawr_checkout_address" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
            <?php esc_html_e( 'Street Address', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
        </label>
        <input type="text" id="rawr_checkout_address" name="address" placeholder="House number and street name" required style="width: 100%; padding: 12px 16px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; outline: none;" />
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
        <?php get_template_part( 'template-parts/checkout/city-select' ); ?>

        <div>
            <label for="rawr_checkout_postcode" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
                <?php esc_html_e( 'Postcode', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
            </label>
            <input type="text" id="rawr_checkout_postcode" name="postcode" placeholder="e.g. SW1A 1AA" required style="width: 100%; padding: 12px 16px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; outline: none; text-transform: uppercase;" />
        </div>
    </div>
</div>
