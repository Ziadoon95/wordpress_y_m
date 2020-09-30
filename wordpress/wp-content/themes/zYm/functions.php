<?php

add_theme_support('title-tag');
add_action( 'wp_nav_menu', 'spritz_menu_responsive', 9, 2 );
add_theme_support( 'post-thumbnails' );


/**
* We create a menu in our theme
*/
function spritz_menu_responsive( $menu, $args )
{
 //we check that we have the right menu
 if ( 'header_menu' == $args->theme_location )
 {
    //we add the button
    $button = '<button type="button" class="toggle-menu"><i class="fa fabars"></i></button>';
    $menu = preg_replace('/(<nav(.*?)>)/','${1}'.$button,$menu);
    }
}
 ?>