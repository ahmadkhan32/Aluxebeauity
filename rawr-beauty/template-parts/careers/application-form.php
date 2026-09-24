<?php
/**
 * Fast Therapist Application Form
 *
 * @package RAWR_Beauty
 */
?>
<section class="rawr-section" style="padding: 40px 0 80px; background: var(--color-bg-alt);">
    <div class="rawr-container" style="max-width: 680px;">
        <div style="background: white; border-radius: 20px; padding: 40px; border: 1px solid var(--color-border); box-shadow: var(--shadow-card);">
            <div class="text-center" style="margin-bottom: 24px;">
                <h3 style="font-family: var(--font-serif); font-size: 24px; color: var(--color-primary);"><?php esc_html_e('Direct Therapist Application', 'rawr-beauty'); ?></h3>
                <p style="color: var(--color-text-muted); font-size: 14px;"><?php esc_html_e('No CV needed to start. Send a quick message to our recruitment manager.', 'rawr-beauty'); ?></p>
            </div>
            <form style="display: flex; flex-direction: column; gap: 16px;">
                <input type="text" placeholder="<?php esc_attr_e('Your Full Name', 'rawr-beauty'); ?>" required class="rawr-input" />
                <input type="tel" placeholder="<?php esc_attr_e('Phone / WhatsApp Number', 'rawr-beauty'); ?>" required class="rawr-input" />
                <input type="text" placeholder="<?php esc_attr_e('City or Preferred Branch', 'rawr-beauty'); ?>" required class="rawr-input" />
                <textarea rows="3" placeholder="<?php esc_attr_e('Tell us about your treatments and qualifications (Threading, Lashes, Nails, Facials...)', 'rawr-beauty'); ?>" class="rawr-input"></textarea>
                <a href="<?php echo esc_url(rawr_whatsapp_url('Hi! I want to submit my application as a therapist.')); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-primary" style="text-align: center;">
                    💬 <?php esc_html_e('Submit Application via WhatsApp', 'rawr-beauty'); ?>
                </a>
            </form>
        </div>
    </div>
</section>
