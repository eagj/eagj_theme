<?php
/**
 * EAGJ Theme 2020
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage EAGJ
 * @since 1.0.0
 */

if (!function_exists('eagj_scripts') ):
    function eagj_scripts(){
        //CARGAMOS HOJA DE ESTILOS PROPIA
        wp_enqueue_style( 'style', get_stylesheet_uri() );        

        //CARGAMOS BOOTSTRAP CSS DESDE CDN
        wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
        
        //CARGAMOS POPPER.JS DESDE CDN
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), '1.16', true);
        //CARGAMOS BOOTSTRAP.JS DESDE CDN
        wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('popper'), '4.4.1', true);
        
    }
endif;
add_action( 'wp_enqueue_scripts', 'eagj_scripts' );

//HABILITAR IMAGENES DESTACADAS
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );    
 }

 //TITLE
 add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'EAGJ Design', '' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}