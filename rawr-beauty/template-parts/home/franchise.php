<?php
/**
 * Franchise Section for Homepage
 *
 * @package RAWR_Beauty
 */
?>
<section class="rawr-section rawr-franchise-home-section" style="background: var(--color-bg-alt);">
    <div class="rawr-container">
        <div class="rawr-franchise-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
            <div>
                <span class="rawr-badge"><?php esc_html_e('Franchise Opportunities', 'rawr-beauty'); ?></span>
                <h2 class="rawr-title" style="font-size: clamp(2rem, 3.5vw, 2.8rem);">
                    <?php esc_html_e('Build Your Own Beauty Empire With RAWR', 'rawr-beauty'); ?>
                </h2>
                <p style="color: var(--color-text-muted); font-size: 15px; line-height: 1.7; margin-bottom: 20px;">
                    <?php esc_html_e('Step into the thriving beauty industry with an established, trusted brand name. Whether opening a high street salon bar or running an exclusive mobile territory, we provide full training, booking software, marketing and supply chains.', 'rawr-beauty'); ?>
                </p>
                <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 10px; margin-bottom: 30px;">
                    <li style="display: flex; align-items: center; gap: 8px;"><strong>✓</strong> <?php esc_html_e('High-yielding salon or low-overhead mobile model', 'rawr-beauty'); ?></li>
                    <li style="display: flex; align-items: center; gap: 8px;"><strong>✓</strong> <?php esc_html_e('Proven customer acquisition & automated WhatsApp booking', 'rawr-beauty'); ?></li>
                    <li style="display: flex; align-items: center; gap: 8px;"><strong>✓</strong> <?php esc_html_e('Exclusive territory rights across major UK towns', 'rawr-beauty'); ?></li>
                </ul>
                <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(home_url('/franchise')); ?>" class="rawr-btn rawr-btn-primary">
                        <?php esc_html_e('Learn About Franchising &rarr;', 'rawr-beauty'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/franchise#apply')); ?>" class="rawr-btn rawr-btn-outline">
                        <?php esc_html_e('Request Franchise Prospectus', 'rawr-beauty'); ?>
                    </a>
                </div>
            </div>

            <div style="background: var(--color-primary); padding: 40px; border-radius: 24px; color: white;">
                <h3 style="font-family: var(--font-serif); font-size: 26px; color: var(--color-secondary-light); margin-bottom: 16px;">
                    <?php esc_html_e('Franchise Quick Facts', 'rawr-beauty'); ?>
                </h3>
                <div style="display: flex; flex-direction: column; gap: 16px;">
                    <div style="border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 12px;">
                        <span style="font-size: 12px; color: var(--color-secondary); text-transform: uppercase;">Average Break-Even</span>
                        <p style="font-size: 16px; font-weight: 700;">3 to 6 Months</p>
                    </div>
                    <div style="border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 12px;">
                        <span style="font-size: 12px; color: var(--color-secondary); text-transform: uppercase;">Headquarters Support</span>
                        <p style="font-size: 16px; font-weight: 700;">Full Operations & Digital Marketing</p>
                    </div>
                    <div>
                        <span style="font-size: 12px; color: var(--color-secondary); text-transform: uppercase;">Available Territories</span>
                        <p style="font-size: 16px; font-weight: 700;">London, Midlands, South East & North</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
