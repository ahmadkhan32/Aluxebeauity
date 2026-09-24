<?php
/**
 * The template for displaying all single posts
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="rawr-container" style="padding: 70px 24px; max-width: 860px;">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('rawr-single-post'); ?>>
                <header class="entry-header" style="margin-bottom: 30px;">
                    <div style="font-size: 13px; color: var(--color-secondary-dark); font-weight: 700; text-transform: uppercase; margin-bottom: 12px;">
                        <?php the_category(', '); ?>
                    </div>
                    <h1 class="entry-title rawr-title" style="font-size: clamp(2rem, 3.5vw, 2.8rem); line-height: 1.25; margin-bottom: 16px;">
                        <?php the_title(); ?>
                    </h1>
                    <div style="font-size: 13px; color: var(--color-text-muted);">
                        <span><?php echo esc_html__('By', 'rawr-beauty') . ' ' . get_the_author(); ?></span>
                        <span> · </span>
                        <span><?php echo get_the_date(); ?></span>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail" style="margin-bottom: 36px; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-card);">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content rawr-typography" style="font-size: 16px; line-height: 1.8; color: var(--color-primary);">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer" style="margin-top: 50px; padding-top: 24px; border-top: 1px solid var(--color-border); display: flex; justify-content: space-between; align-items: center;">
                    <div class="post-tags">
                        <?php the_tags('<span class="tag-title">' . esc_html__('Tags:', 'rawr-beauty') . '</span> ', ', '); ?>
                    </div>
                    <div>
                        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="rawr-btn rawr-btn-outline rawr-btn-sm">
                            &larr; <?php esc_html_e('All Articles', 'rawr-beauty'); ?>
                        </a>
                    </div>
                </footer>
            </article>

            <?php
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
