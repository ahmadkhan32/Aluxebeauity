<?php
/**
 * The template for displaying archive pages
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="rawr-container" style="padding: 70px 24px;">
        <header class="rawr-page-header text-center" style="margin-bottom: 50px;">
            <?php
            the_archive_title('<h1 class="rawr-page-title rawr-title">', '</h1>');
            the_archive_description('<div class="archive-description" style="color: var(--color-text-muted); max-width: 600px; margin: 12px auto 0;">', '</div>');
            ?>
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

            <div style="margin-top: 50px; text-align: center;">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p style="text-align: center; color: var(--color-text-muted);"><?php esc_html_e('No posts found in this archive.', 'rawr-beauty'); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
