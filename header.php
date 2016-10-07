<!DOCTYPE html>
<html>
<head>
  <?php $home = get_template_directory_uri(); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php gera_title(); ?>

  </title>
  <?php wp_head();?>

  <link href="<?= $home; ?>/assets/stylesheets/init.css" rel="stylesheet" type="text/css">
  <link href="<?= $home; ?>/assets/stylesheets/ion-icons.min.css" rel="stylesheet" type="text/css">
  <link href="<?= $home; ?>/assets/stylesheets/etline-icons.min.css" rel="stylesheet" type="text/css">
  <link href="<?= $home; ?>/style.css" rel="stylesheet">
  <link href="<?= $home; ?>/assets/stylesheets/colors/blue.css" rel="stylesheet">

</head>
<body>

 <!--Start Header-->
 <section id="fixed-navbar">
   <nav class="navbar navbar-default navbar-sticky" role="navigation">
    <div class="container">

     <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php

       the_custom_logo();

      if(!has_custom_logo()){
        ?>

        <h1><?php bloginfo('name'); ?></h1>

        <?php
      }

        ?></a>
      </div>
    <div class="collapse navbar-collapse" id="main-nav">
      <ul class="nav navbar-nav navbar-right">
            <?php
            $args = array(
              'theme_location' => 'header-menu',
              'container_class' => '',
              'container' => false,
              'items_wrap' => '%3$s',
              'menu_class' => 'nav navbar-nav navbar-right'
              );
            wp_nav_menu($args);
            ?>
      </ul>
   </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
  </nav>
</section>
<!--End Header-->