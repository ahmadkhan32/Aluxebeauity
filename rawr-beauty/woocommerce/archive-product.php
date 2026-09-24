<?php
/**
 * The Template for displaying product archives, including the main shop page
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

get_header('shop');
?>
<main id="primary" class="site-main rawr-shop-archive">
    <div class="rawr-container" style="padding: 70px 24px;">
        <header class="woocommerce-products-header text-center" style="margin-bottom: 40px;">
            <span class="rawr-badge"><?php esc_html_e('RAWR Beauty Products', 'rawr-beauty'); ?></span>
            <h1 class="woocommerce-products-header__title page-title rawr-title">
                <?php woocommerce_page_title(); ?>
            </h1>
            <p class="rawr-subtitle">
                <?php esc_html_e('Professional cruelty-free skincare, wax aftercare, and brow styling essentials.', 'rawr-beauty'); ?>
            </p>
        </header>

        <?php
        if (woocommerce_product_loop()) {
            woocommerce_product_loop_start();

            if (wc_get_loop_prop('total')) {
                while (have_posts()) {
                    the_post();
                    wc_get_template_part('content', 'product');
                }
            }

            woocommerce_product_loop_end();
            woocommerce_pagination();
        } else {
            get_template_part('template-parts/home/featured-products');
        }
        ?>
    </div>
</main>
<?php
get_footer('shop');
