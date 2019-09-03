<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            <?php 
            if ( is_front_page() ){ echo 'Home'; echo ' | ';  bloginfo( 'name' );}
            else { echo wp_title(''); echo ' | ';  bloginfo( 'name' );}?>
        </title>
        <?php wp_head(); ?>
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/images/favicon.ico">
    </head>
    <header id="header">
        <div class="pp_section">
            <div class="close_icon"></div>
            <div class="pp_wrapper">
                <div class="pp_heading_wrapper">
                    <div class="pp_vertical_line"></div>
                    <div class="pp_heading">
                        <?php echo get_field('pp_heading', 'options');?>
                    </div>
                </div>
                <div class="pp_content">
                    <div class="pp_content_text">
                        <?php echo get_field('pp_content', 'options');?>
                    </div>
                </div>
            </div>
        </div>
        <div id="logo_with_menu" class="container logo_with_menu">
            <div class="logo_with_mobile_menu_icon_wrapper">
                <div class="logo_wrapper">
                    <a href="#top" class="logo_link">
                        <img class="normal" src="<?php echo get_template_directory_uri();?>/images/logotype.svg" />
                        <img class="sticky" src="<?php echo get_template_directory_uri();?>/images/logotype.svg" />
                    </a>
                </div>
                <div id="mobile_menu_icon" class="mobile_menu_icon">
                    <div id="menu_icon" class="menu_icon">
                        <div class="bit_1"></div><div class="bit_2"></div><div class="bit_3"></div>
                    </div>
                </div>
            </div>
            <nav id="menu_wrapper" class="menu_wrapper">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </nav>
        </div>
    </header>
    <body <?php body_class(); ?>>