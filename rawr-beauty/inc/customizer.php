<?php
/**
 * Theme Customizer Settings
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_customize_register($wp_customize) {
    // Brand Settings Section
    $wp_customize->add_section('rawr_brand_settings', array(
        'title'    => __('RAWR Beauty Settings', 'rawr-beauty'),
        'priority' => 30,
    ));

    // WhatsApp Phone Number
    $wp_customize->add_setting('rawr_whatsapp_phone', array(
        'default'           => '447398926226',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rawr_whatsapp_phone', array(
        'label'    => __('WhatsApp & Contact Phone', 'rawr-beauty'),
        'section'  => 'rawr_brand_settings',
        'type'     => 'text',
    ));

    // Topbar Announcement Text
    $wp_customize->add_setting('rawr_announcement_text', array(
        'default'           => '🌟 10% OFF all services Mon–Wed · Free home service within 2 miles · 📞 07398 926226',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rawr_announcement_text', array(
        'label'    => __('Announcement Bar Text', 'rawr-beauty'),
        'section'  => 'rawr_brand_settings',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'rawr_customize_register');
