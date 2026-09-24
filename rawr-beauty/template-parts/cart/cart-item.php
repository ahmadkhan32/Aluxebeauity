<?php
/**
 * Single Cart Item Row for Drawer & Mini Cart
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-cart-item-row" style="display: flex; gap: 14px; padding: 14px 0; border-bottom: 1px solid #F0F0F5;">
    <div class="item-thumb" style="width: 65px; height: 65px; border-radius: 8px; overflow: hidden; background: #FAF9F6; flex-shrink: 0; border: 1px solid #ECECF2;">
        <img src="" alt="" class="cart-item-img" style="width: 100%; height: 100%; object-fit: cover;" />
    </div>

    <div style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
            <h4 class="cart-item-title" style="font-size: 14px; margin: 0; font-weight: 700; color: #1A1A2E;"></h4>
            <button type="button" class="btn-remove-item" style="background: none; border: none; cursor: pointer; color: #A0A0B2; font-size: 16px; padding: 0;" title="<?php esc_attr_e( 'Remove item', 'rawr-beauty' ); ?>">🗑</button>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
            <?php get_template_part( 'template-parts/cart/cart-quantity' ); ?>
            <div class="cart-item-total" style="font-size: 14px; font-weight: 700; color: #1A1A2E;">£0.00</div>
        </div>
    </div>
</div>
