<?php
/**
 * Shop Product Grid Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-product-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 30px; margin-bottom: 50px;">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/shop/product-card' );
        endwhile;
    else :
    ?>
        <p style="grid-column: 1 / -1; text-align: center; color: #8888AA; padding: 40px 0;">
            <?php esc_html_e( 'No products found in this collection.', 'rawr-beauty' ); ?>
        </p>
    <?php endif; ?>
</div>
