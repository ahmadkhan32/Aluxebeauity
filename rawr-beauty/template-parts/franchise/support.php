<?php
/**
 * Franchise Support Section
 *
 * @package RAWR_Beauty
 */
?>
<section class="rawr-section" style="padding: 60px 0;">
    <div class="rawr-container">
        <div style="background: white; border-radius: 24px; padding: 50px 40px; border: 1px solid var(--color-border); box-shadow: var(--shadow-card); display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
            <div>
                <span class="rawr-badge"><?php esc_html_e('End-to-End Partnership', 'rawr-beauty'); ?></span>
                <h2 class="rawr-title" style="font-size: 32px; margin: 12px 0 20px;">
                    <?php esc_html_e('We Guide You At Every Step', 'rawr-beauty'); ?>
                </h2>
                <p style="color: var(--color-text-muted); font-size: 15px; line-height: 1.7; margin-bottom: 20px;">
                    <?php esc_html_e('You never walk alone. From site selection and architectural design to hiring top therapists and launching digital marketing blitzes, our executive team is by your side.', 'rawr-beauty'); ?>
                </p>
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <div style="display: flex; gap: 10px; font-size: 14px;"><strong>✓ Location Scouting:</strong> Retail mall negotiations and lease reviews.</div>
                    <div style="display: flex; gap: 10px; font-size: 14px;"><strong>✓ Fit-Out & Machines:</strong> Certified laser machines, styling chairs and signage.</div>
                    <div style="display: flex; gap: 10px; font-size: 14px;"><strong>✓ Ongoing Mentorship:</strong> Weekly KPI check-ins and revenue optimization.</div>
                </div>
            </div>
            <div style="background: var(--color-bg-alt); padding: 40px; border-radius: 20px; text-align: center;">
                <span style="font-size: 48px; display: block; margin-bottom: 16px;">🤝</span>
                <h3 style="font-family: var(--font-serif); font-size: 24px; margin-bottom: 12px; color: var(--color-primary);">
                    <?php esc_html_e('Have Questions About Capital or Territories?', 'rawr-beauty'); ?>
                </h3>
                <p style="color: var(--color-text-muted); font-size: 14px; margin-bottom: 24px;">
                    <?php esc_html_e('Speak confidentially with our Founder and Franchise Director on WhatsApp.', 'rawr-beauty'); ?>
                </p>
                <a href="<?php echo esc_url(rawr_whatsapp_url('Hi A Luxe! I would like to schedule an intro call regarding the RAWR franchise.')); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-whatsapp" style="width: 100%; text-align: center;">
                    💬 <?php esc_html_e('Schedule WhatsApp Intro Call', 'rawr-beauty'); ?>
                </a>
            </div>
        </div>
    </div>
</section>
