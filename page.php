<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 */

get_header(); ?>
<?php $layout_class = shapely_get_layout_class(); ?>
    <div class="row">
        <div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr($layout_class); ?>">
            <?php
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', 'page');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
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

