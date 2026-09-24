<?php
/**
 * Branch Booking Button Partial
 *
 * @package RawrBeauty
 */
$book_url = get_post_meta( get_the_ID(), 'booking_url', true ) ?: get_post_meta( get_the_ID(), '_rawr_location_booking_url', true ) ?: home_url( '/book/?branch=' . get_post_field( 'post_name', get_the_ID() ) );
?>
<a class="button btn btn-primary btn-lg" href="<?php echo esc_url( $book_url ); ?>" style="display: inline-block; background: #C9A84C; color: #1A1A2E; padding: 12px 28px; border-radius: 50px; font-weight: 700; text-decoration: none;">
    Book an Appointment
</a>
