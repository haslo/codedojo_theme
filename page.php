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
            <?php get_template_part('template-parts/sidecoder') ?>
        </aside>
    </div>
    <?php get_template_part('template-parts/partners') ?>
<?php
get_footer();

