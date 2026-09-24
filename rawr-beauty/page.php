<?php
/**
 * The template for displaying all single pages
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="rawr-container" style="padding: 70px 24px; max-width: 900px;">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('rawr-single-page'); ?>>
                <header class="entry-header" style="margin-bottom: 36px; text-align: center;">
                    <h1 class="entry-title rawr-title"><?php the_title(); ?></h1>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail" style="margin-bottom: 30px; border-radius: 16px; overflow: hidden;">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content rawr-typography" style="font-size: 16px; line-height: 1.8; color: var(--color-primary);">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'rawr-beauty'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
