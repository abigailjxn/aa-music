<?php

get_header();

/* this is the base template for an archive page for posts or a custom post type.*/ 
?>

<section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <div class="content">
                <?php the_post_thumbnail(); ?>
                <?php the_title(); ?>
                <?php the_content(); ?>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        </article>
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>