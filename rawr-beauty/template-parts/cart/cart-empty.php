<?php
/**
 * Cart Empty State Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-cart-empty-state" style="text-align: center; padding: 60px 10px;">
    <div style="font-size: 40px; margin-bottom: 16px;">🛍️</div>
    <h4 style="font-size: 1.15rem; font-family: var(--font-heading, Georgia, serif); margin-bottom: 8px;">
        <?php esc_html_e( 'Your bag is currently empty', 'rawr-beauty' ); ?>
    </h4>
    <p style="font-size: 13px; color: #8888AA; margin-bottom: 24px;">
        <?php esc_html_e( 'Explore our salon-grade beauty treatments, nail care, and lash enhancements.', 'rawr-beauty' ); ?>
    </p>
    <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="btn btn-primary" onclick="window.rawrCloseCart && window.rawrCloseCart()" style="display: inline-block; background: #C9A84C; color: #1A1A2E; padding: 12px 28px; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 13px;">
        <?php esc_html_e( 'Start Shopping', 'rawr-beauty' ); ?>
    </a>
</div>
