<?php get_header();?>
    <div class="container-fluid post">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <!--entrada-->
            <div class="card-body col-lg-12 p-0">
                <div class="image">
                    <img src="https://live.staticflickr.com/2896/14066335439_e01070dbc0_k_d.jpg" alt="foto"
                        class="img-fluid">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt-n3 bg-white">
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