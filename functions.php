<?php
/**
 * The code will only run if accessed through WordPress. Not if the file is opened directly
 */
if (!defined('ABSPATH')) { exit; }

/**
 * Adds / activates support for different WordPress features
 */

 // Title tag
 add_theme_support( 'title-tag' );

 // Add stylesheet style.css to the theme

 add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles' );

 function enqueue_theme_styles() {
    wp_enqueue_style('theme-styles', get_stylesheet_uri(), '', '', '');
 }