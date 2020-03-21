<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="headerbg">
  <div id="header">
      <nav id="navbar">
        <h2>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
              rel="home"
              style="<?php echo is_front_page() ? "visibility: hidden;" : ""?>"
          >
            <?php bloginfo( 'name' ); ?>
          </a>
        </h2>
        <?php wp_nav_menu( array(
          'theme_location' => 'header-menu',
          'container' => false,
          'fallback_cb' => false,
          'menu_id' => 'navlist',
        )) ?>
      </nav>
<?php /* #header & #headerbg closed in main template */?>
<?php /* body closed in footer template */?>
