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
}

endif;

add_action( 'after_setup_theme', 'portfolio_setup' );
?>
