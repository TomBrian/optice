<footer class="theme-footer">
    <?php
    $short_code = get_theme_mod('footer_shortcode', '[no_code]');
    if ($short_code != '[no_code]') {
        echo do_shortcode($short_code);
    }
    ?>
</footer>
<?php wp_footer() ?>
</body>

</html>