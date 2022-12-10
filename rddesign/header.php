<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title() ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="header">
            <!-- If logo image added, display logo image, otherwise display logo text -->
            <div class="header__logo">
                <?php if(get_theme_mod('logo_image')) : ?>
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('logo_image');?>" alt="logo"></a>
                <?php else: ?>
                <a href="<?php echo home_url(); ?>">
                    <p>RD Design</p>
                </a>
                <?php endif; ?>
            </div>

            <!-- Desktop menu -->
            <nav id="menu">
                <div class="desktopNav">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                </div>
            </nav>

            <!-- Mobile menu -->
            <nav class="mobileNav">
                <div class="mobileNav">
                    <a href="javascript:void(0);" onclick="openNav()">
                        <div id="mobMenu">&#9776; Menu</div>
                        <div class="mobNavLinks" id="mobNavLinks">
                            <a href="javascript:void(0);" onclick="closeNav()">
                                <span class="closeBtn" id="closeBtn">X</span>
                                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

                        </div>
                </div>
            </nav>
        </div>

        <!-- Breadcrumb on all pages except home/front page -->
        <?php if ( !is_home() && !is_front_page() ) : ?>

        <?php if ( is_singular('showcase') || is_singular( $post_types = 'design-type' ) ) : ?>
        <div class="breadcrumb">
            <a href="/showcase">Projects</a> > <?php echo get_the_title(); ?>
        </div>
        <?php elseif (is_archive()) : ?>
        <div class="breadcrumb">Projects</div>
        <?php else : ?>
        <div class="breadcrumb">
            <?php echo get_the_title(); ?>
        </div>
        <?php endif;
        endif; ?>

    </header>