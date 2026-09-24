<?php
/**
 * Register Courses / Academy Custom Post Type
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_register_courses_cpt() {
    register_post_type('course', array(
        'labels' => array(
            'name'          => __('Training Courses', 'rawr-beauty'),
            'singular_name' => __('Course', 'rawr-beauty'),
            'menu_name'     => __('Training Academy', 'rawr-beauty'),
            'add_new_item'  => __('Add New Course', 'rawr-beauty'),
            'all_items'     => __('All Academy Courses', 'rawr-beauty'),
        ),
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'training/courses', 'with_front' => false),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-welcome-learn-more',
    ));
}
add_action('init', 'rawr_register_courses_cpt');
