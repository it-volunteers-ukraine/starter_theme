<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <?php wp_head(); ?>
    <title>It-volunteers</title>
</head>
<body>  
    <div class="wrapper">
        <header class="header">
            <div class="header__content _container">
                <div class="header__menu menu">
                    <div class="menu__icon icon-menu menu__round">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="menu__nav">  
                    <?php 
                        if ( has_custom_logo() ) {
                            echo get_custom_logo();
                        }
                    ?>                     
                    <div class="menu__content">IT VOLUNTEERS</div>
                    <nav class="menu__body"> 
                        <div class=" menu__container">
                            <?php wp_nav_menu( [
                                'theme_location'       => 'header',                          
                                'container'            => false,                           
                                'menu_class'           => 'menu__list',
                                'menu_id'              => false,    
                                'echo'                 => true,                            
                                'items_wrap'           => '<ul id="%1$s" class="header_list %2$s">%3$s</ul>',  
                                ] ); 
                            ?>   
                        </div>                          
                    </nav> 
                    <div class="burger-menu__overlay"></div> 
                </div>                
            </div>                      
        </header>  
	