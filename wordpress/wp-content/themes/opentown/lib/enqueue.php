<?php
/**
 * Created by PhpStorm.
 * User: RikuTakenaka
 * Date: 2018/05/19
 * Time: 18:08
 */
function theme_name_scripts()
{
  wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css', array(), 1.0, 'all');
  wp_enqueue_script( 'jquery-3', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), '3.2.1', false );
//  wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.js', array('jquery-3'), '1.0.0', true );

  if (is_front_page()) {
    wp_enqueue_script( 'rotate-min-js', get_template_directory_uri() . '/assets/js/rotate.min.js', array('jquery-3'), '1.0.0', true );
    wp_enqueue_script( 'sound-js', get_template_directory_uri() . '/assets/js/sound.js', array('jquery-3'), '1.0.0', true );
    wp_enqueue_script( 'instagram-js', get_template_directory_uri() . '/assets/js/instagram.js', array('jquery-3'), '1.0.0', true );
  }

  if (is_archive('works')) {
    wp_enqueue_script( 'minimasonry-min-js', get_template_directory_uri() . '/assets/js/min/minimasonry.min.js', array('jquery-3'), '1.0.0', true );
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.js', array('minimasonry-min-js'), '1.0.0', true );
  } else {
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.js', array('jquery-3'), '1.0.0', true );
  }
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );