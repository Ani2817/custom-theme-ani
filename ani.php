<?php

function anirudh_solutions() {

    //css
    wp_enqueue_style('main_style', get_stylesheet_uri());
    wp_enqueue_style('style_file', get_template_directory_uri().'/fonts/icomoon/style.css');
    wp_enqueue_style('bootstrap_file', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('jquery_file', get_template_directory_uri().'/css/jquery-ui.css');
    wp_enqueue_style('carousel_file', get_template_directory_uri().'/css/owl.carousel.min.css');
    wp_enqueue_style('owl_theme_file', get_template_directory_uri().'/css/owl.theme.default.min.css');
    wp_enqueue_style('owl_theme_file', get_template_directory_uri().'/css/owl.theme.default.min.css');
    wp_enqueue_style('fancybox_file', get_template_directory_uri().'/css/jquery.fancybox.min.css');
    wp_enqueue_style('datepicker_file', get_template_directory_uri().'/css/bootstrap-datepicker.css');
    wp_enqueue_style('flation_file', get_template_directory_uri().'/fonts/flaticon/font/flaticon.css');
    wp_enqueue_style('aos_file', get_template_directory_uri().'/css/aos.css');
    wp_enqueue_style('style_file', get_template_directory_uri().'/css/style.css');

    //javascript
    wp_enqueue_script('jquery-3.3.1.min.js', get_template_directory_uri().'/js/jquery-3.3.1.min.js', array(), '1.1', true);
    wp_enqueue_script('jquery-ui.js', get_template_directory_uri().'/js/jquery-ui.js', array(), '1.1', true);
    wp_enqueue_script('popper.min.js', get_template_directory_uri(). '/js/popper.min.js', array(), '1.1', true);
    wp_enqueue_script('bootstrap.min.js', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.1', true);
    wp_enqueue_script('owl.carousel.min.js', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '1.1', true);
    wp_enqueue_script('jquery.countdown.min.js', get_template_directory_uri().'/js/jquery.countdown.min.js', array(), '1.1', true);
    wp_enqueue_script('jquery.easing.1.3.js', get_template_directory_uri().'/js/jquery.easing.1.3.js', array(), '1.1', true);
    wp_enqueue_script('aos.js', get_template_directory_uri().'/js/aos.js', array(), '1.1', true);
    wp_enqueue_script('jquery.fancybox.min.js', get_template_directory_uri().'/js/jquery.fancybox.min.js', array(), '1.1', true);
    wp_enqueue_script('jquery.sticky.js', get_template_directory_uri().'/js/jquery.sticky.js', array(), '1.1', true);
    wp_enqueue_script('isotope.pkgd.min.js', get_template_directory_uri().'/js/isotope.pkgd.min.js', array(), '1.1', true);
    wp_enqueue_script('main.js', get_template_directory_uri().'/js/main.js', array(), '1.1', true);
}
//action book

add_action("wp_enqueue_scripts", "anirudh_solutions");



?>