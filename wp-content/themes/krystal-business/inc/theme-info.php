<?php
/**
 * Theme information Krystal Business
 *
 * @package krystal-business
 */

if ( ! class_exists( 'Krystal_About_Page' ) ) {
	/**
	 * Singleton class used for generating the about page of the theme.
	 */
	class Krystal_About_Page {
		/**
		 * Define the version of the class.
		 *
		 * @var string $version The Krystal_About_Page class version.
		 */
		private $version = '1.0.0';
		/**
		 * Used for loading the texts and setup the actions inside the page.
		 *
		 * @var array $config The configuration array for the theme used.
		 */
		private $config;
		/**
		 * Get the theme name using wp_get_theme.
		 *
		 * @var string $theme_name The theme name.
		 */
		private $theme_name;
		/**
		 * Get the theme slug ( theme folder name ).
		 *
		 * @var string $theme_slug The theme slug.
		 */
		private $theme_slug;
		/**
		 * The current theme object.
		 *
		 * @var WP_Theme $theme The current theme.
		 */
		private $theme;
		/**
		 * Holds the theme version.
		 *
		 * @var string $theme_version The theme version.
		 */
		private $theme_version;		
		/**
		 * Define the html notification content displayed upon activation.
		 *
		 * @var string $notification The html notification content.
		 */
		private $notification;
		/**
		 * The single instance of Krystal_About_Page
		 *
		 * @var Krystal_About_Page $instance The Krystal_About_Page instance.
		 */
		private static $instance;
		/**
		 * The Main Krystal_About_Page instance.
		 *
		 * We make sure that only one instance of Krystal_About_Page exists in the memory at one time.
		 *
		 * @param array $config The configuration array.
		 */
		public static function krystal_init( $config ) {
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Krystal_About_Page ) ) {
				self::$instance = new Krystal_About_Page;				
				self::$instance->config = $config;
				self::$instance->krystal_setup_config();
				self::$instance->krystal_setup_actions();				
			}
		}

		/**
		 * Setup the class props based on the config array.
		 */
		public function krystal_setup_config() {
			$theme = wp_get_theme();
			if ( is_child_theme() ) {
				$this->theme_name = $theme->get( 'Name' );
				$this->theme      = $theme->parent();
			} else {
				$this->theme_name = $theme->get( 'Name' );
				$this->theme      = $theme->parent();
			}
			$this->theme_version = $theme->get( 'Version' );
			$this->theme_slug    = 'krystal-business';			
			$this->notification  = isset( $this->config['notification'] ) ? $this->config['notification'] : ( '<p>' . sprintf( 'Welcome! Thank you for choosing %1$s ! To take full advantage of this theme, please make sure you visit our %2$swelcome page%3$s.', $this->theme_name, '<a href="' . esc_url( admin_url( 'themes.php?page=' . $this->theme_slug . '-theme-info' ) ) . '">', '</a>' ) . '</p><p><a href="' . esc_url( admin_url( 'themes.php?page=' . $this->theme_slug . '-theme-info' ) ) . '" class="button" style="text-decoration: none;">' . sprintf( 'Get started with %s', $this->theme_name ) . '</a></p>' );		
		}

		/**
		 * Setup the actions used for this page.
		 */
		public function krystal_setup_actions() {
			
			/* activation notice */
			add_action( 'load-themes.php', array( $this, 'krystal_activation_admin_notice' ) );						
		}		
		

		/**
		 * Adds an admin notice upon successful activation.
		 */
		public function krystal_activation_admin_notice() {
			global $pagenow;
			if ( is_admin() && ( 'themes.php' == $pagenow ) && isset( $_GET['activated'] ) ) {
				add_action( 'admin_notices', array( $this, 'krystal_about_page_welcome_admin_notice' ), 99 );
			}
		}

		/**
		 * Display an admin notice linking to the about page
		 */
		public function krystal_about_page_welcome_admin_notice() {
			if ( ! empty( $this->notification ) ) {
				echo '<div class="updated notice is-dismissible">';
				echo wp_kses_post( $this->notification );
				echo '</div>';
			}
		}		

	}
}


/**
 *  Adding a About Krystal Business page 
 */
add_action('admin_menu', 'krystal_business_add_menu');

function krystal_business_add_menu() {
     add_theme_page(esc_html__('About Krystal Business Theme','krystal-business'), esc_html__('About Krystal Business','krystal-business'),'manage_options', esc_html__('krystal-business-theme-info','krystal-business'), esc_html__('krystal_business_theme_info','krystal-business'));
}

/**
 *  Callback
 */
function krystal_business_theme_info() {
?>
	<div class="krystal-info">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h2><?php esc_html_e( 'Thank you for using Krystal Business free WordPress theme', 'krystal-business' ); ?></h2>
						<div class="title-content">
							<p><?php esc_html_e( 'Krystal Business is a multipurpose business WordPress theme suitable for any type of business. It uses theme customizer to customize all of the settings plus it uses Elementor Page Builder as a default page builder. Build any type of website like Church, Hotel, Restaurant, Medical, Agency etc. You can open your E-commerce store too with this theme. Theme Demo here: http://krystalwp.spiraclethemes.com/demo10/', 'krystal-business' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="section-box">
						<div class="icon">
							<span class="dashicons dashicons-visibility"></span>
						</div>
						<div class="heading">
							<h3><a href="<?php echo esc_url(KRYSTAL_BUSINESS_THEME_URL); ?>" target="_blank"><?php esc_html_e( 'VIEW  DEMO', 'krystal-business' ); ?></a></h3>
						</div>						
					</div>
				</div>
				<div class="col-md-3">
					<div class="section-box">
						<div class="icon">
							<span class="dashicons dashicons-format-aside"></span>
						</div>
						<div class="heading">
							<h3><a href="<?php echo esc_url(KRYSTAL_BUSINESS_THEME_DOC_URL); ?>" target="_blank"><?php esc_html_e( 'VIEW DOCUMENTATION', 'krystal-business' ); ?></a></h3>
						</div>						
					</div>
				</div>
				<div class="col-md-3">
					<div class="section-box">
						<div class="icon">
							<span class="dashicons dashicons-video-alt2"></span>
						</div>
						<div class="heading">
							<h3><a href="<?php echo esc_url(KRYSTAL_BUSINESS_THEME_VIDEOS_URL); ?>" target="_blank"><?php esc_html_e( 'VIDEO TUTORIALS', 'krystal-business' ); ?></a></h3>
						</div>						
					</div>
				</div>
				<div class="col-md-3">
					<div class="section-box">
						<div class="icon">
							<span class="dashicons dashicons-sos"></span>
						</div>
						<div class="heading">
							<h3><a href="<?php echo esc_url(KRYSTAL_BUSINESS_THEME_SUPPORT_URL); ?>" target="_blank"><?php esc_html_e( 'ASK FOR SUPPORT', 'krystal-business' ); ?></a></h3>
						</div>						
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="section-box">
						<div class="icon">
							<span class="dashicons dashicons-star-filled"></span>
						</div>
						<div class="heading">
							<h3><a href="<?php echo esc_url(KRYSTAL_BUSINESS_THEME_RATINGS_URL); ?>" target="_blank"><?php esc_html_e( 'RATE OUR THEME', 'krystal-business' ); ?></a></h3>
						</div>						
					</div>
				</div>
				<div class="col-md-3">
					<div class="section-box">
						<div class="icon">
							<span class="dashicons dashicons-admin-tools"></span>
						</div>
						<div class="heading">
							<h3><a href="<?php echo esc_url(KRYSTAL_BUSINESS_THEME_CHANGELOGS_URL); ?>" target="_blank"><?php esc_html_e( 'VIEW CHANGELOGS', 'krystal-business' ); ?></a></h3>
						</div>						
					</div>
				</div>
				<div class="col-md-3">
					<div class="section-box">
						<div class="icon">
							<span class="dashicons dashicons-email-alt"></span>
						</div>
						<div class="heading">
							<h3><a href="<?php echo esc_url(KRYSTAL_BUSINESS_THEME_CONTACT_URL); ?>" target="_blank"><?php esc_html_e( 'CONTACT US', 'krystal-business' ); ?></a></h3>
						</div>						
					</div>
				</div>
				<div class="col-md-3">
					<div class="section-box section-last">
						<div class="icon">
							<span class="dashicons dashicons-cart"></span>
						</div>
						<div class="heading">
							<h3><a href="<?php echo esc_url(KRYSTAL_BUSINESS_THEME_PRO_URL); ?>" target="_blank"><?php esc_html_e( 'BUY PRO WITH<br/> EXTRA FEATURES', 'krystal-business' ); ?></a></h3>
						</div>						
					</div>
				</div>
			</div>			
		</div>		
	</div>
<?php
}
