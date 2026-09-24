<?php
/**
 * Register Location Region Taxonomy
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_register_location_taxonomies() {
    register_taxonomy('location_region', array('location'), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => __('Regions & Cities', 'rawr-beauty'),
            'singular_name' => __('Region', 'rawr-beauty'),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'region'),
        'show_in_rest'      => true,
    ));
}
add_action('init', 'rawr_register_location_taxonomies');
