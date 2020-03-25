<?php get_header() ?>
</div> <!-- #header --> </div> <!-- #headerbg -->
<div id="mainbody">
    <div id="pbody">
        <?php
          if ( have_posts() ) :
              while( have_posts() ) :
                  the_post(); ?>
                  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                      <!--<?php the_post_thumbnail() ?>-->
                      <h3><?php the_title(); ?></h3>
                      <p><?php the_content(); ?></p>
                  </div>
                  <?php
              endwhile;
          endif;
        ?>
    </div>
</div>
<?php get_footer(); ?>
