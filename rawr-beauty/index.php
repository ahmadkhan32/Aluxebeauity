<?php
/**
 * The main template file
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="rawr-container" style="padding: 80px 24px;">
        <?php
        if (have_posts()) :
            if (is_home() && !is_front_page()) :
                ?>
                <header class="rawr-page-header text-center" style="margin-bottom: 50px;">
                    <h1 class="rawr-page-title"><?php single_post_title(); ?></h1>
                </header>
                <?php
            endif;

            echo '<div class="rawr-blog-grid">';
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/blog/blog-card');
            endwhile;
            echo '</div>';

            the_posts_navigation();
        else :
            ?>
            <p><?php esc_html_e('No content found matching your query.', 'rawr-beauty'); ?></p>
            <?php
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
