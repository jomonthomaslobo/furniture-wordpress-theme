<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="site-branding">
                <?php if ( has_custom_logo() ) : ?>
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                    if (has_custom_logo()) {
                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" style="width: 400px; height: auto;">';
                    }
                    ?>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                    </a>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <div class="header-right">
                <nav class="primary-menu">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'custom-menu-class',
                    ) );
                    ?>
                </nav><!-- .primary-menu -->
                <div class="header-contact">
                    <a href="mailto:sales@francdesigns.com">sales@francdesigns.com</a>
                </div><!-- .header-contact -->
            </div><!-- .header-right -->
        </div><!-- .container -->
    </header><!-- .site-header -->

    <?php wp_body_open(); ?>