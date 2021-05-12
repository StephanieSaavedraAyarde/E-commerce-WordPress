<?php
/**
 * Krystal Business: Dynamic CSS Stylesheet
 * 
 */

function krystal_business_dynamic_css_stylesheet() {    
 
    $link_color= esc_html(get_theme_mod( 'kr_link_color','#444444' ));
    $link_hover_color= esc_html(get_theme_mod( 'kr_link_hover_color','#000000' ));
    $button_color= esc_html(get_theme_mod( 'kr_button_color','#444444' ));
    $button_hover_color= esc_html(get_theme_mod( 'kr_button_hover_color','#444444' ));
    $top_menu_color= esc_html(get_theme_mod( 'kr_top_menu_color','#ffffff' ));      

    $css = '

    header.menu-wrapper .nav li .fas,
    header.menu-wrapper.style-2 .nav li .fas,
    .site-title a, .site-title a:hover, .site-title a:focus, .site-title a:visited,
    p.site-description,
    .navbar-toggle,
    span.res-cart-menu a{
        color: ' . $top_menu_color . ';      
    }

    .style-1 .topbar-text,
    .style-1 #menu-social li i,
    .style-1 span#call-us,
    .style-2 .topbar-text,
    .style-2 #menu-social li i,
    .style-2 span#call-us{
        color: ' . $top_menu_color . ';
    }
    
    header.menu-wrapper.fixed .nav li .fas,
    header.menu-wrapper.style-2.fixed .nav li .fas,
    header.menu-wrapper.fixed .topbar-text,
    header.menu-wrapper.style-2.fixed .topbar-text,
    header.menu-wrapper.fixed #menu-social li i,
    header.menu-wrapper.style-2.fixed #menu-social li i,
    header.menu-wrapper.fixed .top-right-sidebar span#call-us,
    header.menu-wrapper.style-2.fixed .top-right-sidebar span#call-us{
        color: #555;
    }

    header.menu-wrapper.fixed .top-bar{
        background: #efefef;
    }

    header.menu-wrapper.fixed .menu-header-cart,
    header.menu-wrapper.style-2.fixed .menu-header-cart{
        top: 72px;
    }

    .woocommerce ul.products li.product .button:hover,
    .woocommerce .widget_price_filter .price_slider_amount .button:hover,
    .single_add_to_cart_button:hover,
    .woocommerce a.button:hover,
    .woocommerce button.button:hover{
        color: #fff !important;
        background: ' . $button_hover_color . '!important;
    }

    .woocommerce-cart-form input[type="submit"]{
        color: #555 !important;
        border: none !important;
        border: none !important;
    }

    .woocommerce-cart-form input[type="submit"]:hover{
        color: #fff !important;
        background: ' . $button_hover_color . '!important;
        border: none !important;   
    }

    .wc-proceed-to-checkout a:hover{
        background: ' . $button_hover_color . '!important;
    }

    .woocommerce nav.woocommerce-pagination ul li span.current,
    .woocommerce nav.woocommerce-pagination ul li a:hover{
        background: ' . $button_color . '!important;
    }

    #commentform input[type=submit]:hover{
        background: ' . $button_hover_color . '!important;   
    }

    #woocat-show .description h5 a {
        color: ' . $link_color . ';
    }

    #woocat-show .description h5 a:hover {
        color: ' . $link_hover_color . ';
    }
}

';

if('solid'===esc_html(get_theme_mod( 'kr_shop_button_styles',esc_html__('solid','krystal-business')))) {
    $css .='        

        .woocommerce ul.products li.product .button{
            color: #fff !important;
            background: ' . $button_color . '!important;
        }
        
        .woocommerce ul.products li.product .button,
        .woocommerce .widget_price_filter .price_slider_amount .button,
        .single_add_to_cart_button,
        .woocommerce a.button,
        .woocommerce button.button{
            color: #fff !important;
            background: ' . $button_color . '!important;
        }

        .woocommerce-cart-form input[type="submit"]{
            background: ' . $button_color . '!important;
            color: #fff !important;
            border: none !important;
            border: none !important;
        } 

        .woocommerce nav.woocommerce-pagination ul li a:focus, 
        .woocommerce nav.woocommerce-pagination ul li a:hover, 
        .woocommerce nav.woocommerce-pagination ul li span.current{
            background: ' . $button_color . '!important;
        }    

        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt, 
        .woocommerce button.button.alt, 
        .woocommerce input.button.alt,
        .woocommerce .cart .button{
            color: #fff !important;
        }

        .woocommerce #review_form #respond .form-submit input{
            background: ' . $button_color . '!important;
            color: #fff !important;
            border: none !important;
            border: none !important;
        }
    ';  
}

if(true===get_theme_mod( 'kr_enable_top_bar',true)) {
    $css .='  

        @media only screen and (max-width: 480px) {  
            .navbar-toggle {
                top: 55%;
            }

            span.res-cart-menu {
                top: 70%;
            }
        }

        @media only screen and (max-width: 767px) {  
            .navbar-toggle {
                top: 55%;
            }

            span.res-cart-menu {
                top: 70%;
            }
        }
        
    ';  
}

if(false===get_theme_mod( 'kr_menu_cart',true)) {
    $css .='  

        ul.cart-menu,
        .res-cart-menu {
           display: none;
        }
        
    ';  
}

return apply_filters( 'krystal_business_dynamic_css_stylesheet', $css);

}

?>


