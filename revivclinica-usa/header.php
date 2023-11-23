<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?>Inicio</title>
    <?php wp_head(); ?>

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"></noscript>
    
    <link defer rel="stylesheet" href="<?= URL_BASE ?>/assets/css/main.css">
    <link defer rel="stylesheet" href="<?= URL_BASE ?>/assets/css/home.css">
    
</head>
<body <?php body_class(); ?>>
    <header id="masthead" class="site-header" role="banner">
    </header>
