<?php
/**
 * Register Service Category Taxonomy
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_register_service_taxonomies() {
    register_taxonomy('service_category', array('service'), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => __('Service Categories', 'rawr-beauty'),
            'singular_name' => __('Service Category', 'rawr-beauty'),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'service-category'),
        'show_in_rest'      => true,
    ));
}
add_action('init', 'rawr_register_service_taxonomies');
