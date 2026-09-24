<?php
/**
 * Services Details / Packages Callout
 *
 * @package RAWR_Beauty
 */
?>
<div class="rawr-service-packages-banner" style="background: linear-gradient(135deg, var(--color-primary), #2A2A48); border-radius: 24px; padding: 40px; color: white; margin-top: 40px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 24px;">
    <div>
        <span style="color: var(--color-secondary-light); font-size: 12px; font-weight: 700; text-transform: uppercase;"><?php esc_html_e('Custom Care & Bridal Sessions', 'rawr-beauty'); ?></span>
        <h2 style="font-family: var(--font-serif); font-size: 28px; margin: 8px 0;"><?php esc_html_e('Looking For Bundled Beauty Packages?', 'rawr-beauty'); ?></h2>
        <p style="color: rgba(255,255,255,0.8); font-size: 14px; max-width: 600px;">
            <?php esc_html_e('Bundle your favourite treatments together to save up to £20! Available in all salon branches and through our complimentary mobile home service.', 'rawr-beauty'); ?>
        </p>
    </div>
    <a href="<?php echo esc_url(home_url('/booking')); ?>" class="rawr-btn rawr-btn-primary rawr-btn-lg">
        <?php esc_html_e('View Package Deals &rarr;', 'rawr-beauty'); ?>
    </a>
</div>
