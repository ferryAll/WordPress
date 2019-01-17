<?php
/*
Plugin Name: First plugin
Plugin URI: http://mon-plugin.com
Version : 1.0
Author: Ferry Allan
License: GPL2
*/

/* ajout d'un filtre pour changer le titre du site

add_filter('pre_get_document_title', 'monplugin_change_my_title');
function monplugin_change_my_title($title) {
 return 'Minimo';
}
*/
register_activation_hook(__FILE__, array('Mon_plugin_Newsletter', 'install'));
register_uninstall_hook(__FILE__, array('Monplugin_Newsletter', 'uninstall'));

class Monplugin_Plugin
{
    public function __construct()
    {
    include_once plugin_dir_path( __FILE__ ).'/Mon_plugin_Newsletter.php';
    add_action('admin_menu', array($this, 'add_admin_menu'));
    new Mon_plugin_Newsletter();
    }
    public function add_admin_menu()
{
 add_menu_page('Newsletter', 'Newsletter', 'manage_options', 'monplugin', array($this,
'menu_html'));
}

public function menu_html()
{
 echo '<h1>'.get_admin_page_title().'</h1>';
 echo '<p>Bienvenue sur la page d\'accueil du plugin</p>';
}










}
new Monplugin_Plugin();
