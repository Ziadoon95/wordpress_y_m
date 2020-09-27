<?php
function display_name()
{
    echo "my name is zaidun";
}

function spritz_styles_scripts()
{
//register js
wp_register_script('spritz-plugins',
get_template_directory_uri().'/js/plugins.js', array('jquery') );
wp_register_script('spritz-app',
get_template_directory_uri().'/js/app.js', array('jquery','spritz-plugins') );
//Enque js
wp_enqueue_script( 'spritz-plugins' );
wp_enqueue_script( 'spritz-app' );
}
add_action( 'wp_enqueue_scripts', 'spritz_styles_scripts' );

?>