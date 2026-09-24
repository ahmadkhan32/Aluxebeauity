<?php
/**
 * Main Navigation Header Template Part
 *
 * @package RAWR_Beauty
 */
?>
<header id="masthead" class="site-header rawr-main-header">
    <div class="rawr-container">
        <div class="rawr-header-inner">
            <!-- Brand Logo -->
            <div class="site-branding">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="rawr-logo-link" rel="home">
                    <span class="rawr-logo-script">A</span>
                    <span class="rawr-logo-sub">LUXE BEAUTY</span>
                </a>
            </div>

            <!-- Primary Navigation Menu -->
            <nav id="site-navigation" class="main-navigation">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'rawr-nav-menu',
                    ));
                } else {
                    ?>
                    <ul class="rawr-nav-menu">
                        <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Services', 'rawr-beauty'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/branches/')); ?>"><?php esc_html_e('26 Branches', 'rawr-beauty'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/shop/')); ?>"><?php esc_html_e('Shop 🛒', 'rawr-beauty'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/packages/')); ?>"><?php esc_html_e('Packages', 'rawr-beauty'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/academy/')); ?>"><?php esc_html_e('Academy', 'rawr-beauty'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/careers/')); ?>"><?php esc_html_e('Careers', 'rawr-beauty'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/franchise/')); ?>"><?php esc_html_e('Franchise', 'rawr-beauty'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog/')); ?>"><?php esc_html_e('Blog', 'rawr-beauty'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="rawr-btn rawr-btn-primary rawr-btn-sm"><?php esc_html_e('Book Now', 'rawr-beauty'); ?></a></li>
                    </ul>
                    <?php
                }
                ?>
            </nav>

            <!-- Header Quick Actions (Search, Cart, Mobile Toggle) -->
            <div class="rawr-header-actions">
                <a href="<?php echo esc_url(rawr_whatsapp_url()); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-whatsapp rawr-btn-sm header-wa-btn">
                    💬 <?php esc_html_e('WhatsApp', 'rawr-beauty'); ?>
                </a>

                <button type="button" class="rawr-mobile-toggle" aria-label="<?php esc_attr_e('Toggle Menu', 'rawr-beauty'); ?>" id="rawr-mobile-menu-btn">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </div>
</header>
