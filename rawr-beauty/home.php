<?php
/**
 * Blog Home Template
 *
 * @package RawrBeauty
 */

get_header();
?>

<div class="rawr-blog-home">
    <header class="blog-hero" style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span class="badge" style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: var(--color-gold-dark, #A8862E); font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                <?php esc_html_e( 'Beauty Editorial & Insights', 'rawr-beauty' ); ?>
            </span>
            <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 16px;">
                The <span style="color: var(--color-gold, #C9A84C);">RAWR Beauty</span> Journal
            </h1>
            <p style="font-size: 16px; opacity: 0.85; max-width: 600px; margin: 0 auto;">
                <?php esc_html_e( 'Expert tips, treatment guides, seasonal nail art trends and beauty industry news.', 'rawr-beauty' ); ?>
            </p>
        </div>
    </header>

    <div class="container" style="padding: 70px 20px 100px;">
        <div class="blog-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/blog/blog-card' );
                endwhile;
                the_posts_navigation();
            else :
            ?>
                <p><?php esc_html_e( 'No articles found.', 'rawr-beauty' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
