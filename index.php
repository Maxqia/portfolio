<?php get_header() ?>
<div id="mainbody">
    <div id="pbody">
        <?php
          if ( have_posts() ) :
              while( have_posts() ) :
                  the_post();
                  get_template_part('content', get_post_type());
              endwhile;
          endif;
        ?>
    </div>
</div>
<?php get_footer(); ?>
