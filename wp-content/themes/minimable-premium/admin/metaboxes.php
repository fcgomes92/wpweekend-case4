<?php
/**
 *	Refactory metaboxes for Minimable
 *
 *	@ver: 0.1
 */

require_once( 'fw_meta_box.php' );




global $minimable_options;

$prefix = 'fw_';
$themename = 'Minimable';

$homeBubbles="$('#home_link')";
$overlaySelect ="$('#common_bg .inner-field').last()";

require_once('metaboxes/metaboxes_home.php');
require_once('metaboxes/metaboxes_gallery.php');
require_once('metaboxes/metaboxes_staff.php');
require_once('metaboxes/metaboxes_contact.php');
require_once('metaboxes/metaboxes_portfolio.php');
require_once('metaboxes/metaboxes_common.php');
require_once('metaboxes/metaboxes_external_page.php');
require_once('metaboxes/metaboxes_main.php');
require_once('metaboxes/metaboxes_product.php');
require_once('metaboxes/metaboxes_blog.php');


$main_settings_var = new fw_meta_box( 'main_content', 'Single Page Settings', 'page', 'normal', 'high' );
$home_metaboxes_var = new fw_meta_box( 'bubbles_content', 'Bubbles Content', 'page', 'normal', 'high' );
$staff_content_var = new fw_meta_box( 'staff_content', 'Staff content', 'page', 'normal', 'high' );
$staff_item_content_var = new fw_meta_box( 'staff_item_content', 'Staff Member Social', 'team', 'normal', 'high' );
$portfolio_content_var = new fw_meta_box( 'portfolio_content', 'Portfolio Content', 'page', 'normal', 'high' );
$portfolio_item_content_var = new fw_meta_box( 'portfolio_item_content', 'Portfolio Item Content', 'portfolio', 'normal', 'high' );
$contact_content_var = new fw_meta_box( 'contact_content', 'Contact Section Content', 'page', 'normal', 'high' );
$product_content_var = new fw_meta_box( 'product_content', 'Product Content', 'page', 'normal', 'high' );
$link_page = new fw_meta_box( 'link_page', 'Page link for the menu', 'page', 'normal', 'high' );
$customization_box_var = new fw_meta_box( 'custom_section', 'Customize this section', 'page', 'normal', 'high' );
$customization_external_page_var = new fw_meta_box( 'custom_external_page', 'Page Settings', 'page', 'normal', 'high' );

$main_settings_var->add_fields( $page_single_fields );
$home_metaboxes_var->add_fields( $home_metaboxes );
$customization_box_var->add_fields( $customization_fields);
$staff_content_var->add_fields( $staff_fields);
$staff_item_content_var->add_fields( $staff_item_fields);
$portfolio_content_var->add_fields( $portfolio_general_fields);
$portfolio_item_content_var->add_fields( $portfolio_item_fields);
$contact_content_var->add_fields( $contact_fields);
$product_content_var->add_fields( $product_fields);
$customization_external_page_var->add_fields( $external_page_fields );
$link_page->add_fields( $link_field);

function fw_customize_meta_boxes() {
    /* Removes meta boxes from Posts */
    remove_meta_box('postcustom','post','normal');
    /* Removes meta boxes from pages */
    remove_meta_box('postcustom','page','normal');
    remove_meta_box('trackbacksdiv','page','normal');
    remove_meta_box('commentstatusdiv','page','normal');
    remove_meta_box('commentsdiv','page','normal');
  }
  add_action('admin_init','fw_customize_meta_boxes');

?>