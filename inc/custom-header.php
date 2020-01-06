<?php
if (!function_exists( 'eagj_custom_header')):
    function eagj_custom_header(){
        //FONDO DE CABECERA SUPERIOR COLOR E IMAGEN
        add_theme_support('custom-header',apply_filters('eagj_custom_header_args', array(
            //'default-color'=> '000',
            'default-text-color'=>'fff',
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




if(!function_exists( 'eagj_custom_header_style')):
    function eagj_custom_header_style(){
        $header_text_color=get_header_textcolor();
    }
?>
<style>
.WPheader-branding *{
    color:#<?php echo esc_attr($get_header_textcolor);?>;
}
</style>
<?php
endif;
add_action( 'after_setup_theme', 'eagj_custom_header' );
