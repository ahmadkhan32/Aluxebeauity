<?php
/**
 * Archive Services Template
 *
 * @package RawrBeauty
 */

get_header();
?>

<div class="rawr-archive-services">
    <header style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: #A8862E; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                Signature Beauty Treatments
            </span>
            <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 16px;">
                Our <span style="color: var(--color-gold, #C9A84C);">Treatment Menu</span>
            </h1>
            <p style="font-size: 16px; opacity: 0.85; max-width: 600px; margin: 0 auto;">
                Nails, brows, lashes, facials, waxing, and therapeutic massage delivered across all 26 UK salons.
            </p>
        </div>
    </header>

    <div class="container" style="padding: 70px 20px 100px;">
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $price = get_post_meta( get_the_ID(), '_rawr_service_price', true );
            ?>
                <div style="background: #fff; border-radius: 16px; padding: 28px; border: 1px solid rgba(201,168,76,0.2); box-shadow: 0 4px 14px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <h2 style="font-size: 1.4rem; font-family: var(--font-heading, Georgia, serif); margin-bottom: 10px;">
                            <a href="<?php the_permalink(); ?>" style="color: #1A1A2E; text-decoration: none;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div style="font-size: 13px; color: #4A4A6A; line-height: 1.6; margin-bottom: 16px;">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #F0F0F5; padding-top: 16px;">
                        <?php if ( $price ) : ?>
                            <span style="font-family: var(--font-heading, Georgia, serif); font-size: 1.3rem; font-weight: 700; color: #A8862E;">From £<?php echo esc_html( $price ); ?></span>
                        <?php endif; ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="background: #C9A84C; color: #1A1A2E; padding: 8px 18px; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 12px;">
                            View Details
                        </a>
                    </div>
                </div>
            <?php
                endwhile;
                the_posts_navigation();
            else :
            ?>
                <p>No services found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
