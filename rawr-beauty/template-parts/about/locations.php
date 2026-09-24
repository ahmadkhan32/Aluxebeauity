<?php
/**
 * About Page Locations Overview
 *
 * @package RAWR_Beauty
 */
?>
<section class="rawr-section" style="padding: 40px 0; background: var(--color-bg-alt);">
    <div class="rawr-container text-center">
        <span class="rawr-badge"><?php esc_html_e('Nationwide Presence', 'rawr-beauty'); ?></span>
        <h2 class="rawr-title"><?php esc_html_e('26 UK Locations & Growing', 'rawr-beauty'); ?></h2>
        <p class="rawr-subtitle" style="margin-bottom: 30px;">
            <?php esc_html_e('From London and Manchester to Colchester and Norwich, our salons bring high-end beauty to prime retail centres and client homes.', 'rawr-beauty'); ?>
        </p>
        <a href="<?php echo esc_url(home_url('/locations')); ?>" class="rawr-btn rawr-btn-primary">
            <?php esc_html_e('Explore All Locations &rarr;', 'rawr-beauty'); ?>
        </a>
    </div>
</section>
