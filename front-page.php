<?php get_header() ?>

    <div id="hi">
        <p>Hello! I'm Max</p>
        <p id="typewriter">Welcome to my website!</p>
        <a href="#portfolio">portfolio</a>
        <a href="#contact">contact</a>
    </div>
</div> <!-- #header -->

<div id="mainbody">
    <div id="portflex">
        <h1 id="portfolio">Projects</h1>
        <?php wp_nav_menu( array(
            'theme_location' => 'portfolio-menu',
            'container' => false,
            'fallback_cb' => false,
            'menu_id' => 'linkflex',
        )) ?>
    </div>

    <div id="pbody">
        <?php
          if ( have_posts() ) :
              while( have_posts() ) :
                  the_post(); ?>
                  <div class="project" <?php post_class(); ?>>
                      <h3><?php the_title(); ?></h3>
                      <p><?php the_excerpt(); ?></p>
                      <a href="<?php print esc_url( get_permalink() ); ?> ">Read More</a>
                  </div>
                  <?php
              endwhile;
          endif;
        ?>
        <div id="contact">
            <h1>Contact</h1>
            <form>
                <div>
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                </div>
                <input id="subject" type="text" placeholder="Subject">
                <textarea placeholder="Message"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php get_footer(); ?>
