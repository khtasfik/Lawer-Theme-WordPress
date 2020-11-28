<?php

require get_template_directory() . '/inc/functions-admin.php';
require get_template_directory() . '/inc/theme-support.php';

// Include custom navwalker
require_once get_template_directory() . '/inc/bs4navwalker.php';

// Register WordPress nav menu
register_nav_menu('top', 'Top menu');



function lawers_advice_load_admin_script()
{
    wp_enqueue_media();
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all');
    wp_enqueue_style('lawers_advise_style', get_template_directory_uri() . '/css/lawers.css', array(), '1.0', 'all');
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1');
    wp_enqueue_script('lawers_advise_style_js', get_template_directory_uri() . '/js/lawers.js', array('jquery'), '1.0', true);
}

add_action('admin_enqueue_scripts', 'lawers_advice_load_admin_script');

function lawers_advice_load_script()
{
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all');
    wp_enqueue_style('bootstrap-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700', array(), '4.5.2', 'all');

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1');
    wp_enqueue_script('Bootstrap-javaScript', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2');
    wp_enqueue_script('jquery-migrate', get_template_directory_uri() . 'js/lawers.js', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'lawers_advice_load_script');
