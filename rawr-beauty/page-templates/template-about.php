<?php
/**
 * Template Name: About RAWR Beauty
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main about-page">
    <?php get_template_part('template-parts/about/intro'); ?>
    <?php get_template_part('template-parts/about/mission'); ?>
    <?php get_template_part('template-parts/about/customers'); ?>
    <?php get_template_part('template-parts/about/locations'); ?>
    <?php get_template_part('template-parts/about/academy'); ?>
    <?php get_template_part('template-parts/about/shop'); ?>
</main>

<?php
get_footer();
