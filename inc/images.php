<?php

function codedojo_header_image() {
    $imagesPath = '/assets/images/headers/';
    $imagesDir = get_stylesheet_directory() . $imagesPath;
    $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $randomImage = $images[array_rand($images)];

    echo('<img id="dojo-header" src="' . get_stylesheet_directory_uri() . $imagesPath . basename($randomImage) . '">');
}
