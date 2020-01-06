<?php
if ( !function_exists('eagj_customize_register') ):
  function eagj_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
      $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.title_site',
        'render_callback' => 'eagj_customize_blogname'
      ) );
      $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.description_title',
        'render_callback' => 'eagj_customize_blogdescription',
      ) );
    }
  }
endif;

add_action( 'customize_register', 'eagj_customize_register' );


if ( !function_exists('eagj_customize_blogname') ):
  function eagj_customize_blogname () {
    bloginfo( 'name' );
  }
endif;

if ( !function_exists('eagj_customize_blogdescription') ):
  function eagj_customize_blogdescription () {
    bloginfo( 'description' );
  }
endif;
?>