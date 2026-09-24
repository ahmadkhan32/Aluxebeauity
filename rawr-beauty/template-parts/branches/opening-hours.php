<?php
/**
 * Branch Opening Hours Partial
 *
 * @package RawrBeauty
 */
$hours = get_post_meta( get_the_ID(), 'opening_hours', true ) ?: get_post_meta( get_the_ID(), '_rawr_location_hours', true ) ?: "Mon–Sat: 9am–7pm\nSun: 10am–5pm";
?>
<div class="branch-opening-hours" style="background: #FDF8EE; padding: 24px; border-radius: 14px; border: 1px solid rgba(201,168,76,0.25); margin: 20px 0;">
    <h4 style="font-size: 1.1rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 10px;">
        ⏰ Opening Times
    </h4>
    <div style="font-size: 13px; color: #4A4A6A; line-height: 1.7; white-space: pre-line;">
        <?php echo wp_kses_post( $hours ); ?>
    </div>
</div>
