<?php
/**
 * Shop Category Filter Tabs
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

$categories = get_terms( array(
    'taxonomy'   => 'product_cat',
    'hide_empty' => false,
) );
$current_cat = get_query_var( 'product_cat' );
?>

<div class="rawr-category-filter" style="margin-bottom: 36px; display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">
    <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="filter-chip <?php echo empty($current_cat) ? 'active' : ''; ?>" style="padding: 8px 20px; border-radius: 50px; font-size: 13px; font-weight: 700; text-decoration: none; border: 1px solid #1A1A2E; background: <?php echo empty($current_cat) ? '#1A1A2E' : '#fff'; ?>; color: <?php echo empty($current_cat) ? '#fff' : '#1A1A2E'; ?>;">
        <?php esc_html_e( 'All Products', 'rawr-beauty' ); ?>
    </a>
    <?php if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) : ?>
        <?php foreach ( $categories as $cat ) : 
            if ( $cat->slug === 'uncategorized' ) continue;
            $is_active = ( $current_cat === $cat->slug );
        ?>
            <a href="<?php echo esc_url( get_term_link( $cat ) ); ?>" class="filter-chip <?php echo $is_active ? 'active' : ''; ?>" style="padding: 8px 20px; border-radius: 50px; font-size: 13px; font-weight: 700; text-decoration: none; border: 1px solid rgba(26,26,46,0.2); background: <?php echo $is_active ? '#1A1A2E' : '#fff'; ?>; color: <?php echo $is_active ? '#fff' : '#1A1A2E'; ?>;">
                <?php echo esc_html( $cat->name ); ?>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
