<?php
include_once plugin_dir_path( __FILE__ ).'/Mon_plugin_Newsletter_Widget.php';

class Mon_plugin_Newsletter
{
 public function __construct()
 {
 add_action('widgets_init', function(){register_widget('Monplugin_Newsletter_Widget');});
 add_action('wp_loaded', array($this, 'save_email'));

 }

 public static function install()
 {
  global $wpdb;
  $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}monplugin_newsletter_email (id INT
 AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) NOT NULL);");
 }
 
 public static function uninstall()
{
 global $wpdb;
 $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}monplugin_newsletter_email;");
}

public function save_email()
{
 if (isset($_POST['monplugin_newsletter_email']) && !empty($_POST['monplugin_newsletter_email'])) {
 global $wpdb;
 $email = $_POST['monplugin_newsletter_email'];
 $row = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}monplugin_newsletter_email WHERE email =
'$email'");
 if (is_null($row)) {
 $wpdb->insert("{$wpdb->prefix}monplugin_newsletter_email", array('email' => $email));
 }
 }
}

}

