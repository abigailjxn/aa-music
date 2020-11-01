<?php

get_header();


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
</section>

<section class="training">
    <div class="container">
        <div class="row">
            <div class="flex-4">
                <h2 class="sansHeader-lg normal">
                    Classically trained,<br>
                    Story inspired
                </h2>
                <p class="sansSerif-sm normal">Amanda is native to the cornfields of Illinois where she began studying piano at a young age. She’s always had an affinity for story telling.</p>
                <p class="sansSerif-normal bold">She credits Pirates of the Caribbean as the movie that first solidified her love of film scores. She became interested in how music can influence a narrative and decided composition was her most natural form of artistic expression.</p>
                <p class="sansSerif-sm normal">After completing a Bachelor of Arts degree in music and vocal performance from North Central College, she joined Comma Music in Chicago as a staff composer for two years until transitioning to freelance.</p>
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
                        Maybe you've heard
                    </h2>
                    <p class="sansSerif-sm normal">She has worked with major advertising agencies in Chicago, L.A., Milwaukee, New York, Portland, and San Francisco.<br>Her original music can be heard in national campaign spots with Boeing, Capital One, Credit Karma, Feeding America, Hallmark, Jim Beam, McDonald's, Raid, Sentry Insurance, and Society Nine.<br>Additionally, she has scored three short films: Northfound (2016), The Lion and the Gecko (2018), and Revolt of Color (2017).
                    </p>
                </div>
        </div>
    </div>
</section>

<section class="collab">
    <div class="container">
        <div class="row">
            <h2 class="sansHeader-lg normal">Music Heard in Collaboration<br>With These Companies</h2>
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
</section>
          
<section class="inspiration">
    <div class="container">
        <div class="row">
            <div class="flex-4">
                <h2 class="sansHeader-lg normal">
                    Sounds of<br>Inspiration
                </h2>
                <p class="sansSerif-sm normal">Amanda’s writing style is an amalgamation of her love for anime, fantasy films, and video games. Drawing from composers such as Howard Shore (Lord of the Rings), Joe Hisaishi (Spirited Away), and Thomas Newman (Shawshank Redemption), her music embodies piano driven melodies, ethereal themes, and classical elements. As an artist, creating content that will move and inspire has always been her top priority.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="about-cta">
    <div class="container">
        <div class="row">
            <h2 class="sansHeader-lg normal">
                Let's Make Some Music
            </h2>
            <a href="" class="button">Get in touch</a>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
