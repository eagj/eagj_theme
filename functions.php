<?php
function agregar_css_js(){
    //CARGAMOS HOJA DE ESTILOS PROPIA
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    //CARGAMOS BOOTSTRAP DESDE CDN
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    
    //CARGAMOS POPPER.JS DESDE CDN
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), '1.16', true);
    //CARGAMOS BOOTSTRAP.JS DESDE CDN
    wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('popper'), '4.4.1', true);


}

add_action( 'wp_enqueue_scripts', 'agregar_css_js' );

//HABILITAR IMAGENES DESTACADAS
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );    
 }