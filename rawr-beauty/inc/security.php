<?php
/**
 * Security Hardening
 *
 * @package RAWR_Beauty
 */

defined('ABSPATH') || exit;

// Remove WordPress version number from head
remove_action('wp_head', 'wp_generator');

// Disable XML-RPC for enhanced security
add_filter('xmlrpc_enabled', '__return_false');

// Disable pingbacks
add_filter('pings_open', '__return_false', 9999);
