<?php
/**
 * Cart item data (variations, metadata)
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>
<dl class="variation" style="font-size: 12px; color: #8888AA; margin: 4px 0 0;">
    <?php foreach ( $item_data as $data ) : ?>
        <dt class="<?php echo sanitize_html_class( 'variation-' . $data['key'] ); ?>" style="font-weight: 600; display: inline;"><?php echo wp_kses_post( $data['key'] ); ?>:</dt>
        <dd class="<?php echo sanitize_html_class( 'variation-' . $data['key'] ); ?>" style="display: inline; margin-left: 4px;"><?php echo wp_kses_post( wpautop( $data['display'] ) ); ?></dd>
    <?php endforeach; ?>
</dl>
