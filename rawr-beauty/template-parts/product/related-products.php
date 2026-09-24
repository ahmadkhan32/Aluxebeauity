<?php
/**
 * Single Product Related Products Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

global $product;
if ( ! $product ) return;

$related_ids = wc_get_related_products( $product->get_id(), 4 );
if ( empty( $related_ids ) ) return;
?>

<div class="rawr-related-products" style="margin-top: 60px; border-top: 1px solid #ECECF2; padding-top: 50px;">
    <h2 style="font-size: 1.8rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 28px; text-align: center;">
        <?php esc_html_e( 'You May Also Like', 'rawr-beauty' ); ?>
    </h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 24px;">
        <?php
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => 4,
            'post__in'       => $related_ids,
        );
        $related_query = new WP_Query( $args );
        while ( $related_query->have_posts() ) : $related_query->the_post();
            get_template_part( 'template-parts/shop/product-card' );
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>
