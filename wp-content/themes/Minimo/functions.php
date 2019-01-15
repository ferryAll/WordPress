<?php

//Exemple zone de widget
add_action('widgets_init','monplugin_add_sidebar');
function monplugin_add_sidebar()
{
    register_sidebar(array(
    'id' => 'my_sidebar',
    'name' => 'Sidebar',
    'description' => 'Apparait en haut du site',
    'before_widget' => '<aside>',
    'after_widget' => '</aside>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
    ));
}

//Exemple zone de menu
add_action('init', 'monplugin_add_menu');
function monplugin_add_menu()
{
 register_nav_menu('main_menu', 'Menu principal');
}

