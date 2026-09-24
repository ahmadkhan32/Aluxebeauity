<?php
/**
 * Course Grid Partial
 *
 * @package RawrBeauty
 */
?>
<div class="education-course-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 24px;">
    <?php
    $courses = new WP_Query( array(
        'post_type'      => 'course',
        'posts_per_page' => -1,
    ) );
    if ( $courses->have_posts() ) :
        while ( $courses->have_posts() ) : $courses->the_post();
            get_template_part( 'template-parts/education/course-card' );
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>
