<?php

get_header();
$vimeo = get_field('vimeo_section');
$vimeo_shortcode = $vimeo['video_gallery_shortcode'];

// Using set variables to avoid getting ACF Pro for repreater
$accordion_1 = get_field('accordion_1');
$accordion_2 = get_field('accordion_2');
$accordion_3 = get_field('accordion_3');
$accordion_4 = get_field('accordion_4');
$accordion_5 = get_field('accordion_5');
$accordion_6 = get_field('accordion_6');

$contact = get_field('contact');


?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="music-hero">
    <div class="container">
        <div class="row">
            <div class="flex-7">
                <h1 class="sansHeader-xl uppercase normal"><?php the_title();?></h1>
                <p><?php the_content();?></p>
            </div>
        </div>
    </div>
    <img class="abstract-4-branch" src="<?php echo get_template_directory_uri(); ?>/assets/img/abstract-4-branch.png" alt=" ">
    <img class="style-svg abstract-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/abstract-4.svg" alt=" ">
</section>

<section class="music-grid">
    <div class="container">
        <div class="accordion">
    
            <?php if ($vimeo['title'] && $vimeo_shortcode) : ?>
            <button id="accordion-open-1" class="accordion__button expanded" aria-expanded="true">
                <?php echo $vimeo['title'] ?>
            </button>
            <div class="commercial accordion__section open" id="accordion-section-1" aria-hidden="false">
                <?php echo do_shortcode($vimeo_shortcode); ?>
            </div>
            <?php endif; ?>

            <?php if ($accordion_1['title'] && $accordion_1['embed_code']) : ?>
            <button id="accordion-open-2" class="accordion__button" aria-expanded="false">
                <?php echo $accordion_1['title']; ?>
            </button>
            <div class="accordion__section" id="accordion-section-2" aria-hidden="true">
                <?php echo $accordion_1['embed_code']; ?>
            </div>
            <? endif; ?>

            <?php if ($accordion_2['title'] && $accordion_2['embed_code']) : ?>
            <button id="accordion-open-3" class="accordion__button" aria-expanded="false">
                <?php echo $accordion_2['title']; ?>
            </button>
            <div class="accordion__section" id="accordion-section-3" aria-hidden="true">
                <?php echo $accordion_2['embed_code']; ?>
            </div>
            <?php endif; ?>

            <?php if ($accordion_3['title'] && $accordion_3['embed_code']) : ?>
            <button id="accordion-open-4" class="accordion__button" aria-expanded="false">
                <?php echo $accordion_3['title']; ?>
            </button>
            <div class="accordion__section" id="accordion-section-4" aria-hidden="true">
                <?php echo $accordion_3['embed_code']; ?>
            </div>
            <? endif; ?>

            <?php if ($accordion_4['title'] && $accordion_4['embed_code']) : ?>
            <button id="accordion-open-5" class="accordion__button" aria-expanded="false">
                <?php echo $accordion_4['title']; ?>
            </button>
            <div class="accordion__section" id="accordion-section-5" aria-hidden="true">
                <?php echo $accordion_4['embed_code']; ?>
            </div>
            <? endif; ?>

            <?php if ($accordion_5['title'] && $accordion_5['embed_code']) : ?>
            <button id="accordion-open-6" class="accordion__button" aria-expanded="false">
                <?php echo $accordion_5['title']; ?>
            </button>
            <div class="accordion__section" id="accordion-section-6" aria-hidden="true">
                <?php echo $accordion_5['embed_code']; ?>
            </div>
            <?php endif; ?>

            <?php if ($accordion_6['title'] && $accordion_6['embed_code']) : ?>
            <button id="accordion-open-7" class="accordion__button" aria-expanded="false">
                <?php echo $accordion_6['title']; ?>
            </button>
            <div class="minimal accordion__section" id="accordion-section-7" aria-hidden="true">
                <?php echo $accordion_6['embed_code']; ?>
            </div>
            <? endif; ?>
        
        </div>
        
    </div>


</section>

<section class="music-cta">
    <div class="container">
        <div class="row">
            <div class="flex-4 center animate">
                <h2 class="sansHeader-lg normal"><?php echo $contact['header']; ?></h2>
                <h3 class="sansHeader-med normal"><?php echo $contact['subheader']; ?></h3>
                <?php the_field('typeform_embed_code'); ?>
            </div>
        </div>
    </div>
    <img class="abstract-5-branch" src="<?php echo get_template_directory_uri(); ?>/assets/img/abstract-5-branch.png" alt=" ">
    <img class="style-svg abstract-5" src="<?php echo get_template_directory_uri(); ?>/assets/img/abstract-5.svg" alt=" ">
</section>
           
          

<?php endwhile; endif; ?>


<?php get_footer(); ?>
