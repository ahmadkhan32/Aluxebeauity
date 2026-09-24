<?php
/**
 * Related Blog Posts Partial
 *
 * @package RawrBeauty
 */
$related = new WP_Query( array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post__not_in'   => array( get_the_ID() ),
) );
if ( $related->have_posts() ) :
?>
<section class="related-posts" style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #E8E8F0;">
    <h3 style="font-size: 1.8rem; font-family: var(--font-heading, Georgia, serif); margin-bottom: 24px;">Related Beauty Articles</h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
        <?php
        while ( $related->have_posts() ) : $related->the_post();
            get_template_part( 'template-parts/blog/blog-card' );
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</section>
<?php endif; ?>
