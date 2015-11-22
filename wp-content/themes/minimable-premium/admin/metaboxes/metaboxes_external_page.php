<?php
$external_page_fields = array(
	array(
		'label' => 'Settings',
		'id' => $prefix.'section_general_settings',
		'type' => 'section'
		),
	array(
		'label' => 'White Title',
		'desc' => 'If you have a dark background image, you can set a white title',
		'id' => $prefix.'white_title',
		'type' => 'checkbox',
		'std'  => ''
	),
	array(
		'label' => 'Image Overlay',
		'desc' => 'Add an overlay to the background image',
		'id' => $prefix.'bg_overlay',
		'type' => 'checkbox',
		'std'  => ''
	),
	array(
    "type" => "end-section"
	)
);
?>