<?php
/**
 * Instagram Feed & Social Proof
 *
 * @package RAWR_Beauty
 */
$insta_tags = array('#RAWRBeauty', '#BrowGoals', '#HydraGlow', '#LaserSmooth', '#BridalLuxe', '#DoorstepBeauty');
?>
<section class="rawr-section rawr-instagram-section" style="background: var(--color-bg-alt);">
    <div class="rawr-container">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Follow Our Story', 'rawr-beauty'); ?></span>
            <h2 class="rawr-title"><?php esc_html_e('Join Our Community On Instagram', 'rawr-beauty'); ?></h2>
            <p class="rawr-subtitle">
                <a href="https://instagram.com/ayesha.luxe.beauty" target="_blank" rel="noopener noreferrer" style="color: var(--color-secondary-dark); font-weight: 700;">
                    📷 @rawrbeauty.official &nbsp;|&nbsp; @ayesha.luxe.beauty
                </a>
            </p>
        </div>

        <div class="rawr-insta-grid">
            <?php foreach ($insta_tags as $tag) : ?>
                <div class="rawr-insta-item">
                    <span class="insta-icon">📷</span>
                    <span class="insta-tag"><?php echo esc_html($tag); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
