<?php
/**
 * My Account dashboard
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

$allowed_html = array(
    'a' => array(
        'href' => array(),
    ),
);
?>
<p>
    <?php
    printf(
        wp_kses(__('Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'rawr-beauty'), $allowed_html),
        '<strong>' . esc_html($current_user->display_name) . '</strong>',
        esc_url(wc_logout_url())
    );
    ?>
</p>
<p>
    <?php
    esc_html_e('From your account dashboard you can view your recent beauty product orders, manage shipping addresses, and edit account password.', 'rawr-beauty');
    ?>
</p>
