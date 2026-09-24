<?php
/**
 * Mobile Navigation Drawer Mount & Overlay
 *
 * @package RAWR_Beauty
 */
?>
<div id="rawr-mobile-drawer" class="rawr-mobile-drawer">
    <div class="rawr-mobile-drawer-header">
        <span class="rawr-logo-script">A Luxe Beauty</span>
        <button type="button" class="rawr-close-drawer" id="rawr-mobile-close-btn">&times;</button>
    </div>
    <div class="rawr-mobile-drawer-body">
        <nav class="rawr-mobile-nav">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'rawr-beauty'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/services')); ?>"><?php esc_html_e('Services & Prices', 'rawr-beauty'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/locations')); ?>"><?php esc_html_e('Find a Salon / Locations', 'rawr-beauty'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/booking')); ?>"><?php esc_html_e('Book Appointment', 'rawr-beauty'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/shop')); ?>"><?php esc_html_e('Beauty Shop', 'rawr-beauty'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>"><?php esc_html_e('About RAWR', 'rawr-beauty'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/franchise')); ?>"><?php esc_html_e('Franchise Network', 'rawr-beauty'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/careers')); ?>"><?php esc_html_e('Careers', 'rawr-beauty'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/training')); ?>"><?php esc_html_e('Academy & Education', 'rawr-beauty'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Contact', 'rawr-beauty'); ?></a></li>
            </ul>
        </nav>
        <div style="margin-top: 30px; display: flex; flex-direction: column; gap: 12px;">
            <a href="<?php echo esc_url(rawr_whatsapp_url()); ?>" class="rawr-btn rawr-btn-whatsapp" style="text-align: center;">
                💬 <?php esc_html_e('Chat on WhatsApp', 'rawr-beauty'); ?>
            </a>
            <a href="tel:07398926226" class="rawr-btn rawr-btn-outline" style="text-align: center;">
                📞 07477 154228
            </a>
        </div>
    </div>
</div>
<div id="rawr-mobile-backdrop" class="rawr-mobile-backdrop"></div>
