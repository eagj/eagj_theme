<header class="WPheader">
    <?php
    if(has_custom_header()):
        the_custom_header_markup();
    endif;
    ?>
    <div class="WP-header-branding">
        <h1 class="WP-Header-title">
            <a href="<?php echo esc_url(home_url('/'));?>">
            <?php bloginfo('name');?>
            </a>
        </h1>
        <h2 class="description_title text-center my-5 text-primary display"><?php bloginfo( 'description' );?></h2>
    </div>
</header>