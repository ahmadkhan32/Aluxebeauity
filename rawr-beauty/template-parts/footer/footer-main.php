<?php
/**
 * Main Footer Columns
 *
 * @package RAWR_Beauty
 */
?>
<footer class="rawr-main-footer">
    <div class="rawr-container">
        <div class="rawr-footer-grid">
            <!-- Brand Column -->
            <div class="rawr-footer-col">
                <div class="rawr-footer-brand">
                    <span class="rawr-logo-script">RAWR</span>
                    <span class="rawr-logo-sub">BEAUTY</span>
                </div>
                <p style="color: rgba(255,255,255,0.7); font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                    <?php esc_html_e('Enhance your beauty, embrace your glow. Award-winning treatments across 26 UK locations and doorstep mobile therapy within 2 miles.', 'rawr-beauty'); ?>
                </p>
                <div class="rawr-footer-contact-info">
                    <p>📞 <a href="tel:07398926226">07398 926226</a></p>
                    <p>💬 <a href="<?php echo esc_url(rawr_whatsapp_url()); ?>" target="_blank" rel="noopener noreferrer">WhatsApp Direct Booking</a></p>
                </div>
            </div>

            <!-- Treatments Menu Column -->
            <div class="rawr-footer-col">
                <h4 class="rawr-footer-title"><?php esc_html_e('Treatments', 'rawr-beauty'); ?></h4>
                <ul class="rawr-footer-links">
                    <li><a href="<?php echo esc_url(home_url('/services#brows')); ?>"><?php esc_html_e('Eyebrows & Threading', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services#lashes')); ?>"><?php esc_html_e('Eyelash Extensions', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services#nails')); ?>"><?php esc_html_e('Gel Nails & Pedicures', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services#facials')); ?>"><?php esc_html_e('Hydra Facials & Glow', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services#laser')); ?>"><?php esc_html_e('Laser Hair Removal', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/booking')); ?>"><?php esc_html_e('Bridal Packages', 'rawr-beauty'); ?></a></li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="rawr-footer-col">
                <h4 class="rawr-footer-title"><?php esc_html_e('Explore', 'rawr-beauty'); ?></h4>
                <ul class="rawr-footer-links">
                    <li><a href="<?php echo esc_url(home_url('/locations')); ?>"><?php esc_html_e('All 26 UK Salons', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/shop')); ?>"><?php esc_html_e('Beauty Product Shop', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/training')); ?>"><?php esc_html_e('Academy & Education', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/careers')); ?>"><?php esc_html_e('Therapist Careers', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/franchise')); ?>"><?php esc_html_e('Franchise Opportunities', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>"><?php esc_html_e('About Our Mission', 'rawr-beauty'); ?></a></li>
                </ul>
            </div>

            <!-- Legal & Customer Care -->
            <div class="rawr-footer-col">
                <h4 class="rawr-footer-title"><?php esc_html_e('Customer Care', 'rawr-beauty'); ?></h4>
                <ul class="rawr-footer-links">
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Contact Us', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/faq')); ?>"><?php esc_html_e('FAQs & Hygiene', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/privacy')); ?>"><?php esc_html_e('Privacy & Cookies', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/delivery-returns')); ?>"><?php esc_html_e('Delivery & Returns', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/covid-policy')); ?>"><?php esc_html_e('Hygiene & Safety Policy', 'rawr-beauty'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
