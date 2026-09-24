<?php
/**
 * The Header for RAWR Beauty Theme
 *
 * @package RAWR_Beauty
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Montserrat:wght@300;400;500;600;700;800&family=Great+Vibes&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site-wrapper">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'rawr-beauty'); ?></a>

    <!-- Top Announcement Bar -->
    <?php get_template_part('template-parts/header/announcement-bar'); ?>

    <!-- Main Navigation Header -->
    <?php get_template_part('template-parts/header/main-header'); ?>

    <!-- Mobile Header / Menu Overlay Mount Point for React -->
    <?php get_template_part('template-parts/header/mobile-header'); ?>
