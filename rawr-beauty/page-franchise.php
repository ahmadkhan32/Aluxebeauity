<?php
/**
 * Template Name: Franchise Concessions
 *
 * @package Ayesha_Luxe_Beauty
 */

get_header();
?>

<main id="primary" class="site-main franchise-page">
    <?php get_template_part('template-parts/franchise/hero'); ?>
    <div class="rawr-container" style="padding: 70px 24px;">
        <?php get_template_part('template-parts/franchise/business-model'); ?>
        <?php get_template_part('template-parts/franchise/prospectus-form'); ?>
    </div>
</main>

<?php
get_footer();
