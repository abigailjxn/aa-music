<?php

get_header();
// $contact = get_field('contact');


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
    
            <button id="accordion-open-1" class="accordion__button expanded" aria-expanded="true">
                Commercial
            </button>
            <div class="commercial accordion__section open" id="accordion-section-1" aria-hidden="false">
                <?php echo do_shortcode("[origincode_videogallery id='1']"); ?>
            </div>

    
            <button id="accordion-open-2" class="accordion__button" aria-expanded="false">
                Featured
            </button>
            <div class="featured accordion__section" id="accordion-section-2" aria-hidden="true">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/484118874&color=%237e559b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aaugust30" title="Amanda August" target="_blank" style="color: #cccccc; text-decoration: none;">Amanda August</a> · <a href="https://soundcloud.com/aaugust30/sets/featured" title="Featured" target="_blank" style="color: #cccccc; text-decoration: none;">Featured</a></div>
            </div>

            <button id="accordion-open-3" class="accordion__button" aria-expanded="false">
                Film Score
            </button>
            <div class="rc-film-score accordion__section" id="accordion-section-3" aria-hidden="true">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/500794356&color=%237e559b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aaugust30" title="Amanda August" target="_blank" style="color: #cccccc; text-decoration: none;">Amanda August</a> · <a href="https://soundcloud.com/aaugust30/sets/revolt-of-color-original-score" title="Revolt of Color Original Score" target="_blank" style="color: #cccccc; text-decoration: none;">Revolt of Color Original Score</a></div>
            </div>
            
            <button id="accordion-open-4" class="accordion__button" aria-expanded="false">
                Urban
            </button>
            <div class="urban accordion__section" id="accordion-section-4" aria-hidden="true">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/484097502&color=%237e559b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aaugust30" title="Amanda August" target="_blank" style="color: #cccccc; text-decoration: none;">Amanda August</a> · <a href="https://soundcloud.com/aaugust30/sets/urban" title="Urban" target="_blank" style="color: #cccccc; text-decoration: none;">Urban</a></div>
            </div>

            <button id="accordion-open-5" class="accordion__button" aria-expanded="false">
                Electronic
            </button>
            <div class="electronic accordion__section" id="accordion-section-5" aria-hidden="true">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/484093908&color=%237e559b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aaugust30" title="Amanda August" target="_blank" style="color: #cccccc; text-decoration: none;">Amanda August</a> · <a href="https://soundcloud.com/aaugust30/sets/electronic" title="Electronic" target="_blank" style="color: #cccccc; text-decoration: none;">Electronic</a></div>
            </div>

            <button id="accordion-open-6" class="accordion__button" aria-expanded="false">
                Cinematic
            </button>
            <div class="cinematic accordion__section" id="accordion-section-6" aria-hidden="true">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/484052205&color=%237e559b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aaugust30" title="Amanda August" target="_blank" style="color: #cccccc; text-decoration: none;">Amanda August</a> · <a href="https://soundcloud.com/aaugust30/sets/orchestral" title="Cinematic" target="_blank" style="color: #cccccc; text-decoration: none;">Cinematic</a></div>
            </div>

            <button id="accordion-open-7" class="accordion__button" aria-expanded="false">
                Minimal
            </button>
            <div class="minimal accordion__section" id="accordion-section-7" aria-hidden="true">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/484036623&color=%237e559b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aaugust30" title="Amanda August" target="_blank" style="color: #cccccc; text-decoration: none;">Amanda August</a> · <a href="https://soundcloud.com/aaugust30/sets/minimalindie-scoring" title="Minimal" target="_blank" style="color: #cccccc; text-decoration: none;">Minimal</a></div>
            </div>

            <button id="accordion-open-8" class="accordion__button" aria-expanded="false">
                Acoustic Pop
            </button>
            <div class="acoustic-pop accordion__section" id="accordion-section-8" aria-hidden="true">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/484029006&color=%237e559b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aaugust30" title="Amanda August" target="_blank" style="color: #cccccc; text-decoration: none;">Amanda August</a> · <a href="https://soundcloud.com/aaugust30/sets/acousticpop" title="Acoustic &amp; Pop" target="_blank" style="color: #cccccc; text-decoration: none;">Acoustic &amp; Pop</a></div>
            </div>
        
        </div>
        
    </div>


</section>

<section class="music-cta">
    <div class="container">
        <div class="row">
            <div class="flex-4 center">
                <h2 class="sansHeader-lg normal">Like what you hear?</h2>
                <h3 class="sansHeader-med normal">Contact Amanda</h3>
                <a href="#" class="button uppercase">Get in Touch</a>
            </div>
        </div>
    </div>
    <img class="abstract-5-branch" src="<?php echo get_template_directory_uri(); ?>/assets/img/abstract-5-branch.png" alt=" ">
    <img class="style-svg abstract-5" src="<?php echo get_template_directory_uri(); ?>/assets/img/abstract-5.svg" alt=" ">

</section>
           
          

<?php endwhile; endif; ?>


<?php get_footer(); ?>
