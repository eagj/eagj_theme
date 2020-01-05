<?php get_header();?>
 <!--TITULO-->
 <div class="container">
        <h2 class="text-center my-5 text-primary display">Diseño, Prototipado y creación de layaouts</h2>
        <!--TITULO-->
    </div>
    <div class="container-fluid">
        <!--entradas-->
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <!--entrada--> 
            <div class="card-body col-lg-6 col-xl-4 bg-white entrada">
                <div class="image">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));?>
                    </a>
                </div>
                <div class="row">
                    <div class="col-lg-10 mt-n3 mx-auto bg-white">
                        <p class="small"><?php the_category();?></p>

                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                        </h2>
                        <p class="small"><?php the_tags('', '|', '')?></p>
                    </div>
                </div>
            </div>
            <!--entrada-->
            <?php endwhile; endif; ?>            
        </div>
        <!--entradas-->
        <!--Paginacion-->
        <section class="card-body paginacion">        
            <?php get_template_part('template_parts/content', 'pagination')?>
        </section>        
        
        <!--Paginacion-->
    </div>

  <?php get_footer();?>