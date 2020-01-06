<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage EAGJ_THEME
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes();?> >

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
        
        <!-- Cargamos los archivos (style.css) que hay en functions.php -->
        <?php wp_head();?>
    
        <title><?php wp_title(''); ?></title>


</head>

<body <?php body_class(); ?>>

    <!--menu-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
        <div class="container-fluid">
            <?php
                if(has_custom_logo()):
                    the_custom_logo();
                else:
                    echo '<a class="navbar-brand" href="'.esc_url(home_url('/')).'">' .get_bloginfo('name').'</a>';
                endif;
            ?> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <?php
            if (has_nav_menu('menu-principal')):
                wp_nav_menu( array(
                    'theme_location'    => 'menu-principal',
                    'depth'             => 2,
                    'container'         => 'nav',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarNav',
                    'menu_class'        => 'nav navbar-nav ml-auto ',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
            else:?>
                <nav id="navbarNav" class="collapse navbar-collapse">
                    <ul id="menu-inicio" class="nav navbar-nav ml-auto ">
                        <?php wp_list_pages('title_li')?>
                    </ul>
                </nav>            
            <?php endif; ?>
        </div>
    </nav>
    <!--menu-->
 <!--TITULO-->
    <div class="container">
        <h2 class="text-center my-5 text-primary display"><?php bloginfo( 'description' );?></h2>
    </div>
 <!--TITULO-->
    
   