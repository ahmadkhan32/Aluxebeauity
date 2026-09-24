<?php
/**
 * Signature Treatments Quick Booking CTAs (Nails, Brows, Lashes, Facials, Laser)
 *
 * @package RAWR_Beauty
 */
$categories = array(
    array('title' => 'Brows & Threading', 'price' => 'From £5', 'icon' => '🪡', 'slug' => 'brows', 'desc' => 'Precision threading, brow tinting & lamination.'),
    array('title' => 'Lashes & Extensions', 'price' => 'From £35', 'icon' => '👁️', 'slug' => 'lashes', 'desc' => 'Classic, hybrid and Russian volume extensions.'),
    array('title' => 'Nails & Manicures', 'price' => 'From £25', 'icon' => '💅', 'slug' => 'nails', 'desc' => 'Gel nails, luxury pedicures and custom nail art.'),
    array('title' => 'Facials & Hydra Glow', 'price' => 'From £15', 'icon' => '✨', 'slug' => 'facials', 'desc' => 'Face clean-up, Gold Facials & Hydra dermabrasion.'),
    array('title' => 'Body & Face Waxing', 'price' => 'From £4', 'icon' => '🌸', 'slug' => 'waxing', 'desc' => 'Gentle hot wax for flawless, lasting smoothness.'),
    array('title' => 'Laser Hair Removal', 'price' => 'From £15', 'icon' => '⚡', 'slug' => 'laser', 'desc' => 'Permanent reduction for face and full body.'),
);
?>
<section class="rawr-section rawr-services-cta-section">
    <div class="rawr-container">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Quick Appointment Selector', 'rawr-beauty'); ?></span>
            <h2 class="rawr-title"><?php esc_html_e('What Would You Like To Book Today?', 'rawr-beauty'); ?></h2>
            <p class="rawr-subtitle"><?php esc_html_e('Click any service category to book immediately or browse treatment variations.', 'rawr-beauty'); ?></p>
        </div>

        <div class="rawr-cta-grid">
            <?php foreach ($categories as $cat) : ?>
                <div class="rawr-cta-card">
                    <span class="rawr-cta-icon"><?php echo esc_html($cat['icon']); ?></span>
                    <h3 class="rawr-cta-title"><?php echo esc_html($cat['title']); ?></h3>
                    <span class="rawr-cta-price"><?php echo esc_html($cat['price']); ?></span>
                    <p class="rawr-cta-desc"><?php echo esc_html($cat['desc']); ?></p>
                    <a href="<?php echo esc_url(rawr_whatsapp_url('Hi! I would like to book a ' . $cat['title'] . ' appointment.')); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-primary rawr-btn-sm" style="width: 100%; text-align: center;">
                        <?php esc_html_e('Book on WhatsApp', 'rawr-beauty'); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
