<?php
/**
 * Filename: functions.php
 * Project: Koodikerho.fi
 * Copyright: (c) 2014 Seravo
 */


/*
 * include custom navwalker for bootstrap from
 * https://github.com/twittem/wp-bootstrap-navwalker
 */
require_once( 'inc/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php' );


/*
 * load bootstrap assets
 */
add_action( 'wp_enqueue_scripts', 'load_bootstrap' );
function load_bootstrap () {

  // bootstrap directory path
  $bootstrap_dir = get_template_directory_uri() . '/inc/bootstrap';

  // bootstrap styles
  wp_register_style( 'bootstrap', $bootstrap_dir . '/css/bootstrap.css' );
  wp_enqueue_style( 'bootstrap' );

  // bootstrap scripts
  wp_register_script( 'bootstrap', $bootstrap_dir . '/js/bootstrap.js' , array( 'jquery' ), '', true );
  wp_enqueue_script( 'bootstrap' );
}


/*
 * load theme assets
 */
add_action( 'wp_enqueue_scripts', 'load_theme_assets' );
function load_theme_assets () {

  // theme stylesheets
  wp_register_style( 'default', get_template_directory_uri() . '/css/default.css' );
  wp_enqueue_style( 'default' );

  // theme scripts

  wp_register_script( 'easeljs', get_template_directory_uri() . '/js/lib/easeljs-0.7.1.min.js' , array( 'jquery' ), '', true );
  wp_enqueue_script( 'easeljs' );

  wp_register_script( 'TweenLite', get_template_directory_uri() . '/js/lib/TweenLite.min.js' , array( 'jquery' ), '', true );
  wp_enqueue_script( 'TweenLite' );

  wp_register_script( 'animation', get_template_directory_uri() . '/js/animation.js' , array( 'jquery' ), '', true );
  wp_enqueue_script( 'animation' );
}


/*
 * register navigation menus
 */
register_nav_menus( array(
    'primary' => 'Navigation',
));
