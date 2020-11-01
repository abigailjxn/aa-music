<?php

get_header();


?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="hero-music">
    <div class="container">
        <div class="row">
            <div class="flex-7">
                <h1 class="sansHeader-xl uppercase normal"><?php the_title();?></h1>
                <p><?php the_content();?></p>
            </div>
        </div>
    </div>
</section>

<section class="music-grid">

</section>

<section class="music-cta">
    <div class="container">
        <div class="row">
            <div class="flex-4">
                <h2 class="sansHeader-lg normal">Like what you hear?</h2>
                <h3 class="sansHeader-normal normal">Contact Amanda</h3>
            </div>
        </div>
    </div>
</section>
           
          

<?php endwhile; endif; ?>


<?php get_footer(); ?>
