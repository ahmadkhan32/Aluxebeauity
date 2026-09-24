<?php
/**
 * Register Course Category Taxonomy
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_register_course_taxonomies() {
    register_taxonomy('course_category', array('course'), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => __('Course Disciplines', 'rawr-beauty'),
            'singular_name' => __('Course Discipline', 'rawr-beauty'),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'course-category'),
        'show_in_rest'      => true,
    ));
}
add_action('init', 'rawr_register_course_taxonomies');
