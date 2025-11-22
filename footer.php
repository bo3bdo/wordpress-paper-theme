<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paper
 */

?>

                </div><!-- .layout-container -->
        </div><!-- #content -->

        <footer id="colophon" class="site-footer">
                <div class="layout-container site-info">
                        <p class="footer-credits">
                                <span>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></span>
                                <span class="divider">&middot;</span>
                                <span><?php esc_html_e( 'Powered by WordPress', 'paper' ); ?></span>
                        </p>
                </div><!-- .site-info -->
        </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
