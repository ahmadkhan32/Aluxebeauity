<?php
/**
 * The template for displaying product content within loops
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

global $product;

if (empty($product) || !$product->is_visible()) {
    return;
}
?>
<li <?php wc_product_class('rawr-product-card', $product); ?>>
    <a href="<?php echo esc_url($product->get_permalink()); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
        <?php
        woocommerce_show_product_loop_sale_flash();
        woocommerce_template_loop_product_thumbnail();
        woocommerce_template_loop_product_title();
        woocommerce_template_loop_rating();
        woocommerce_template_loop_price();
        ?>
    </a>
    <?php woocommerce_template_loop_add_to_cart(); ?>
</li>
