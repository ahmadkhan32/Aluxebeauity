<?php
/**
 * Quick Buy Modal Product Details Header
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-qb-product" style="display: flex; gap: 16px; align-items: center; padding-bottom: 18px; border-bottom: 1px solid #ECECF2; margin-bottom: 20px;">
    <div style="width: 70px; height: 70px; border-radius: 8px; overflow: hidden; background: #FAF9F6; flex-shrink: 0; border: 1px solid #E0E0E8;">
        <img id="rawr-qb-product-img" src="" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
    </div>
    <div>
        <h4 id="rawr-qb-product-title" style="font-size: 1.1rem; margin: 0 0 6px; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E;">Product Name</h4>
        <div id="rawr-qb-product-price" style="font-size: 1.1rem; font-weight: 700; color: #C9A84C;">£0.00</div>
    </div>
</div>
