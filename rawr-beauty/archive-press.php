<?php
/**
 * Archive Press Template
 *
 * @package RawrBeauty
 */

get_header();
?>

<div class="rawr-archive-press">
    <header style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: #A8862E; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                Media & News
            </span>
            <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 16px;">
                Press & <span style="color: var(--color-gold, #C9A84C);">Editorial Coverage</span>
            </h1>
            <p style="font-size: 16px; opacity: 0.85; max-width: 600px; margin: 0 auto;">
                Featured in top UK lifestyle and beauty publications.
            </p>
        </div>
    </header>

    <div class="container" style="padding: 70px 20px 100px;">
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $outlet = get_post_meta( get_the_ID(), '_rawr_press_outlet', true ) ?: 'Editorial';
            ?>
                <div style="background: #fff; border-radius: 16px; padding: 28px; border: 1px solid rgba(201,168,76,0.2); box-shadow: 0 4px 14px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <span style="font-size: 10px; font-weight: 800; text-transform: uppercase; color: #C9A84C;"><?php echo esc_html( $outlet ); ?></span>
                        <h2 style="font-size: 1.4rem; font-family: var(--font-heading, Georgia, serif); margin: 6px 0 10px;">
                            <a href="<?php the_permalink(); ?>" style="color: #1A1A2E; text-decoration: none;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div style="font-size: 13px; color: #4A4A6A; line-height: 1.6; margin-bottom: 16px;">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #F0F0F5; padding-top: 16px;">
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="display: block; text-align: center; border: 1px solid #1A1A2E; color: #1A1A2E; padding: 8px; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 12px;">
                            Read Coverage
                        </a>
                    </div>
                </div>
            <?php
                endwhile;
                the_posts_navigation();
            else :
            ?>
                <p>No press releases found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
