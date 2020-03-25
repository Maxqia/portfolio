<?php get_header() ?>
<div id="hi">
    <p>Hello! I'm Max</p>
    <p id="typewriter">Welcome to my website!</p>
    <div>
      <a href="#about">about</a>
      <a href="#portfolio">portfolio</a>
    </div>
</div>
</div> <!-- #header -->
</div> <!-- #headerbg -->

<div id="mainbody">
    <div id="about">
       <?php
          query_posts( 'page_id=107' );
          if ( have_posts() ) :
              while( have_posts() ) :
                  the_post(); ?>
                  <div id="about-title"><h2><?php the_title(); ?></h2></div>
                  <div><?php the_content(); ?></div>
              <?php
              endwhile;
          endif;
          rewind_posts();
        ?>
    </div>
    
    <div id="portflex">
        <h2 id="portfolio">Projects</h2>
        <?php wp_nav_menu( array(
            'theme_location' => 'portfolio-menu',
            'container' => false,
            'fallback_cb' => false,
            'menu_id' => 'linkflex',
        )) ?>
    </div>

    <div id="pbody">
        <?php
          query_posts( 'category_name=portfolio' );
          if ( have_posts() ) :
              while( have_posts() ) :
                  the_post(); ?>
                  <div <?php post_class('project'); ?>>
                      <?php if(!has_tag("no-title")):?>
                      <a href="<?php print esc_url( get_permalink() ); ?>">
                        <h3><?php the_title(); ?></h3>
                      </a>
                      <?php endif;?>
                      <div><?php the_content(); ?></div>
                      <a href="<?php print esc_url( get_permalink() ); ?> ">
                          <?php echo (has_tag('more') ? 'More Info' : '') . (has_tag('images') ? " & Images" : "")?>
                      </a>
                  </div>
                  <?php
              endwhile;
          endif;
          rewind_posts();
        ?>
    </div>
</div>
<?php get_footer(); ?>
