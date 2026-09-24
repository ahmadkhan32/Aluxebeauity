<?php
/**
 * Template Name: Branches Directory
 * Template for displaying all branches with map and search
 *
 * @package RawrBeauty
 */

get_header();
?>

<div class="rawr-branches-page">
    <header style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: #A8862E; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                26 UK Locations
            </span>
            <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 16px;">
                Our Salon <span style="color: var(--color-gold, #C9A84C);">Branches</span>
            </h1>
            <p style="font-size: 16px; opacity: 0.85; max-width: 600px; margin: 0 auto;">
                Find your nearest salon for walk-in appointments or online bookings.
            </p>
        </div>
    </header>

    <div class="container" style="margin-top: -30px; position: relative; z-index: 10;">
        <div id="rawr-location-finder"></div>
    </div>

    <div class="container" style="padding: 60px 20px 90px;">
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 28px;">
            <?php
            $branches = new WP_Query( array(
                'post_type'      => array( 'branch', 'location' ),
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC',
            ) );
            if ( $branches->have_posts() ) :
                while ( $branches->have_posts() ) : $branches->the_post();
                    $b_id    = get_the_ID();
                    $address = get_post_meta( $b_id, 'branch_address', true ) ?: get_post_meta( $b_id, '_rawr_location_address', true );
                    $phone   = get_post_meta( $b_id, 'branch_phone', true ) ?: get_post_meta( $b_id, '_rawr_location_phone', true );
                    $b_url   = get_post_meta( $b_id, 'booking_url', true ) ?: home_url( '/book/?branch=' . get_post_field( 'post_name', $b_id ) );
            ?>
                <div style="background: #fff; border-radius: 16px; padding: 28px; border: 1px solid rgba(201,168,76,0.2); box-shadow: 0 4px 14px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <h2 style="font-size: 1.4rem; font-family: var(--font-heading, Georgia, serif); margin-bottom: 8px;">
                            <a href="<?php the_permalink(); ?>" style="color: #1A1A2E; text-decoration: none;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <?php if ( $address ) : ?>
                            <p style="font-size: 13px; color: #4A4A6A; margin-bottom: 10px;">📍 <?php echo esc_html( $address ); ?></p>
                        <?php endif; ?>
                        <?php if ( $phone ) : ?>
                            <p style="font-size: 12px; color: #8888AA; margin-bottom: 16px;">📞 <?php echo esc_html( $phone ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div style="display: flex; gap: 10px; border-top: 1px solid #F0F0F5; padding-top: 16px;">
                        <a href="<?php echo esc_url( $b_url ); ?>" class="btn btn-primary" style="flex: 1; text-align: center; background: #C9A84C; color: #1A1A2E; padding: 10px; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 13px;">
                            Book Now
                        </a>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="flex: 1; text-align: center; border: 1px solid #1A1A2E; color: #1A1A2E; padding: 10px; border-radius: 50px; font-weight: 600; text-decoration: none; font-size: 13px;">
                            View Branch
                        </a>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
