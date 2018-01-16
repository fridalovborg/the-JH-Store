<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="<?= esc_url(home_url('/')); ?>">
                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'small' );
                    ?>
                    <img class="logo" alt="JH Store logo" src="<?php echo $image[0]; ?>">
                </a>
                <nav>
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation']);
                    endif;
                    ?>
                </nav>
                <a href="#" class="menu-toggle">
                    <img class="mobile-menu" alt="Menu" src="<?php echo get_template_directory_uri(); ?>/assets/images/bars.svg">
                    <img class="mobile-menu-exit" alt="Menu" src="<?php echo get_template_directory_uri(); ?>/assets/images/times.svg">
                </a>
            </div>
        </div>
    </div>
</header>
<div class="menu-bg"></div>
<div class="header-img"></div>