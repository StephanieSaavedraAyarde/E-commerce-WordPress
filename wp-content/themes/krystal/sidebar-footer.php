<?php
/**
 *
 * @package krystal
 */

//Return if the first widget area has no widgets
if ( !is_active_sidebar( 'footer-column1' ) ) {
	return;
} ?>

<?php //user selected widget columns

	$krystal_widget_num = esc_html(get_theme_mod('kr_footer_widgets', '4'));

	if ($krystal_widget_num == '4') :
		$krystal_col1 = 'col-md-3';
		$krystal_col2 = 'col-md-3';
		$krystal_col3 = 'col-md-3';
		$krystal_col4 = 'col-md-3';
	elseif ($krystal_widget_num == '3') :
		$krystal_col1 = 'col-md-4';
		$krystal_col2 = 'col-md-4';
		$krystal_col3 = 'col-md-4';
	elseif ($krystal_widget_num == '2') :
		$krystal_col1 = 'col-md-6';
		$krystal_col2 = 'col-md-6';
	else :
		$krystal_col1 = 'col-md-12';
	endif;
?>
		
<?php 
	if ( is_active_sidebar( 'footer-column1' ) ) :
		?>
			<div class="widget-column <?php echo esc_attr($krystal_col1); ?>">
				<?php dynamic_sidebar( 'footer-column1'); ?>
			</div>
		<?php
	endif;
	if ( is_active_sidebar( 'footer-column2' ) ) :
		?>
			<div class="widget-column <?php echo esc_attr($krystal_col2); ?>">
				<?php dynamic_sidebar( 'footer-column2'); ?>
			</div>
		<?php
	endif;
	if ( is_active_sidebar( 'footer-column3' ) ) :
		?>
			<div class="widget-column <?php echo esc_attr($krystal_col3); ?>">
				<?php dynamic_sidebar( 'footer-column3'); ?>
			</div>
		<?php
	endif;
	if ( is_active_sidebar( 'footer-column4' ) ) :
		?>
			<div class="widget-column <?php echo esc_attr($krystal_col4); ?>">
				<?php dynamic_sidebar( 'footer-column4'); ?>
			</div>
		<?php
	endif;
?>