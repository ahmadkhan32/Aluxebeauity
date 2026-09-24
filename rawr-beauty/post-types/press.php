<?php
/**
 * Register Press & Media Custom Post Type
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_register_press_cpt() {
    register_post_type('press', array(
        'labels' => array(
            'name'          => __('Press & Media', 'rawr-beauty'),
            'singular_name' => __('Press Article', 'rawr-beauty'),
            'menu_name'     => __('Press / PR', 'rawr-beauty'),
            'all_items'     => __('All Press Features', 'rawr-beauty'),
        ),
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'press', 'with_front' => false),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-awards',
    ));
}
add_action('init', 'rawr_register_press_cpt');
