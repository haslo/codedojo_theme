<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 */

?>

</div><!-- #main -->
</section><!-- section -->

<div class="footer-callout">
    <?php shapely_footer_callout(); ?>
</div>

<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">
    <div class="container footer-inner">
        <div class="row">
            <?php get_sidebar( 'footer' ); ?>
        </div>

        <div class="row">
            <div class="site-info col-sm-6">
                <div class="copyright-text">
                    <?php echo wp_kses_post( get_theme_mod( 'shapely_footer_copyright' ) ); ?>
                </div>
                <div class="footer-credits">
                    Design von <a href="https://haslo.ch/">haslo</a>, und
                    <a href="https://github.com/haslo/codedojo_theme">hier ist der Code</a>.
                </div>
            </div><!-- .site-info -->
            <div class="col-sm-6 text-right">
                <?php shapely_social_icons(); ?>
            </div>
        </div>
    </div>

    <a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>
</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
