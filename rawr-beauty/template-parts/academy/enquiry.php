<?php
/**
 * Academy Course Enquiry Form
 *
 * @package RAWR_Beauty
 */
?>
<section class="rawr-section" style="padding: 60px 0;">
    <div class="rawr-container" style="max-width: 700px;">
        <div style="background: white; border-radius: 20px; padding: 40px; border: 1px solid var(--color-border); box-shadow: var(--shadow-card);">
            <div class="text-center" style="margin-bottom: 24px;">
                <h3 style="font-family: var(--font-serif); font-size: 26px; color: var(--color-primary);"><?php esc_html_e('Course Prospectus & Date Inquiries', 'rawr-beauty'); ?></h3>
                <p style="color: var(--color-text-muted); font-size: 14px;"><?php esc_html_e('Request current intake schedules and kit packages.', 'rawr-beauty'); ?></p>
            </div>
            <form style="display: flex; flex-direction: column; gap: 16px;">
                <input type="text" placeholder="<?php esc_attr_e('Your Name', 'rawr-beauty'); ?>" required class="rawr-input" />
                <input type="tel" placeholder="<?php esc_attr_e('Phone / WhatsApp Number', 'rawr-beauty'); ?>" required class="rawr-input" />
                <select class="rawr-input">
                    <option><?php esc_html_e('Brow & Threading Diploma (£395)', 'rawr-beauty'); ?></option>
                    <option><?php esc_html_e('Lash Mastery (£495)', 'rawr-beauty'); ?></option>
                    <option><?php esc_html_e('Hydra Glow & Advanced Facials (£550)', 'rawr-beauty'); ?></option>
                    <option><?php esc_html_e('Laser Hair Removal Core (£850)', 'rawr-beauty'); ?></option>
                </select>
                <a href="<?php echo esc_url(rawr_whatsapp_url('Hi! I want to request course prospectus dates.')); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-whatsapp" style="text-align: center;">
                    💬 <?php esc_html_e('Inquire on WhatsApp', 'rawr-beauty'); ?>
                </a>
            </form>
        </div>
    </div>
</section>
