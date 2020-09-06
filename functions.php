<?php

function snupy_load_style() {
    wp_enqueue_style('style-snupy', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'snupy_load_style');