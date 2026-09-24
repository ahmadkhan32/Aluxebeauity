<?php
/**
 * Single Location Template
 * Template for displaying individual salon locations
 *
 * @package RawrBeauty
 */

get_header();

while ( have_posts() ) :
    the_post();
    $location_id = get_the_ID();
    $address     = get_post_meta( $location_id, '_rawr_location_address', true );
    $phone       = get_post_meta( $location_id, '_rawr_location_phone', true );
    $email       = get_post_meta( $location_id, '_rawr_location_email', true );
    $booking_url = get_post_meta( $location_id, '_rawr_location_booking_url', true ) ?: home_url( '/book/?location=' . get_post_field( 'post_name', $location_id ) );
    $hours       = get_post_meta( $location_id, '_rawr_location_hours', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rawr-single-location' ); ?>>
    <header class="location-hero" style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span class="location-badge" style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: var(--color-gold-dark, #A8862E); font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                <?php esc_html_e( 'Official Salon Location', 'rawr-beauty' ); ?>
            </span>
            <h1 class="location-title" style="font-size: clamp(2.2rem, 4vw, 3.5rem); margin-bottom: 16px; font-family: var(--font-heading, Georgia, serif);">
                RAWR Beauty <?php the_title(); ?>
            </h1>
            <?php if ( $address ) : ?>
                <p class="location-address" style="font-size: 16px; opacity: 0.9; max-width: 600px; margin: 0 auto 24px;">
                    📍 <?php echo esc_html( $address ); ?>
                </p>
            <?php endif; ?>
            <div class="location-hero-actions" style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url( $booking_url ); ?>" class="btn btn-primary btn-lg" style="background: var(--color-gold, #C9A84C); color: #1A1A2E; padding: 12px 28px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                    <?php esc_html_e( 'Book at This Location', 'rawr-beauty' ); ?>
                </a>
                <?php if ( $phone ) : ?>
                    <a href="tel:<?php echo esc_attr( $phone ); ?>" class="btn btn-outline btn-lg" style="border: 2px solid var(--color-gold, #C9A84C); color: #fff; padding: 12px 28px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                        📞 <?php echo esc_html( $phone ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <div class="container" style="padding: 70px 20px;">
        <div class="location-details-grid" style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">
            <div class="location-main-content">
                <h2 style="font-size: 2rem; margin-bottom: 20px; font-family: var(--font-heading, Georgia, serif);">
                    <?php esc_html_e( 'About This Salon', 'rawr-beauty' ); ?>
                </h2>
                <div class="entry-content" style="line-height: 1.8; color: #4A4A6A;">
                    <?php the_content(); ?>
                </div>

                <div class="location-services" style="margin-top: 40px;">
                    <h3 style="font-size: 1.6rem; margin-bottom: 20px; font-family: var(--font-heading, Georgia, serif);">
                        <?php esc_html_e( 'Available Treatments Here', 'rawr-beauty' ); ?>
                    </h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 16px;">
                        <div style="background: #FAFAF8; padding: 16px; border-radius: 12px; border: 1px solid #E8E8F0;">
                            <strong>💅 Nails & Manicures</strong>
                            <p style="font-size: 12px; color: #8888AA; margin-top: 4px;">Gel, acrylic, biab, nail art</p>
                        </div>
                        <div style="background: #FAFAF8; padding: 16px; border-radius: 12px; border: 1px solid #E8E8F0;">
                            <strong>👁️ Brows & Lashes</strong>
                            <p style="font-size: 12px; color: #8888AA; margin-top: 4px;">Threading, tinting, LVL lifts</p>
                        </div>
                        <div style="background: #FAFAF8; padding: 16px; border-radius: 12px; border: 1px solid #E8E8F0;">
                            <strong>✨ Facials & Glow</strong>
                            <p style="font-size: 12px; color: #8888AA; margin-top: 4px;">Hydra facials, peels & glow</p>
                        </div>
                        <div style="background: #FAFAF8; padding: 16px; border-radius: 12px; border: 1px solid #E8E8F0;">
                            <strong>🌸 Waxing & Hair Removal</strong>
                            <p style="font-size: 12px; color: #8888AA; margin-top: 4px;">Face & body hot waxing</p>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="location-sidebar">
                <div style="background: #FDF8EE; padding: 30px; border-radius: 16px; border: 1px solid rgba(201,168,76,0.3); margin-bottom: 24px;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 16px; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E;">
                        ⏰ <?php esc_html_e( 'Opening Hours', 'rawr-beauty' ); ?>
                    </h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; display: flex; flex-direction: column; gap: 8px; color: #4A4A6A;">
                        <li style="display: flex; justify-content: space-between;"><span>Monday – Friday:</span> <strong>9:00 AM – 8:00 PM</strong></li>
                        <li style="display: flex; justify-content: space-between;"><span>Saturday:</span> <strong>9:00 AM – 7:00 PM</strong></li>
                        <li style="display: flex; justify-content: space-between;"><span>Sunday:</span> <strong>11:00 AM – 5:00 PM</strong></li>
                    </ul>
                </div>

                <div style="background: #fff; padding: 30px; border-radius: 16px; border: 1px solid #E8E8F0; box-shadow: 0 4px 14px rgba(0,0,0,0.05); text-align: center;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 10px; font-family: var(--font-heading, Georgia, serif);">
                        <?php esc_html_e( 'Ready for Your Glow?', 'rawr-beauty' ); ?>
                    </h3>
                    <p style="font-size: 13px; color: #8888AA; margin-bottom: 20px;">
                        <?php esc_html_e( 'Reserve your appointment with our certified stylists today.', 'rawr-beauty' ); ?>
                    </p>
                    <a href="<?php echo esc_url( $booking_url ); ?>" class="btn btn-primary" style="display: block; width: 100%; background: #C9A84C; color: #1A1A2E; padding: 12px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                        <?php esc_html_e( 'Instant Online Booking', 'rawr-beauty' ); ?>
                    </a>
                </div>
            </aside>
        </div>
    </div>
</article>

<?php
endwhile;

get_footer();
