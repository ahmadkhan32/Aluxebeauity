<?php
/**
 * Country Select Component - Defaults to United Kingdom
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="form-group-country" style="margin-bottom: 16px;">
    <label for="rawr_checkout_country" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
        <?php esc_html_e( 'Country / Region', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
    </label>
    <select id="rawr_checkout_country" name="country" onchange="window.rawrHandleCountryChange && window.rawrHandleCountryChange(this.value)" style="width: 100%; padding: 12px 16px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; background: #fff; outline: none;">
        <option value="United Kingdom" selected><?php esc_html_e( 'United Kingdom (UK)', 'rawr-beauty' ); ?></option>
        <option value="Ireland"><?php esc_html_e( 'Ireland', 'rawr-beauty' ); ?></option>
        <option value="France"><?php esc_html_e( 'France', 'rawr-beauty' ); ?></option>
        <option value="Germany"><?php esc_html_e( 'Germany', 'rawr-beauty' ); ?></option>
        <option value="United States"><?php esc_html_e( 'United States', 'rawr-beauty' ); ?></option>
    </select>
</div>
