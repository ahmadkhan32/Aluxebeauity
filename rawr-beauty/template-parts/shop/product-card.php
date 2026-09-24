<?php
/**
 * Shop Product Card Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

global $product;
if ( ! $product ) return;

$product_id = $product->get_id();
$price_html = $product->get_price_html();
?>

<div class="rawr-product-card" style="background: #fff; border-radius: 16px; border: 1px solid rgba(201,168,76,0.18); overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; position: relative; box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: transform 0.2s ease, box-shadow 0.2s ease;">
    <?php get_template_part( 'template-parts/shop/product-badges' ); ?>

    <a href="<?php the_permalink(); ?>" class="product-image-wrap" style="display: block; position: relative; padding-top: 100%; overflow: hidden; background: #FAF9F6;">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'woocommerce_thumbnail', array( 'style' => 'position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;' ) ); ?>
        <?php else : ?>
            <img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php the_title_attribute(); ?>" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" />
        <?php endif; ?>
    </a>

    <div class="product-info" style="padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
        <div>
            <h3 style="font-size: 1.1rem; margin: 0 0 8px; font-family: var(--font-heading, Georgia, serif);">
                <a href="<?php the_permalink(); ?>" style="color: #1A1A2E; text-decoration: none;">
                    <?php the_title(); ?>
                </a>
            </h3>
            <div class="product-price" style="font-size: 1.15rem; font-weight: 700; color: #C9A84C; margin-bottom: 16px;">
                <?php echo wp_kses_post( $price_html ); ?>
            </div>
        </div>

        <div class="product-actions" style="display: flex; flex-direction: column; gap: 8px;">
            <button type="button" 
                    class="btn btn-cart-add rawr-add-to-cart-ajax" 
                    data-product-id="<?php echo esc_attr( $product_id ); ?>"
                    onclick="window.rawrAddToCart && window.rawrAddToCart(<?php echo esc_attr( $product_id ); ?>, 1)"
                    style="width: 100%; background: #C9A84C; color: #1A1A2E; padding: 11px 18px; border-radius: 50px; font-weight: 700; font-size: 13px; border: none; cursor: pointer;">
                <?php esc_html_e( 'Add to Cart', 'rawr-beauty' ); ?>
            </button>

            <?php get_template_part( 'template-parts/shop/quick-buy-button' ); ?>
        </div>
    </div>
</div>
