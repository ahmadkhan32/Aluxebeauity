<?php
/**
 * Branch Details Partial
 *
 * @package RawrBeauty
 */
$address = get_post_meta( get_the_ID(), 'branch_address', true ) ?: get_post_meta( get_the_ID(), '_rawr_location_address', true );
$phone   = get_post_meta( get_the_ID(), 'branch_phone', true ) ?: get_post_meta( get_the_ID(), '_rawr_location_phone', true );
?>
<div class="branch-details" style="margin-bottom: 24px;">
    <?php if ( $address ) : ?>
        <p class="branch-address" style="font-size: 15px; color: #4A4A6A; margin-bottom: 8px;">
            📍 <strong>Address:</strong> <?php echo esc_html( $address ); ?>
        </p>
    <?php endif; ?>
    <?php if ( $phone ) : ?>
        <p class="branch-phone" style="font-size: 15px; color: #4A4A6A;">
            📞 <strong>Phone:</strong> <a href="tel:<?php echo esc_attr( $phone ); ?>" style="color: #A8862E;"><?php echo esc_html( $phone ); ?></a>
        </p>
    <?php endif; ?>
</div>
