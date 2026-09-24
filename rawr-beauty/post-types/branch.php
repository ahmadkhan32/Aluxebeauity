<?php
/**
 * Register Branch Custom Post Type
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

function rawr_register_branch_post_type() {
    register_post_type( 'branch', array(
        'labels' => array(
            'name'               => __( 'Branches', 'rawr-beauty' ),
            'singular_name'      => __( 'Branch', 'rawr-beauty' ),
            'menu_name'          => __( 'Salon Branches', 'rawr-beauty' ),
            'add_new'            => __( 'Add New Branch', 'rawr-beauty' ),
            'add_new_item'       => __( 'Add New Salon Branch', 'rawr-beauty' ),
            'edit_item'          => __( 'Edit Branch', 'rawr-beauty' ),
            'all_items'          => __( 'All 26+ Branches', 'rawr-beauty' ),
            'search_items'       => __( 'Search Branches', 'rawr-beauty' ),
        ),
        'public'       => true,
        'show_in_rest' => true,
        'has_archive'  => true,
        'rewrite'      => array(
            'slug'       => 'branches',
            'with_front' => false,
        ),
        'supports'     => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'custom-fields',
        ),
        'menu_icon'    => 'dashicons-location',
    ));
}
add_action( 'init', 'rawr_register_branch_post_type' );

/**
 * Branch Meta Boxes
 */
function rawr_branch_meta_boxes() {
    add_meta_box(
        'rawr_branch_details',
        __( 'Branch Information & Location Settings', 'rawr-beauty' ),
        'rawr_render_branch_meta_box',
        'branch',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'rawr_branch_meta_boxes' );

function rawr_render_branch_meta_box( $post ) {
    wp_nonce_field( 'rawr_save_branch_meta', 'rawr_branch_nonce' );
    $address     = get_post_meta( $post->ID, 'branch_address', true );
    $phone       = get_post_meta( $post->ID, 'branch_phone', true ) ?: '07398 926226';
    $hours       = get_post_meta( $post->ID, 'opening_hours', true ) ?: "Mon–Sat: 9am–7pm\nSun: 10am–5pm";
    $booking_url = get_post_meta( $post->ID, 'booking_url', true ) ?: home_url( '/book/?branch=' . $post->post_name );
    $lat         = get_post_meta( $post->ID, 'latitude', true );
    $lng         = get_post_meta( $post->ID, 'longitude', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="branch_address"><?php _e( 'Full Address', 'rawr-beauty' ); ?></label></th>
            <td><input type="text" name="branch_address" id="branch_address" class="large-text" value="<?php echo esc_attr( $address ); ?>"></td>
        </tr>
        <tr>
            <th><label for="branch_phone"><?php _e( 'Contact Phone', 'rawr-beauty' ); ?></label></th>
            <td><input type="text" name="branch_phone" id="branch_phone" class="regular-text" value="<?php echo esc_attr( $phone ); ?>"></td>
        </tr>
        <tr>
            <th><label for="opening_hours"><?php _e( 'Opening Hours', 'rawr-beauty' ); ?></label></th>
            <td><textarea name="opening_hours" id="opening_hours" rows="3" class="large-text"><?php echo esc_textarea( $hours ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="booking_url"><?php _e( 'Direct Booking URL', 'rawr-beauty' ); ?></label></th>
            <td><input type="url" name="booking_url" id="booking_url" class="large-text" value="<?php echo esc_url( $booking_url ); ?>"></td>
        </tr>
        <tr>
            <th><label for="latitude"><?php _e( 'Latitude & Longitude', 'rawr-beauty' ); ?></label></th>
            <td>
                <input type="text" name="latitude" id="latitude" placeholder="51.5074" value="<?php echo esc_attr( $lat ); ?>" style="width:140px;">
                <input type="text" name="longitude" id="longitude" placeholder="-0.1278" value="<?php echo esc_attr( $lng ); ?>" style="width:140px;">
            </td>
        </tr>
    </table>
    <?php
}

function rawr_save_branch_meta_data( $post_id ) {
    if ( ! isset( $_POST['rawr_branch_nonce'] ) || ! wp_verify_nonce( $_POST['rawr_branch_nonce'], 'rawr_save_branch_meta' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
    $fields = array( 'branch_address', 'branch_phone', 'opening_hours', 'booking_url', 'latitude', 'longitude' );
    foreach ( $fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[ $field ] ) );
        }
    }
}
add_action( 'save_post_branch', 'rawr_save_branch_meta_data' );
