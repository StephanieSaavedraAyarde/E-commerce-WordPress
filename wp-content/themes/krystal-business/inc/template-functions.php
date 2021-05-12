<?php
/**
 * @package krystal-business
 */


/**
 * Krystal Business Header Style 1
 */
if ( ! function_exists( 'krystal_business_header_style_1' ) ) :
function krystal_business_header_style_1() {
	?>
		<header id="home-inner" class="menu-wrapper style-1 elementor-menu-anchor">
			<a class="skip-link screen-reader-text" href="#maincontent"><?php esc_html_e( 'Skip to content', 'krystal-business' ); ?></a>
			<?php
				if(true === get_theme_mod( 'kr_enable_top_bar',true)){
					?>
						<div class="top-bar">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="topbar-text">
					                		<?php 
					                			if(!empty(get_theme_mod( 'kr_mail_address'))){
					                				?><p><i class="fas fa-envelope"></i> <?php echo esc_html(get_theme_mod( 'kr_mail_address') ); ?></p><?php
					                			}
					                		?>
					                	</div>
									</div>
									<div class="col-md-6">
										<div class="top-right-sidebar">
											<span id="call-us">
												<?php 
					                				if(!empty(get_theme_mod( 'kr_call_us'))){
					                					?><i class="fas fa-phone-alt"></i> <?php echo esc_html(get_theme_mod( 'kr_call_us') ); ?><?php
					                				}
					                			?>
											</span>
											<ul id="menu-social" class="menu">
												<?php
													if(true === get_theme_mod( 'kr_facebook_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_facebook_url','#' )) ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li><?php
													}
													if(true === get_theme_mod( 'kr_twitter_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_twitter_url','#' )) ?>" target="_blank"><i class="fab fa-twitter"></i></a></li><?php
													}
													if(true === get_theme_mod( 'kr_instagram_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_instagram_url','#' )) ?>" target="_blank"><i class="fab fa-instagram"></i></a></li><?php
													}
													if(true === get_theme_mod( 'kr_googleplus_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_googleplus_url','#' )) ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li><?php
													}
													if(true === get_theme_mod( 'kr_linkedin_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_linkedin_url','#' )) ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li><?php
													}
													if(true === get_theme_mod( 'kr_pinterest_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_pinterest_url','#' )) ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a></li><?php
													}
													if(true === get_theme_mod( 'kr_rss_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_rss_url','#' )) ?>" target="_blank"><i class="fas fa-rss"></i></a></li><?php
													}
												?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
				}
			?>
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
			                		<a id="logo-alt" class="logo-alt" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url( get_theme_mod( 'kr_alt_logo' ) ); ?>" alt="<?php esc_attr_e('logo','krystal-business'); ?>"></a>
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
					    <span class="res-cart-menu hidden-sm hidden-md hidden-lg">
					    	<?php
					    		if ( krystal_business_is_woocommerce_activated() ) { 
		            				krystal_business_wc_menu_cart_link();
		            			}
					    	?>
					    </span>
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'krystal-business' ); ?></span>
		                    <i class="fas fa-bars fa-1x"></i>
		                </button>
		            </div>
		            <?php 
		            	if ( krystal_business_is_woocommerce_activated() ) { 
		            		?>
								<ul class="nav cart-menu navbar-nav navbar-right">
									<li class="menu-cart-inner">
										<?php krystal_business_wc_menu_cart(); ?>
									</li>
								</ul>
							<?php 
						}
					?>
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
 * Krystal Business Header Style 2
 */
if ( ! function_exists( 'krystal_business_header_style_2' ) ) :
function krystal_business_header_style_2() {
	?>
		<header id="home-inner" class="menu-wrapper style-2 elementor-menu-anchor">
			<a class="skip-link screen-reader-text" href="#maincontent"><?php esc_html_e( 'Skip to content', 'krystal-business' ); ?></a>
			<?php
				if(true === get_theme_mod( 'kr_enable_top_bar',true)){
					?>
						<div class="top-bar">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="topbar-text">
					                		<?php 
					                			if(!empty(get_theme_mod( 'kr_mail_address'))){
					                				?><p><i class="fas fa-envelope"></i> <?php echo esc_html(get_theme_mod( 'kr_mail_address') ); ?></p><?php
					                			}
					                		?>
					                	</div>
									</div>
									<div class="col-md-6">
										<div class="top-right-sidebar">
											<span id="call-us">
												<?php 
					                				if(!empty(get_theme_mod( 'kr_call_us'))){
					                					?><i class="fas fa-phone-alt"></i> <?php echo esc_html(get_theme_mod( 'kr_call_us') ); ?><?php
					                				}
					                			?>
											</span>
											<ul id="menu-social" class="menu">
												<?php
													if(true === get_theme_mod( 'kr_facebook_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_facebook_url','#' )) ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li><?php
													}
													if(true === get_theme_mod( 'kr_twitter_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_twitter_url','#' )) ?>" target="_blank"><i class="fab fa-twitter"></i></a></li><?php
													}
													if(true === get_theme_mod( 'kr_instagram_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_instagram_url','#' )) ?>" target="_blank"><i class="fab fa-instagram"></i></a></li><?php
													}
													if(true === get_theme_mod( 'kr_googleplus_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_googleplus_url','#' )) ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li><?php
													}
													if(true === get_theme_mod( 'kr_linkedin_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_linkedin_url','#' )) ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li><?php
													}
													if(true === get_theme_mod( 'kr_pinterest_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_pinterest_url','#' )) ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a></li><?php
													}
													if(true === get_theme_mod( 'kr_rss_icon',true)){
														?><li><a href="<?php echo esc_url(get_theme_mod( 'kr_rss_url','#' )) ?>" target="_blank"><i class="fas fa-rss"></i></a></li><?php
													}
												?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
				}
			?>
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
			                		<a id="logo-alt" class="logo-alt" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url( get_theme_mod( 'kr_alt_logo' ) ); ?>" alt="<?php esc_attr_e('logo','krystal-business'); ?>"></a>
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
						<span class="res-cart-menu hidden-sm hidden-md hidden-lg">
						    <?php
						    	if ( krystal_business_is_woocommerce_activated() ) { 
			            			krystal_business_wc_menu_cart_link();
			            		}
						    ?>
						</span>
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'krystal-business' ); ?></span>
		                    <i class="fas fa-bars fa-1x"></i>
		                </button>
		            </div>
		            <?php 
			            if ( krystal_business_is_woocommerce_activated() ) { 
			            	?>
								<ul class="nav cart-menu navbar-nav navbar-right">
									<li class="menu-cart-inner">
										<?php krystal_business_wc_menu_cart(); ?>
									</li>
								</ul>
							<?php 
						}
					?>
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


if ( ! function_exists( 'krystal_business_action_header_hook' ) ) :
function krystal_business_action_header_hook() {
	if("style1" === esc_html(get_theme_mod( 'kr_header_styles','style1'))) {
	    add_action( 'krystal_action_header', 'krystal_business_header_style_1' );
	}
	else{
	    add_action( 'krystal_action_header', 'krystal_business_header_style_2' );
	}
}
endif;
add_action( 'wp', 'krystal_business_action_header_hook' );


?>