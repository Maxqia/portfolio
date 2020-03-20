<?php get_header() ?>


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
                  the_post();
                  get_template_part('content', get_post_type());
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
<script src="<?php echo get_bloginfo('template_directory'); ?>/typer.js"></script>
<?php get_footer(); ?>
