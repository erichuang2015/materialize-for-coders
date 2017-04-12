<?php

    function materializefc_styles_scripts() {
        wp_enqueue_style( 'material-icons', '//fonts.googleapis.com/icon?family=Material+Icons');
        wp_enqueue_style( 'materialize', get_stylesheet_directory_uri() . '/css/materialize.css');
        wp_enqueue_style( 'site', get_stylesheet_directory_uri() . '/css/site.css');

        wp_enqueue_script( 'jquery'); //This is already included in Wordpress Core, no need for link
        wp_enqueue_script( 'materialize', get_template_directory_uri() . '/js/materialize.js', $deps = array(), $ver = false, $in_footer = true);
        wp_enqueue_script( 'site', get_template_directory_uri() . '/js/site.js', $deps = array(), $ver = false, $in_footer = true);
    }
    
    add_action( 'wp_enqueue_scripts', 'materializefc_styles_scripts' );

 ?>
