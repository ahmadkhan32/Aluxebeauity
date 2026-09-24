<?php
/**
 * Template Name: Locations Directory
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main locations-page">
    <div class="rawr-container" style="padding: 80px 24px;">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('26 UK Branches & Doorstep Beauty', 'rawr-beauty'); ?></span>
            <h1 class="rawr-title"><?php esc_html_e('Our Salon Locations', 'rawr-beauty'); ?></h1>
            <p class="rawr-subtitle"><?php esc_html_e('Find your local RAWR Beauty salon, check real-time opening status, or request free home service within 2 miles.', 'rawr-beauty'); ?></p>
        </div>

        <div id="rawr-location-app"></div>

        <?php get_template_part('template-parts/locations/opening-hours'); ?>
    </div>
</main>

<?php
get_footer();
