<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package nobaxx-rwd
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'> 
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 

	<div id="content" class="site-content">


 <header class="site-header" id="site-header"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-lg-12"> 
                            <div class="width-100 float-left relative"> 
                                <!-- Site logo start //-->                                 
                                <div class="site-logo scroll-hide" style="display: block;"> 
                                    <a href="<?php bloginfo('url'); ?>"> 
                                        <img src="/wp-content/uploads/2015/06/logo.png">                                         
                                    </a>                                         
                                </div>                                 
                                <!-- Site logo end //-->                                 
                                <!-- Contacts start //-->                                 
                                <div class="header-contacts scroll-hide hidden-xs" style="display: block;"> 
                                    <?php dynamic_sidebar( 'header' ); ?> 
                                   
                                </div> 
                                <div class="cl"></div>                                 
                                                                          <nav class="blocked"> 
                                    <!-- Mobile nav start //-->                                     
                                    <div class="mobile-nav-wrapper hidden-lg hidden-md" id="mobile-menu-wrapper"> 
                                        <i class="fa fa-bars mobile-nav-icon" id="mobile-nav-icon"></i> 
                                        <?php
                                        $defaults = array(
                                            'theme_location'  => 'primary',
                                            'menu'            => '',
                                            'container'       => '',
                                            'container_class' => '',
                                            'container_id'    => '',
                                            'menu_class'      => '',
                                            'menu_id'         => '',
                                            'echo'            => true,
                                            'fallback_cb'     => 'wp_page_menu',
                                            'before'          => '',
                                            'after'           => '',
                                            'link_before'     => '',
                                            'link_after'      => '',
                                            'items_wrap'      => '<ul id="mobile-nav" class="hide-on-tablet mobile-nav">%3$s</ul>',
                                            'depth'           => 1,
                                            'walker'          => ''
                                        );

                                        wp_nav_menu( $defaults );
                                        ?>       
                                    </div>                                     
                                    <!-- Mobile nav end //-->                                     
                                    <!-- Desktop nav start //-->                                     

                                        <?php
                                        $defaults = array(
                                            'theme_location'  => 'primary',
                                            'menu'            => '',
                                            'container'       => '',
                                            'container_class' => '',
                                            'container_id'    => '',
                                            'menu_class'      => '',
                                            'menu_id'         => '',
                                            'echo'            => true,
                                            'fallback_cb'     => 'wp_page_menu',
                                            'before'          => '',
                                            'after'           => '',
                                            'link_before'     => '',
                                            'link_after'      => '<div class="hover" style="top: 100%; margin-top: -2px;"></div>',
                                            'items_wrap'      => '<ul id="" class="desktop-nav hidden-sm hidden-xs hide-on-tablet">%3$s</ul>',
                                            'depth'           => 1,
                                            'walker'          => ''
                                        );

                                        wp_nav_menu( $defaults );
                                        ?>       

                                    </div>                                     
                                    <!-- Mega nemu #1 end //-->                                     
                                </nav>   
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </header>                         
           

