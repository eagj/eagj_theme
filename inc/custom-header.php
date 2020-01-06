<?php
if (!function_exists( 'eagj_custom_header')):
    function eagj_custom_header(){
        //LOGO PERSONALIZADO
     add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 100,
        'flex-height'=>true,
        'flex-width'=>true,
      ));
       
      //Activar fondo configurable
    add_theme_support('custom-background', array(
        'default-color'=> '000',        
        //'default-image'=> get_template_directory_uri().'/image/default.jpg',
        'default-repeat'=> 'repeat',
        'default-position-x'=> '',
        'default-position-y'=> '',
        'default-size'=> '',
        'default-attachment'=> 'fixed'
      ));

        //FONDO DE CABECERA 
        add_theme_support('custom-header',apply_filters('eagj_custom_header_args', array(
            //'default-color'=> '000',
            //'default-text-color'=>'fff',
            //'default-image'=> get_template_directory_uri().'/image/default.jpg',
            'width'=>1200,
            'height'=>720,
            'flex-width'=>true,
            'flex-height'=>true,
            'video'=>true,
            //'wp-head-callback'=>'eagj_custom_header_style'
        )));
    }
endif;
add_action( 'after_setup_theme', 'eagj_custom_header' );

if(!function_exists( 'eagj_custom_header_style')):
    function eagj_custom_header_style(){
        $header_text_color=get_header_textcolor();
    
?>
<style>
.WPheader-branding *{
    color:#<?php echo esc_attr($get_header_textcolor);?>;
}
</style>
<?php
}
endif;
