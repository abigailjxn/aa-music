<?php

// Commented out until set up in WP Admin
// $social_menu = wp_get_nav_menu_items("Social");

$footer = get_field('footer');

?>
    </main>

    <footer>
            <div class="container">
                <img class="footer-decor" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor-1.png" alt=" ">
                <div class="row">
                    <div class="copyright sansSerif-sm">Amanda August Music. Copyright 2020.</div>
                    <div class="socials">
                        <ul>
                            <li>
                                <a href="<?php echo $footer['vimeo']; ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/vimeo.png" alt="Vimeo"></a>
                            </li>
                            <li>
                                <a href="<?php echo $footer['soundcloud']; ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/soundcloud.png" alt="Soundcloud"></a>
                            </li>
                            <li>
                                <a href="<?php echo $footer['instagram']; ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.png" alt="Instagram"></a>
                            </li>
                            <li>
                                <a href="<?php echo $footer['linkedin']; ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/linkedin.png" alt="LinkedIn"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

    </footer>

</div>


<?php wp_footer()?>

</body>
</html>