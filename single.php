<?php get_header();?>
    <div class="container-fluid post">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <!--entrada-->
            <div class="card-body col-lg-12 p-0">
                <div class="image">
                    <?php the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));?>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt-n3 bg-white">
                            <p><?php the_time(get_option('date_format'))?></p> <!-- muestra la fecha como se ponga en formato fecha de ajustes-->
                            <h2 class="py-3 text-center"><?php the_title();?></h2>                         
                            <?php the_content();?>
                        </div>
                    </div>
                </div>
            </div>
            <!--entrada-->
            <?php endwhile; endif; ?>    
        </div>
    </div>
    <?php get_footer();?>