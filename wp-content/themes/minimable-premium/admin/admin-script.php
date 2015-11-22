<?php
add_action( 'admin_enqueue_scripts', 'fw_admin_enqueuer' );
function fw_admin_enqueuer( $hook ) {

	if( is_admin() ) {
		wp_enqueue_script( 'jquery-ui', 'http://code.jquery.com/ui/1.10.3/jquery-ui.js');
	        // Include our custom jQuery file with WordPress Color Picker dependency
		wp_enqueue_script( 'farbtastic' );
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');



		wp_register_script( 'metaboxes', get_template_directory_uri().'/admin/js/metaboxes.js', array( 'jquery' ),null);
		wp_enqueue_script( 'metaboxes' );
		wp_register_script( 'slider', get_template_directory_uri().'/admin/js/slider.js', array( 'jquery' ),null);
		wp_enqueue_script( 'slider' );
		wp_enqueue_script( 'my-theme-options', get_template_directory_uri() . '/admin/js/theme-options.js');
		wp_enqueue_style( 'farbtastic' );
		wp_enqueue_style('thickbox');
	}
}
?>