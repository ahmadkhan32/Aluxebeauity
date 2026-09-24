<?php
/**
 * Quick Buy UK Country & City Dropdowns Component
 *
 * @package A_Luxe_Beauty
 */

defined( 'ABSPATH' ) || exit;

$uk_countries_cities = array(
    'England' => array(
        'London', 'Birmingham', 'Manchester', 'Leeds', 'Liverpool',
        'Sheffield', 'Bristol', 'Newcastle upon Tyne', 'Nottingham',
        'Leicester', 'Coventry', 'Bradford', 'Southampton', 'Portsmouth',
        'Brighton & Hove', 'Reading', 'Oxford', 'Cambridge', 'York',
        'Bath', 'Derby', 'Exeter', 'Plymouth', 'Norwich', 'Colchester',
        'Canterbury', 'Milton Keynes', 'Bournemouth', 'Middlesbrough', 'Hull'
    ),
    'Scotland' => array(
        'Edinburgh', 'Glasgow', 'Aberdeen', 'Dundee', 'Inverness',
        'Stirling', 'Perth', 'Dunfermline', 'Paisley', 'East Kilbride',
        'Livingston', 'Hamilton', 'Cumbernauld', 'Kirkcaldy', 'Ayr'
    ),
    'Wales' => array(
        'Cardiff', 'Swansea', 'Newport', 'Wrexham', 'Bangor',
        'St Davids', 'Barry', 'Bridgend', 'Neath', 'Cwmbran',
        'Llanelli', 'Merthyr Tydfil', 'Rhyl'
    ),
    'Northern Ireland' => array(
        'Belfast', 'Derry (Londonderry)', 'Lisburn', 'Newry', 'Armagh',
        'Bangor', 'Coleraine', 'Newtownards', 'Craigavon', 'Ballymena',
        'Carrickfergus', 'Enniskillen', 'Omagh'
    )
);
?>

<div style="margin-bottom: 14px;">
    <label for="rawr-qb-country" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
        <?php esc_html_e( 'UK Country / Region', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
    </label>
    <select id="rawr-qb-country" name="qb_country" style="width: 100%; padding: 11px 14px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; background: #fff; outline: none;" required onchange="rawrUpdateQuickBuyCities(this.value)">
        <option value="England" selected><?php esc_html_e( 'England', 'rawr-beauty' ); ?></option>
        <option value="Scotland"><?php esc_html_e( 'Scotland', 'rawr-beauty' ); ?></option>
        <option value="Wales"><?php esc_html_e( 'Wales', 'rawr-beauty' ); ?></option>
        <option value="Northern Ireland"><?php esc_html_e( 'Northern Ireland', 'rawr-beauty' ); ?></option>
    </select>
</div>

<div style="margin-bottom: 14px;">
    <label for="rawr-qb-city" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;">
        <?php esc_html_e( 'UK City / Town', 'rawr-beauty' ); ?> <span style="color: #E53935;">*</span>
    </label>
    <select id="rawr-qb-city" name="qb_city" style="width: 100%; padding: 11px 14px; border: 1px solid #D5D5E2; border-radius: 8px; font-size: 14px; background: #fff; outline: none;" required>
        <option value=""><?php esc_html_e( 'Select City', 'rawr-beauty' ); ?></option>
        <?php foreach ( $uk_countries_cities['England'] as $city ) : ?>
            <option value="<?php echo esc_attr( $city ); ?>"><?php echo esc_html( $city ); ?></option>
        <?php endforeach; ?>
    </select>
</div>

<script>
var RAWR_UK_DATA = <?php echo json_encode( $uk_countries_cities ); ?>;
function rawrUpdateQuickBuyCities(country) {
    var citySelect = document.getElementById('rawr-qb-city');
    if (!citySelect) return;
    citySelect.innerHTML = '<option value=""><?php echo esc_js( __( 'Select City', 'rawr-beauty' ) ); ?></option>';
    var list = RAWR_UK_DATA[country] || RAWR_UK_DATA['England'];
    list.forEach(function(cityName) {
        var opt = document.createElement('option');
        opt.value = cityName;
        opt.textContent = cityName;
        citySelect.appendChild(opt);
    });
    if (list.length > 0) citySelect.selectedIndex = 1;
}
</script>
