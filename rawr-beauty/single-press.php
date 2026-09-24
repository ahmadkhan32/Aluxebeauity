<?php
/**
 * Single Press Article Template
 *
 * @package RawrBeauty
 */

get_header();

while ( have_posts() ) : the_post();
    $outlet = get_post_meta( get_the_ID(), '_rawr_press_outlet', true ) ?: 'Beauty Editorial';
    $date   = get_the_date( 'F j, Y' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rawr-single-press' ); ?>>
    <header style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: #A8862E; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                <?php echo esc_html( $outlet ); ?>
            </span>
            <h1 style="font-size: clamp(2.2rem, 4vw, 3.5rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 16px;">
                <?php the_title(); ?>
            </h1>
            <p style="font-size: 14px; opacity: 0.8;">Published: <?php echo esc_html( $date ); ?></p>
        </div>
    </header>

    <div class="container" style="padding: 70px 20px; max-width: 800px; margin: 0 auto;">
        <div class="entry-content" style="line-height: 1.8; color: #4A4A6A; font-size: 16px;">
            <?php the_content(); ?>
        </div>
        <div style="margin-top: 50px; padding-top: 30px; border-top: 1px solid #E8E8F0; text-align: center;">
            <a href="<?php echo esc_url( home_url( '/press' ) ); ?>" class="btn btn-outline" style="border: 2px solid #C9A84C; color: #1A1A2E; padding: 10px 24px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                ← Back to Press & Media
            </a>
        </div>
    </div>
</article>

<?php
endwhile;

get_footer();
