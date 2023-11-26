<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?>Inicio</title>
    <?php wp_head(); ?>

    <!-- styles -->
    <?php get_template_part('templates/layouts/head', null); ?>
    
</head>
<body>
    <main>
        <header id="masthead" class="site-header" role="banner"></header>
