<?php
/**
 * Vacancy Grid for Careers Page
 *
 * @package RAWR_Beauty
 */
$vacancies = array(
    array('title' => 'Eyelash Technician', 'location' => 'Windsor Royal Station', 'type' => 'Full-Time / Part-Time', 'rate' => '£18 - £28 / hr + tips', 'desc' => 'Perform classic and volume lash extensions with precision and speed in our Windsor salon.'),
    array('title' => 'Beauty Therapist', 'location' => 'Norwich Castle Quarter', 'type' => 'Part-Time', 'rate' => '£16 - £24 / hr', 'desc' => 'Deliver eyebrow threading, face waxing, and glowing facials with gentle care and high hygiene.'),
    array('title' => 'Nail Technician', 'location' => 'Norwich / Colchester', 'type' => 'Full-Time', 'rate' => '£15 - £22 / hr', 'desc' => 'Skilled in gel manicures, luxury pedicures, builder gel overlays and client consultation.'),
    array('title' => 'Dual Site Salon Manager', 'location' => 'London Oxford St & West End', 'type' => 'Full-Time', 'rate' => '£32k - £42k / year + bonus', 'desc' => 'Lead therapist teams across 2 flagship central retail salon suites, managing inventory and rota scheduling.'),
);
?>
<section id="vacancies" class="rawr-section" style="padding: 60px 0;">
    <div class="rawr-container">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Immediate Openings', 'rawr-beauty'); ?></span>
            <h2 class="rawr-title"><?php esc_html_e('Current Job Opportunities', 'rawr-beauty'); ?></h2>
        </div>

        <div style="display: flex; flex-direction: column; gap: 20px; max-width: 900px; margin: 0 auto 50px;">
            <?php foreach ($vacancies as $v) : ?>
                <div style="background: white; border-radius: 16px; padding: 30px; border: 1px solid var(--color-border); box-shadow: var(--shadow-card); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
                    <div>
                        <span style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: var(--color-secondary-dark);">📍 <?php echo esc_html($v['location']); ?> · <?php echo esc_html($v['type']); ?></span>
                        <h3 style="font-family: var(--font-serif); font-size: 22px; margin: 6px 0; color: var(--color-primary);"><?php echo esc_html($v['title']); ?></h3>
                        <p style="font-size: 13px; color: var(--color-text-muted); max-width: 550px;"><?php echo esc_html($v['desc']); ?></p>
                        <span style="display: inline-block; margin-top: 8px; font-weight: 700; color: var(--color-accent-green); font-size: 13px;"><?php echo esc_html($v['rate']); ?></span>
                    </div>
                    <a href="<?php echo esc_url(rawr_whatsapp_url('Hi! I want to apply for the position: ' . $v['title'] . ' (' . $v['location'] . ')')); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-whatsapp rawr-btn-sm">
                        💬 <?php esc_html_e('Apply via WhatsApp', 'rawr-beauty'); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
