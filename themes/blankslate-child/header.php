<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header>
    <a href="<?php echo home_url(); ?>">
        <div class="logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planty_logo.png" alt="planty">
        </div>
    </a>
        <nav id="mainmenu">
            <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
        </nav>
    </header>