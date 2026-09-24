<?php
/**
 * Archive Branches Template
 * Displays all 26+ salon branches
 *
 * @package RawrBeauty
 */

get_header();
?>

<div class="rawr-archive-locations rawr-archive-branches">
    <header class="locations-hero" style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span class="badge" style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: var(--color-gold-dark, #A8862E); font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                <?php esc_html_e( '26 UK Salon Branches', 'rawr-beauty' ); ?>
            </span>
            <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 16px;">
                Find Your Nearest <span style="color: var(--color-gold, #C9A84C);">RAWR Beauty Salon</span>
            </h1>
            <p style="font-size: 16px; opacity: 0.85; max-width: 600px; margin: 0 auto;">
                <?php esc_html_e( 'Operating across 26 UK locations including London, Birmingham, Cardiff, Manchester, Leeds, Colchester, and Canterbury.', 'rawr-beauty' ); ?>
            </p>
        </div>
    </header>

    <!-- React Location Finder mount point -->
    <section class="container" style="margin-top: -30px; position: relative; z-index: 10;">
        <div id="rawr-location-finder"></div>
    </section>

    <div class="container" style="padding: 60px 20px 90px;">
        <div class="locations-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 28px;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $loc_id   = get_the_ID();
                    $address  = get_post_meta( $loc_id, 'branch_address', true ) ?: get_post_meta( $loc_id, '_rawr_location_address', true );
                    $phone    = get_post_meta( $loc_id, 'branch_phone', true ) ?: get_post_meta( $loc_id, '_rawr_location_phone', true ) ?: '07398 926226';
                    $book_url = get_post_meta( $loc_id, 'booking_url', true ) ?: home_url( '/book/?branch=' . get_post_field( 'post_name', $loc_id ) );
            ?>
                <div class="location-card" style="background: #fff; border-radius: 16px; padding: 28px; border: 1px solid rgba(201,168,76,0.18); box-shadow: 0 4px 14px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <span style="font-size: 10px; font-weight: 800; letter-spacing: 2px; text-transform: uppercase; color: #C9A84C;">
                            <?php esc_html_e( 'UK Salon Branch', 'rawr-beauty' ); ?>
                        </span>
                        <h2 style="font-size: 1.5rem; margin: 8px 0 10px; font-family: var(--font-heading, Georgia, serif);">
                            <a href="<?php the_permalink(); ?>" style="color: #1A1A2E; text-decoration: none;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <?php if ( $address ) : ?>
                            <p style="font-size: 13px; color: #4A4A6A; margin-bottom: 12px; line-height: 1.5;">
                                📍 <?php echo esc_html( $address ); ?>
                            </p>
                        <?php endif; ?>
                        <?php if ( $phone ) : ?>
                            <p style="font-size: 12px; color: #8888AA; margin-bottom: 20px;">
                                📞 <?php echo esc_html( $phone ); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div style="display: flex; gap: 10px; border-top: 1px solid #F0F0F5; padding-top: 16px;">
                        <a href="<?php echo esc_url( $book_url ); ?>" class="btn btn-primary" style="flex: 1; text-align: center; background: #C9A84C; color: #1A1A2E; padding: 10px; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 13px;">
                            <?php esc_html_e( 'Book Here', 'rawr-beauty' ); ?>
                        </a>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="flex: 1; text-align: center; border: 1px solid #1A1A2E; color: #1A1A2E; padding: 10px; border-radius: 50px; font-weight: 600; text-decoration: none; font-size: 13px;">
                            <?php esc_html_e( 'Details', 'rawr-beauty' ); ?>
                        </a>
                    </div>
                </div>
            <?php
                endwhile;
            else :
            ?>
                <p><?php esc_html_e( 'No salon branches found.', 'rawr-beauty' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();

