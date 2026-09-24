<?php
/**
 * About Page Academy Highlight
 *
 * @package RAWR_Beauty
 */
?>
<section class="rawr-section" style="padding: 40px 0;">
    <div class="rawr-container">
        <div style="background: linear-gradient(135deg, var(--color-primary), #16213E); border-radius: 24px; padding: 50px 40px; color: white; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 30px;">
            <div>
                <span class="rawr-badge-gold"><?php esc_html_e('Education & Excellence', 'rawr-beauty'); ?></span>
                <h2 style="font-family: var(--font-serif); font-size: 32px; color: white; margin: 10px 0;">
                    <?php esc_html_e('RAWR Beauty Training Academy', 'rawr-beauty'); ?>
                </h2>
                <p style="color: rgba(255,255,255,0.8); font-size: 15px; max-width: 600px; line-height: 1.6;">
                    <?php esc_html_e('We invest in the next generation of UK beauty therapists through accredited vocational diplomas, masterclasses in lash artistry, and skin aesthetics training.', 'rawr-beauty'); ?>
                </p>
            </div>
            <a href="<?php echo esc_url(home_url('/training')); ?>" class="rawr-btn rawr-btn-primary rawr-btn-lg">
                <?php esc_html_e('Explore Courses &rarr;', 'rawr-beauty'); ?>
            </a>
        </div>
    </div>
</section>
