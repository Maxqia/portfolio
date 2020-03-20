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
}

endif;
add_action( 'after_setup_theme', 'portfolio_setup' );

?>
