<?php
/**
 * Desktop Header Partial
 *
 * @package RawrBeauty
 */
?>
<div class="rawr-desktop-header" style="display: flex; align-items: center; justify-content: space-between; padding: 18px 0;">
    <div class="rawr-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration: none; display: flex; flex-direction: column;">
            <span style="font-family: var(--font-heading, Georgia, serif); font-size: 26px; font-weight: 800; letter-spacing: 3px; color: #1A1A2E;">RAWR</span>
            <span style="font-size: 9px; font-weight: 700; letter-spacing: 2px; color: #C9A84C; text-transform: uppercase;">BEAUTY SALONS</span>
        </a>
    </div>

    <?php get_template_part( 'template-parts/header/navigation' ); ?>

    <div class="rawr-header-actions" style="display: flex; align-items: center; gap: 14px;">
        <?php if ( class_exists( 'WooCommerce' ) ) : ?>
            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="rawr-cart-link" style="position: relative; font-size: 20px; text-decoration: none; color: #1A1A2E;" title="View Cart">
                🛒
                <span class="rawr-cart-count" style="position: absolute; top: -6px; right: -8px; background: #C9A84C; color: #1A1A2E; border-radius: 50%; font-size: 10px; font-weight: 800; width: 18px; height: 18px; display: flex; align-items: center; justify-content: center;">
                    <?php echo WC()->cart ? WC()->cart->get_cart_contents_count() : '0'; ?>
                </span>
            </a>
        <?php endif; ?>
        <a href="<?php echo esc_url( home_url( '/book' ) ); ?>" class="btn btn-primary" style="background: #C9A84C; color: #1A1A2E; padding: 10px 22px; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 13px;">
            Book Now
        </a>
    </div>
</div>
