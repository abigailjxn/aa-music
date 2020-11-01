<?php

    get_header();

?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="flex-7">
                <h1 class="sansHeader-xl uppercase normal"><?php the_title();?></h1>
                <p><?php the_content();?></p>
            </div>
        </div>
    </div>
</section>

<section class="featured-work">
    <div class="container">
        <div class="row">
            <h2 class="sansHeader-lg uppercase normal">Featured Work</h2>
        </div>
        <div class="row">
            <div class="flex-4">
                <article class="feature-1">
                    <img src="" alt="">
                    <div class="content">
                        <h3 class="project-title sansHeader-med normal">Society Nine</h3>
                        <h4 class="project-type light uppercase spaced">Brand Feature Video</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore obcaecati enim repellat ipsa autem optio delectus, velit sunt aliquid fugiat omnis, repudiandae totam quo atque nobis earum ut rem repellendus? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </article>
            </div>
            <div class="flex-4">
                <article class="feature-2">
                    <img src="" alt="">
                    <div class="content">
                        <h3 class="project-title sansHeader-med normal">Society Nine</h3>
                        <h4 class="project-type light uppercase spaced">Brand Feature Video</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore obcaecati enim repellat ipsa autem optio delectus, velit sunt aliquid fugiat omnis, repudiandae totam quo atque nobis earum ut rem repellendus?</p>
                    </div>
                </article>
            </div>
            <div class="flex-4">
                <article class="feature-3">
                    <img src="" alt="">
                    <div class="content">
                        <h3 class="project-title sansHeader-med normal">Society Nine</h3>
                        <h4 class="project-type light uppercase spaced">Brand Feature Video</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore obcaecati enim repellat ipsa autem optio delectus, velit sunt aliquid fugiat omnis, repudiandae totam quo atque nobis earum ut rem repellendus?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore obcaecati enim repellat ipsa autem optio delectus, velit sunt aliquid fugiat omnis, repudiandae totam quo atque nobis earum ut rem repellendus?</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="front-cta">
    <div class="container">
        <div class="row">
            <div class="flex-4 push-1">
                <div class="contact-form">
                    <h2 class="sansHeader-lg normal">Get in Touch</h2>
                </div>
            </div>
            <div class="divider"></div>
            <div class="flex-4 push-1">
                <div class="music-cta">
                    <h2 class="sansHeader-lg normal">Want to hear more?</h2>
                    <a href="#" class="button uppercase">Go to music</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
