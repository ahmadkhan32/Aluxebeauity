<?php
/**
 * The Front Page template
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main home-main">
    <!-- Hero Section with Animated Floating Cards -->
    <?php get_template_part('template-parts/home/hero'); ?>

    <!-- Signature Booking CTAs (Lashes, Brows, Nails, Facials) -->
    <?php get_template_part('template-parts/home/booking-cta'); ?>

    <!-- Featured In Press / Media Badges -->
    <?php get_template_part('template-parts/home/featured-in'); ?>

    <!-- Gift Cards & Seasonal Treats -->
    <?php get_template_part('template-parts/home/gift-card'); ?>

    <!-- Featured WooCommerce Products & Beauty Aftercare -->
    <?php get_template_part('template-parts/home/featured-products'); ?>

    <!-- Interactive React Location Finder & Branch Status -->
    <section id="location-finder" class="rawr-section rawr-section-locations">
        <div class="rawr-container">
            <div class="rawr-section-header text-center">
                <span class="rawr-badge"><?php esc_html_e('26+ UK Locations & Mobile Services', 'rawr-beauty'); ?></span>
                <h2 class="rawr-title"><?php esc_html_e('Find Your Nearest RAWR Salon', 'rawr-beauty'); ?></h2>
                <p class="rawr-subtitle"><?php esc_html_e('Search by postcode, town or status to locate open salons and book directly.', 'rawr-beauty'); ?></p>
            </div>
            <!-- React LocationFinder Mount Point -->
            <div id="rawr-location-app" data-api-endpoint="<?php echo esc_url(rest_url('rawr/v1/locations')); ?>"></div>
        </div>
    </section>

    <!-- Hiring / Careers Spotlight -->
    <?php get_template_part('template-parts/home/hiring'); ?>

    <!-- Franchise Opportunity Highlight -->
    <?php get_template_part('template-parts/home/franchise'); ?>

    <!-- Expert Beauty Advice & Journal -->
    <?php get_template_part('template-parts/home/expert-tips'); ?>

    <!-- Social Instagram Feed -->
    <?php get_template_part('template-parts/home/instagram'); ?>
</main>

<?php
get_footer();
