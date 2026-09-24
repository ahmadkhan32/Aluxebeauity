<?php
/**
 * Quick Buy Quantity Selector (- / +)
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-qb-quantity" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding-bottom: 16px; border-bottom: 1px solid #ECECF2;">
    <span style="font-size: 14px; font-weight: 700; color: #1A1A2E;"><?php esc_html_e( 'Quantity', 'rawr-beauty' ); ?></span>
    <div style="display: inline-flex; align-items: center; border: 1px solid #D5D5E2; border-radius: 50px; padding: 2px 6px; background: #fff;">
        <button type="button" class="qb-qty-minus" onclick="window.rawrQuickBuyQtyChange && window.rawrQuickBuyQtyChange(-1)" style="background: none; border: none; width: 28px; height: 28px; font-size: 16px; cursor: pointer; color: #1A1A2E; font-weight: 700;">−</button>
        <span id="rawr-qb-qty-display" style="width: 34px; text-align: center; font-weight: 700; font-size: 14px;">1</span>
        <button type="button" class="qb-qty-plus" onclick="window.rawrQuickBuyQtyChange && window.rawrQuickBuyQtyChange(1)" style="background: none; border: none; width: 28px; height: 28px; font-size: 16px; cursor: pointer; color: #1A1A2E; font-weight: 700;">+</button>
    </div>
</div>
