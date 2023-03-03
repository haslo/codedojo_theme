<?php
add_action('wp_enqueue_scripts', 'codedojo_enqueue_styles');
function codedojo_enqueue_styles()
{
    $parenthandle = 'shapely-style';
    $theme = wp_get_theme();
    wp_enqueue_style($parenthandle,
        get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style('codedojo',
        get_stylesheet_uri(),
        array($parenthandle),
        $theme->get('Version')
    );
}