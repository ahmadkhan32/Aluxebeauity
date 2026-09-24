<?php
/**
 * Blog Grid Partial
 *
 * @package RawrBeauty
 */
?>
<div class="rawr-blog-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px;">
    <?php
    $blogs = new WP_Query( array(
        'post_type'      => 'post',
        'posts_per_page' => 9,
    ) );
    if ( $blogs->have_posts() ) :
        while ( $blogs->have_posts() ) : $blogs->the_post();
            get_template_part( 'template-parts/blog/blog-card' );
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>
