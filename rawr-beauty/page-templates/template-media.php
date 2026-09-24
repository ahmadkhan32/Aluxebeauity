<?php
/**
 * Template Name: Media & Press
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main media-page">
    <div class="rawr-container" style="padding: 80px 24px;">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Press & Editorial Highlights', 'rawr-beauty'); ?></span>
            <h1 class="rawr-title"><?php esc_html_e('In The News & Media', 'rawr-beauty'); ?></h1>
            <p class="rawr-subtitle"><?php esc_html_e('Read our latest beauty features in Vogue, Cosmopolitan, Glamour and industry publications.', 'rawr-beauty'); ?></p>
        </div>
        <?php get_template_part('template-parts/press/press-grid'); ?>
    </div>
</main>

<?php
get_footer();
