<?php
/**
 * Checkout Payment Method Selection Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-payment-methods" style="background: #fff; border-radius: 12px; padding: 24px; border: 1px solid #ECECF2; margin-bottom: 24px;">
    <h3 style="font-size: 1.25rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 18px;">
        3. <?php esc_html_e( 'Payment Method', 'rawr-beauty' ); ?>
    </h3>

    <div style="display: flex; flex-direction: column; gap: 12px;">
        <label style="display: flex; align-items: center; gap: 12px; padding: 14px; border: 1px solid #C9A84C; background: #FDF8EE; border-radius: 8px; cursor: pointer;">
            <input type="radio" name="payment_method" value="card" checked style="accent-color: #C9A84C;" />
            <span style="font-weight: 700; color: #1A1A2E; font-size: 14px;">Credit / Debit Card (Stripe / Apple Pay)</span>
        </label>
        <label style="display: flex; align-items: center; gap: 12px; padding: 14px; border: 1px solid #D5D5E2; border-radius: 8px; cursor: pointer;">
            <input type="radio" name="payment_method" value="cod" style="accent-color: #C9A84C;" />
            <span style="font-weight: 700; color: #1A1A2E; font-size: 14px;">Pay On Collection / In-Salon</span>
        </label>
    </div>
</div>
