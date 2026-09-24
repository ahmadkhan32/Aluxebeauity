<?php
/**
 * Branch Card Partial
 *
 * @package RawrBeauty
 */

$b_id    = get_the_ID();
$address = get_post_meta( $b_id, 'branch_address', true ) ?: get_post_meta( $b_id, '_rawr_location_address', true );
$phone   = get_post_meta( $b_id, 'branch_phone', true ) ?: get_post_meta( $b_id, '_rawr_location_phone', true );
$book_url= get_post_meta( $b_id, 'booking_url', true ) ?: home_url( '/book/?branch=' . get_post_field( 'post_name', $b_id ) );
?>
<div class="branch-card" style="background: #fff; border-radius: 16px; padding: 24px; border: 1px solid rgba(201,168,76,0.2); box-shadow: 0 4px 14px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
    <div>
        <span style="font-size: 10px; font-weight: 800; letter-spacing: 2px; text-transform: uppercase; color: #C9A84C;">RAWR Salon</span>
        <h3 style="font-size: 1.3rem; margin: 6px 0 10px; font-family: var(--font-heading, Georgia, serif);">
            <a href="<?php the_permalink(); ?>" style="color: #1A1A2E; text-decoration: none;">
                <?php the_title(); ?>
            </a>
        </h3>
        <?php if ( $address ) : ?>
            <p style="font-size: 13px; color: #4A4A6A; margin-bottom: 8px;">📍 <?php echo esc_html( $address ); ?></p>
        <?php endif; ?>
        <?php if ( $phone ) : ?>
            <p style="font-size: 12px; color: #8888AA; margin-bottom: 16px;">📞 <?php echo esc_html( $phone ); ?></p>
        <?php endif; ?>
    </div>
    <div style="display: flex; gap: 8px; border-top: 1px solid #F0F0F5; padding-top: 14px;">
        <a href="<?php echo esc_url( $book_url ); ?>" class="btn btn-primary" style="flex: 1; text-align: center; background: #C9A84C; color: #1A1A2E; padding: 8px; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 12px;">
            Book
        </a>
        <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="flex: 1; text-align: center; border: 1px solid #1A1A2E; color: #1A1A2E; padding: 8px; border-radius: 50px; font-weight: 600; text-decoration: none; font-size: 12px;">
            Details
        </a>
    </div>
</div>
