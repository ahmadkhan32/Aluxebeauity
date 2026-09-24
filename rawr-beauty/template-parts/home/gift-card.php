<?php
/**
 * Gift Card & Special Offers Section
 *
 * @package RAWR_Beauty
 */
?>
<section class="rawr-section rawr-giftcard-section">
    <div class="rawr-container">
        <div class="rawr-giftcard-card">
            <div class="rawr-giftcard-content">
                <span class="rawr-badge-gold"><?php esc_html_e('The Perfect Treat', 'rawr-beauty'); ?></span>
                <h2 class="rawr-title-light"><?php esc_html_e('Give The Gift of Radiance', 'rawr-beauty'); ?></h2>
                <p class="rawr-text-light">
                    <?php esc_html_e('Treat someone special to an unforgettable pampering session. RAWR Beauty digital gift cards can be used for any salon treatment, mobile home visit, or retail beauty products.', 'rawr-beauty'); ?>
                </p>
                <div class="rawr-giftcard-actions">
                    <a href="<?php echo esc_url(rawr_whatsapp_url('Hi! I would like to purchase a RAWR Beauty Gift Card.')); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-primary">
                        🎁 <?php esc_html_e('Order Gift Card', 'rawr-beauty'); ?>
                    </a>
                    <span class="rawr-gift-note"><?php esc_html_e('Available from £25 · Instant digital delivery', 'rawr-beauty'); ?></span>
                </div>
            </div>
            <div class="rawr-giftcard-visual">
                <div class="rawr-voucher-card">
                    <span class="voucher-logo">RAWR</span>
                    <span class="voucher-sub">BEAUTY VOUCHER</span>
                    <span class="voucher-amount">£50.00</span>
                    <span class="voucher-valid">Valid across all 26+ locations</span>
                </div>
            </div>
        </div>
    </div>
</section>
