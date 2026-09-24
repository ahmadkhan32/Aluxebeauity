<?php
/**
 * Branch Grid Partial
 *
 * @package RawrBeauty
 */
?>
<div class="branch-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 24px;">
    <?php
    $branches = new WP_Query( array(
        'post_type'      => array( 'branch', 'location' ),
        'posts_per_page' => -1,
    ) );
    if ( $branches->have_posts() ) :
        while ( $branches->have_posts() ) : $branches->the_post();
            get_template_part( 'template-parts/branches/branch-card' );
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>
