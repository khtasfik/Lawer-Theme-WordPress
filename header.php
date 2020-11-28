<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <title><?php bloginfo('name') ?></title>
  <?php
  wp_head();
  ?>
  <meta <?php bloginfo('charset') ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/aos.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.timepicker.css">


  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flaticon.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/icomoon.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lawers.css">
</head>

<body>
  <?php
  $img = get_option('lawers_upload_img');
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="" href="<?php echo get_site_url() ?>"><img src='<?php echo $img ?>' width="100px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="nav navbar-nav navbar-right" id="ftco-nav">
        <?php

        wp_nav_menu([
          'menu'            => 'top',
          'theme_location'  => 'top',
          'container'       => 'div',
          'container_id'    => 'bs4navbar',
          'container_class' => 'collapse navbar-collapse',
          'menu_id'         => false,
          'menu_class'      => 'navbar-nav mr-auto',
          'depth'           => 2,
          'fallback_cb'     => 'bs4navwalker::fallback',
          'walker'          => new bs4navwalker()
        ]);

        ?>
      </div>
    </div>
  </nav>
  <!-- END nav -->