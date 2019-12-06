<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
    <title></title>

  </head>
  <body>

  <header class="site-header">
    <div class="container header-grid">
      <div class="navigation-bar">

        <!-- NAVIGATION LOGO -->
        <!-- <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <img src='<?php echo get_template_directory_uri() . "/img/logo.svg"?>' alt="site-logo">
          </a>
        </div> -->

        <div class="menu-collapsed">
          <div class="bar"></div>
          <!-- NAVIGATION MENU -->
          <img src='<?php echo get_template_directory_uri() . "/img/logo.svg"?>' alt="site-logo">
          <?php
            $args = array(
              'theme_location' => 'main-menu',
              'container' => 'nav',
              'container_class' => 'main-menu'
            );

            wp_nav_menu($args);
          ?>
        </div>


      </div>
    </div>
  </header>
