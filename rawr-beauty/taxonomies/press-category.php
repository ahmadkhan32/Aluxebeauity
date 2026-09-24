<?php
/**
 * Register Press Category Taxonomy
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_register_press_taxonomies() {
    register_taxonomy('press_category', array('press'), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => __('Press Categories', 'rawr-beauty'),
            'singular_name' => __('Press Category', 'rawr-beauty'),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'press-category'),
        'show_in_rest'      => true,
    ));
}
add_action('init', 'rawr_register_press_taxonomies');
