<?php
/**
 * Single Branch Template
 * Displays individual salon branch details with interactive React map mount point
 *
 * @package RawrBeauty
 */

get_header();

while ( have_posts() ) : the_post();
    $branch_id   = get_the_ID();
    $address     = get_post_meta( $branch_id, 'branch_address', true ) ?: get_post_meta( $branch_id, '_rawr_location_address', true );
    $phone       = get_post_meta( $branch_id, 'branch_phone', true ) ?: get_post_meta( $branch_id, '_rawr_location_phone', true );
    $booking_url = get_post_meta( $branch_id, 'booking_url', true ) ?: home_url( '/book/?branch=' . get_post_field( 'post_name', $branch_id ) );
    $hours       = get_post_meta( $branch_id, 'opening_hours', true ) ?: "Monday – Saturday: 9:00 AM – 8:00 PM\nSunday: 11:00 AM – 5:00 PM";
?>

<section class="branch-page" style="padding-bottom: 80px;">
    <header class="branch-hero" style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span class="badge" style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: var(--color-gold-dark, #A8862E); font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                RAWR Beauty UK Branch
            </span>
            <h1 style="font-size: clamp(2.2rem, 4vw, 3.5rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 16px;">
                <?php the_title(); ?>
            </h1>
            <?php if ( $address ) : ?>
                <p style="font-size: 16px; opacity: 0.9; max-width: 600px; margin: 0 auto 24px;">
                    📍 <?php echo esc_html( $address ); ?>
                </p>
            <?php endif; ?>
            <div style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
                <a class="button btn btn-primary btn-lg" href="<?php echo esc_url( $booking_url ); ?>" style="background: var(--color-gold, #C9A84C); color: #1A1A2E; padding: 12px 28px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                    Book at This Branch
                </a>
                <?php if ( $phone ) : ?>
                    <a class="button btn btn-outline btn-lg" href="tel:<?php echo esc_attr( $phone ); ?>" style="border: 2px solid var(--color-gold, #C9A84C); color: #fff; padding: 12px 28px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                        📞 <?php echo esc_html( $phone ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <div class="container" style="padding: 70px 20px;">
        <div class="branch-grid-layout" style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">
            <div class="branch-main">
                <h2 style="font-size: 2rem; margin-bottom: 20px; font-family: var(--font-heading, Georgia, serif);">
                    About <?php the_title(); ?> Branch
                </h2>
                <div class="branch-description" style="line-height: 1.8; color: #4A4A6A;">
                    <?php the_content(); ?>
                </div>

                <!-- Interactive React Map Mount Point -->
                <div class="branch-map-section" style="margin-top: 40px;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 16px; font-family: var(--font-heading, Georgia, serif);">
                        Interactive Branch Map
                    </h3>
                    <div id="rawr-location-map" data-location="<?php echo esc_attr( $branch_id ); ?>" style="min-height: 350px; background: #FAFAF8; border-radius: 16px; border: 1px solid #E8E8F0; display: flex; align-items: center; justify-content: center;">
                        <p style="color: #8888AA;">🗺️ Map Loading for <?php the_title(); ?>...</p>
                    </div>
                </div>
            </div>

            <aside class="branch-sidebar">
                <div class="branch-hours-card" style="background: #FDF8EE; padding: 30px; border-radius: 16px; border: 1px solid rgba(201,168,76,0.3); margin-bottom: 24px;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 16px; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E;">
                        ⏰ Opening Hours
                    </h3>
                    <div class="branch-hours" style="font-size: 14px; color: #4A4A6A; line-height: 1.7; white-space: pre-line;">
                        <?php echo wp_kses_post( $hours ); ?>
                    </div>
                </div>

                <div class="branch-booking-card" style="background: #fff; padding: 30px; border-radius: 16px; border: 1px solid #E8E8F0; box-shadow: 0 4px 14px rgba(0,0,0,0.05); text-align: center;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 10px; font-family: var(--font-heading, Georgia, serif);">
                        Reserve Your Treatment
                    </h3>
                    <p style="font-size: 13px; color: #8888AA; margin-bottom: 20px;">
                        Walk-ins welcome, or book online to secure your preferred time.
                    </p>
                    <a class="button btn btn-primary" href="<?php echo esc_url( $booking_url ); ?>" style="display: block; width: 100%; background: #C9A84C; color: #1A1A2E; padding: 12px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                        Instant Booking
                    </a>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php
endwhile;

get_footer();
