<?php
/**
 * Blog Card Template Part
 *
 * @package RAWR_Beauty
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('rawr-post-card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <div class="post-card-thumb" style="margin-bottom: 16px; border-radius: 12px; overflow: hidden;">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('rawr-card'); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="post-card-meta">
        <span class="post-card-tag"><?php the_category(', '); ?></span>
        <span class="post-card-time"><?php echo get_the_date(); ?></span>
    </div>

    <h3 class="post-card-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>

    <p class="post-card-excerpt">
        <?php echo wp_trim_words(get_the_excerpt(), 22); ?>
    </p>

    <a href="<?php the_permalink(); ?>" class="post-card-link">
        <?php esc_html_e('Read Article &rarr;', 'rawr-beauty'); ?>
    </a>
</article>
