<?php
/**
 * Template Name: Rawr Education
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main education-page">
    <div class="rawr-container" style="padding: 80px 24px;">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Accredited Beauty Diplomas', 'rawr-beauty'); ?></span>
            <h1 class="rawr-title"><?php esc_html_e('RAWR Beauty Education', 'rawr-beauty'); ?></h1>
            <p class="rawr-subtitle"><?php esc_html_e('Become an accredited brow artist, eyelash specialist, or skin aesthetician with our certified vocational courses.', 'rawr-beauty'); ?></p>
        </div>
        <?php get_template_part('template-parts/academy/courses'); ?>
        <?php get_template_part('template-parts/academy/enquiry'); ?>
    </div>
</main>

<?php
get_footer();
