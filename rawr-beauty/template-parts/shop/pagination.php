<?php
/**
 * Shop Pagination Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

the_posts_pagination( array(
    'mid_size'           => 2,
    'prev_text'          => __( '← Previous', 'rawr-beauty' ),
    'next_text'          => __( 'Next →', 'rawr-beauty' ),
    'screen_reader_text' => __( 'Shop navigation', 'rawr-beauty' ),
) );
