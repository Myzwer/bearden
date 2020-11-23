<?php
/**
 * The template for displaying the footer of the Bearden Theme
 *
 * Contains the opening of the footer of all pages and all subsequent content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Bearden
 * @since 1.0.0
 */

?>
<script>
    jQuery(document).foundation();
</script>


<!-- FOOTER START -->
<div class="sd-background">
    <div class="center padding-top social-links">
        <ul class="social-icons icon-circle list-inline">
            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>

    <div class="footer-links center">
        <div class="center">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-column-1' ) ); ?>
        </div>
    </div>

    <hr>

    <p class = "center dark-color-invert footer-text uppercase">Foothills Church exists to develop mature disciples of Christ in relational environments</p>
    </div>
</div>
<!-- END OF FOOTER -->





<?php wp_footer(); ?>

</body>
</html>
