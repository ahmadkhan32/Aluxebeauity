<?php
/**
 * Template Name: Checkout Page
 *
 * @package A_Luxe_Beauty
 */

get_header();
?>

<div class="rawr-checkout-page" style="background:#F8F7F4; min-height:80vh; padding:50px 0;">
    <div class="rawr-container">
        <div style="text-align:center; margin-bottom:40px;">
            <span style="font-size:11px; font-weight:800; letter-spacing:2px; text-transform:uppercase; color:#C9A84C; background:#FDF8EE; padding:4px 14px; border-radius:20px; border:1px solid rgba(201,168,76,0.3);">
                <?php esc_html_e('🔒 256-Bit SSL Encrypted Checkout', 'rawr-beauty'); ?>
            </span>
            <h1 style="font-family:'Cormorant Garamond', serif; font-size:2.8rem; margin:10px 0 6px; color:#1A1A2E;">
                <?php esc_html_e('Complete Your Order', 'rawr-beauty'); ?>
            </h1>
            <p style="color:#6C6C80; font-size:14px;">
                <?php esc_html_e('Fast UK Tracked Shipping across England, Scotland, Wales & Northern Ireland', 'rawr-beauty'); ?>
            </p>
        </div>

        <div style="display:grid; grid-template-columns:1.4fr 1fr; gap:36px; align-items:flex-start;">
            <!-- Checkout Form -->
            <div style="background:#fff; border-radius:18px; padding:30px; border:1px solid rgba(201,168,76,0.2); box-shadow:0 4px 15px rgba(0,0,0,0.06);">
                <form id="wpCheckoutForm" method="post" action="">
                    <h3 style="font-family:'Cormorant Garamond', serif; font-size:1.4rem; margin-bottom:18px; color:#1A1A2E; border-bottom:1px solid #ECECF2; padding-bottom:10px;">
                        <?php esc_html_e('1. Delivery Information', 'rawr-beauty'); ?>
                    </h3>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:16px;">
                        <div>
                            <label style="display:block; font-size:12px; font-weight:700; margin-bottom:4px;"><?php esc_html_e('First Name', 'rawr-beauty'); ?> *</label>
                            <input type="text" name="billing_first_name" required style="width:100%; padding:10px; border:1px solid #D5D5E2; border-radius:8px;">
                        </div>
                        <div>
                            <label style="display:block; font-size:12px; font-weight:700; margin-bottom:4px;"><?php esc_html_e('Last Name', 'rawr-beauty'); ?> *</label>
                            <input type="text" name="billing_last_name" required style="width:100%; padding:10px; border:1px solid #D5D5E2; border-radius:8px;">
                        </div>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:16px;">
                        <div>
                            <label style="display:block; font-size:12px; font-weight:700; margin-bottom:4px;"><?php esc_html_e('Email Address', 'rawr-beauty'); ?> *</label>
                            <input type="email" name="billing_email" required style="width:100%; padding:10px; border:1px solid #D5D5E2; border-radius:8px;">
                        </div>
                        <div>
                            <label style="display:block; font-size:12px; font-weight:700; margin-bottom:4px;"><?php esc_html_e('Phone / WhatsApp', 'rawr-beauty'); ?> *</label>
                            <input type="tel" name="billing_phone" required style="width:100%; padding:10px; border:1px solid #D5D5E2; border-radius:8px;">
                        </div>
                    </div>

                    <div style="margin-bottom:16px;">
                        <label style="display:block; font-size:12px; font-weight:700; margin-bottom:4px;"><?php esc_html_e('Street Address', 'rawr-beauty'); ?> *</label>
                        <input type="text" name="billing_address_1" placeholder="House number and street" required style="width:100%; padding:10px; border:1px solid #D5D5E2; border-radius:8px;">
                    </div>

                    <!-- Dependent UK Country & City Dropdowns -->
                    <?php get_template_part('template-parts/quick-buy/city'); ?>

                    <div style="margin-bottom:16px;">
                        <label style="display:block; font-size:12px; font-weight:700; margin-bottom:4px;"><?php esc_html_e('UK Postcode', 'rawr-beauty'); ?> *</label>
                        <input type="text" name="billing_postcode" placeholder="e.g. W1D 1BS" required style="width:100%; padding:10px; border:1px solid #D5D5E2; border-radius:8px; text-transform:uppercase;">
                    </div>

                    <h3 style="font-family:'Cormorant Garamond', serif; font-size:1.4rem; margin:24px 0 16px; color:#1A1A2E; border-bottom:1px solid #ECECF2; padding-bottom:10px;">
                        <?php esc_html_e('2. Payment Options', 'rawr-beauty'); ?>
                    </h3>

                    <div style="margin-bottom:20px; display:flex; flex-direction:column; gap:10px;">
                        <label style="display:flex; align-items:center; gap:10px; border:1px solid #C9A84C; background:#FDF8EE; padding:12px; border-radius:8px; cursor:pointer;">
                            <input type="radio" name="payment_method" value="card" checked>
                            <strong>💳 <?php esc_html_e('Debit / Credit Card (Instant Online Payment)', 'rawr-beauty'); ?></strong>
                        </label>
                        <label style="display:flex; align-items:center; gap:10px; border:1px solid #E8E8F0; padding:12px; border-radius:8px; cursor:pointer;">
                            <input type="radio" name="payment_method" value="whatsapp">
                            <strong>💬 <?php esc_html_e('Instant WhatsApp Concierge Order', 'rawr-beauty'); ?></strong>
                        </label>
                    </div>

                    <button type="submit" class="rawr-btn rawr-btn-primary" style="width:100%; padding:14px; border-radius:50px; font-weight:800; cursor:pointer; font-size:15px;">
                        🔒 <?php esc_html_e('PLACE ORDER NOW', 'rawr-beauty'); ?>
                    </button>
                </form>
            </div>

            <!-- Order Summary Column -->
            <div style="background:#fff; border-radius:18px; padding:30px; border:1px solid rgba(201,168,76,0.2); box-shadow:0 4px 15px rgba(0,0,0,0.06); position:sticky; top:90px;">
                <h3 style="font-family:'Cormorant Garamond', serif; font-size:1.4rem; margin-bottom:18px; color:#1A1A2E; border-bottom:1px solid #ECECF2; padding-bottom:10px;">
                    <?php esc_html_e('Order Summary', 'rawr-beauty'); ?>
                </h3>

                <div style="background:#FDF8EE; border:1px solid rgba(201,168,76,0.3); border-radius:8px; padding:10px; text-align:center; font-size:12px; color:#A8862E; margin-bottom:16px;">
                    🚚 <?php esc_html_e('FREE UK Tracked Delivery on orders over £40', 'rawr-beauty'); ?>
                </div>

                <div style="display:flex; justify-content:space-between; margin-bottom:10px; font-size:13px;">
                    <span><?php esc_html_e('Subtotal:', 'rawr-beauty'); ?></span>
                    <strong id="wpSubtotal">£45.00</strong>
                </div>
                <div style="display:flex; justify-content:space-between; margin-bottom:10px; font-size:13px;">
                    <span><?php esc_html_e('UK Tracked Delivery:', 'rawr-beauty'); ?></span>
                    <strong style="color:#2E7D32;"><?php esc_html_e('FREE', 'rawr-beauty'); ?></strong>
                </div>
                <div style="display:flex; justify-content:space-between; padding-top:12px; border-top:1px solid #ECECF2; font-size:1.2rem; font-weight:800; color:#1A1A2E; margin-bottom:20px;">
                    <span><?php esc_html_e('Total:', 'rawr-beauty'); ?></span>
                    <span style="color:#C9A84C;">£45.00</span>
                </div>

                <a href="<?php echo esc_url(rawr_whatsapp_url()); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-whatsapp" style="width:100%; display:block; text-align:center; padding:12px; border-radius:50px; font-weight:700;">
                    💬 <?php esc_html_e('Instant WhatsApp Order', 'rawr-beauty'); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
