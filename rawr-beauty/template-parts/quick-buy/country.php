<?php
/**
 * Quick Buy Country Selector (United Kingdom Default)
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div style="margin-bottom: 14px;">
    <label for="rawr-qb-country" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
        <?php esc_html_e( 'Country', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
    </label>
    <select id="rawr-qb-country" name="qb_country" style="width: 100%; padding: 11px 14px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; background: #fff; outline: none;">
        <option value="United Kingdom" selected><?php esc_html_e( 'United Kingdom', 'rawr-beauty' ); ?></option>
        <option value="Ireland"><?php esc_html_e( 'Ireland', 'rawr-beauty' ); ?></option>
    </select>
</div>
