<?php

get_header();
$training = get_field('training');
$experience = get_field('experience');
$inspiration = get_field('inspiration');
$cta = get_field('about_cta');

// $absolute_path = "M25.1682808,90.9614361 C-58.2613728,13.9294805 78.0703376,0 252.87998,0 C427.689623,0 578.597934,91.2498538 770.597934,63.466237 C962.597934,35.6826201 852.544974,166.609512 770.597934,206.26527 C688.650895,245.921028 607.995008,219.340428 400.097934,242.758356 C192.20086,266.176285 182.154567,300.070506 90.8762506,224.663887 C-0.402065623,149.257267 108.597934,167.993392 25.1682808,90.9614361 Z";
// function regex_callback($matches) {
//     static $count = -1;
//     $count++;
//     $width = 878;
//     $height = 271;
//     if($count % 2) {
//         return $matches[0] / $height;
//     } else {
//         return $matches[0] / $width;
//     }
// }
// $relative_path = preg_replace_callback('(\d+(\.\d+)?)', 'regex_callback', $absolute_path);
// print_r($relative_path);


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
            <div class="flex-7 push-1">
                <img class="birds-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/birds-4.png" alt=" ">
                <img class="style-svg abstract-6" src="<?php echo get_template_directory_uri(); ?>/assets/img/abstract-6.svg" alt=" ">
                <img class="style-svg abstract-7" src="<?php echo get_template_directory_uri(); ?>/assets/img/abstract-7.svg" alt=" ">

            </div>


            <!-- birds illustration  -->
        </div>
    </div>
</section>

<section class="experience">
    <div class="container">
        <div class="row">
                <div class="flex-7">
                    <img class="decor-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor-3.png" alt=" " >
                    <img class="style-svg about-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-2.svg" alt="A profile photo of Amanda at twilight.">
                    <img class="style-svg abstract-8" src="<?php echo get_template_directory_uri(); ?>/assets/img/abstract-8.svg" alt=" ">
                    
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
            <h2 class="sansHeader-lg normal text-center"><?php echo $experience['logo_header']; ?></h2>
            <ul class="logo-list">
                <?php if ($experience['logo_1']): ?>
                <li class="logo">
                    <img src="<?php echo esc_url($experience['logo_1']['url']); ?>" alt="<?php echo esc_attr($experience['logo_1']['alt']); ?>">
                </li>
                <?php endif; ?>
                <?php if ($experience['logo_2']): ?>
                <li class="logo">
                    <img src="<?php echo esc_url($experience['logo_2']['url']); ?>" alt="<?php echo esc_attr($experience['logo_2']['alt']); ?>">
                </li>
                <?php endif; ?>
                <?php if ($experience['logo_3']): ?>
                <li class="logo">
                    <img src="<?php echo esc_url($experience['logo_3']['url']); ?>" alt="<?php echo esc_attr($experience['logo_3']['alt']); ?>">
                </li>
                <?php endif; ?>
                <?php if ($experience['logo_4']): ?>
                <li class="logo">
                    <img src="<?php echo esc_url($experience['logo_4']['url']); ?>" alt="<?php echo esc_attr($experience['logo_4']['alt']); ?>">
                </li>
                <?php endif; ?>
                <?php if ($experience['logo_5']): ?>
                <li class="logo">
                    <img src="<?php echo esc_url($experience['logo_5']['url']); ?>" alt="<?php echo esc_attr($experience['logo_5']['alt']); ?>">
                </li>
                <?php endif; ?>
                <?php if ($experience['logo_6']): ?>
                <li class="logo">
                    <img src="<?php echo esc_url($experience['logo_6']['url']); ?>" alt="<?php echo esc_attr($experience['logo_6']['alt']); ?>">
                </li>
                <?php endif; ?>
                <?php if ($experience['logo_7']): ?>
                <li class="logo">
                    <img src="<?php echo esc_url($experience['logo_7']['url']); ?>" alt="<?php echo esc_attr($experience['logo_7']['alt']); ?>">
                </li>
                <?php endif; ?>
                <?php if ($experience['logo_8']): ?>
                <li class="logo">
                    <img src="<?php echo esc_url($experience['logo_8']['url']); ?>" alt="<?php echo esc_attr($experience['logo_8']['alt']); ?>">
                </li>
                <?php endif; ?>
                <?php if ($experience['logo_9']): ?>
                <li class="logo">
                    <img src="<?php echo esc_url($experience['logo_9']['url']); ?>" alt="<?php echo esc_attr($experience['logo_9']['alt']); ?>">
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <img class="branch-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/branch-3.png" alt=" ">
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
    <img class="branch-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/branch-4.png" alt=" ">
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
