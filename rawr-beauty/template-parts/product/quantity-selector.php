<?php
/**
 * Single Product Quantity Selector Component (+ / -)
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-qty-wrapper" style="margin-bottom: 20px;">
    <label style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 8px;">
        <?php esc_html_e( 'Quantity', 'rawr-beauty' ); ?>
    </label>
    <div style="display: inline-flex; align-items: center; border: 1px solid #D5D5E2; border-radius: 50px; padding: 4px 8px; background: #fff;">
        <button type="button" class="qty-btn-minus" onclick="var el=document.getElementById('rawr-single-qty'); if(el.value>1){el.value=parseInt(el.value)-1;}" style="background: none; border: none; width: 32px; height: 32px; font-size: 18px; cursor: pointer; color: #1A1A2E; font-weight: 700;">−</button>
        <input type="number" id="rawr-single-qty" name="quantity" value="1" min="1" max="99" style="width: 44px; text-align: center; border: none; font-weight: 700; font-size: 15px; outline: none; -moz-appearance: textfield;" />
        <button type="button" class="qty-btn-plus" onclick="var el=document.getElementById('rawr-single-qty'); el.value=parseInt(el.value)+1;" style="background: none; border: none; width: 32px; height: 32px; font-size: 18px; cursor: pointer; color: #1A1A2E; font-weight: 700;">+</button>
    </div>
</div>
