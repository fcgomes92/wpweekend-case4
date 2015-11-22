<?php
$blog_settings = array(
	array( 
		"label" => 'Label for Read More Button in the Blog Page',
		"desc" => "Insert the label for the Read More button",
		"id" => $prefix."meta_read_more_post",
		"type" => "text",
		"std" => get_option('fw_read_more_post')
	),
	array( 
		"label" => 'Label for the search form',
		"desc" => "Insert the label for the search form field",
		"id" => $prefix."meta_placeholder_sf",
		"type" => "text",
		"std" => get_option('fw_placeholder_sf')
		)
	);
?>