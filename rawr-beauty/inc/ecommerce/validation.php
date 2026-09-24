<?php
/**
 * Checkout & Quick Buy Validation Utilities
 *
 * @package RAWR_Beauty\Ecommerce
 */

defined('ABSPATH') || exit;

/**
 * Validate UK Postcode format
 */
function rawr_is_valid_uk_postcode($postcode) {
    $clean = strtoupper(str_replace(' ', '', $postcode));
    $pattern = '/^([A-Z]{1,2}[0-9][A-Z0-9]?)[0-9][A-Z]{2}$/';
    return (bool) preg_match($pattern, $clean);
}

/**
 * Validate UK Phone format
 */
function rawr_is_valid_uk_phone($phone) {
    $clean = preg_replace('/[^0-9]/', '', $phone);
    return strlen($clean) >= 10 && strlen($clean) <= 12;
}

/**
 * List of supported major UK Cities
 */
function rawr_get_uk_cities() {
    return array(
        'London', 'Birmingham', 'Manchester', 'Liverpool', 'Leeds',
        'Sheffield', 'Bristol', 'Glasgow', 'Edinburgh', 'Cardiff',
        'Belfast', 'Newcastle upon Tyne', 'Nottingham', 'Leicester',
        'Coventry', 'Bradford', 'Southampton', 'Portsmouth', 'Brighton',
        'Oxford', 'Cambridge', 'York', 'Bath', 'Derby', 'Exeter',
        'Norwich', 'Plymouth', 'Reading', 'Colchester', 'Canterbury',
        'Milton Keynes', 'Aberdeen', 'Swansea', 'Sunderland', 'Bournemouth'
    );
}
