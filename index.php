<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */
get_header(); ?>
<?php $layout_class = shapely_get_layout_class(); ?>
    <div class="row">
        <div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
            <?php
            if ( have_posts() ) :

                if ( is_home() && ! is_front_page() ) :
                    ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php esc_html( single_post_title() ); ?></h1>
                    </header>

                <?php
                endif;

                $layout_type = get_theme_mod( 'blog_layout_view', 'grid' );
                $layout_type = str_replace( '_', '-', $layout_type );

                get_template_part( 'template-parts/layouts/blog', $layout_type );

                shapely_pagination();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
        </div><!-- #primary -->
        <aside id="secondary" class="widget-area col-md-4" role="complementary">
            <div id="block-8" class="widget widget_block widget_text">
                <?php codedojo_character_image() ?>
            </div>
        </aside>
    </div>
    <div class="row partner-logos">
        <div class="col-sm-6 col-xs-6 col-lg-3">
            <a href="http://playbern.ch/">
                <img src="/wp-content/themes/codedojo/assets/images/partner/playbern.jpg">
            </a>
        </div>
        <div class="col-sm-6 col-xs-6 col-lg-3">
            <a href="https://www.kob.ch/">
                <img src="/wp-content/themes/codedojo/assets/images/partner/kornhausbibliotheken.png">
            </a>
        </div>
        <div class="col-sm-6 col-xs-6 col-lg-3">
            <a href="https://maxomedia.ch/">
                <img src="/wp-content/themes/codedojo/assets/images/partner/maxomedia.png">
            </a>
        </div>
        <div class="col-sm-6 col-xs-6 col-lg-3">
            <a href="https://www.erupt.ch/">
                <img src="/wp-content/themes/codedojo/assets/images/partner/erupt.png">
            </a>
        </div>
    </div>
<?php
get_footer();
