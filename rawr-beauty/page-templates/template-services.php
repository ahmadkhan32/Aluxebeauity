<?php
/**
 * Template Name: Services Menu
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main services-page">
    <div class="rawr-container" style="padding: 80px 24px;">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Our Full Treatment Menu', 'rawr-beauty'); ?></span>
            <h1 class="rawr-title"><?php esc_html_e('Signature Beauty Services', 'rawr-beauty'); ?></h1>
            <p class="rawr-subtitle"><?php esc_html_e('From expert brow threading and lash lifts to advanced Hydra Facials and painless laser hair removal.', 'rawr-beauty'); ?></p>
        </div>

        <?php get_template_part('template-parts/services/service-grid'); ?>
        <?php get_template_part('template-parts/services/service-details'); ?>
    </div>
</main>

<?php
get_footer();
