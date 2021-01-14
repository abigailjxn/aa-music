<?php

get_header();
$training = get_field('training');
$experience = get_field('experience');
$inspiration = get_field('inspiration');
$cta = get_field('about_cta');


?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="hero-about">
    <div class="container">
        <div class="row">
            <div class="flex-4 push-1">
                <h1 class="sansHeader-xl uppercase normal"><?php the_title();?><span>Amanda</span></h1>
                <p><?php the_content();?></p>
            </div>
        </div>
    </div>
    <img class="style-svg about-hero" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-1.svg" alt=" ">
</section>

<section class="training">
    <div class="container">
        <div class="row">
            <div class="flex-4">
                <h2 class="sansHeader-lg normal">
                    <?php echo $training['header']; ?>
                </h2>
                <?php echo $training['content']; ?>
            </div>

            <!-- birds illustration  -->
        </div>
    </div>
</section>

<section class="experience">
    <div class="container">
        <div class="row">
                <div class="flex-7">
                    
                </div>
                <div class="flex-4 push-1">
                    <h2 class="sansHeader-lg normal">
                        <?php echo $experience['header']; ?>
                    </h2>
                    <?php echo $experience['content']; ?>
                </div>
        </div>
    </div>
</section>

<section class="collab">
    <div class="container">
        <div class="row">
            <h2 class="sansHeader-lg normal"><?php echo $experience['logo_header']; ?></h2>
            <ul class="logo-list">
                <li class="logo">
                    <img src="" alt="">
                </li>
                <li class="logo">
                    <img src="" alt="">
                </li>
                <li class="logo">
                    <img src="" alt="">
                </li>
                <li class="logo">
                    <img src="" alt="">
                </li>
                <li class="logo">
                    <img src="" alt="">
                </li>
                <li class="logo">
                    <img src="" alt="">
                </li>
                <li class="logo">
                    <img src="" alt="">
                </li>
                <li class="logo">
                    <img src="" alt="">
                </li>
                <li class="logo">
                    <img src="" alt="">
                </li>
            </ul>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branch-3.png" alt=" ">
</section>
          
<section class="inspiration">
    <div class="container">
        <div class="row">
            <div class="flex-4">
                <h2 class="sansHeader-lg normal">
                    <?php echo $inspiration['header']; ?>
                </h2>
                <?php echo $inspiration['content']; ?>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branch-4.png" alt=" ">
</section>

<section class="about-cta" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/mural.jpg');" aria-label="">
    <div class="container">
        <div class="row">
            <div class="text">
                <h2 class="sansHeader-lg normal">
                    <?php echo $cta['header']; ?>
                </h2>
                <a href="" class="button">Get in touch</a>
            </div>
            <img class="flower-shape" src="<?php echo get_template_directory_uri(); ?>/assets/img/branch-3-crop.png" alt=" ">
            <img class="style-svg cta-shape" src="<?php echo get_template_directory_uri(); ?>/assets/img/cta-shape.svg" alt=" ">
        </div>
    </div>
</section>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
