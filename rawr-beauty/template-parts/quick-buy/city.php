<?php
/**
 * Quick Buy UK City Dropdown Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

$cities = function_exists('rawr_get_uk_cities') ? rawr_get_uk_cities() : array(
    'London', 'Birmingham', 'Manchester', 'Liverpool', 'Leeds',
    'Sheffield', 'Bristol', 'Glasgow', 'Edinburgh', 'Cardiff',
    'Belfast', 'Newcastle upon Tyne', 'Nottingham', 'Leicester',
    'Coventry', 'Bradford', 'Southampton', 'Portsmouth', 'Brighton',
    'Oxford', 'Cambridge', 'York', 'Bath', 'Derby', 'Exeter',
    'Norwich', 'Plymouth', 'Reading', 'Colchester', 'Canterbury'
);
?>

<div style="margin-bottom: 14px;">
    <label for="rawr-qb-city" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
        <?php esc_html_e( 'City', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
    </label>
    <select id="rawr-qb-city" name="qb_city" style="width: 100%; padding: 11px 14px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; background: #fff; outline: none;" required>
        <option value=""><?php esc_html_e( 'Select City', 'rawr-beauty' ); ?></option>
        <?php foreach ( $cities as $city ) : ?>
            <option value="<?php echo esc_attr( $city ); ?>"><?php echo esc_html( $city ); ?></option>
        <?php endforeach; ?>
    </select>
</div>
