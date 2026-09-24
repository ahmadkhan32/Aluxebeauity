<?php
/**
 * Register Service Custom Post Type
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_register_services_cpt() {
    register_post_type('service', array(
        'labels' => array(
            'name'          => __('Services', 'rawr-beauty'),
            'singular_name' => __('Service', 'rawr-beauty'),
            'menu_name'     => __('Salon Services', 'rawr-beauty'),
            'add_new_item'  => __('Add New Treatment', 'rawr-beauty'),
            'all_items'     => __('All Treatments', 'rawr-beauty'),
        ),
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'services', 'with_front' => false),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-heart',
    ));
}
add_action('init', 'rawr_register_services_cpt');

/**
 * Add Meta box for Service Price and Booking Link
 */
function rawr_service_meta_boxes() {
    add_meta_box('rawr_service_pricing', __('Treatment Pricing & Timing', 'rawr-beauty'), 'rawr_render_service_meta_box', 'service', 'side');
}
add_action('add_meta_boxes', 'rawr_service_meta_boxes');

function rawr_render_service_meta_box($post) {
    wp_nonce_field('rawr_save_service_meta', 'rawr_service_nonce');
    $price = get_post_meta($post->ID, '_rawr_service_price', true);
    $time  = get_post_meta($post->ID, '_rawr_service_duration', true) ?: '30 min';
    ?>
    <p>
        <label for="rawr_service_price"><strong><?php _e('Price (£):', 'rawr-beauty'); ?></strong></label><br>
        <input type="text" name="rawr_service_price" id="rawr_service_price" value="<?php echo esc_attr($price); ?>" class="widefat" placeholder="e.g. 30" />
    </p>
    <p>
        <label for="rawr_service_duration"><strong><?php _e('Duration:', 'rawr-beauty'); ?></strong></label><br>
        <input type="text" name="rawr_service_duration" id="rawr_service_duration" value="<?php echo esc_attr($time); ?>" class="widefat" placeholder="e.g. 45 min" />
    </p>
    <?php
}

function rawr_save_service_meta($post_id) {
    if (!isset($_POST['rawr_service_nonce']) || !wp_verify_nonce($_POST['rawr_service_nonce'], 'rawr_save_service_meta')) return;
    if (isset($_POST['rawr_service_price'])) update_post_meta($post_id, '_rawr_service_price', sanitize_text_field($_POST['rawr_service_price']));
    if (isset($_POST['rawr_service_duration'])) update_post_meta($post_id, '_rawr_service_duration', sanitize_text_field($_POST['rawr_service_duration']));
}
add_action('save_post_service', 'rawr_save_service_meta');
