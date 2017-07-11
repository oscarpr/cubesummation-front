<?php


function integro_scripts(){
    wp_enqueue_script( 'rx js', get_template_directory_uri() . '/js/rx.js');
}
add_action('wp_enqueue_scripts','integro_scripts');



function integro_register_menu() {
  register_nav_menu('new-menu',__( 'principal menu' ));
}
add_action( 'init', 'integro_register_menu' );



function integro_widgets_init (){
  register_sidebar(array(
    'name' => 'description area',
    'id' => 'description_area',
    'before_widget' => '<div class="description-container">',
    'after_widget' => '</div>'
  ));
}
add_action( 'widgets_init' ,'integro_widgets_init');