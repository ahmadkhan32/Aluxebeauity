<?php
/**
 * Franchise Page Hero Section
 *
 * @package RAWR_Beauty
 */
?>
<section class="rawr-franchise-hero" style="background: linear-gradient(135deg, var(--color-primary), #16213E); color: white; padding: 100px 0 60px;">
    <div class="rawr-container text-center">
        <span class="rawr-badge-gold"><?php esc_html_e('Franchise Opportunity', 'rawr-beauty'); ?></span>
        <h1 class="rawr-title-light" style="font-size: clamp(2.5rem, 5vw, 4rem); margin: 16px 0;">
            <?php esc_html_e('Own a RAWR Beauty Salon or Territory', 'rawr-beauty'); ?>
        </h1>
        <p class="rawr-text-light" style="max-width: 700px; margin: 0 auto 30px; font-size: 16px; line-height: 1.7;">
            <?php esc_html_e('Join a fast-expanding beauty brand with proven operational models, instant booking lead generation, accredited therapist training, and dedicated HQ marketing support.', 'rawr-beauty'); ?>
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="#apply" class="rawr-btn rawr-btn-primary rawr-btn-lg">
                <?php esc_html_e('Request Prospectus &rarr;', 'rawr-beauty'); ?>
            </a>
            <a href="<?php echo esc_url(rawr_whatsapp_url('Hi! I would like to enquire about RAWR Beauty franchise opportunities.')); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-whatsapp rawr-btn-lg">
                💬 <?php esc_html_e('Chat with Franchise Director', 'rawr-beauty'); ?>
            </a>
        </div>
    </div>
</section>
