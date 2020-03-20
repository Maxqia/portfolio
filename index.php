<?php get_header() ?>
<div id="mainbody">
    <div id="portflex">
        <h1 id="portfolio">Projects</h1>
        <div id="linkflex">
            <a href="https://github.com/Maxqia">GitHub</a>
            <a href="https://www.linkedin.com/in/max-qian-8b98a6190/">LinkedIn</a>
        </div>
    </div>

    <div id="pbody">
        <div class="project">
            <h3>Doing stupid shit</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales venenatis nisi. Proin eu massa pellentesque, scelerisque nibh sed, accumsan tellus. Donec consectetur tortor dui, ac laoreet lacus porta a. Ut gravida neque in tellus pulvinar, ut tincidunt arcu malesuada. Quisque eu feugiat eros, quis scelerisque felis. Pellentesque at erat odio. Vestibulum at urna molestie, fringilla turpis ac, ornare nibh. In non risus sit amet risus iaculis venenatis feugiat eu ligula. Phasellus non diam id turpis facilisis egestas. Donec risus sem, sollicitudin id efficitur ac, cursus eget nulla.</p>
            <a href="#">Read More</a>
        </div>
        <div class="project">
            <h3>attipv6</h3>
            <p>So I switched from CommieCast to Alternating Terrors in hopes of getting a better deal. So we get it installed and for the first few days I play around with it to get it working right before we cancel Comcast.<br>So, First of all, they give you a dumbed down modem/router combo (Pace 5268AC, gotta get in those keywords!) instead of just a modem. It should have a DMZ mode right? Seems easy enough to get around right?<br>WRONG!</p>
            <a href="#">Read More</a>
        </div>
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
