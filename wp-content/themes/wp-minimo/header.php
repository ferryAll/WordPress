<!doctype html>
<html class="no-js" lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>

    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">


    <?php wp_head(); ?>

</head>
<body>

    <div class="top-bar">
    <div class="top-bar-left">
        <!-- <ul class="menu">
        <li class="menu-text">Blog</li>
        <li><a href="#">One</a></li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
        </ul> -->
        <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
    </div>
    </div>