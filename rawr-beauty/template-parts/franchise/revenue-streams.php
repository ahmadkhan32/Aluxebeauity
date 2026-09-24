<?php
/**
 * Franchise Revenue Streams Section
 *
 * @package RAWR_Beauty
 */
$streams = array(
    array('title' => 'In-Salon Beauty Treatments', 'share' => '45% of Revenue', 'desc' => 'High frequency brow threading, lash lifts, gel nails and regular grooming sessions.'),
    array('title' => 'Laser Hair Removal Packages', 'share' => '25% of Revenue', 'desc' => 'High ticket course packages (£400–£1,000) delivering immediate upfront cashflow.'),
    array('title' => 'Doorstep Mobile Therapy', 'share' => '15% of Revenue', 'desc' => 'Zero-overhead mobile appointments within 2 miles for mothers, professionals, and bridal parties.'),
    array('title' => 'Retail Skincare & Kits', 'share' => '15% of Revenue', 'desc' => 'High margin aftercare sales with recurring client purchases and gift vouchers.'),
);
?>
<section class="rawr-section" style="padding: 60px 0; background: var(--color-bg-alt);">
    <div class="rawr-container">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Financial Architecture', 'rawr-beauty'); ?></span>
            <h2 class="rawr-title"><?php esc_html_e('Multiple Diverse Revenue Streams', 'rawr-beauty'); ?></h2>
            <p class="rawr-subtitle"><?php esc_html_e('A balanced revenue model designed for resilience, steady daily cashflow, and high client lifetime value.', 'rawr-beauty'); ?></p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
            <?php foreach ($streams as $s) : ?>
                <div style="background: white; border-radius: 20px; padding: 32px 24px; border: 1px solid var(--color-border); box-shadow: var(--shadow-card);">
                    <span style="font-size: 11px; font-weight: 800; color: var(--color-secondary-dark); text-transform: uppercase; background: var(--color-bg-alt); padding: 4px 10px; border-radius: 12px; display: inline-block; margin-bottom: 12px;"><?php echo esc_html($s['share']); ?></span>
                    <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 8px; color: var(--color-primary);"><?php echo esc_html($s['title']); ?></h3>
                    <p style="font-size: 13px; color: var(--color-text-muted); line-height: 1.6;"><?php echo esc_html($s['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
