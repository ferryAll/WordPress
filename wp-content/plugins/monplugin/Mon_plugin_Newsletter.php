<?php
include_once plugin_dir_path( __FILE__ ).'/Mon_plugin_Newsletter_Widget.php';

class Mon_plugin_Newsletter
{
 public function __construct()
 {
 add_action('widgets_init', function(){register_widget('Monplugin_Newsletter_Widget');});
 add_action('wp_loaded', array($this, 'save_email'));
 add_action('admin_menu', array($this, 'add_admin_menu'), 20);
 add_action('admin_init', array($this, 'register_settings'));

 }

 public function add_admin_menu()
 {
$hook = add_submenu_page('monplugin', 'Newsletter', 'Newsletter', 'manage_options',
'monplugin_newsletter', array($this, 'menu_html'));
 add_action('load-'.$hook, array($this, 'process_action'));
 }

 public function process_action()
{
 if (isset($_POST['send_newsletter'])) {
 $this->send_newsletter();
 }
}

public function send_newsletter()
{
 global $wpdb;
 $recipients = $wpdb->get_results("SELECT email FROM {$wpdb->prefix}monplugin_newsletter_email");
 $object = get_option('monplugin_newsletter_object', 'Newsletter');
 $content = get_option('monplugin_newsletter_content', 'Mon contenu');
 $sender = get_option('monplugin_newsletter_sender', 'no-reply@example.com');
 $header = array('From: '.$sender);
 foreach ($recipients as $_recipient) {
 $result = wp_mail($_recipient->email, $object, $content, $header);
 }
}


 public function register_settings()
{
 register_setting('monplugin_newsletter_settings', 'monplugin_newsletter_sender');
 register_setting('monplugin_newsletter_settings', 'monplugin_newsletter_object');
 register_setting('monplugin_newsletter_settings', 'monplugin_newsletter_content');

 add_settings_section('monplugin_newsletter_section', 'Newsletter parameters', array($this,
'section_html'), 'monplugin_newsletter_settings');
 add_settings_field('monplugin_newsletter_sender', 'Expéditeur', array($this, 'sender_html'),
'monplugin_newsletter_settings', 'monplugin_newsletter_section');
 add_settings_field('monplugin_newsletter_object', 'Objet', array($this, 'object_html'),
'monplugin_newsletter_settings', 'monplugin_newsletter_section');
 add_settings_field('monplugin_newsletter_content', 'Contenu', array($this, 'content_html'),
'monplugin_newsletter_settings', 'monplugin_newsletter_section');
}


public function section_html()
{
    echo 'Renseignez les paramétres';
}

public function sender_html()
{?>
 <input type="text" name="monplugin_newsletter_sender" value="<?php echo
get_option('monplugin_newsletter_sender')?>"/>
 <?php
}

public function object_html()
{?>
 <input type="text" name="monplugin_newsletter_object" value="<?php echo
get_option('monplugin_newsletter_object')?>"/>
 <?php
}
public function content_html()
{?>
 <textarea name="monplugin_newsletter_content"><?php echo
get_option('monplugin_newsletter_content')?></textarea>
 <?php
}

 


 public function menu_html()
{
 echo '<h1>'.get_admin_page_title().'</h1>';
 ?>
 <form method="post" action="options.php">
<?php settings_fields('monplugin_newsletter_settings') ?>
<?php do_settings_sections('monplugin_newsletter_settings') ?>
<?php submit_button(); ?>
<form method="post" action="">
 <input type="hidden" name="send_newsletter" value="1"/>
 <?php submit_button('Envoyer la newsletter') ?>
</form>
</form>

 <?php
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

