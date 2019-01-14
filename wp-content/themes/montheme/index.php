<?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>

<?php
display_hello();
?>

<div><?php dynamic_sidebar('my_custom_zone');?></div>

<?php the_widget( 'WP_Widget_Calendar'); ?>