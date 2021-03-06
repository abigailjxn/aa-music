<?php

    get_header();
    $profile = get_field('profile_image');
    $featured_work = get_field('featured_work');
    $contact = get_field('contact');

?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="flex-6 animate">
                <h1 class="sansHeader-xl uppercase normal text-center"><?php the_title();?></h1>
                <p class="sansHeader-lg text-center"><?php the_field('subtitle');?></p>
            </div>
            <div class="flex-6">
                <div class="morph-container">
                    <img class="" src="<?php echo $profile['url'];?>" alt="<?php echo $profile['alt'];?>">
                </div>
            </div>
        </div>
    </div>
    <img class="style-svg abstract-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/abstract-1.svg" alt=" ">
    <img class="abstract-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/abstract-2.png" alt=" ">
    <img class="branch-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/branch-1.png" alt=" ">
</section>

<section class="featured-work">
    <div class="container">
        <div class="row">
            <h2 class="sansHeader-lg uppercase normal">Featured Work</h2>
        </div>
        <div class="row">
            <div class="flex-4">
                <article class="feature-1 animate">
                    <a href="<?php echo $featured_work['featured_1_url']?>"><img src="<?php echo $featured_work['featured_1_image']['url']?>" alt="<?php echo $featured_work['featured_1_image']['alt']?>"></a>
                    <div class="content">
                        <h3 class="project-title sansHeader-med normal"><?php echo $featured_work['featured_1_title']?></h3>
                        <h4 class="project-type light uppercase spaced"><?php echo $featured_work['featured_1_project_type']?></h4>
                        <?php echo $featured_work['featured_1_text']?>
                    </div>
                </article>
            </div>
            <div class="flex-4">
                <article class="feature-2 animate">
                <a href="<?php echo $featured_work['featured_2_url']?>"><img src="<?php echo $featured_work['featured_2_image']['url']?>" alt="<?php echo $featured_work['featured_2_image']['alt']?>"></a>
                    <div class="content">
                        <h3 class="project-title sansHeader-med normal"><?php echo $featured_work['featured_2_title']?></h3>
                        <h4 class="project-type light uppercase spaced"><?php echo $featured_work['featured_2_project_type']?></h4>
                        <?php echo $featured_work['featured_2_text']?>
                    </div>
                </article>
            </div>
            <div class="flex-4">
                <article class="feature-3 animate">
                <a href="<?php echo $featured_work['featured_3_url']?>"><img src="<?php echo $featured_work['featured_3_image']['url']?>" alt="<?php echo $featured_work['featured_3_image']['alt']?>"></a>
                    <div class="content">
                        <h3 class="project-title sansHeader-med normal"><?php echo $featured_work['featured_3_title']?></h3>
                        <h4 class="project-type light uppercase spaced"><?php echo $featured_work['featured_3_project_type']?></h4>
                        <?php echo $featured_work['featured_3_text']?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="row">
            <div class="flex-4 push-1">
                <div class="contact-form animate">
                    <h2 class="sansHeader-lg normal"><?php echo $contact['form_header']?></h2>
                    <?php if ($contact['helper_text']) : ?>
                        <p><?php echo $contact['helper_text']?></p>
                    <?php endif; ?>
                    <?php the_field('typeform_embed_code'); ?>
                </div>
            </div>
            <div class="divider"></div>
            <div class="flex-5 push-2">
                <div class="music-cta flex-center text-center animate">
                    <h2 class="sansHeader-lg normal"><?php echo $contact['link_header']?></h2>
                    <a href="<?php echo $contact['link']['url']?>" class="button uppercase"><?php echo $contact['link']['title']?></a>
                </div>
                <img class="decor-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor-2.png" alt=" ">
                <img class="abstract-3 style-svg" src="<?php echo get_template_directory_uri(); ?>/assets/img/abstract-3.svg" alt=" ">
            </div>
        </div>
    </div>
    <img class="branch-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/branch-2.png" alt=" ">
</section>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
