<?php
/**
 * Template Name: Training Academy
 *
 * @package Ayesha_Luxe_Beauty
 */

get_header();
?>

<main id="primary" class="site-main academy-page">
    <?php get_template_part('template-parts/academy/hero'); ?>
    <div class="rawr-container" style="padding: 70px 24px;">
        <?php get_template_part('template-parts/academy/courses'); ?>
        <?php get_template_part('template-parts/academy/qualifications'); ?>
        <?php get_template_part('template-parts/academy/enquiry'); ?>
    </div>
</main>

<?php
get_footer();
