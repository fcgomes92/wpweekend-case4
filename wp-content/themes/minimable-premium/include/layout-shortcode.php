<?php

// start row
function fw_start_row( $atts, $content = null ) {
	return '<div class="row">';
}
add_shortcode('start_row', 'fw_start_row');

// end row
function fw_end_row( $atts, $content = null ) {
	return '</div>';
}
add_shortcode('end_row', 'fw_end_row');

// one half
function fw_one_half( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"pull" => ''
		), $atts));
	$pull = ($pull) ? 'pull-'.$pull. '' : '';
	return '<div class="span6 '.sanitize_html_class($pull).'">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_half', 'fw_one_half');

//one third column
function fw_one_third( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"pull" => ''
		), $atts));
	$pull = ($pull) ? 'pull-'.$pull. '' : '';
	return '<div class="span4 '.sanitize_html_class($pull).'">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_third', 'fw_one_third');

//two third column
function fw_two_third( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"pull" => ''
		), $atts));
	$pull = ($pull) ? 'pull-'.$pull. '' : '';
	return '<div class="span8 '.sanitize_html_class($pull).'">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third', 'fw_two_third');

//one fourth column
function fw_one_fourth( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"pull" => ''
		), $atts));
	$pull = ($pull) ? 'pull-'.$pull. '' : '';
	return '<div class="span3 '.sanitize_html_class($pull).'">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth', 'fw_one_fourth');

//three fourth column
function fw_three_fourth( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"pull" => ''
		), $atts));
	$pull = ($pull) ? 'pull-'.$pull. '' : '';
	return '<div class="span9 '.sanitize_html_class($pull).'">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth', 'fw_three_fourth');

//one six column
function fw_one_sixth( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"pull" => ''
		), $atts));
	$pull = ($pull) ? 'pull-'.$pull. '' : '';
	return '<div class="span2 '.sanitize_html_class($pull).'">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_sixth', 'fw_one_sixth');

//five sixth column
function fw_five_sixth( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"pull" => ''
		), $atts));
	$pull = ($pull) ? 'pull-'.$pull. '' : '';
	return '<div class="span10">' . do_shortcode($content) . '</div>';
}
add_shortcode('five_sixth', 'fw_five_sixth');
?>