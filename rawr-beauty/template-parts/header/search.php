<?php
/**
 * Header Search Dropdown Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-header-search" style="position: relative;">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: flex; align-items: center; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); border-radius: 50px; padding: 4px 14px;">
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search treatments, products...', 'placeholder', 'rawr-beauty' ); ?>" value="<?php echo get_search_query(); ?>" name="s" style="background: transparent; border: none; outline: none; color: inherit; font-size: 13px; width: 170px;" />
        <button type="submit" class="search-submit" aria-label="<?php esc_attr_e( 'Submit Search', 'rawr-beauty' ); ?>" style="background: none; border: none; cursor: pointer; color: inherit; display: flex; align-items: center; padding: 0;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </button>
    </form>
</div>
