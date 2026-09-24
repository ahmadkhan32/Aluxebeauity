<?php
/**
 * Template Name: Legal Policies & Terms
 *
 * @package RawrBeauty
 */

get_header();
?>

<div class="rawr-legal-page">
    <header style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 90px 0 50px; text-align: center;">
        <div class="container">
            <h1 style="font-size: clamp(2.2rem, 4vw, 3.2rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 12px;">
                <?php the_title(); ?>
            </h1>
            <p style="font-size: 14px; opacity: 0.8;">Last updated: <?php echo get_the_modified_date( 'F j, Y' ); ?></p>
        </div>
    </header>

    <div class="container" style="padding: 60px 20px 90px; max-width: 860px; margin: 0 auto;">
        <div class="entry-content" style="line-height: 1.8; color: #4A4A6A; font-size: 15px;">
            <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
