<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/index.css">

    <?php wp_head(); ?>
</head>

<body>

<?php if (!is_front_page()): ?>
<div id="header">
<?php else: ?>
<div id="bigheader">
    <div id="navcontain">
<?php endif; ?>
        <div id="navbar">
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
        </div>
<?php if (is_front_page()): ?>
    </div> <!-- #navcontain -->
    <div id="shiftleft">
        <div id="align-vertical">
            <div id="hi">
                <p>Hello! I'm Max</p>
                <p id="typewriter">Welcome to my website!</p>
                <a href="#portfolio">portfolio</a>
                <a href="#contact">contact</a>
            </div>
        </div>
    </div>
<?php endif; ?>
</div>
