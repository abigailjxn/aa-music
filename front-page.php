<?php

    get_header();

?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="flex-7">
                <h1 class="serif-xl bold"><?php the_title();?></h1>
                <p><?php the_content();?></p>
            </div>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
