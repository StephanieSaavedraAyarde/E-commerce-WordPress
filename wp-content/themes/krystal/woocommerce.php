<?php
/**
 * @package krystal
 */

get_header();

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    	<?php 
			if(false===get_theme_mod( 'kr_shop_page_title_hide',false)) {
				krystal_get_shop_title();
			}
		?>
    	<div class="content-inner">
    		<div class="page-content-area">
		        <?php
		            get_template_part( 'template-parts/content', 'woocommerce' );           
		        ?>
	    	</div>
	    </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
	get_footer();
?>