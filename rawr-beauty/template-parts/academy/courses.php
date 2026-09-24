<?php
/**
 * Academy Courses Grid
 *
 * @package RAWR_Beauty
 */
$courses = array(
    array('title' => 'Master Brow Artist & Threading Diploma', 'duration' => '2 Days Intensive', 'price' => '£395', 'level' => 'Accredited Certificate', 'desc' => 'Comprehensive eyebrow mapping, threading, tinting, and brow lamination on live models.'),
    array('title' => 'Classic & Russian Volume Lash Mastery', 'duration' => '3 Days', 'price' => '£495', 'level' => 'Accredited Certificate', 'desc' => 'Safe isolation, adhesive chemistry, custom fan creation, infills and removal techniques.'),
    array('title' => 'Hydra Glow & Advanced Facials', 'duration' => '2 Days', 'price' => '£550', 'level' => 'CPD Certified', 'desc' => 'Deep dermabrasion protocols, vacuum pore extractions, serum infusions, and aftercare management.'),
    array('title' => 'Laser Hair Removal Core Principles', 'duration' => '4 Days', 'price' => '£850', 'level' => 'NVQ Level 4 Equivalent', 'desc' => 'Skin Fitzpatrick typing, laser safety officer fundamentals, contraindications, and machine operations.'),
);
?>
<section id="courses" class="rawr-section" style="padding: 60px 0;">
    <div class="rawr-container">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Upcoming Courses', 'rawr-beauty'); ?></span>
            <h2 class="rawr-title"><?php esc_html_e('Vocational Training Programs', 'rawr-beauty'); ?></h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 28px;">
            <?php foreach ($courses as $c) : ?>
                <div style="background: white; border-radius: 20px; padding: 32px; border: 1px solid var(--color-border); box-shadow: var(--shadow-card); display: flex; flex-direction: column;">
                    <span style="font-size: 11px; font-weight: 800; color: var(--color-secondary-dark); background: var(--color-bg-alt); padding: 4px 10px; border-radius: 12px; align-self: flex-start; margin-bottom: 12px;"><?php echo esc_html($c['level']); ?></span>
                    <h3 style="font-family: var(--font-serif); font-size: 22px; margin-bottom: 12px; color: var(--color-primary);"><?php echo esc_html($c['title']); ?></h3>
                    <p style="font-size: 13px; color: var(--color-text-muted); line-height: 1.6; margin-bottom: 20px; flex-grow: 1;"><?php echo esc_html($c['desc']); ?></p>
                    <div style="display: flex; justify-content: space-between; align-items: baseline; padding-top: 16px; border-top: 1px solid var(--color-border); margin-bottom: 20px;">
                        <span style="font-size: 13px; color: var(--color-text-muted);"><?php echo esc_html($c['duration']); ?></span>
                        <span style="font-family: var(--font-serif); font-size: 24px; font-weight: 700; color: var(--color-primary);"><?php echo esc_html($c['price']); ?></span>
                    </div>
                    <a href="<?php echo esc_url(rawr_whatsapp_url('Hi! I want to enroll in the ' . $c['title'] . ' course.')); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-primary rawr-btn-sm" style="width: 100%; text-align: center;">
                        <?php esc_html_e('Enrol via WhatsApp', 'rawr-beauty'); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
