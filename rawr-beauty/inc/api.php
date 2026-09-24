<?php
/**
 * REST API Endpoints for RAWR Beauty Theme
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

add_action('rest_api_init', function () {
    // GET Locations
    register_rest_route('rawr/v1', '/locations', array(
        'methods'             => 'GET',
        'callback'            => 'rawr_api_get_locations',
        'permission_callback' => '__return_true',
    ));

    // GET Services
    register_rest_route('rawr/v1', '/services', array(
        'methods'             => 'GET',
        'callback'            => 'rawr_api_get_services',
        'permission_callback' => '__return_true',
    ));

    // GET Careers
    register_rest_route('rawr/v1', '/careers', array(
        'methods'             => 'GET',
        'callback'            => 'rawr_api_get_careers',
        'permission_callback' => '__return_true',
    ));

    // POST Franchise Inquiry
    register_rest_route('rawr/v1', '/franchise-inquiry', array(
        'methods'             => 'POST',
        'callback'            => 'rawr_api_franchise_inquiry',
        'permission_callback' => '__return_true',
    ));
});

/**
 * Return list of locations (Mock or CPT query)
 */
function rawr_api_get_locations($request) {
    $search = $request->get_param('search');

    // Query custom post type 'location'
    $args = array(
        'post_type'      => 'location',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    );

    if (!empty($search)) {
        $args['s'] = sanitize_text_field($search);
    }

    $query = new WP_Query($args);
    $results = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $id = get_the_ID();
            $status = get_post_meta($id, '_rawr_location_status', true) ?: 'Active';

            $results[] = array(
                'id'           => $id,
                'name'         => get_the_title(),
                'slug'         => get_post_field('post_name', $id),
                'address'      => get_post_meta($id, '_rawr_location_address', true) ?: get_the_excerpt(),
                'postcode'     => get_post_meta($id, '_rawr_location_postcode', true) ?: '',
                'phone'        => get_post_meta($id, '_rawr_location_phone', true) ?: '07398 926226',
                'hours'        => get_post_meta($id, '_rawr_location_hours', true) ?: 'Mon–Sat: 9am–7pm, Sun: 10am–5pm',
                'status'       => $status,
                'booking_url'  => get_post_meta($id, '_rawr_location_booking_url', true) ?: rawr_whatsapp_url('Hi! I would like to book an appointment at ' . get_the_title()),
                'image'        => get_the_post_thumbnail_url($id, 'rawr-card') ?: '',
                'permalink'    => get_permalink($id),
            );
        }
        wp_reset_postdata();
    }

    // Default pre-populated RAWR 26 UK Locations if no DB posts exist yet
    if (empty($results)) {
        $sample_branches = array(
            array('name' => 'Colchester', 'address' => 'Primark 2nd Floor, 9-11 High Street', 'postcode' => 'CO1 1DA', 'status' => 'Active'),
            array('name' => 'Canterbury', 'address' => 'High Street Centre', 'postcode' => 'CT1 2HX', 'status' => 'Active'),
            array('name' => 'Coventry', 'address' => 'Broadgate Shopping Arcade', 'postcode' => 'CV1 1NF', 'status' => 'Active'),
            array('name' => 'Waltham Cross', 'address' => 'Pavilion Shopping Centre', 'postcode' => 'EN8 7BY', 'status' => 'Active'),
            array('name' => 'Norwich', 'address' => 'Castle Quarter Shopping Centre', 'postcode' => 'NR1 3DD', 'status' => 'Active'),
            array('name' => 'Windsor', 'address' => 'Windsor Royal Station Mall', 'postcode' => 'SL4 1PJ', 'status' => 'Active'),
            array('name' => 'Reading', 'address' => 'Broad Street Mall', 'postcode' => 'RG1 7QE', 'status' => 'Temporarily Closed'),
            array('name' => 'London Oxford Street', 'address' => 'Flagship Primark Suite, 14-28 Oxford St', 'postcode' => 'W1D 1AU', 'status' => 'Active'),
            array('name' => 'Birmingham Central', 'address' => 'Moor Street Pavilion', 'postcode' => 'B5 4BU', 'status' => 'Active'),
            array('name' => 'Manchester Market St', 'address' => 'Market Street Boutique', 'postcode' => 'M1 1PW', 'status' => 'Active'),
            array('name' => 'Doorstep Mobile Service', 'address' => 'Complimentary home visits within 2 miles', 'postcode' => 'UK All', 'status' => 'Active'),
        );

        foreach ($sample_branches as $idx => $b) {
            $results[] = array(
                'id'          => $idx + 1,
                'name'        => $b['name'],
                'slug'        => sanitize_title($b['name']),
                'address'     => $b['address'],
                'postcode'    => $b['postcode'],
                'phone'       => '07398 926226',
                'hours'       => 'Mon–Sat: 9:00 AM – 7:00 PM',
                'status'      => $b['status'],
                'booking_url' => rawr_whatsapp_url('Hi! I would like to book an appointment at ' . $b['name']),
                'image'       => '',
                'permalink'   => home_url('/locations/' . sanitize_title($b['name'])),
            );
        }
    }

    return rest_ensure_response($results);
}

/**
 * Return services list
 */
function rawr_api_get_services() {
    $services = array(
        array(
            'id' => 'nails',
            'name' => 'Nails & Manicures',
            'icon' => '💅',
            'items' => array('Gel Manicure (£25)', 'Classic Pedicure (£30)', 'Acrylic Extensions (£40)', 'Nail Art (£10)'),
        ),
        array(
            'id' => 'brows',
            'name' => 'Brows & Threading',
            'icon' => '🪡',
            'items' => array('Eyebrow Threading (£5)', 'Full Face Threading (£18)', 'Brow Tint (£10)', 'Brow Lamination (£35)'),
        ),
        array(
            'id' => 'lashes',
            'name' => 'Eyelashes & Extensions',
            'icon' => '👁️',
            'items' => array('Classic Lash Extensions (£45)', 'Russian Volume (£65)', 'Lash Lift & Tint (£35)'),
        ),
        array(
            'id' => 'facials',
            'name' => 'Facials & Hydra Glow',
            'icon' => '✨',
            'items' => array('Face Clean Up (£15)', 'Gold Facial (£30)', 'Hydra Facial (£60)', 'Carbon Facial (£50)'),
        ),
        array(
            'id' => 'laser',
            'name' => 'Laser Hair Removal',
            'icon' => '⚡',
            'items' => array('Upper Lip (£15)', 'Full Face (£50)', 'Underarms (£25)', 'Full Legs (£120)'),
        ),
    );

    return rest_ensure_response($services);
}

/**
 * Return careers list
 */
function rawr_api_get_careers() {
    return rest_ensure_response(array(
        array('title' => 'Eyelash Technician', 'location' => 'Windsor', 'type' => 'Full Time'),
        array('title' => 'Beauty Therapist', 'location' => 'Norwich', 'type' => 'Part Time'),
        array('title' => 'Nail Technician', 'location' => 'Colchester', 'type' => 'Full Time'),
        array('title' => 'Dual Site Salon Manager', 'location' => 'London Oxford St', 'type' => 'Full Time'),
    ));
}

/**
 * Handle Franchise Inquiries
 */
function rawr_api_franchise_inquiry($request) {
    $params = $request->get_json_params();
    // Sanitize
    $name  = sanitize_text_field($params['name'] ?? '');
    $phone = sanitize_text_field($params['phone'] ?? '');
    $city  = sanitize_text_field($params['city'] ?? '');

    return rest_ensure_response(array(
        'success' => true,
        'message' => 'Franchise inquiry registered successfully. WhatsApp prompt created.',
        'whatsapp_redirect' => rawr_whatsapp_url("Hi Ayesha! I submitted a franchise inquiry for $city. My name is $name ($phone)."),
    ));
}
