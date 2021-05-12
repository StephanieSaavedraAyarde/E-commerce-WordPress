<?php
/**
 * Krystal Business Theme Customizer
 *
 * @package krystal-business
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

if ( ! function_exists( 'krystal_business_customize_register' ) ) :
function krystal_business_customize_register( $wp_customize ) {

    // Add custom controls.

    require_once( get_stylesheet_directory(). '/inc/customizer/custom-controls/info/class-info-control.php' );
    require_once( get_stylesheet_directory(). '/inc/customizer/custom-controls/info/class-title-info-control.php' );
    require_once( get_stylesheet_directory(). '/inc/customizer/custom-controls/toggle-button/class-login-designer-toggle-control.php' );
    require_once( get_stylesheet_directory(). '/inc/customizer/custom-controls/radio-images/class-radio-image-control.php' );


    //Top Bar Settings
    $wp_customize->add_section(
        'krystal_business_tbar_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'theme_supports'=> '',
            'title'         => esc_html__( 'Top Bar Settings', 'krystal-business' )
        )
    );


    // Info label
    $wp_customize->add_setting( 
        'kr_label_topbar_settings_section', 
        array(
            'sanitize_callback' => 'krystal_business_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Krystal_Business_Title_Info_Control( $wp_customize, 'kr_label_topbar_settings_section', 
        array(
            'label'       => esc_html__( 'Top Bar Settings', 'krystal-business' ),
            'section'     => 'krystal_business_tbar_settings',
            'type'        => 'title',
            'settings'    => 'kr_label_topbar_settings_section',
        ) 
    ));


    // Enable Top Bar
    $wp_customize->add_setting(
        'kr_enable_top_bar',
        array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'krystal_business_sanitize_checkbox_selection'
        )
    );

    $wp_customize->add_control(
        new Krystal_Business_Toggle_Control( $wp_customize, 'kr_enable_top_bar', 
        array(
            'settings'      => 'kr_enable_top_bar',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable Top Bar Section', 'krystal-business' ),
            'description'   => '',           
        )
    ));

    // Info label
    $wp_customize->add_setting( 
        'kr_label_topbar_email_settings', 
        array(
            'sanitize_callback' => 'krystal_business_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Krystal_Business_Title_Info_Control( $wp_customize, 'kr_label_topbar_email_settings', 
        array(
            'label'       => esc_html__( 'Email Settings', 'krystal-business' ),
            'section'     => 'krystal_business_tbar_settings',
            'type'        => 'title',
            'settings'    => 'kr_label_topbar_email_settings',
            'active_callback'    => 'krystal_business_topbar_enable',
        ) 
    ));

    // Email Address 
    $wp_customize->add_setting(
        'kr_mail_address',
        array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'krystal_business_sanitize_textarea'
        )
    );

    $wp_customize->add_control(
        'kr_mail_address',
        array(
            'settings'      => 'kr_mail_address',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Email Address', 'krystal-business' ),
            'description'   => esc_html__( 'This email address will appear in top bar left position', 'krystal-business' ),
            'active_callback'    => 'krystal_business_topbar_enable',
        )
    );

    // Info label
    $wp_customize->add_setting( 
        'kr_label_topbar_callus_settings', 
        array(
            'sanitize_callback' => 'krystal_business_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Krystal_Business_Title_Info_Control( $wp_customize, 'kr_label_topbar_callus_settings', 
        array(
            'label'       => esc_html__( 'Call Us Settings', 'krystal-business' ),
            'section'     => 'krystal_business_tbar_settings',
            'type'        => 'title',
            'settings'    => 'kr_label_topbar_callus_settings',
            'active_callback'    => 'krystal_business_topbar_enable',
        ) 
    ));

    // Call Us 
    $wp_customize->add_setting(
        'kr_call_us',
        array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'krystal_business_sanitize_textarea'
        )
    );

    $wp_customize->add_control(
        'kr_call_us',
        array(
            'settings'      => 'kr_call_us',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Call Us', 'krystal-business' ),
            'description'   => esc_html__( 'Write down your phone number here', 'krystal-business' ),
            'active_callback'    => 'krystal_business_topbar_enable',
        )
    );

    // Info label
    $wp_customize->add_setting( 
        'kr_label_topbar_social_settings', 
        array(
            'sanitize_callback' => 'krystal_business_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Krystal_Business_Title_Info_Control( $wp_customize, 'kr_label_topbar_social_settings', 
        array(
            'label'       => esc_html__( 'Social Icons Settings', 'krystal-business' ),
            'section'     => 'krystal_business_tbar_settings',
            'type'        => 'title',
            'settings'    => 'kr_label_topbar_social_settings',
            'active_callback'    => 'krystal_business_topbar_enable',
        ) 
    ));

    // Facebook
    $wp_customize->add_setting(
        'kr_facebook_icon',
        array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'krystal_business_sanitize_checkbox_selection'
        )
    );

    $wp_customize->add_control(
        new Krystal_Business_Toggle_Control( $wp_customize, 'kr_facebook_icon', 
        array(
            'settings'      => 'kr_facebook_icon',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable Facebook Icon', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',         
        )
    ));

    // Facebook url 
    $wp_customize->add_setting(
        'kr_facebook_url',
        array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'krystal_business_sanitize_url'
        )
    );

    $wp_customize->add_control(
        'kr_facebook_url',
        array(
            'settings'      => 'kr_facebook_url',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Facebook Link URL', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',
        )
    );

    // Twitter
    $wp_customize->add_setting(
        'kr_twitter_icon',
        array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'krystal_business_sanitize_checkbox_selection'
        )
    );

    $wp_customize->add_control(
        new Krystal_Business_Toggle_Control( $wp_customize, 'kr_twitter_icon', 
        array(
            'settings'      => 'kr_twitter_icon',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable Twitter Icon', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',        
        )
    ));

    // Twitter url 
    $wp_customize->add_setting(
        'kr_twitter_url',
        array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'krystal_business_sanitize_url'
        )
    );

    $wp_customize->add_control(
        'kr_twitter_url',
        array(
            'settings'      => 'kr_twitter_url',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Twitter Link URL', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',
        )
    );

    // Instagram
    $wp_customize->add_setting(
        'kr_instagram_icon',
        array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'krystal_business_sanitize_checkbox_selection'
        )
    );

    $wp_customize->add_control(
        new Krystal_Business_Toggle_Control( $wp_customize, 'kr_instagram_icon', 
        array(
            'settings'      => 'kr_instagram_icon',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable Instagram Icon', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',       
        )
    ));

    // Instagram url 
    $wp_customize->add_setting(
        'kr_instagram_url',
        array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'krystal_business_sanitize_url'
        )
    );

    $wp_customize->add_control(
        'kr_instagram_url',
        array(
            'settings'      => 'kr_instagram_url',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Instagram Link URL', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',
        )
    );

    // Google Plus
    $wp_customize->add_setting(
        'kr_googleplus_icon',
        array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'krystal_business_sanitize_checkbox_selection'
        )
    );

    $wp_customize->add_control(
        new Krystal_Business_Toggle_Control( $wp_customize, 'kr_googleplus_icon', 
        array(
            'settings'      => 'kr_googleplus_icon',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable Google Plus Icon', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',       
        )
    ));

    // Google Plus url 
    $wp_customize->add_setting(
        'kr_googleplus_url',
        array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'krystal_business_sanitize_url'
        )
    );

    $wp_customize->add_control(
        'kr_googleplus_url',
        array(
            'settings'      => 'kr_googleplus_url',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Google Plus Link URL', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',
        )
    );

    // LinkedIn
    $wp_customize->add_setting(
        'kr_linkedin_icon',
        array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'krystal_business_sanitize_checkbox_selection'
        )
    );

    $wp_customize->add_control(
        new Krystal_Business_Toggle_Control( $wp_customize, 'kr_linkedin_icon', 
        array(
            'settings'      => 'kr_linkedin_icon',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable LinkedIn Icon', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',         
        )
    ));

    // LinkedIn url 
    $wp_customize->add_setting(
        'kr_linkedin_url',
        array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'krystal_business_sanitize_url'
        )
    );

    $wp_customize->add_control(
        'kr_linkedin_url',
        array(
            'settings'      => 'kr_linkedin_url',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'LinkedIn Link URL', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',
        )
    );

    // Pinterest
    $wp_customize->add_setting(
        'kr_pinterest_icon',
        array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'krystal_business_sanitize_checkbox_selection'
        )
    );

    $wp_customize->add_control(
        new Krystal_Business_Toggle_Control( $wp_customize, 'kr_pinterest_icon', 
        array(
            'settings'      => 'kr_pinterest_icon',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable Pinterest Icon', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',          
        )
    ));

    // Pinterest url 
    $wp_customize->add_setting(
        'kr_pinterest_url',
        array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'krystal_business_sanitize_url'
        )
    );

    $wp_customize->add_control(
        'kr_pinterest_url',
        array(
            'settings'      => 'kr_pinterest_url',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Pinterest Link URL', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',
        )
    );

    // RSS
    $wp_customize->add_setting(
        'kr_rss_icon',
        array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'krystal_business_sanitize_checkbox_selection'
        )
    );

    $wp_customize->add_control(
        new Krystal_Business_Toggle_Control( $wp_customize, 'kr_rss_icon', 
        array(
            'settings'      => 'kr_rss_icon',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable RSS Icon', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',         
        )
    ));

    // RSS url 
    $wp_customize->add_setting(
        'kr_rss_url',
        array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'krystal_business_sanitize_url'
        )
    );

    $wp_customize->add_control(
        'kr_rss_url',
        array(
            'settings'      => 'kr_rss_url',
            'section'       => 'krystal_business_tbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'RSS Link URL', 'krystal-business' ),
            'description'   => '',
            'active_callback'    => 'krystal_business_topbar_enable',
        )
    );

    if(krystal_business_is_woocommerce_activated()){

        //Shop Settings
        
        $wp_customize->add_section(
            'krystal_business_shop_settings',
            array (
                'priority'      => 25,
                'capability'    => 'edit_theme_options',
                'theme_supports'=> '',
                'title'         => esc_html__( 'Shop Settings', 'krystal-business' )
            )
        );

        // Info label
        $wp_customize->add_setting( 
            'kr_label_shop_settings', 
            array(
                'sanitize_callback' => 'krystal_business_sanitize_title',
            ) 
        );

        $wp_customize->add_control( 
            new Krystal_Business_Title_Info_Control( $wp_customize, 'kr_label_shop_settings', 
            array(
                'label'       => esc_html__( 'Shop Settings', 'krystal-business' ),
                'section'     => 'krystal_business_shop_settings',
                'type'        => 'title',
                'settings'    => 'kr_label_shop_settings',
            ) 
        ));

        // cart menu
        $wp_customize->add_setting(
            'kr_menu_cart',
            array(
                'type' => 'theme_mod',
                'default'           => true,
                'sanitize_callback' => 'krystal_business_sanitize_checkbox_selection'
            )
        );

        $wp_customize->add_control(
            new Krystal_Business_Toggle_Control( $wp_customize, 'kr_menu_cart', 
            array(
                'settings'      => 'kr_menu_cart',
                'section'       => 'krystal_business_shop_settings',
                'type'          => 'toggle',
                'label'         => esc_html__( 'Show Menu Cart:', 'krystal-business' ),
                'description'   => esc_html__( 'This will add a cart icon in primary menu of website', 'krystal-business' ),
            )
        ));

        // Info label
        $wp_customize->add_setting( 
            'kr_label_shop_name_settings', 
            array(
                'sanitize_callback' => 'krystal_business_sanitize_title',
            ) 
        );

        $wp_customize->add_control( 
            new Krystal_Business_Title_Info_Control( $wp_customize, 'kr_label_shop_name_settings', 
            array(
                'label'       => esc_html__( 'Shop Name', 'krystal-business' ),
                'section'     => 'krystal_business_shop_settings',
                'type'        => 'title',
                'settings'    => 'kr_label_shop_name_settings',
            ) 
        ));

        // Shop Name 
        $wp_customize->add_setting(
            'kr_shop_name',
            array(
                'type' => 'theme_mod',
                'default'           => esc_html__('SHOP','krystal-business'),
                'sanitize_callback' => 'krystal_business_sanitize_textarea',            
            )
        );

        $wp_customize->add_control(
            'kr_shop_name',
            array(
                'settings'      => 'kr_shop_name',
                'section'       => 'krystal_business_shop_settings',
                'type'          => 'textbox',
                'label'         => esc_html__( 'Shop Name', 'krystal-business' ),
                'description'   => '',
            )
        );

        // Info label
        $wp_customize->add_setting( 
            'kr_label_shop_sidebar_settings', 
            array(
                'sanitize_callback' => 'krystal_business_sanitize_title',
            ) 
        );

        $wp_customize->add_control( 
            new Krystal_Business_Title_Info_Control( $wp_customize, 'kr_label_shop_sidebar_settings', 
            array(
                'label'       => esc_html__( 'Shop Sidebar', 'krystal-business' ),
                'section'     => 'krystal_business_shop_settings',
                'type'        => 'title',
                'settings'    => 'kr_label_shop_sidebar_settings',
            ) 
        ));

        // Shop Sidebar
        $wp_customize->add_setting(
            'kr_shop_styles',
            array(
                'type' => 'theme_mod',
                'default'           => 'default',
                'sanitize_callback' => 'krystal_business_sanitize_shop_styles_selection'
            )
        );

        $wp_customize->add_control(
            'kr_shop_styles',
            array(
                'settings'      => 'kr_shop_styles',
                'section'       => 'krystal_business_shop_settings',
                'type'          => 'radio',
                'label'         => esc_html__( 'Select Sidebar Position:', 'krystal-business' ),
                'description'   => '',
                'choices' => array(
                                'default' => esc_html__('Full Width', 'krystal-business'),
                                'right' => esc_html__('Rignt Sidebar', 'krystal-business'),
                                'left' => esc_html__('Left Sidebar', 'krystal-business'),
                                ),
            )
        ); 

        // Info label
        $wp_customize->add_setting( 
            'kr_label_shop_buttons_settings', 
            array(
                'sanitize_callback' => 'krystal_business_sanitize_title',
            ) 
        );

        $wp_customize->add_control( 
            new Krystal_Business_Title_Info_Control( $wp_customize, 'kr_label_shop_buttons_settings', 
            array(
                'label'       => esc_html__( 'Shop Buttons', 'krystal-business' ),
                'section'     => 'krystal_business_shop_settings',
                'type'        => 'title',
                'settings'    => 'kr_label_shop_buttons_settings',
            ) 
        ));

        // Button Styles
        $wp_customize->add_setting(
            'kr_shop_button_styles',
            array(
                'type' => 'theme_mod',
                'default'           => 'solid',
                'sanitize_callback' => 'krystal_business_sanitize_button_styles_selection'
            )
        );

        $wp_customize->add_control(
            'kr_shop_button_styles',
            array(
                'settings'      => 'kr_shop_button_styles',
                'section'       => 'krystal_business_shop_settings',
                'type'          => 'radio',
                'label'         => esc_html__( 'Select Button Color:', 'krystal-business' ),
                'description'   => '',
                'choices' => array(
                                'transparent' => esc_html__('Transparent Color', 'krystal-business'),
                                'solid' => esc_html__('Solid Color', 'krystal-business'),
                                ),
            )
        );           
    }  
   
}
endif;

add_action( 'customize_register', 'krystal_business_customize_register' );

/**
 * Sanitize textarea.
 *
 * @param string $input
 * @return string
 */
if ( ! function_exists( 'krystal_business_sanitize_textarea' ) ) :
function krystal_business_sanitize_textarea( $input ) {
    return sanitize_textarea_field( $input );
}
endif;


/**
 * Sanitize Shop sidebar radio option 
 *
 * @param string $input
 * @return string
 */
if ( ! function_exists( 'krystal_business_sanitize_shop_styles_selection' ) ) :
function krystal_business_sanitize_shop_styles_selection(  $input ){
    $valid = array(
        'default' => esc_html__('Full Width', 'krystal-business'),
        'right' => esc_html__('Rignt Sidebar', 'krystal-business'),
        'left' => esc_html__('Left Sidebar', 'krystal-business'),      
     );

     if ( array_key_exists( $input, $valid ) ) {
        return $input;
     } else {
        return '';
     }
}
endif;

/**
 * Sanitize Shop buttons radio option 
 *
 * @param string $input
 * @return string
 */
if ( ! function_exists( 'krystal_business_sanitize_button_styles_selection' ) ) :
function krystal_business_sanitize_button_styles_selection(  $input ){
    $valid = array(
        'transparent' => esc_html__('Transparent Color', 'krystal-business'),
        'solid' => esc_html__('Solid Color', 'krystal-business'),      
     );

     if ( array_key_exists( $input, $valid ) ) {
        return $input;
     } else {
        return '';
     }
}
endif;

/**
 * URL sanitization.
 *
 * @see esc_url_raw() https://developer.wordpress.org/reference/functions/esc_url_raw/
 *
 * @param string $url URL to sanitize.
 * @return string Sanitized URL.
 */
if ( ! function_exists( 'krystal_business_sanitize_url' ) ) :
function krystal_business_sanitize_url( $url ) {
    return esc_url_raw( $url );
}
endif;

/**
 * Sanitize checkbox.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
if ( ! function_exists( 'krystal_business_sanitize_checkbox_selection' ) ) :
function krystal_business_sanitize_checkbox_selection( $checked ) {
    // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
endif;

/**
 * Title sanitization.
 */
if ( ! function_exists( 'krystal_business_sanitize_title' ) ) :
function krystal_business_sanitize_title( $str ) {
    return sanitize_title( $str );  
}
endif;

/**
 * Check if the top bar is enabled or not
 */
function krystal_business_topbar_enable( $control ) {
    if ( $control->manager->get_setting( 'kr_enable_top_bar' )->value() == true) {
        return true;
    } else {
        return false;
    }
}