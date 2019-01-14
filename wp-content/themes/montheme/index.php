<?php get_header() ?>



<?php
display_hello();
?>

<h1>Mes articles</h1>
<hr/>
<?php
while (have_posts()) :
    the_title();
    the_post();
 
 the_content();
 echo "<hr/>";
 comments_template();
 
 comment_form();
 echo "<hr/>";
endwhile; ?>


<div><?php dynamic_sidebar('my_custom_zone');?></div>

<br>
<?php the_widget( 'WP_Widget_Calendar'); ?>


<?php get_footer() ?>