<?php
  // Creates the Menus
  function secondchild_menu() {
    //Wordpress function
    register_nav_menus( array(
      'main-menu' => 'Main Menu',
      'social-menu' => 'Social Menu',
      'work-menu' => 'Work Menu',
      'footer-menu' => 'Footer Menu'
    ));
  }
  //Hook
  add_action('init', 'secondchild_menu');

  //Add Stylesheet and Javascriptfiles
  function secondchild_scripts() {
    //Normalize css
    wp_enqueue_style(
      'normalize',
      get_template_directory_uri() . '/css/normalize.css',
      array(),
      '8.0.1'
    );

    wp_enqueue_script('jquery');

    //Nav Stylesheet
    wp_enqueue_style(
      'collapsible-nav',
      get_template_directory_uri() . '/css/collapsible-nav.scss',
      array(),
      '1.0.0'
    );

    //Google font
    wp_enqueue_style(
      'googlefont',
      'https://fonts.googleapis.com/css?family=Lora:400,700|Open+Sans:400,700&display=swap',
      array(),
      '1.0.0'
    );

    //Main Stylesheet
    wp_enqueue_style(
      'style',
      get_stylesheet_uri(),
      array('normalize', 'googlefont', 'collapsible-nav'),
      '1.0.0'
    );



    wp_enqueue_script(
      'custom-script',
      get_template_directory_uri() . '/js/nav.js',
      array('jquery')
    );

  }

  add_action('wp_enqueue_scripts', 'secondchild_scripts');

  //Enable feature images and other Stuff
  function secondchild_setup(){
    //register image size
    add_image_size( 'square', 350, 350, true);
    add_image_size( 'portrait', 350, 724, true);
    add_image_size( 'box', 400, 350, true);
    add_image_size( 'medium', 350, 700, true);
    add_image_size( 'blog', 966, 644, true);




    //add feeatured image
    add_theme_support('post-thumbnails');
  }

  add_action('after_setup_theme', 'secondchild_setup'); //when the theme is activated and ready

?>
