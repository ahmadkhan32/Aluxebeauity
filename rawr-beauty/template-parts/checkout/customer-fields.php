<?php
/**
 * Checkout Customer Contact Details Fields
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-customer-fields" style="background: #fff; border-radius: 12px; padding: 24px; border: 1px solid #ECECF2; margin-bottom: 24px;">
    <h3 style="font-size: 1.25rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 18px;">
        1. <?php esc_html_e( 'Contact Information', 'rawr-beauty' ); ?>
    </h3>

    <div style="margin-bottom: 16px;">
        <label for="rawr_cust_name" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
            <?php esc_html_e( 'Full Name', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
        </label>
        <input type="text" id="rawr_cust_name" name="name" placeholder="e.g. Eleanor Vance" required style="width: 100%; padding: 12px 16px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; outline: none;" />
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
        <div>
            <label for="rawr_cust_email" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
                <?php esc_html_e( 'Email Address', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
            </label>
            <input type="email" id="rawr_cust_email" name="email" placeholder="e.g. eleanor@example.co.uk" required style="width: 100%; padding: 12px 16px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; outline: none;" />
        </div>
        <div>
            <label for="rawr_cust_phone" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
                <?php esc_html_e( 'Mobile / Phone', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
            </label>
            <input type="tel" id="rawr_cust_phone" name="phone" placeholder="e.g. 07398 926226" required style="width: 100%; padding: 12px 16px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; outline: none;" />
        </div>
    </div>
</div>
