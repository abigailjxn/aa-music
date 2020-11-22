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
    <div class="container">
        <div class="accordion">
    
            <button id="accordion-open-1" class="accordion__button" aria-expanded="false">
                Commercial
            </button>
            <div class="commercial accordion__section" id="accordion-section-1" aria-hidden="true">
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
            <div class="rc-film-score accordion__section" id="accordion-section-2" aria-hidden="true">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/500794356&color=%237e559b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aaugust30" title="Amanda August" target="_blank" style="color: #cccccc; text-decoration: none;">Amanda August</a> · <a href="https://soundcloud.com/aaugust30/sets/revolt-of-color-original-score" title="Revolt of Color Original Score" target="_blank" style="color: #cccccc; text-decoration: none;">Revolt of Color Original Score</a></div>
            </div>
            
            <div class="urban">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/484097502&color=%237e559b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aaugust30" title="Amanda August" target="_blank" style="color: #cccccc; text-decoration: none;">Amanda August</a> · <a href="https://soundcloud.com/aaugust30/sets/urban" title="Urban" target="_blank" style="color: #cccccc; text-decoration: none;">Urban</a></div>
            </div>
            <div class="electronic">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/484093908&color=%237e559b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aaugust30" title="Amanda August" target="_blank" style="color: #cccccc; text-decoration: none;">Amanda August</a> · <a href="https://soundcloud.com/aaugust30/sets/electronic" title="Electronic" target="_blank" style="color: #cccccc; text-decoration: none;">Electronic</a></div>
            </div>
            <div class="cinematic">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/484052205&color=%237e559b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aaugust30" title="Amanda August" target="_blank" style="color: #cccccc; text-decoration: none;">Amanda August</a> · <a href="https://soundcloud.com/aaugust30/sets/orchestral" title="Cinematic" target="_blank" style="color: #cccccc; text-decoration: none;">Cinematic</a></div>
            </div>
            <div class="minimal">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/484036623&color=%237e559b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aaugust30" title="Amanda August" target="_blank" style="color: #cccccc; text-decoration: none;">Amanda August</a> · <a href="https://soundcloud.com/aaugust30/sets/minimalindie-scoring" title="Minimal" target="_blank" style="color: #cccccc; text-decoration: none;">Minimal</a></div>
            </div>
            <div class="acoustic-pop">
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
                <h3 class="sansHeader-normal normal">Contact Amanda</h3>
            </div>
        </div>
    </div>
</section>
           
          

<?php endwhile; endif; ?>


<?php get_footer(); ?>
