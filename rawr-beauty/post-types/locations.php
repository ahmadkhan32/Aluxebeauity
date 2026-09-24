<?php
/**
 * Register Location Custom Post Type
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

function rawr_register_locations_cpt() {
    register_post_type('location', array(
        'labels' => array(
            'name'                  => __('Locations', 'rawr-beauty'),
            'singular_name'         => __('Location', 'rawr-beauty'),
            'menu_name'             => __('Salons & Locations', 'rawr-beauty'),
            'add_new'               => __('Add New Location', 'rawr-beauty'),
            'add_new_item'          => __('Add New Salon Location', 'rawr-beauty'),
            'edit_item'             => __('Edit Location', 'rawr-beauty'),
            'all_items'             => __('All 26+ Locations', 'rawr-beauty'),
        ),
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'locations', 'with_front' => false),
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-location',
    ));
}
add_action('init', 'rawr_register_locations_cpt');

/**
 * Add Location Meta Box for Status, Address, Phone & Booking
 */
function rawr_location_meta_boxes() {
    add_meta_box(
        'rawr_location_details',
        __('Salon Branch Details & Status', 'rawr-beauty'),
        'rawr_render_location_meta_box',
        'location',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'rawr_location_meta_boxes');

function rawr_render_location_meta_box($post) {
    wp_nonce_field('rawr_save_location_meta', 'rawr_location_nonce');
    $status      = get_post_meta($post->ID, '_rawr_location_status', true) ?: 'Active';
    $address     = get_post_meta($post->ID, '_rawr_location_address', true);
    $postcode    = get_post_meta($post->ID, '_rawr_location_postcode', true);
    $phone       = get_post_meta($post->ID, '_rawr_location_phone', true) ?: '07398 926226';
    $hours       = get_post_meta($post->ID, '_rawr_location_hours', true) ?: 'Mon–Sat: 9am–7pm, Sun: 10am–5pm';
    $booking_url = get_post_meta($post->ID, '_rawr_location_booking_url', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="rawr_location_status"><?php _e('Operational Status', 'rawr-beauty'); ?></label></th>
            <td>
                <select name="rawr_location_status" id="rawr_location_status" class="regular-text">
                    <option value="Active" <?php selected($status, 'Active'); ?>><?php _e('Active / Open', 'rawr-beauty'); ?></option>
                    <option value="Coming Soon" <?php selected($status, 'Coming Soon'); ?>><?php _e('Coming Soon', 'rawr-beauty'); ?></option>
                    <option value="Temporarily Closed" <?php selected($status, 'Temporarily Closed'); ?>><?php _e('Temporarily Closed', 'rawr-beauty'); ?></option>
                    <option value="Permanently Closed" <?php selected($status, 'Permanently Closed'); ?>><?php _e('Permanently Closed', 'rawr-beauty'); ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="rawr_location_address"><?php _e('Full Address', 'rawr-beauty'); ?></label></th>
            <td><input type="text" name="rawr_location_address" id="rawr_location_address" value="<?php echo esc_attr($address); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="rawr_location_postcode"><?php _e('Postcode', 'rawr-beauty'); ?></label></th>
            <td><input type="text" name="rawr_location_postcode" id="rawr_location_postcode" value="<?php echo esc_attr($postcode); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="rawr_location_phone"><?php _e('Phone Number', 'rawr-beauty'); ?></label></th>
            <td><input type="text" name="rawr_location_phone" id="rawr_location_phone" value="<?php echo esc_attr($phone); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="rawr_location_hours"><?php _e('Opening Hours', 'rawr-beauty'); ?></label></th>
            <td><input type="text" name="rawr_location_hours" id="rawr_location_hours" value="<?php echo esc_attr($hours); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="rawr_location_booking_url"><?php _e('Direct Booking URL / WhatsApp', 'rawr-beauty'); ?></label></th>
            <td><input type="url" name="rawr_location_booking_url" id="rawr_location_booking_url" value="<?php echo esc_attr($booking_url); ?>" class="large-text" placeholder="https://wa.me/447398926226" /></td>
        </tr>
    </table>
    <?php
}

function rawr_save_location_meta($post_id) {
    if (!isset($_POST['rawr_location_nonce']) || !wp_verify_nonce($_POST['rawr_location_nonce'], 'rawr_save_location_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    $fields = array('status', 'address', 'postcode', 'phone', 'hours', 'booking_url');
    foreach ($fields as $field) {
        if (isset($_POST['rawr_location_' . $field])) {
            update_post_meta($post_id, '_rawr_location_' . $field, sanitize_text_field($_POST['rawr_location_' . $field]));
        }
    }
}
add_action('save_post_location', 'rawr_save_location_meta');
