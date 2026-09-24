<?php
/**
 * Template Name: Careers & Hiring
 *
 * @package A_Luxe_Beauty
 */

get_header();
?>

<main id="primary" class="site-main careers-page">
    <?php get_template_part('template-parts/careers/hero'); ?>
    <div class="rawr-container" style="padding: 70px 24px;">
        <?php get_template_part('template-parts/careers/vacancy-grid'); ?>
        <?php get_template_part('template-parts/careers/application-form'); ?>
    </div>
</main>

<?php
get_footer();
