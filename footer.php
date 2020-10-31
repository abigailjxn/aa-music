<?php

// Commented out until set up in WP Admin
// $navMain = wp_get_nav_menu_items("Footer");

?>
    </main>

    <footer>
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="menu">
                        <ul>
                            <!-- <?php foreach( $navMain as $m ) { ?>
                                <li class="<?php echo implode(' ', $m->classes); ?>">
                                    <a href="<?php echo $m->url; ?>" target="<?php echo $m->target; ?>" ><?php echo $m->title; ?></a>
                                </li>
                            <?php } ?> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>

</div>


<?php wp_footer()?>

</body>
</html>