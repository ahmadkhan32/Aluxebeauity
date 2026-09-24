<?php
/**
 * Franchise Application Form
 *
 * @package RAWR_Beauty
 */
?>
<section id="apply" class="rawr-section" style="padding: 60px 0; background: var(--color-bg-alt);">
    <div class="rawr-container" style="max-width: 760px;">
        <div style="background: white; border-radius: 24px; padding: 40px; border: 1px solid var(--color-border); box-shadow: var(--shadow-card);">
            <div class="text-center" style="margin-bottom: 30px;">
                <span class="rawr-badge"><?php esc_html_e('Confidential Inquiry', 'rawr-beauty'); ?></span>
                <h2 class="rawr-title" style="font-size: 28px; margin-top: 8px;"><?php esc_html_e('Apply For A Franchise Territory', 'rawr-beauty'); ?></h2>
                <p style="color: var(--color-text-muted); font-size: 14px;"><?php esc_html_e('Submit your preferred location and our team will get in touch within 24 hours.', 'rawr-beauty'); ?></p>
            </div>

            <form id="rawr-franchise-form" style="display: flex; flex-direction: column; gap: 18px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div>
                        <label style="display: block; font-size: 12px; font-weight: 700; margin-bottom: 6px;"><?php esc_html_e('Full Name *', 'rawr-beauty'); ?></label>
                        <input type="text" name="name" required class="rawr-input" />
                    </div>
                    <div>
                        <label style="display: block; font-size: 12px; font-weight: 700; margin-bottom: 6px;"><?php esc_html_e('Phone Number *', 'rawr-beauty'); ?></label>
                        <input type="tel" name="phone" required class="rawr-input" />
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div>
                        <label style="display: block; font-size: 12px; font-weight: 700; margin-bottom: 6px;"><?php esc_html_e('Email Address *', 'rawr-beauty'); ?></label>
                        <input type="email" name="email" required class="rawr-input" />
                    </div>
                    <div>
                        <label style="display: block; font-size: 12px; font-weight: 700; margin-bottom: 6px;"><?php esc_html_e('Target City / Postal Region *', 'rawr-beauty'); ?></label>
                        <input type="text" name="city" required class="rawr-input" />
                    </div>
                </div>

                <div>
                    <label style="display: block; font-size: 12px; font-weight: 700; margin-bottom: 6px;"><?php esc_html_e('Preferred Franchise Model', 'rawr-beauty'); ?></label>
                    <select name="tier" class="rawr-input">
                        <option value="mobile"><?php esc_html_e('Mobile Doorstep Territory (Low Capital)', 'rawr-beauty'); ?></option>
                        <option value="salon"><?php esc_html_e('Salon Suite / Boutique Studio Partner', 'rawr-beauty'); ?></option>
                    </select>
                </div>

                <div>
                    <label style="display: block; font-size: 12px; font-weight: 700; margin-bottom: 6px;"><?php esc_html_e('Background & Liquid Capital Available', 'rawr-beauty'); ?></label>
                    <textarea name="notes" rows="3" class="rawr-input" placeholder="<?php esc_attr_e('Briefly share your business or salon experience...', 'rawr-beauty'); ?>"></textarea>
                </div>

                <button type="submit" class="rawr-btn rawr-btn-primary" style="margin-top: 10px;">
                    <?php esc_html_e('Submit Franchise Application', 'rawr-beauty'); ?>
                </button>
            </form>
        </div>
    </div>
</section>
