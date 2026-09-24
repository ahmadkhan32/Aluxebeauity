<?php
/**
 * Template Name: Contact Us
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main contact-page">
    <div class="rawr-container" style="padding: 80px 24px;">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('We Are Here For You', 'rawr-beauty'); ?></span>
            <h1 class="rawr-title"><?php esc_html_e('Contact RAWR Beauty', 'rawr-beauty'); ?></h1>
            <p class="rawr-subtitle"><?php esc_html_e('Speak with our salon team, book custom bridal sessions, or enquire about treatments.', 'rawr-beauty'); ?></p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 40px;">
            <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: var(--shadow-card); border: 1px solid var(--color-border);">
                <h2 style="font-family: var(--font-serif); font-size: 26px; margin-bottom: 20px;"><?php esc_html_e('Get In Touch Directly', 'rawr-beauty'); ?></h2>
                <p style="margin-bottom: 24px; color: var(--color-text-muted); font-size: 15px;">
                    <?php esc_html_e('For the quickest response, WhatsApp our customer care desk or call our appointments hotline directly.', 'rawr-beauty'); ?>
                </p>
                <div style="display: flex; flex-direction: column; gap: 16px;">
                    <a href="<?php echo esc_url(rawr_whatsapp_url()); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-whatsapp">
                        💬 <?php esc_html_e('Chat on WhatsApp (07398 926226)', 'rawr-beauty'); ?>
                    </a>
                    <a href="tel:07398926226" class="rawr-btn rawr-btn-outline">
                        📞 <?php esc_html_e('Call 07398 926226', 'rawr-beauty'); ?>
                    </a>
                </div>
            </div>

            <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: var(--shadow-card); border: 1px solid var(--color-border);">
                <h2 style="font-family: var(--font-serif); font-size: 26px; margin-bottom: 20px;"><?php esc_html_e('Send An Email Message', 'rawr-beauty'); ?></h2>
                <form id="rawr-contact-form" style="display: flex; flex-direction: column; gap: 16px;">
                    <input type="text" placeholder="<?php esc_attr_e('Your Name', 'rawr-beauty'); ?>" required class="rawr-input" />
                    <input type="email" placeholder="<?php esc_attr_e('Email Address', 'rawr-beauty'); ?>" required class="rawr-input" />
                    <textarea rows="4" placeholder="<?php esc_attr_e('Your Message or Treatment Inquiry...', 'rawr-beauty'); ?>" required class="rawr-input"></textarea>
                    <button type="submit" class="rawr-btn rawr-btn-primary">
                        <?php esc_html_e('Send Message', 'rawr-beauty'); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
