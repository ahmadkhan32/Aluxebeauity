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
                    <span class="rawr-logo-script">A</span>
                    <span class="rawr-logo-sub">LUXE BEAUTY</span>
                </div>
                <p style="color: rgba(255,255,255,0.7); font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                    <?php esc_html_e('Enhance your beauty, embrace your glow. Award-winning treatments across 26 UK locations and doorstep mobile therapy within 2 miles.', 'rawr-beauty'); ?>
                </p>
                <div class="rawr-footer-contact-info">
                    <p>📞 <a href="tel:07477154228">07477 154228</a></p>
                    <p>💬 <a href="<?php echo esc_url(rawr_whatsapp_url()); ?>" target="_blank" rel="noopener noreferrer">WhatsApp Direct Booking</a></p>
                </div>
            </div>

            <!-- Treatments Menu Column -->
            <div class="rawr-footer-col">
                <h4 class="rawr-footer-title"><?php esc_html_e('Treatments', 'rawr-beauty'); ?></h4>
                <ul class="rawr-footer-links">
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('All Services & Prices', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Eyebrows & Threading', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Eyelash Extensions', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Gel Nails & BIAB', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Hydra Facials & Skin', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/packages/')); ?>"><?php esc_html_e('Bridal & Pamper Packages', 'rawr-beauty'); ?></a></li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="rawr-footer-col">
                <h4 class="rawr-footer-title"><?php esc_html_e('Explore', 'rawr-beauty'); ?></h4>
                <ul class="rawr-footer-links">
                    <li><a href="<?php echo esc_url(home_url('/branches/')); ?>"><?php esc_html_e('26 UK Branches', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/shop/')); ?>"><?php esc_html_e('Shop 🛒', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/packages/')); ?>"><?php esc_html_e('Packages', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/academy/')); ?>"><?php esc_html_e('Academy Courses', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/careers/')); ?>"><?php esc_html_e('Salon Careers', 'rawr-beauty'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/franchise/')); ?>"><?php esc_html_e('Franchise Concessions', 'rawr-beauty'); ?></a></li>
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
