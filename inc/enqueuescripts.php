<?php

// Linking CSS and Javascripts required for pages
function project_script_enqueue()
{
    // wp_enqueue_style('project-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);
    wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/app.css'));
    wp_enqueue_style('support_css', get_stylesheet_directory_uri() . '/assets/supports.css', array(), filemtime(get_stylesheet_directory() . '/assets/supports.css'));


    wp_enqueue_script('main_script', get_stylesheet_directory_uri() . '/assets/js/app.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/js/app.js'), true);
}
add_action('wp_enqueue_scripts', 'project_script_enqueue');
