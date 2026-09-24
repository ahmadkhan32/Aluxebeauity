<?php
/**
 * Template Name: Salon Packages
 *
 * @package A_Luxe_Beauty
 */

get_header();
?>

<main id="primary" class="site-main packages-page">
    <div class="rawr-container" style="padding: 70px 24px;">
        <header class="entry-header text-center" style="margin-bottom: 40px;">
            <h1 class="entry-title rawr-title"><?php esc_html_e('Curated Salon Packages', 'rawr-beauty'); ?></h1>
            <p style="color: var(--color-gray);"><?php esc_html_e('Save up to 30% with our bundled beauty treatments and pamper days.', 'rawr-beauty'); ?></p>
        </header>
        <?php get_template_part('template-parts/home/special-offers'); ?>
    </div>
</main>

<?php
get_footer();
