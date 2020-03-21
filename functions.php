<?php

if ( ! function_exists( 'portfolio_setup' ) ):

function portfolio_setup() {
  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'header-menu' => __( 'Header Menu' ),
    'portfolio-menu' => __( 'Portfolio Menu (links)' ),
  ));


  add_theme_support( 'post-thumbnails' );
}

endif;
add_action( 'after_setup_theme', 'portfolio_setup' );


function portfolio_enqueue() {
  wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
  wp_enqueue_style('roboto-font', '//fonts.googleapis.com/css2?family=Roboto&display=swap');
  wp_enqueue_style('style', get_stylesheet_uri());
  if (is_front_page()) {
    wp_enqueue_style('front-page', get_template_directory_uri() . '/front-page.css');
    wp_enqueue_script('typer', get_template_directory_uri() . '/typer.js', array(), false, true);
  }
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue');

?>
