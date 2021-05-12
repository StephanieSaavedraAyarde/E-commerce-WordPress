<?php
/**
 * @package krystal
 */


/**
 * Krystal Header Style 1
 */
if ( ! function_exists( 'krystal_header_style_1' ) ) :
function krystal_header_style_1() {
	?>
		<header id="home-inner" class="menu-wrapper style-1 elementor-menu-anchor">
			<a class="skip-link screen-reader-text" href="#maincontent"><?php esc_html_e( 'Skip to content', 'krystal' ); ?></a>
			<?php krystal_before_menu(); ?>
			<div class="nav-bar-wrapper">
		        <div class="container">                                                       
		            <!-- ============================ Theme Menu ========================= -->
		            <div class="navbar-header">	                
		                <?php 
		                	if (has_custom_logo()){
		                		krystal_the_custom_logo();
		                	}	                		                	
		                ?>
		                <?php 
		                    $alt_logo=esc_url(get_theme_mod( 'kr_alt_logo' ));
		                	if(!empty($alt_logo)) {
			                	?>
			                		<a id="logo-alt" class="logo-alt" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url( get_theme_mod( 'kr_alt_logo' ) ); ?>" alt="logo"></a>
			                	<?php
			                }		                
		                ?>
		                <?php
		                	if(true===get_theme_mod( 'kr_display_site_title_tagline',true)) {
		                		if(!empty(get_bloginfo( 'name' ))) {
							        ?>
			                			<h1 class="site-title">
									        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a>
									    </h1>
									<?php
		                		}
		                			    
						        $description = esc_html(get_bloginfo( 'description', 'display' ));
						        if ( $description || is_customize_preview() ) { 
						            ?>
						                <p class="site-description"><?php echo $description; ?></p>
						            <?php 
						        }
									
		                	}	
		                ?>
		                <?php krystal_responsive_woocommerce_cart_menu_icon(); ?>
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'krystal' ); ?></span>
		                    <i class="fas fa-bars fa-1x"></i>
		                </button>
		            </div>
		            <?php krystal_woocommerce_show_cart(); ?>
		            <div class="res-menu hidden-sm hidden-md hidden-lg">
		                <div class="navbar-collapse collapse">
		                    <?php
				                wp_nav_menu( array(			                  	
				                  	'theme_location'    => 'primary',
				                  	'depth'             => 3,
				                  	'container'         => 'ul',
				                  	'container_class'   => '',
				                  	'container_id'      => '',
				                  	'menu_class'        => 'nav',
				                  	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                  	'walker'            => new wp_bootstrap_navwalker())
				                );
				             ?>   
		                </div>
		            </div>
		            <nav class="main-menu hidden-xs">
		            	<?php
			                wp_nav_menu( array(		                  	
			                  	'theme_location'    => 'primary',
			                  	'depth'             => 3,
			                  	'container'         => 'ul',
			                  	'container_class'   => '',
			                  	'container_id'      => '',
			                  	'menu_class'        => 'nav',
			                  	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                  	'walker'            => new wp_bootstrap_navwalker())
			                );
			             ?>                
		            </nav> 
		        </div>
		    </div>
	    </header> 
	<?php	
}
endif;



/**
 * Krystal Header Style 2
 */
if ( ! function_exists( 'krystal_header_style_2' ) ) :
function krystal_header_style_2() {
	?>
		<header id="home-inner" class="menu-wrapper style-2 elementor-menu-anchor">
			<a class="skip-link screen-reader-text" href="#maincontent"><?php esc_html_e( 'Skip to content', 'krystal' ); ?></a>
			<?php krystal_before_menu(); ?>
			<div class="nav-bar-wrapper">
		        <div class="container">                                                       
		            <!-- ============================ Theme Menu ========================= -->
		            <div class="navbar-header">                
		                <?php 
		                	if (has_custom_logo()){
			                	krystal_the_custom_logo();
			                }	                
		                ?>
		                <?php 
		                    $alt_logo=esc_url(get_theme_mod( 'kr_alt_logo' ));
		                	if(!empty($alt_logo)) {
			                	?>
			                		<a id="logo-alt" class="logo-alt" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url( get_theme_mod( 'kr_alt_logo' ) ); ?>" alt="logo"></a>
			                	<?php
			                }	                
		                ?>
		                <?php
		                	if(true===get_theme_mod( 'kr_display_site_title_tagline',true)) {
		                		if(!empty(get_bloginfo( 'name' ))) {
							        ?>
			                			<h1 class="site-title">
									        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a>
									    </h1>
									<?php
		                		}
		                			    
						        $description = esc_html(get_bloginfo( 'description', 'display' ));
						        if ( $description || is_customize_preview() ) { 
						            ?>
						                <p class="site-description"><?php echo $description; ?></p>
						            <?php 
						        }
									
		                	}	
		                ?>
		                <?php krystal_responsive_woocommerce_cart_menu_icon(); ?>
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'krystal' ); ?></span>
		                    <i class="fas fa-bars fa-1x"></i>
		                </button>
		            </div>
		            <?php krystal_woocommerce_show_cart(); ?>
		            <div class="res-menu hidden-sm hidden-md hidden-lg">
		                <div class="navbar-collapse collapse">
		                    <?php
				                wp_nav_menu( array(		                  	
				                  	'theme_location'    => 'primary',
				                  	'depth'             => 3,
				                  	'container'         => 'ul',
				                  	'container_class'   => '',
				                  	'container_id'      => '',
				                  	'menu_class'        => 'nav',
				                  	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                  	'walker'            => new wp_bootstrap_navwalker())
				                );
				             ?>   
		                </div>
		            </div>
		            <nav class="main-menu hidden-xs">
		            	<?php
			                wp_nav_menu( array(	                  	
			                  	'theme_location'    => 'primary',
			                  	'depth'             => 3,
			                  	'container'         => 'ul',
			                  	'container_class'   => '',
			                  	'container_id'      => '',
			                  	'menu_class'        => 'nav',
			                  	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                  	'walker'            => new wp_bootstrap_navwalker())
			                );
			             ?>                
		            </nav> 
		        </div>
		    </div>
	    </header>
	<?php		

}
endif;


if ( ! function_exists( 'krystal_action_header_hook' ) ) :
function krystal_action_header_hook() {
	if("style1" === esc_html(get_theme_mod( 'kr_header_styles','style1'))) {
	    add_action( 'krystal_action_header', 'krystal_header_style_1' );
	}
	else{
	    add_action( 'krystal_action_header', 'krystal_header_style_2' );
	}
}
endif;
add_action( 'wp', 'krystal_action_header_hook' );



/**
 * Krystal Footer
 */

if ( ! function_exists( 'krystal_footer_copyrights' ) ) :
function krystal_footer_copyrights() {
	?>
		<div class="row">
            <div class="copyrights">
                <p>
                    <?php

                        if("" != esc_html(get_theme_mod( 'kr_copyright_text'))) :
                            echo esc_html(get_theme_mod( 'kr_copyright_text')); 
                            if(get_theme_mod('kr_en_footer_credits',true)) :
                                ?><span><?php esc_html_e(' | Theme by ','krystal') ?><a href="<?php echo esc_url(KRYSTAL_THEME_AUTH); ?>" target="_blank"><?php esc_html_e('Spiracle Themes','krystal') ?></a></span>
                                <?php   
                            endif;
                        
                        else :
                            echo date_i18n(
                                /* translators: Copyright date format, see https://secure.php.net/date */
                                _x( 'Y', 'copyright date format', 'krystal' )
                            );
                            ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                                <span><?php esc_html_e(' | Theme by ','krystal') ?><a href="<?php echo esc_url(KRYSTAL_THEME_AUTH); ?>" target="_blank"><?php esc_html_e('Spiracle Themes','krystal') ?></a></span>
                            <?php
                        endif;
                    ?>
                </p>
            </div>
        </div>
	<?php
}
endif;


if ( ! function_exists( 'krystal_action_footer_hook' ) ) :
function krystal_action_footer_hook() {
	add_action( 'krystal_action_footer', 'krystal_footer_copyrights' );	
}
endif;
add_action( 'wp', 'krystal_action_footer_hook' );



/**
 * Krystal Page Title
 */

if ( ! function_exists( 'krystal_get_page_title' ) ) :
function krystal_get_page_title($blogtitle=false,$archivetitle=false,$searchtitle=false,$pagenotfoundtitle=false) {
	if(!is_front_page()){
		if ('color' === esc_html(get_theme_mod( 'kr_page_bg_radio','color' ))) {
			?>
				<div class="page-title" style="background:<?php echo sanitize_hex_color(get_theme_mod( 'kr_page_bg_color','#1e73be' )); ?>;">
			<?php
		}
		else if('image' === esc_html(get_theme_mod( 'kr_page_bg_radio','color' ))){
			?>
				<?php
					if(true===get_theme_mod( 'kr_page_bg_parallax',true)) {
						if ( has_post_thumbnail()) {
							$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
							?>
								<div class="page-title" data-parallax="scroll" data-image-src="<?php echo esc_url($featured_img_url); ?>">	
							<?php
						}
						else{
							?>
								<div class="page-title" data-parallax="scroll" data-image-src="<?php echo esc_url(get_theme_mod( 'kr_page_bg_image',get_template_directory_uri().'/img/start-bg.jpg' )); ?>">
							<?php	
						}
					}
					else{
						if ( has_post_thumbnail()) {
							$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
							?>
								<div class="page-title" style="background:url('<?php echo esc_url($featured_img_url) ?>') no-repeat scroll center center / cover;">	
							<?php
						}
						else{
							?>
								<div class="page-title"  style="background:url('<?php echo esc_url(get_theme_mod( 'kr_page_bg_image',get_template_directory_uri().'/img/start-bg.jpg' )); ?>') no-repeat scroll center center / cover;">	
							<?php	
						}
					}
				?>
				
			<?php
		}
		else{
			?>
				<div class="page-title" style="background:#555555;"> 
			<?php
		}
		
		?>
			
			<div class="content-section img-overlay">
				<div class="container">
					<div class="row text-center">
						<div class="col-md-12">
							<div class="section-title page-title"> 
								<?php
									if($blogtitle){
										?><h1 class="main-title"><?php single_post_title(); ?></h1><?php
									}
									if($archivetitle){
										?><h1 class="main-title"><?php the_archive_title(); ?></h1><?php
									}
									if($searchtitle){
										?><h1 class="main-title"><?php esc_html_e('SEARCH RESULTS','krystal') ?></h1><?php
									}
									if($pagenotfoundtitle){
										?><h1 class="main-title"><?php esc_html_e('PAGE NOT FOUND','krystal') ?></h1><?php
									}
									if($blogtitle==false && $archivetitle==false && $searchtitle==false && $pagenotfoundtitle==false){
										?><h1 class="main-title"><?php the_title(); ?></h1><?php
									}
								?>
			                    <div class="bread-crumb" typeof="BreadcrumbList" vocab="http://schema.org/">
									<?php 
										if(function_exists('bcn_display')){
											bcn_display();
										}
									?>
								</div>                                                           
			                </div>						
						</div>
					</div>
				</div>	
			</div>
			</div>	<!-- End page-title -->	
		<?php
	}	
}
endif;


/**
 * Preloading Fonts
 */
function krystal_enqueue_fonts_file() {
    wp_enqueue_style('preload-webfont-fa-regular',get_template_directory_uri() . '/webfonts/fa-regular-400.woff2', array(), null);
    wp_enqueue_style('preload-webfont-fa-brands',get_template_directory_uri() . '/webfonts/fa-brands-400.woff2', array(), null);
    wp_enqueue_style('preload-webfont-fa-solid',get_template_directory_uri() . '/webfonts/fa-solid-900.woff2', array(), null);
    wp_enqueue_style('preload-poppins-google-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,700,900&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'krystal_enqueue_fonts_file');


function krystal_style_loader_tag_filter($html, $handle) {
    if ($handle === 'preload-webfont-fa-regular') {
        $html_wrap = str_replace("rel='stylesheet'","rel='preload' as='font' type='font/woff2' crossorigin='anonymous'", $html);
        return str_replace("type='text/css' media='all'","", $html_wrap);
    }
    if ($handle === 'preload-webfont-fa-brands') {
        $html_wrap = str_replace("rel='stylesheet'","rel='preload' as='font' type='font/woff2' crossorigin='anonymous'", $html);
        return str_replace("type='text/css' media='all'","", $html_wrap);
    }
    if ($handle === 'preload-webfont-fa-solid') {
        $html_wrap = str_replace("rel='stylesheet'","rel='preload' as='font' type='font/woff2' crossorigin='anonymous'", $html);
        return str_replace("type='text/css' media='all'","", $html_wrap);
    }
    if ($handle === 'preload-poppins-google-font') {
        $html_wrap = str_replace("rel='stylesheet'","rel='preload' as='style' crossorigin='anonymous'", $html);
        return str_replace("type='text/css' media='all'","", $html_wrap);
    }
    return $html;
}
add_filter('style_loader_tag', 'krystal_style_loader_tag_filter', 10, 2);


/**
 * Function for Minimizing dynamic CSS
 */
function krystal_minimize_css($css){
    $css = preg_replace('/\/\*((?!\*\/).)*\*\//', '', $css);
    $css = preg_replace('/\s{2,}/', ' ', $css);
    $css = preg_replace('/\s*([:;{}])\s*/', '$1', $css);
    $css = preg_replace('/;}/', '}', $css);
    return $css;
}