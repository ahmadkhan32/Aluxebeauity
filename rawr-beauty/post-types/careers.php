<?php
/**
 * Register Careers / Vacancies Custom Post Type
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_register_careers_cpt() {
    register_post_type('career', array(
        'labels' => array(
            'name'          => __('Careers', 'rawr-beauty'),
            'singular_name' => __('Career Vacancy', 'rawr-beauty'),
            'menu_name'     => __('Careers & Hiring', 'rawr-beauty'),
            'add_new_item'  => __('Add Job Vacancy', 'rawr-beauty'),
            'all_items'     => __('All Vacancies', 'rawr-beauty'),
        ),
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'careers', 'with_front' => false),
        'supports'      => array('title', 'editor', 'excerpt'),
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-businessman',
    ));
}
add_action('init', 'rawr_register_careers_cpt');
