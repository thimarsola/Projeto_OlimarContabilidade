<header class="header-03">
    <div class="container">
        <!--navbar-->
        <div class="header-03__navbar">
            <!-- brand -->
            <div class="header-03__navbar__brand">
                <a href="<?= (is_home() ? '#home' : get_home_url()); ?>" title="<?= SITE["name"]; ?>">
                    <img class="img-fluid" src="<?= image('logo.svg', 'svg') ?>" alt="<?= SITE['name']; ?>" title="<?= SITE['name']; ?>">
                </a>
            </div>
            <!-- end of brand -->


            <div class="header-03__navbar__section">
                <!-- toggle -->
                <div class="header-03__navbar__section__toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- end of toggle -->

                <!-- container -->
                <div class="header-03__navbar__section__container">
                    <!-- nav -->
                    <nav class="header-03__navbar__section__container__nav">
                        <h2 class="d-none">Menu de Navegação</h2>
                        <?php
                        if(is_home()){
                            wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => ''));
                        }else {
                            wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => ''));
                        }
                        ?>
                    </nav>
                    <!-- end of nav -->
                </div>
                <!-- end of container -->

            </div>
        </div>
        <!--end of navbar-->
    </div>
</header>