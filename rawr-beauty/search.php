<?php
/**
 * The template for displaying search results
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="rawr-container" style="padding: 70px 24px;">
        <header class="rawr-page-header text-center" style="margin-bottom: 50px;">
            <h1 class="rawr-page-title rawr-title">
                <?php printf(esc_html__('Search Results for: %s', 'rawr-beauty'), '<span>' . get_search_query() . '</span>'); ?>
            </h1>
        </header>

        <?php if (have_posts()) : ?>
            <div class="rawr-blog-grid">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/blog/blog-card');
                endwhile;
                ?>
            </div>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <div style="text-align: center; max-width: 500px; margin: 0 auto;">
                <p style="margin-bottom: 24px; color: var(--color-text-muted);"><?php esc_html_e('Sorry, nothing matched your search criteria. Please try different keywords.', 'rawr-beauty'); ?></p>
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
