<?php
/**
 * Hiring / Join The Team Section
 *
 * @package RAWR_Beauty
 */
?>
<section class="rawr-section rawr-hiring-section">
    <div class="rawr-container">
        <div class="rawr-hiring-box">
            <div class="rawr-hiring-text">
                <span class="rawr-badge"><?php esc_html_e('We Are Hiring Nationwide', 'rawr-beauty'); ?></span>
                <h2 class="rawr-title"><?php esc_html_e('Join The RAWR Beauty Family', 'rawr-beauty'); ?></h2>
                <p style="color: var(--color-text-muted); font-size: 15px; line-height: 1.7; margin-bottom: 24px;">
                    <?php esc_html_e('Are you a passionate beauty therapist, lash technician, or brow artist? We offer flexible working hours, industry-leading compensation, and accredited training.', 'rawr-beauty'); ?>
                </p>
                <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(home_url('/careers')); ?>" class="rawr-btn rawr-btn-primary">
                        <?php esc_html_e('View Open Vacancies', 'rawr-beauty'); ?>
                    </a>
                    <a href="<?php echo esc_url(rawr_whatsapp_url('Hi! I am interested in beauty therapist vacancies at RAWR.')); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-whatsapp">
                        💬 <?php esc_html_e('Fast Track on WhatsApp', 'rawr-beauty'); ?>
                    </a>
                </div>
            </div>
            <div class="rawr-hiring-stats">
                <div class="hiring-stat-card">
                    <span class="stat-number">£20-35</span>
                    <span class="stat-label">Hourly & Comm. Potential</span>
                </div>
                <div class="hiring-stat-card">
                    <span class="stat-number">26+</span>
                    <span class="stat-label">UK Salon Hubs</span>
                </div>
                <div class="hiring-stat-card">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Product Kit Supplied</span>
                </div>
            </div>
        </div>
    </div>
</section>
