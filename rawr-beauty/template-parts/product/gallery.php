<?php
/**
 * Single Product Gallery Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

global $product;
if ( ! $product ) return;

$attachment_ids = $product->get_gallery_image_ids();
$main_image_id  = $product->get_image_id();
?>

<div class="rawr-product-gallery" style="position: sticky; top: 100px;">
    <div class="main-image" style="border-radius: 16px; overflow: hidden; background: #FAF9F6; border: 1px solid rgba(201,168,76,0.2); margin-bottom: 16px;">
        <?php if ( $main_image_id ) : ?>
            <?php echo wp_get_attachment_image( $main_image_id, 'large', false, array( 'style' => 'width: 100%; height: auto; display: block; object-fit: cover;' ) ); ?>
        <?php else : ?>
            <img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: auto; display: block;" />
        <?php endif; ?>
    </div>

    <?php if ( ! empty( $attachment_ids ) ) : ?>
        <div class="thumbnails" style="display: flex; gap: 12px; overflow-x: auto;">
            <?php foreach ( $attachment_ids as $id ) : ?>
                <div style="width: 70px; height: 70px; border-radius: 8px; overflow: hidden; border: 1px solid #E0E0E8; cursor: pointer; flex-shrink: 0;">
                    <?php echo wp_get_attachment_image( $id, 'thumbnail', false, array( 'style' => 'width: 100%; height: 100%; object-fit: cover;' ) ); ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
