<?php
/**
 * Featured Products Section (WooCommerce / Catalog)
 *
 * @package RAWR_Beauty
 */
$products = array(
    array('name' => 'Vitamin C Glow Serum', 'price' => '£18', 'old_price' => '£25', 'badge' => 'Bestseller', 'rating' => 5),
    array('name' => 'Hydra Boost Face Cream', 'price' => '£22', 'old_price' => '', 'badge' => 'New', 'rating' => 5),
    array('name' => 'Professional Wax Kit', 'price' => '£35', 'old_price' => '£45', 'badge' => 'Sale', 'rating' => 4),
    array('name' => 'Brow Tint & Shape Kit', 'price' => '£14', 'old_price' => '', 'badge' => 'Trending', 'rating' => 5),
);
?>
<section class="rawr-section rawr-products-section">
    <div class="rawr-container">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Salon-Grade Aftercare', 'rawr-beauty'); ?></span>
            <h2 class="rawr-title"><?php esc_html_e('Shop RAWR Beauty Essentials', 'rawr-beauty'); ?></h2>
            <p class="rawr-subtitle"><?php esc_html_e('Maintain your glow between appointments with our certified skin, brow, and body formulas.', 'rawr-beauty'); ?></p>
        </div>

        <div class="rawr-products-grid">
            <?php foreach ($products as $p) : ?>
                <div class="rawr-product-card">
                    <?php if (!empty($p['badge'])) : ?>
                        <span class="rawr-product-badge"><?php echo esc_html($p['badge']); ?></span>
                    <?php endif; ?>
                    <div class="rawr-product-img-box">
                        <span class="product-icon">🧴</span>
                    </div>
                    <div class="rawr-product-content">
                        <div class="rawr-product-rating">★★★★★</div>
                        <h3 class="rawr-product-title"><?php echo esc_html($p['name']); ?></h3>
                        <div class="rawr-product-price-row">
                            <span class="rawr-product-price"><?php echo esc_html($p['price']); ?></span>
                            <?php if (!empty($p['old_price'])) : ?>
                                <span class="rawr-product-old-price"><?php echo esc_html($p['old_price']); ?></span>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo esc_url(rawr_whatsapp_url('Hi! I would like to order the product: ' . $p['name'])); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-outline rawr-btn-sm" style="width: 100%; text-align: center;">
                            <?php esc_html_e('Order via WhatsApp', 'rawr-beauty'); ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo esc_url(home_url('/shop')); ?>" class="rawr-btn rawr-btn-primary">
                <?php esc_html_e('Explore Complete Shop Catalog &rarr;', 'rawr-beauty'); ?>
            </a>
        </div>
    </div>
</section>
