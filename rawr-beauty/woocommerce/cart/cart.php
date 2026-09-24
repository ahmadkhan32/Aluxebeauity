<?php
/**
 * Cart Page
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart');
?>
<div class="rawr-cart-container" style="max-width: 900px; margin: 0 auto; padding: 40px 0;">
    <h1 class="rawr-title" style="text-align: center; margin-bottom: 30px;"><?php esc_html_e('Your Beauty Bag', 'rawr-beauty'); ?></h1>
    <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
        <?php do_action('woocommerce_cart_contents'); ?>
    </form>
</div>
<?php do_action('woocommerce_after_cart'); ?>
