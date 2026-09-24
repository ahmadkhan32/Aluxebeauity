<?php
/**
 * Quick Buy Customer Form Fields
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-qb-customer-details" style="margin-bottom: 20px;">
    <div style="margin-bottom: 14px;">
        <label for="rawr-qb-name" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
            <?php esc_html_e( 'Full Name', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
        </label>
        <input type="text" id="rawr-qb-name" name="qb_name" placeholder="Your name" required style="width: 100%; padding: 11px 14px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; outline: none;" />
    </div>

    <div style="margin-bottom: 14px;">
        <label for="rawr-qb-address" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
            <?php esc_html_e( 'Address', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
        </label>
        <input type="text" id="rawr-qb-address" name="qb_address" placeholder="House / Flat & Street Name" required style="width: 100%; padding: 11px 14px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; outline: none;" />
    </div>

    <div style="margin-bottom: 14px;">
        <label for="rawr-qb-phone" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
            <?php esc_html_e( 'Phone', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
        </label>
        <input type="tel" id="rawr-qb-phone" name="qb_phone" placeholder="e.g. 07398 926226" required style="width: 100%; padding: 11px 14px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; outline: none;" />
    </div>

    <?php get_template_part( 'template-parts/quick-buy/country' ); ?>
    <?php get_template_part( 'template-parts/quick-buy/city' ); ?>
</div>
