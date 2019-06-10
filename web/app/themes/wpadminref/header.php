<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title><?php bloginfo('title'); ?></title>
</head>
<body class="wp-admin wp-core-ui js index-php auto-fold admin-bar admin-color-fresh customize-support svg sticky-menu">
    <div id="wpwrap">
    <?php get_template_part('template-parts/header/navigation'); ?>
        <div id="wpcontent">
        <?php get_template_part('template-parts/header/header-top'); ?>
            <div id="wpbody" role="main">