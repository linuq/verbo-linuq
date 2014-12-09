<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head  prefix="og:http://ogp.me/ns#">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
        <title><?php wp_title( '|' , true , 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    
        get_template_part( 'cfg/templates/head' );

        myThemes::favicon();
        myThemes::ajaxurl();
        wp_head(); 
    ?>
    </head>
    <body <?php body_class( ); ?>>

        <header>
            <div class="mythemes-topper">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <hgroup>
                                <span class="mythemes-nav-btn">
                                    <button type="button" class="btn-collapse btn-base-nav" data-toggle=".header-nav.base-nav"><i>+</i></button>
                                </span>
                                <?php if( myThemes::get( 'logo' ) ) { ?>
                                    <a class="brand linuq__logo" href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); echo ' '; bloginfo( 'description' ); ?>">
                                        <img src="<?php echo myThemes::get( 'logo' ); ?>" alt="<?php bloginfo( 'name' ); echo ' '; bloginfo( 'description' ); ?>"/>
                                    </a>
                                <?php }else { ?>

                                    <?php if( is_home() || is_front_page() ) { ?>
                                        <h1 class="brand"><a class="mythemes-logo" href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); echo ' '; bloginfo( 'description' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                                    <?php }else{ ?>
                                        <a class="mythemes-logo" href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); echo ' '; bloginfo( 'description' ); ?>"><?php bloginfo( 'name' ); ?></a>
                                    <?php } ?>
                                <?php } ?>
                            </hgroup>
                        </div>
            
                        <div class="col-sm-12 col-md-9 col-lg-9">

                            <nav class="mythemes-nav-inline base-nav header-nav nav-collapse">
                            <?php
                                $args = array(
                                    'theme_location'    => 'header-first',
                                    'container_class'   => 'nav-wrapper',
                                    'menu_class'        => 'mythemes-menu'
                                );
                                
                                $location = get_nav_menu_locations();
                                if( isset( $location[ 'header-first' ] ) && $location[ 'header-first' ] > 0 ){
                                    wp_nav_menu( $args );
                                }else{
                                    $pages = get_posts( array( 'numberposts' => 4 , 'post_type' => 'page' ) );
                                    
                                    if( !empty( $pages ) ){
                                        echo '<div class="nav-wrapper">';
                                        echo '<ul class="mythemes-menu">';

                                        foreach( $pages as $p => $item ){
                                            $classes = '';
                                            if( is_page( $item -> ID ) )
                                                $classes = 'current-menu-item';
                                                
                                            echo '<li class="menu-item ' . $classes . '"><a href="' . get_permalink( $item -> ID ) . '">' . $item -> post_title . '</a></li>';
                                        }
                                        echo '</ul>';
                                        echo '</div>';
                                    }
                                }
                            ?>
                            </nav>

                        </div>

                    </div>


                    <?php
                        if( is_single() ||  ( ( is_home() || is_front_page() ) && !myThemes::get( 'show-header' ) ) ){
                    ?>
                            <!-- SINGLE POST DELIMITER -->
                            <div class="row mythemes-delimiter no-padding">
                                <div class="col-lg-12">
                                    <div class="delimiter-item"></div>
                                </div>
                            </div>
                    <?php
                        }
                    ?>

                </div>
            </div>

            <?php
                if( ( is_home() || is_front_page() ) && myThemes::get( 'show-header' ) ){
                    get_template_part( 'cfg/templates/header' );
                }
            ?>

        </header>