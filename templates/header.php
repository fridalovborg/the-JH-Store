<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="mobile-logo-jh" href="<?= esc_url(home_url('/')); ?>">
                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'small' );
                    ?>
                    <img class="logo" alt="JH Store logo" src="<?php echo $image[0]; ?>">
                </a>
                <a class="desktop-logo-jh" href="<?= esc_url(home_url('/')); ?>">
                    <?php dynamic_sidebar('sidebar-footer'); ?>
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
<?php if(WC()->cart->get_cart_contents_count() !== 0) { ?>
    <?php echo '<div class="shop-menu if-items">'; ?>
    <?php wp_nav_menu( array( 'menu' => 'Shopping') ); ?>
    <?php echo '</div>'; ?>
<?php } else { ?>
    <div class="shop-menu"><?php wp_nav_menu( array( 'menu' => 'Shopping') ); ?></div>
<?php } ?>
<div class="menu-bg"></div>