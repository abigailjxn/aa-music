<?php

get_header();


?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="flex-12">
                    <h1><?php the_title();?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
           
          

<?php endwhile; endif; ?>


<?php get_footer(); ?>
