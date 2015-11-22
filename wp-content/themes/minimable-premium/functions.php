<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================

	Required external files

	======================================================================================================================== */
	require_once('admin/admin-script.php');
	require_once ('admin/required-plugins/plugins.php');
	require_once ('admin/theme-options.php');
	require_once( 'external/starkers-utilities.php' );
	require_once( 'admin/metaboxes.php' );
	require_once('admin/tinymce-shortcodes.php');
	include("admin/update_notifier.php");

	/* ========================================================================================================================

	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme

	======================================================================================================================== */
	require_once( 'include/image-size.php' );

	register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================

	Actions and Filters

	======================================================================================================================== */

	require_once( 'include/woocommerce-header-cart.php' );

	/* ========================================================================================================================

	Scripts and styles

	======================================================================================================================== */
	add_action( 'wp_enqueue_scripts', 'minimable_script_enqueuer' );

	function minimable_script_enqueuer() {

		if( !is_admin()){
			wp_deregister_script('jquery');
			wp_register_script('jquery', ("//code.jquery.com/jquery-1.11.0.min.js"), false, null, true);
			wp_enqueue_script('jquery');
			wp_register_script('jquery-migrate', ("//code.jquery.com/jquery-migrate-1.2.1.min.js"), false, null);
			wp_enqueue_script('jquery-migrate');
		}
		wp_register_script( 'html5', get_template_directory_uri().'/js/html5.js', array( 'jquery' ),null);
		wp_enqueue_script( 'html5' );
		wp_register_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array( 'jquery' ),null,true );
		wp_enqueue_script( 'bootstrap-js' );
		wp_register_script( 'owl-carousel-js', get_template_directory_uri().'/js/owl.carousel.min.js', array( 'jquery' ),null,true );
		wp_enqueue_script( 'owl-carousel-js' );
		wp_register_script( 'swipebox-js', get_template_directory_uri().'/js/jquery.swipebox.min.js', array( 'jquery' ),null,true );
		wp_enqueue_script( 'swipebox-js' );
		if (is_page_template('main-template.php')) {
			wp_register_script( 'plugins', get_template_directory_uri().'/js/plugins.js', array( 'jquery' ),null,true );
			wp_enqueue_script( 'plugins' );
			wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ),null,true );
			wp_enqueue_script( 'site' );
			if (get_option('fw_onoff_scrollorama')) {

				wp_register_script( 'scrollorama', get_template_directory_uri().'/js/jquery.superscrollorama.js', array( 'jquery' ),null,true );
				wp_enqueue_script( 'scrollorama' );
				wp_register_script( 'scrolling-effect', get_template_directory_uri().'/js/scrolling-effect.js', array( 'jquery' ),null,true );
				wp_enqueue_script( 'scrolling-effect' );
			}
			if (get_option('fw_onoff_animation_title')) {
				wp_register_script( 'title-animation', get_template_directory_uri().'/js/title-animation.js', array( 'jquery' ),null,true );
				wp_enqueue_script( 'title-animation' );
			}
			if (get_option('fw_onoff_custom_js')) {
				wp_register_script( 'custom-js', get_template_directory_uri().'/js/custom.js', array( 'jquery' ),null,true );
				wp_enqueue_script( 'custom-js' );
			}
		} else {
			wp_register_script( 'swiper', get_template_directory_uri().'/js/swiper.min.js', array( 'jquery' ),null,true );
			wp_enqueue_script( 'swiper' );
			wp_register_script( 'owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array( 'jquery' ),null,true );
			wp_enqueue_script( 'owl-carousel' );
		}
		wp_register_style( 'swiper-css', get_stylesheet_directory_uri().'/css/swiper.min.css', '', null, 'screen' );
		wp_enqueue_style( 'swiper' );
		wp_register_style( 'open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,latin-ext,cyrillic,cyrillic-ext,greek-ext,greek,vietnamese', '', '', 'screen' );
		wp_enqueue_style( 'open-sans' );

		if (get_option('fw_onoff_custom_css')) {
			wp_register_style( 'custom-style', get_stylesheet_directory_uri().'/custom.css', '', null, 'screen' );
			wp_enqueue_style( 'custom-style' );
		}
		wp_register_style( 'lib', get_stylesheet_directory_uri().'/lib.css', '', null, 'screen' );
		wp_enqueue_style( 'lib' );
		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', null, 'screen' );
		wp_enqueue_style( 'screen' );
	}

	if ( ! function_exists ( 'fw_script' ) ) {
		function fw_script() {
			wp_reset_query();
			global $post;

			include('include/header-scripts.php');

			if ( !is_page_template('main-template.php')) {
				include('include/no-single-page-scripts.php');
			} else {
				include('include/single-page-scripts.php');
			}
			?>

			<?php
		}
	}
	add_action('wp_footer', 'fw_script',100);

	function fw_css() {
		global $options;
		foreach ($options as $value) {
			if ((isset($value['id'])) && (isset($value['std']))) {
				if (FALSE === get_option( $value['id'])) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); }
			}
		} ?>
		<style>
		<?php if (is_front_page()) { ?>
			body {background: <?php echo $fw_background ?>;}
		<?php } else { ?>
			body {background: <?php echo $fw_background_blog ?>;}<?php } ?>
			<?php include('include/style.php'); ?>
	<?php
	}

	add_action('wp_head', 'fw_css');


	/* ========================================================================================================================

	Custom Post Type

	======================================================================================================================== */

	include('include/custom-post-type.php');

	/* ========================================================================================================================

	Shortcode

	======================================================================================================================== */

	// Elements Shortcodes
	include('include/elements-shortcode.php');

	//cols layout
	include('include/layout-shortcode.php');

	//formatting shortoode
	include('include/shortcode-formatting.php');

	/* ========================================================================================================================

	Comments

	======================================================================================================================== */

	include('include/custom-comments.php');

	/* ========================================================================================================================

	Other functions

	======================================================================================================================== */

	include('include/utility.php');
?>