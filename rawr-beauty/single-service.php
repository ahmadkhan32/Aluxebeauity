<?php
/**
 * Single Service Template
 * Template for displaying individual treatments and services
 *
 * @package RawrBeauty
 */

get_header();

while ( have_posts() ) : the_post();
    $service_id  = get_the_ID();
    $price       = get_post_meta( $service_id, '_rawr_service_price', true );
    $duration    = get_post_meta( $service_id, '_rawr_service_duration', true ) ?: '30 - 60 min';
    $booking_url = home_url( '/book/?service=' . get_post_field( 'post_name', $service_id ) );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rawr-single-service' ); ?>>
    <header class="service-hero" style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span class="service-tag" style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: var(--color-gold-dark, #A8862E); font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                <?php esc_html_e( 'Treatment Spotlight', 'rawr-beauty' ); ?>
            </span>
            <h1 class="service-title" style="font-size: clamp(2.2rem, 4vw, 3.5rem); margin-bottom: 16px; font-family: var(--font-heading, Georgia, serif);">
                <?php the_title(); ?>
            </h1>
            <p style="font-size: 16px; color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 24px;">
                ⏱️ <?php echo esc_html( $duration ); ?>
                <?php if ( $price ) : ?>
                    &nbsp;•&nbsp; 💰 From £<?php echo esc_html( $price ); ?>
                <?php endif; ?>
            </p>
            <div style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url( $booking_url ); ?>" class="btn btn-primary btn-lg" style="background: var(--color-gold, #C9A84C); color: #1A1A2E; padding: 12px 28px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                    <?php esc_html_e( 'Book Treatment Now', 'rawr-beauty' ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline btn-lg" style="border: 2px solid var(--color-gold, #C9A84C); color: #fff; padding: 12px 28px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                    <?php esc_html_e( 'View All Services', 'rawr-beauty' ); ?>
                </a>
            </div>
        </div>
    </header>

    <div class="container" style="padding: 70px 20px;">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">
            <div class="service-main-content">
                <h2 style="font-size: 2rem; margin-bottom: 20px; font-family: var(--font-heading, Georgia, serif);">
                    <?php esc_html_e( 'Treatment Overview', 'rawr-beauty' ); ?>
                </h2>
                <div class="entry-content" style="line-height: 1.8; color: #4A4A6A;">
                    <?php the_content(); ?>
                </div>

                <div style="margin-top: 40px; background: #FAFAF8; padding: 30px; border-radius: 16px; border: 1px solid #E8E8F0;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 12px; font-family: var(--font-heading, Georgia, serif);">
                        ✨ <?php esc_html_e( 'What to Expect', 'rawr-beauty' ); ?>
                    </h3>
                    <ul style="color: #4A4A6A; line-height: 1.7; padding-left: 20px;">
                        <li>Personalised consultation with our certified beauty technician</li>
                        <li>100% medical-grade sanitisation of all tools and equipment</li>
                        <li>Premium salon products and soothing aftercare advice</li>
                    </ul>
                </div>
            </div>

            <aside class="service-sidebar">
                <div style="background: #FDF8EE; padding: 30px; border-radius: 16px; border: 1px solid rgba(201,168,76,0.3); text-align: center;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E;">
                        <?php esc_html_e( 'Reserve This Service', 'rawr-beauty' ); ?>
                    </h3>
                    <p style="font-size: 13px; color: #8888AA; margin-bottom: 20px;">
                        <?php esc_html_e( 'Available across all our locations and for doorstep appointment booking.', 'rawr-beauty' ); ?>
                    </p>
                    <a href="<?php echo esc_url( $booking_url ); ?>" class="btn btn-primary" style="display: block; width: 100%; background: #C9A84C; color: #1A1A2E; padding: 12px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                        <?php esc_html_e( 'Select Date & Time', 'rawr-beauty' ); ?>
                    </a>
                </div>
            </aside>
        </div>
    </div>
</article>

<?php
endwhile;

get_footer();
