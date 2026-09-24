<?php
/**
 * Footer Copyright & Legal Strip
 *
 * @package RAWR_Beauty
 */
?>
<div class="rawr-footer-bottom">
    <div class="rawr-container">
        <div class="rawr-footer-bottom-inner">
            <p class="rawr-copyright">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved. Enhance Your Beauty, Embrace Your Glow.', 'rawr-beauty'); ?>
            </p>
            <div class="rawr-legal-links">
                <a href="<?php echo esc_url(home_url('/privacy')); ?>"><?php esc_html_e('Privacy Policy', 'rawr-beauty'); ?></a>
                <span>·</span>
                <a href="<?php echo esc_url(home_url('/terms')); ?>"><?php esc_html_e('Terms of Service', 'rawr-beauty'); ?></a>
                <span>·</span>
                <a href="<?php echo esc_url(home_url('/covid-policy')); ?>"><?php esc_html_e('Safety Policy', 'rawr-beauty'); ?></a>
            </div>
        </div>
    </div>
</div>
