<?php wp_head(); ?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimo</title>
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/foundation.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/app.css">

    
  </head>

  <body> 
    
  <div class="grid-container">
  <img src="<?php add_theme_support('post_thumbnails') ?> assets/images/logo_minimo.png"><img/>
  <!-- <ul class="dropdown menu" data-dropdown-menu>
    <li><a href="Accueil.php">Accueil</a></li>
    <li>
      <a href="Article.php">Articles</a>
      <ul class="menu">
        <li><a href="#">Lifestyle</a></li>
        <li><a href="#">Photos</a></li>
        <li><a href="#">Musique</a></li>
        <li><a href="#">Visites</a></li>
      </ul>
    </li>
    <li>
      <a href="#"> Déjà Membre? </a>
        <ul class="menu">
          <li><a href="#">Connexion</a></li>
          <li><a href="#">Inscription</a></li>
        </ul>
    </li>
  </ul>
  -->  
  <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>

  