<?php
/**
 * Register Testimonials Custom Post Type
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_register_testimonials_cpt() {
    register_post_type('testimonial', array(
        'labels' => array(
            'name'          => __('Testimonials', 'rawr-beauty'),
            'singular_name' => __('Testimonial', 'rawr-beauty'),
            'menu_name'     => __('Client Reviews', 'rawr-beauty'),
            'all_items'     => __('All Reviews', 'rawr-beauty'),
        ),
        'public'        => true,
        'has_archive'   => false,
        'supports'      => array('title', 'editor', 'thumbnail'),
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-star-filled',
    ));
}
add_action('init', 'rawr_register_testimonials_cpt');
