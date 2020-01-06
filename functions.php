<?php
/**
 * EAGJ Theme 2020
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage EAGJ
 * @since 1.3.0
 */


 /**
 * Registramos paginacion bootstrap
 */
if (!function_exists('eagj_scripts') ):
  function eagj_register_navwalker(){
    require_once get_template_directory() . '/template_parts/navbar.php';
  }
endif;
add_action( 'after_setup_theme', 'eagj_register_navwalker' );

 /**
 * Registramos estilos y js
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

 /**
 * Registramos imagen destcada y html5
 */
if (!function_exists( 'eagj_setup' ) ):
  function eagj_setup(){
    //HABILITAR IMAGENES DESTACADAS
    add_theme_support( 'post-thumbnails' );

    //HABILITAR HTML5
    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption'
    ));

     //LOGO PERSONZALIDO
     add_theme_support('custom-logo', array(
      'height' => 100,
      'width' => 100,
      'flex-height'=>true,
      'flex-width'=>true,
    ));

 }
endif;
add_action( 'after_setup_theme', 'eagj_setup' );


//TITLE
 add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'EAGJ Design', '' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

 /**
 * Registramos menú
 */
if (!function_exists( 'eagj_register_my_menus' ) ):
  function eagj_register_my_menus() {
    register_nav_menus(
      array(
        'menu-principal' => __( 'Menú superior' ),
        'menu-social' => __( 'Menú Social' ),      
      )
    );
  }
endif;
 add_action( 'init', 'eagj_register_my_menus' );

 /**
 * Registramos Sidebar/s
 */
if (!function_exists( 'eagj_register_sidebars' ) ):
  function eagj_register_sidebars() {
    register_sidebar(
      array(
      'name' => __('Sidebar Principal', 'EAGJTheme'),
      'id'=>'main_sidebar',
      'description'=>__('Añadir widgets en el sidebar principal', 'EAGJTheme'),
      'before_widget'=>'<article id="%1$s" class="Widget %2$s">',
      'after_widget'=>'</article>',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>'
    ));
    
    register_sidebar(
      array(
        'name'          => __( 'Footer', 'EAGJTheme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Añadir widgets en el sidebar principal', 'EAGJTheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
      ));

    
  }
endif;
 add_action( 'widgets_init', 'eagj_register_sidebars' );