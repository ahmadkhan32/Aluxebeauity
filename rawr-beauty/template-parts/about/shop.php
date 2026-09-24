<?php
/**
 * About Page Shop Highlight
 *
 * @package RAWR_Beauty
 */
?>
<section class="rawr-section" style="padding: 40px 0 80px; background: var(--color-bg-alt);">
    <div class="rawr-container text-center">
        <span class="rawr-badge"><?php esc_html_e('Our Product Formulations', 'rawr-beauty'); ?></span>
        <h2 class="rawr-title"><?php esc_html_e('Cruelty-Free, High-Performance Beauty Store', 'rawr-beauty'); ?></h2>
        <p class="rawr-subtitle" style="margin-bottom: 24px;">
            <?php esc_html_e('Browse our award-winning brow styling kits, soothing wax aftercare serums, and intensive hyaluronic acid skincare.', 'rawr-beauty'); ?>
        </p>
        <a href="<?php echo esc_url(home_url('/shop')); ?>" class="rawr-btn rawr-btn-outline">
            <?php esc_html_e('Visit Online Shop &rarr;', 'rawr-beauty'); ?>
        </a>
    </div>
</section>
