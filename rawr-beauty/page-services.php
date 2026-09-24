<?php
/**
 * Template Name: Salon Services
 *
 * @package Ayesha_Luxe_Beauty
 */

get_header();
?>

<main id="primary" class="site-main services-page">
    <div class="rawr-container" style="padding: 70px 24px;">
        <?php get_template_part('template-parts/services/service-grid'); ?>
        <?php get_template_part('template-parts/services/service-details'); ?>
    </div>
</main>

<?php
get_footer();
