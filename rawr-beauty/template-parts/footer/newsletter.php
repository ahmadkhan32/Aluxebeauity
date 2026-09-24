<?php
/**
 * Pre-Footer Newsletter & Special Offer CTA
 *
 * @package RAWR_Beauty
 */
?>
<section class="rawr-prefooter-cta">
    <div class="rawr-container">
        <div class="rawr-prefooter-inner">
            <div>
                <h2 style="font-family: var(--font-serif); font-size: 32px; color: white; margin-bottom: 8px;">
                    <?php esc_html_e('Get £5 OFF Your First Treatment', 'rawr-beauty'); ?>
                </h2>
                <p style="color: rgba(255,255,255,0.8); font-size: 14px;">
                    <?php esc_html_e('Join our VIP glow list for flash discounts, VIP priority slots, and seasonal pamper deals.', 'rawr-beauty'); ?>
                </p>
            </div>
            <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                <a href="<?php echo esc_url(rawr_whatsapp_url('Hi! I would like to join the RAWR Beauty VIP glow list and claim £5 off.')); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-whatsapp rawr-btn-lg">
                    💬 <?php esc_html_e('Claim via WhatsApp', 'rawr-beauty'); ?>
                </a>
                <a href="tel:07398926226" class="rawr-btn rawr-btn-outline rawr-btn-lg" style="color: white; border-color: rgba(255,255,255,0.3);">
                    📞 07398 926226
                </a>
            </div>
        </div>
    </div>
</section>
