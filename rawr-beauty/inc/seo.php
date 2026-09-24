<?php
/**
 * Built-in Lightweight SEO & Schema.org Structured Data
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

/**
 * Output LocalBusiness and BeautySalon Schema
 */
function rawr_output_schema_json_ld() {
    if (!is_front_page()) return;

    $schema = array(
        '@context'        => 'https://schema.org',
        '@type'           => 'BeautySalon',
        'name'            => get_bloginfo('name'),
        'description'     => get_bloginfo('description'),
        'url'             => home_url('/'),
        'telephone'       => '07398926226',
        'priceRange'      => '££',
        'image'           => get_site_icon_url(),
        'address'         => array(
            '@type'          => 'PostalAddress',
            'addressCountry' => 'UK',
        ),
        'openingHoursSpecification' => array(
            array(
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
                'opens'     => '09:00',
                'closes'    => '20:00',
            ),
        ),
    );

    echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>' . "\n";
}
add_action('wp_head', 'rawr_output_schema_json_ld');
