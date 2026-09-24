<?php
/**
 * Template Name: Franchise Opportunity
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main franchise-page">
    <?php get_template_part('template-parts/franchise/hero'); ?>
    <div class="rawr-container" style="padding: 70px 24px;">
        <?php get_template_part('template-parts/franchise/benefits'); ?>
        <?php get_template_part('template-parts/franchise/revenue-streams'); ?>
        <?php get_template_part('template-parts/franchise/support'); ?>
        <?php get_template_part('template-parts/franchise/application-form'); ?>
        <?php get_template_part('template-parts/franchise/blog'); ?>
    </div>
</main>

<?php
get_footer();
