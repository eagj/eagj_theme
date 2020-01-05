<!doctype html>
<html <?php language_attributes();?> >

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
        
        <!-- Cargamos los archivos (style.css) que hay en functions.php -->
        <?php wp_head();?>
    
        <title><?php wp_title(''); ?></title>


</head>

<body>

    <!--menu-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
        <div class="container-fluid">        
            <a class="navbar-brand" href="<?php echo home_url('/')?>">LOGO</a>            
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

   