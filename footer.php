<?php
/**
 * @package WordPress
 * @subpackage BourbonWP
 */
?>

     <footer class="row">
        <p>
            <?php bloginfo('name'); ?> is proudly powered by
            <a href="http://wordpress.org/">WordPress</a>.
            <br />
            <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
            and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
            <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. ì
        </p>
    </footer>


<!--! end of #container -->


<!-- device.js 0.1.57 https://github.com/matthewhudson/device.js -->
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/vendor/device.min.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/plugins.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/main.js") ?>
   
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
			   
<?php wp_footer(); ?>

</body>
</html>
