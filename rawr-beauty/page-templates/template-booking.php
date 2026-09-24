<?php
/**
 * Template Name: Booking System
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main booking-page">
    <div class="rawr-container" style="padding: 80px 24px;">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Instant Online Reservation', 'rawr-beauty'); ?></span>
            <h1 class="rawr-title"><?php esc_html_e('Book Your Appointment', 'rawr-beauty'); ?></h1>
            <p class="rawr-subtitle"><?php esc_html_e('Choose your treatment, select in-salon or complimentary doorstep service, and confirm directly on WhatsApp.', 'rawr-beauty'); ?></p>
        </div>

        <!-- React Booking Widget Mount Point -->
        <div id="rawr-booking-widget-mount"></div>
    </div>
</main>

<?php
get_footer();
