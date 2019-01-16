<?php get_header(); ?>

<div class="grid-x">
  <?php
            while (have_posts()) : the_post();
        ?>
        <div class="cell small-5">
        <?php the_post_thumbnail(); ?>
        <h5>  <?php 
          foreach((get_the_category()) as $cat) { 
         echo $cat->cat_name . ' '; 
          } ?> 
        </h5>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
        </div>

<?php
endwhile;
?>

</div>


    </div>
        <div class="c">
            <div>
                <p class=text-center>Sign up for our newsletter!</p>
                    <input class=text-center type="text" name="newsletter_email" placeholder="Enter a valid email address"/>
                    <input type= "button" value= "Submit"/>
            </div>
        </div>
        <div class="grid-x">
            <?php
             while (have_posts()) : the_post();
             ?>
            <div class="cell small-5">
         <?php the_post_thumbnail(); ?>
         <h5>  <?php 
              foreach((get_the_category()) as $cat) { 
             echo $cat->cat_name . ' '; 
           } ?> 
            </h5>
         <h3><?php the_title(); ?></h3>
         <?php the_content(); ?>
         </div>
<?php
endwhile;
?>

    </div>
    <input type= "button" value= "Load More"/>

    
<?php get_footer(); ?>