<?php
/**
* Template Name: Une template
*
*/

 get_header();?>


<div class="callout large primary">
<div class="row column text-center">
<h1>Our Blog</h1>
<h2 class="subheader">Such a Simple Blog Layout</h2>
</div>
</div>

<div class="row medium-8 large-7 columns">
    
<?php
while (have_posts()) : the_post();
?>

    
    <div class="blog-post">
        <h3><?php the_title(); ?> <small><?php the_date(); ?></small></h3>

        <?php the_post_thumbnail(); ?>
       
        <?php the_content(); ?>

        <div class="callout">
        <ul class="menu simple">
        <li><a href="#">Author: <?php the_author(); ?></a></li>
        <li><a href="#">Comments: <?php comments_number(); ?></a></li>
        </ul>
        </div>
    </div>

    <hr>
    
<?php
endwhile;
?>

    
</div>

<?php get_footer();?>