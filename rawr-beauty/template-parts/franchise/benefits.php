<?php
/**
 * Franchise Benefits Section
 *
 * @package RAWR_Beauty
 */
$benefits = array(
    array('icon' => '📈', 'title' => 'Proven Business Model', 'desc' => 'Turnkey operational blueprints developed and refined across 26+ profitable UK salon units.'),
    array('icon' => '🤖', 'title' => 'Automated Lead & Booking Tech', 'desc' => 'Instant WhatsApp booking integrations and local SEO that drive daily treatment appointments into your diary.'),
    array('icon' => '💎', 'title' => 'High Retail Margins', 'desc' => 'Earn 50%+ profit margins on exclusive RAWR Beauty skincare, serums, wax kits, and aftercare formulas.'),
    array('icon' => '🎓', 'title' => 'Full Therapist Training', 'desc' => 'We train your therapists at our central Academy in accredited brow, lash, facial, and laser protocols.'),
);
?>
<section class="rawr-section" style="padding: 60px 0;">
    <div class="rawr-container">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Why Franchise With Us', 'rawr-beauty'); ?></span>
            <h2 class="rawr-title"><?php esc_html_e('Built For Scalable Success', 'rawr-beauty'); ?></h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
            <?php foreach ($benefits as $b) : ?>
                <div style="background: white; border-radius: 20px; padding: 32px 24px; border: 1px solid var(--color-border); box-shadow: var(--shadow-card);">
                    <span style="font-size: 36px; display: block; margin-bottom: 16px;"><?php echo esc_html($b['icon']); ?></span>
                    <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 10px; color: var(--color-primary);"><?php echo esc_html($b['title']); ?></h3>
                    <p style="font-size: 13px; color: var(--color-text-muted); line-height: 1.6;"><?php echo esc_html($b['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
