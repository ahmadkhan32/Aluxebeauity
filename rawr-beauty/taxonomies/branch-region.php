<?php
/**
 * Branch Region Taxonomy
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

function rawr_register_branch_region_taxonomy() {
    register_taxonomy( 'branch-region', array( 'branch', 'location' ), array(
        'labels' => array(
            'name'          => __( 'Branch Regions', 'rawr-beauty' ),
            'singular_name' => __( 'Region', 'rawr-beauty' ),
            'search_items'  => __( 'Search Regions', 'rawr-beauty' ),
            'all_items'     => __( 'All Regions', 'rawr-beauty' ),
            'edit_item'     => __( 'Edit Region', 'rawr-beauty' ),
            'add_new_item'  => __( 'Add New Region', 'rawr-beauty' ),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'branch-region', 'with_front' => false ),
    ));
}
add_action( 'init', 'rawr_register_branch_region_taxonomy' );
