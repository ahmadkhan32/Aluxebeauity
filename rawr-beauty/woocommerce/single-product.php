<?php
/**
 * The Template for displaying all single products
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

get_header('shop');
?>
<main id="primary" class="site-main rawr-single-product">
    <div class="rawr-container" style="padding: 70px 24px;">
        <?php
        while (have_posts()) :
            the_post();
            wc_get_template_part('content', 'single-product');
        endwhile;
        ?>
    </div>
</main>
<?php
get_footer('shop');
