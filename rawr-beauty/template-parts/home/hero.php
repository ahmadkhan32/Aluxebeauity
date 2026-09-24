<?php
/**
 * Homepage Hero Section
 *
 * @package RAWR_Beauty
 */
?>
<section class="rawr-hero-section">
    <div class="rawr-container">
        <div class="rawr-hero-grid">
            <!-- Left Headline & CTAs -->
            <div class="rawr-hero-content">
                <span class="rawr-badge"><?php esc_html_e('The UK’s Leading Beauty Bar & Doorstep Service', 'rawr-beauty'); ?></span>
                <h1 class="rawr-hero-title">
                    <?php esc_html_e('Enhance Your Beauty,', 'rawr-beauty'); ?> <br>
                    <span><?php esc_html_e('Embrace Your Glow.', 'rawr-beauty'); ?></span>
                </h1>
                <p class="rawr-hero-description">
                    <?php esc_html_e('Experience award-winning brow shaping, lash artistry, radiant Hydra Facials, and painless laser hair removal in our 26+ salon suites or delivered straight to your door.', 'rawr-beauty'); ?>
                </p>

                <div class="rawr-hero-actions">
                    <a href="<?php echo esc_url(home_url('/booking')); ?>" class="rawr-btn rawr-btn-primary rawr-btn-lg">
                        ✨ <?php esc_html_e('Book Appointment', 'rawr-beauty'); ?>
                    </a>
                    <a href="#location-finder" class="rawr-btn rawr-btn-outline rawr-btn-lg">
                        📍 <?php esc_html_e('Find Nearest Salon', 'rawr-beauty'); ?>
                    </a>
                </div>

                <div class="rawr-hero-perks">
                    <div class="rawr-perk-item">
                        <span class="rawr-perk-icon">🚗</span>
                        <span><?php esc_html_e('Free Home Service ≤ 2 Miles', 'rawr-beauty'); ?></span>
                    </div>
                    <div class="rawr-perk-item">
                        <span class="rawr-perk-icon">★</span>
                        <span><?php esc_html_e('5.0 Rated (500+ Reviews)', 'rawr-beauty'); ?></span>
                    </div>
                    <div class="rawr-perk-item">
                        <span class="rawr-perk-icon">🛡️</span>
                        <span><?php esc_html_e('Hospital-Grade Hygiene', 'rawr-beauty'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Right Visual Cards Stack -->
            <div class="rawr-hero-visual">
                <div class="rawr-floating-card card-glow">
                    <span class="card-icon">👑</span>
                    <div class="card-body">
                        <strong><?php esc_html_e('Hydra Glow Facial', 'rawr-beauty'); ?></strong>
                        <span><?php esc_html_e('From £60 · Deep hydration therapy', 'rawr-beauty'); ?></span>
                    </div>
                </div>

                <div class="rawr-floating-card card-lash">
                    <span class="card-icon">👁️</span>
                    <div class="card-body">
                        <strong><?php esc_html_e('Lashes & Brows', 'rawr-beauty'); ?></strong>
                        <span><?php esc_html_e('Threading £5 · Lashes from £45', 'rawr-beauty'); ?></span>
                    </div>
                </div>

                <div class="rawr-floating-card card-laser">
                    <span class="card-icon">⚡</span>
                    <div class="card-body">
                        <strong><?php esc_html_e('Laser Hair Removal', 'rawr-beauty'); ?></strong>
                        <span><?php esc_html_e('Save up to £200 on 10-session courses', 'rawr-beauty'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
